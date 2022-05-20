<?php

use LDAP\Result;

class pos extends data_object

{
    private $db_query_obj;
    private $global_transaction;
    private $user_id;
    private $data_object;
    private $date;


    public function __construct($user_id, $db_query_obj, $global_transaction, $data_object)
    {
        $this->db_query_obj = $db_query_obj;
        $this->user_id = $user_id;
        $this->data_object = $data_object;
        $this->global_transaction = $global_transaction;
        $this->date = date('Y-m-d H:i:s');
    }

    // view methods **********************************

    public function  search_pos_liquids($prod_type, $prod_brands, $prod_flavours, $prod_strength)
    {
        $where = '';

        if (!empty($prod_type)) {
            $where .= ' and categories.category_alias = "' . $prod_type . '" ';
        }
        if (!empty($prod_brands)) {
            $where .= " and products_liquids.brand = $prod_brands ";
        }
        if (!empty($prod_flavours)) {
            $where .= " and products_liquids.flavor = $prod_flavours ";
        }
        if (!empty($prod_strength)) {
            $where .= " and products_liquids.strength = $prod_strength ";
        }

        $sql = "SELECT products.id, products.product_image ,products.product_name, products.product_description, products.product_image, products.product_price, products.product_code, products.product_quantity FROM products INNER JOIN categories ON categories.id = products.category_id INNER JOIN products_liquids on products_liquids.product_id = products.id WHERE 1= 1 $where LIMIT 100;";



        $this->search_pos($sql);
    }
    public function search_pos_devices($prod_type, $prod_brands,  $prod_colour,  $prod_model)
    {
        $where = '';

        if (!empty($prod_type)) {
            $where .= ' and categories.category_alias = "' . $prod_type . '" ';
        }
        if (!empty($prod_brands)) {
            $where .= " and product_devices.brand = $prod_brands ";
        }
        if (!empty($prod_colour)) {
            $where .= " and product_devices.color = $prod_colour ";
        }
        if (!empty($prod_model)) {
            $where .= " and product_devices.model = $prod_model ";
        }

        $sql = "SELECT products.id, products.product_image ,products.product_name, products.product_description, products.product_image, products.product_price, products.product_code, products.product_quantity FROM products  INNER JOIN categories ON categories.id = products.category_id  INNER JOIN product_devices on product_devices.product_id = products.id WHERE 1= 1 $where LIMIT 100;";

        $this->search_pos($sql);
    }

    public function primary_search($name, $code)
    {
        $where = '';

        if (!empty($name)) {
            $where .= " and products.product_name LIKE '%$name%' ";
        }
        if (!empty($code)) {
            $where .= " and products.product_code  = '$code' ";
        }

        $sql = "SELECT products.id, products.product_image ,products.product_name, products.product_description, products.product_image, products.product_price, products.product_code, products.product_quantity FROM products WHERE 1=1 $where LIMIT 100";

        $this->search_pos($sql);
    }

    public function pd_all_customers($table_id)
    {
        $table_data = ' 
        
            employee_data += "<td  class=\"    \">"+value.customer_code+"</td>";	
            employee_data += "<td  class=\"     \">"+value.fullname +"</td>"; 
            employee_data += "<td  class=\"     \">"+value.company +"</td>";

            
            let styled_status = ``; 

            if(value.active_account_status == 1)
            {
                  styled_status = `<span class="badge badge-light-success">Active</span>`;
            }
            else if(value.active_account_status == 0)
            {                
                styled_status = `<span class="badge badge-light-danger">Suspended</span>`;
            }
            else
            {
                styled_status = `<span class="badge badge-light-warning">Published</span>`;
            }            
            
            employee_data += "<td  class=\"    \">"+value.date_added +"</td>"; 
            employee_data += `<td class="text-hover-primary"><li class="fa fa-eye"></li><a class="    fs-7" href="customers.php?action=cutomer_details&c_id=${value.id}"> &nbsp; View</a></td>`; 

            
        
        ';

        $sql = 'SELECT `customer_code`,`id`, `company`, CONCAT(customers.first_name, " " ,customers.last_name) as fullname, `active_account_status` , `date_added` FROM `customers` WHERE 1 ORDER BY customers.id DESC LIMIT 100;';

        $this->data_object->data_query($sql, $table_id, $table_data);
    }




    // end view methods ******************************



    //controller methods *****************************
    public function delete_pos_cart_item($pos_c_id)
    {
        $user_id = $this->user_id;
        $sql = "DELETE FROM `pos_cart` WHERE id = $pos_c_id and user_id = $user_id;";
        $result = $this->db_query_obj->sql_delete_qury("$sql");

        return $result;
    }

    public function cancel_order()
    {
        $user_id = $this->user_id;
        $sql = "DELETE FROM `pos_cart` WHERE  user_id = $user_id;";
        $result = $this->db_query_obj->sql_delete_qury("$sql");

        return $result;
    }

    public function make_sale($payment_method_id, $tax, $total_bill, $customer_id)
    {
        $user_id = $this->user_id;

        $usd_rate = $this->global_transaction->existance_finder('payment_method', 'usd_rate', 'id', $payment_method_id);

        $sql_in = "INSERT INTO `pos_sale`(`id`, `customer_id`, `user_id`, `payment_method_id`,`currency_rate` ,`tax`, `total_bill` ) VALUES ( null,$customer_id ,$user_id,$payment_method_id,$usd_rate ,$tax,$total_bill)";
        $pos_sale_last_insert_id = $this->db_query_obj->sql_insert_qury("$sql_in");


        if (!$pos_sale_last_insert_id) {
            return 0;
        } else {
            $sql = "SELECT pos_cart.product_id, pos_cart.quantity, pos_cart.price  FROM pos_cart WHERE pos_cart.user_id = $user_id;";
            $result = $this->db_query_obj->sql_qury("$sql");

            if (!$result) {
                return 0;
            } else {
                //Inserted
                while ($row = mysqli_fetch_assoc($result)) {

                    $product_id = $row['product_id'];
                    $quantity = $row['quantity'];
                    $price = $row['price'];

                    $sql_3 = "INSERT INTO `pos_sales_products`(`id`, pos_sales_products.pos_sale_id, `product_id`, `quantity`, `price` ) VALUES (null, $pos_sale_last_insert_id  , $product_id, $quantity,$price )";
                    $result_3 = $this->db_query_obj->sql_insert_qury("$sql_3");



                    if (!$result_3) {

                        return 0;
                    } else {
                        $new_quantity = $this->global_transaction->name_from_id_finder('products', 'product_quantity', $product_id);

                        if ($new_quantity < $quantity) {
                            return 0;
                        } else {
                            $new_quantity = $new_quantity - $quantity;
                            $deduct_result = $this->deduct_stock_value($new_quantity, $product_id);



                            if (!$deduct_result) {
                                return 0;
                            }
                        }
                    }
                }


                $this->cancel_order();


                return $pos_sale_last_insert_id;
            }
        }
    }


    public function deduct_stock_value($new_quantity, $product_id)
    {
        $sql = "UPDATE products SET products.product_quantity = $new_quantity WHERE products.id = $product_id;";
        $result = $this->db_query_obj->sql_update_qury("$sql");

        return $result;
    }


    public function add_to_pos_cart($product_id, $quantity, $price)
    {
        $user_id = $this->user_id;
        $old_quantity = $this->global_transaction->name_from_id_finder('products', 'product_quantity', $product_id);




        if (!$old_quantity) {
            //
            return -2;
        } elseif ($old_quantity < $quantity) {
            //
            return -1;
        } else {

            $exist_flag = $this->global_transaction->pos_prod_finder($product_id);
            $existing_quantity = $this->global_transaction->existance_finder('pos_cart', 'quantity', 'id', $exist_flag);

            //calculate sum of product quantity in pos_cart
            $sql_4 = "SELECT SUM(pos_cart.quantity) as pos_cart_total_qty FROM pos_cart WHERE pos_cart.product_id = $product_id ";

            $result_4 = $this->db_query_obj->sql_qury("$sql_4");
            $row_4 = mysqli_fetch_assoc($result_4);

            //calculate available quantity (SUBTRACT QTY AVAILABLE FROM POS CART)
            $pos_cart_total_qty = $row_4['pos_cart_total_qty'];
            $available_quantity = $old_quantity - $pos_cart_total_qty - $quantity;

            $new_quantity = $existing_quantity + $quantity;

            if ($available_quantity < 0) {
                //Stock Not Available 
                return -3;
            } elseif ($exist_flag) {
                //UPDATE               
                $sql = "UPDATE pos_cart SET pos_cart.quantity = $new_quantity WHERE pos_cart.id = $exist_flag";


                $result = $this->db_query_obj->sql_update_qury("$sql");

                if (!$result) {
                    return 0;
                }
            } else {
                //INSERT

                $sql = "INSERT INTO `pos_cart` (`id`, `user_id`, `product_id`, `quantity`, `price`, `date_created`) VALUES (NULL, $user_id, $product_id, $quantity, $price, current_timestamp());";
                $result = $this->db_query_obj->sql_insert_qury("$sql");

                if (!$result) {
                    return 0;
                } else {
                    return 1;
                }
            }
        }
    }

    public function pos_search_where_clause($name, $code, $category)
    {
        $return_val = '';

        if (!empty($name)) {
            $return_val .= " and products.product_name LIKE '%$name%' ";
        }
        if (!empty($code)) {
            $return_val .= " and products.product_code LIKE '%$code%' ";
        }
        if (!empty($category)) {
            $return_val .= " and products.category_id = $category ";
        }

        if (!empty($return_val)) {
            return  $return_val;
        } else {
            return 0;
        }
    }

    public function query_product($prod_type)
    {

        $sql = "SELECT product_brands.id, product_brands.code, product_brands.description FROM product_brands";


        return $this->data_object->query_object_array_object($sql, '', 'prod_res');
    }

    public function  search_pos($sql)
    {
        $table_data = '  
            employee_data += `<td class="text-gray-800    fw-bolder"><div class="d-flex align-items-center">
		 
			<div   class="symbol symbol-50px"> <span class="symbol-label" style="background-image:url(assets/media/products/${value.product_image});"></span> </div>
	 
			<div class="ms-5">
			 
				<div  class="text-gray-800 fw-boldest  fw-bolder"  >
					${value.product_name}			</div>
				 
			</div>
		    </div></td>`;	  
            employee_data += `<td class="text-gray-800    fw-bolder">${value.product_code}</td>`;	  
            employee_data += `<td class="text-gray-800    fw-bolder">${value.product_quantity}</td>`;	  
            employee_data += `<td class="text-gray-800    fw-bolder">${value.product_price}</td>`;	 	  
            employee_data += `<td class"text-end"><form action="#" method="post" class="d-flex flex-stack"> 
            <div class="row text-end">
                <div class="col-4 ml-3">
                      <input required type="number" class="form-control" name="quantity" value="1" min="0"> 
                <input type="hidden" name="product_id" value="${value.id}">

                </div>
                <div class="col-8">
                     <button name="add_to_cart"   class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"> <li class="fa fa-plus"></li> Add to Cart</button>

                </div>
            </div>
          
           
            
            </form>	</td>`
           
            ;	 
 
           
      ';

        $this->data_object->data_query($sql, 'pos_product_result', $table_data, 'pos_products_data');
    }

    public function fetch_daily_sales($table_id)
    {
        $date = $this->date;
        $date = substr($date, 0, 10);
        $user_id = $this->user_id;
        $table_data = '  
        employee_data += "<td  class=\"  fs-7 fw-bold\">"+value.id+"</td>";	
        employee_data += "<td  class=\"  fs-7 fw-bolder\">"+value.user_username +"</td>";
        employee_data += "<td  class=\"  fs-7 fw-bolder\">"+value.payment_method +"</td>";  
        employee_data += "<td  class=\"  fs-7 fw-bold\">"+value.amount_charged +"</td>"; 
        employee_data += "<td  class=\"  fs-7 fw-bold\">"+value.date +"</td>"; 
        employee_data += `<td><a class="    fs-7" href="pos.php?action=transaction_details&trans_id=${value.id}">  <li class="fa fa-eye"></li>    View  </a></td>`;  
        ';

        $sql = "SELECT pos_sale.id, users_admin.username AS user_username, payment_method.description AS payment_method, pos_sale.total_bill AS amount_charged, pos_sale.date FROM pos_sale INNER JOIN users_admin on pos_sale.user_id = users_admin.id INNER JOIN payment_method on payment_method.id = pos_sale.payment_method_id WHERE pos_sale.date LIKE '$date%' and pos_sale.user_id = $user_id ORDER BY pos_sale.id DESC LIMIT 100 ;";


        $this->data_object->data_query($sql, $table_id, $table_data);
    }

    public function rec_products($table_id, $trans_id)
    {
        $user_id = $this->user_id;
        $table_data = '   
        
        employee_data += `<td  class="fs-7 ">${value.prod_name} (${value.quantity}x$${value.price})</td>`; 
        employee_data += "<td  class=\"fs-7 text-end \">"+value.line_total +"</td>"; 
        ';

        $sql = "SELECT pos_sales_products.id, products.product_name AS prod_name, products.product_code as prod_code, pos_sales_products.quantity, pos_sales_products.price, pos_sales_products.date , pos_sales_products.quantity * pos_sales_products.price AS line_total FROM pos_sales_products INNER JOIN pos_sale ON pos_sale.id = pos_sales_products.pos_sale_id INNER JOIN products on products.id = pos_sales_products.product_id INNER JOIN users_admin on pos_sale.user_id = users_admin.id  WHERE pos_sales_products.pos_sale_id = $trans_id  and  users_admin.id = $user_id;";

        $this->data_object->data_query($sql, $table_id, $table_data, 'prods');
    }


    public function transaction_data($trans_id)
    {
        $user_id = $this->user_id;

        $sql = "SELECT pos_sale.id as rec_no,  customers.customer_code   as customer_datails, pos_sale.void_status, pos_sale.id, users_admin.username AS user_username, payment_method.description AS payment_method, pos_sale.total_bill AS amount_charged, pos_sale.date FROM pos_sale INNER JOIN users_admin on pos_sale.user_id = users_admin.id INNER JOIN payment_method on payment_method.id = pos_sale.payment_method_id INNER JOIN customers ON customers.id = pos_sale.customer_id WHERE pos_sale.id = $trans_id and  users_admin.id = $user_id";

        $this->data_object->query_single_object($sql, 'transaction_data');
    }
}

// employee_data += `<td  class="fs-7 fw-bolder\>"${value.prod_name)(${value.quantity)x${value.price))"</td>`;   