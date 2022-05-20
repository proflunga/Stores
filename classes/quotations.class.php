<?php

class quotations extends data_object
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

    public function fetch_quotation_cart_products($table_id)
    {

        $user_id =  $this->user_id;

        $table_data = '   
            employee_data += `<td class="  ">${value.product_name}</td>`;	
            employee_data += `<td class="   ">${value.product_code}</td>`;	
            employee_data += `<td class="   ">${value.quantity}</td>`;	
            employee_data += `<td class="   ">${value.price}</td>`;

            let line_total =0;	
            line_total = value.quantity*value.price;          
        
            
            employee_data += `<td class="   ">${line_total}</td>`;
            employee_data += `<td class=" text-end  ">
            <li class="fa fa-edit"></li><a href="${value.id}" class=" "> edit  </a>
            </td>`;  
        ';

        $sql = "SELECT quotation_products.quantity, quotation_products.price, products.product_name, products.product_code, products.id FROM quotation_products INNER JOIN products on products.id = quotation_products.product_id INNER JOIN quotation_cart on quotation_cart.id = quotation_products.quotations_id WHERE quotation_cart.user_id = $user_id";

        $this->data_object->data_query($sql, $table_id, $table_data);
    }
    public function fetch_quotation_list($table_id)
    {

        $table_data = ' 
    
        
            employee_data += `<td class="fs-7 ">${value.quotation_number}</td>`;	 
            employee_data += `<td class="fs-7 ">${value.customer_details}</td>`;	  	 
            employee_data += `<td class="fs-7 ">${value.system_date}</td>`;	  
            employee_data += `<td class="fs-7 "><li class="fa fa-eye"></li> <a href="quotations.php?action=quotation_details&q_id=${value.id}" class=" "> View  </a></td>`;
             

      ';

        //  employee_data += `<td><a href="inventory.php?action=edit_category&c_id=${value.id }">View Category</a></td>`; 

        $sql = "SELECT quotations.id, quotations.quotation_number, quotations.system_date, quotations.customer_details FROM quotations;";

        $this->data_object->data_query($sql, $table_id, $table_data);
    }


    public function update_quotation_cart($customer_id, $cutomer_details, $quotation_date, $payment_method, $notes)
    {
        $user_id = $this->user_id;
        $date = $this->date;


        $sql = "UPDATE `quotation_cart` SET `customer_id`=$customer_id,`customer_details`='$cutomer_details' ,`quotation_date`='$quotation_date',`notes`='$notes',`payment_method`=$payment_method ,`system_date`='$date' WHERE  quotation_cart.user_id = $user_id";
        $result = $this->db_query_obj->sql_update_qury("$sql");

        if (!$result) {

            $result = 0;
        } else {
            $result = 1;
        }

        return $result;
    }

    public function fetch_quotation_data()
    {
        $user_id = $this->user_id;


        $sql = "SELECT payment_method.description as payment_method_name, quotation_cart.customer_details, quotation_cart.quotation_date,quotation_cart.notes,quotation_cart.payment_method FROM quotation_cart INNER JOIN payment_method ON payment_method.id = quotation_cart.payment_method WHERE quotation_cart.user_id = $user_id";

        $this->data_object->query_single_object($sql, 'quotation_data');
    }

    public function check_cart_record()
    {
        $user_id = $this->user_id;

        $sql = "SELECT quotation_cart.id FROM quotation_cart WHERE quotation_cart.user_id = $user_id";
        $result = $this->db_query_obj->sql_qury("$sql");

        if (!$result) {

            $sql_2 = "INSERT INTO `quotation_cart`(`id`,     `user_id` ) VALUES (null,$user_id)";
            $result_2 = $this->db_query_obj->sql_insert_qury("$sql_2");


            if (!$result_2) {
                $result = 0;
            } else {
                $result = 1;
            }
        } else {
            $result = 1;
        }


        return $result;
    }

    public function add_product_to_cart($product_id)
    {
        $user_id = $this->user_id;

        $sql = " ";
        $result = $this->db_query_obj->sql_qury("$sql");

        if (!$result) {
            $result = 0;
        } else {
            $row = mysqli_fetch_assoc($result);
            $sql_2 = "INSERT INTO `quotation_products`( `product_id`, `price`, `quantity` ) VALUES ( $product_id,$price,$quantity)";
            $result_2 = $this->db_query_obj->sql_insert_qury("$sql_2");
        }
    }

    public function generate_quotation()
    {

        $user_id = $this->user_id;

        $sql = "SELECT quotation_cart.id, payment_method.description as payment_method_name, quotation_cart.customer_details, quotation_cart.quotation_date,quotation_cart.notes,quotation_cart.payment_method, quotation_cart.inquiry_id FROM quotation_cart INNER JOIN payment_method ON payment_method.id = quotation_cart.payment_method INNER JOIN quotation_products ON quotation_products.quotations_id = quotation_cart.id WHERE quotation_cart.user_id = $user_id GROUP BY quotation_products.quotations_id; ";
        $result = $this->db_query_obj->sql_qury("$sql");

        if (!$result) {
            $result = 0;
        } else {
            $row = mysqli_fetch_assoc($result);
            if (empty($row['customer_details'])) {
                $result = -1;
            } elseif (empty($row['quotation_date'])) {
                $result = -2;
            } elseif (empty($row['payment_method']) or $row['payment_method'] == 0) {
                $result = -3;
            } else {
                $quotations_id  = $row['id'];
                $inquiries_id = $row['inquiry_id'];
                $quotation_date = $row['quotation_date'];
                $notes = $row['notes'];
                $payment_method = $row['payment_method'];
                $customer_details = $row['customer_details'];
                $quotation_number = $this->generate_quotation_number();

                $sql_2 = "INSERT INTO `quotations`(`id`, `quotation_number`, `inquiries_id`, `customer_details`,     `quotation_date`, `notes`, `payment_method`, `user_id` ) VALUES ( null,$quotation_number, $inquiries_id,  '$customer_details','$quotation_date', '$notes', $payment_method,$user_id)";
                $result_2 = $this->db_query_obj->sql_insert_qury("$sql_2");



                if ($result_2) {
                    $sql_3 = " UPDATE `quotation_cart` SET `customer_id`=0,`customer_details`= '',`inquiry_id`=0 ,`notes`='',`payment_method`= 0 WHERE quotation_cart.user_id =$user_id;";
                    $this->db_query_obj->sql_update_qury("$sql_3");


                    $sql_4 = " UPDATE `quotation_products` SET  `quotations_id`=$result_2   WHERE  quotation_products.quotations_id = $quotations_id";
                    $this->db_query_obj->sql_update_qury("$sql_4");

                    $result = $result_2;
                } else {
                    $result = 0;
                }
            }
        }


        return $result;
    }


    public function generate_quotation_number()
    {
        $flag = 0;
        $rand_ = rand(1000, 9999);
        $date = $this->date;

        $code = substr($date, 2, 2) . substr($date, 5, 2) . $rand_;


        while (!$flag) {
            $flag = $this->global_transaction->existance_finder('quotations', 'quotation_number', 'quotation_number', $code);
            if (!$flag) {

                $flag = 1;
            }
        }

        return $code;
    }

    public function fetch_quotation_products($table_id, $q_id)
    {

        $table_data = ' 
        var grand_total = 0;
        let line_total =  0;
         	
            employee_data += `<td class="   fw-bolder  ">&nbsp;&nbsp;&nbsp;${value.product_name}</td>`;	
            employee_data += `<td class="">${value.product_code}</td>`;	
            employee_data += `<td class="  ">${value.quantity}</td>`;	 
            employee_data += `<td class="  ">${value.price}</td>`;	 
            line_total = 0;
            line_total = value.price*value.quantity;
            employee_data += `<td class="text-end  ">${line_total} &nbsp;&nbsp;</td>`;	 
             
 
            
           

      ';

        //  employee_data += `<td><a href="inventory.php?action=edit_category&c_id=${value.id }">View Category</a></td>`; 

        $sql = "SELECT products.id, products.product_code, products.product_name, quotation_products.price, quotation_products.quantity FROM quotations INNER JOIN quotation_products on quotation_products.quotations_id = quotations.id INNER JOIN products on products.id = quotation_products.product_id WHERE quotations.id = $q_id;";

        $this->data_object->data_query($sql, $table_id, $table_data);
    }



    public function fetch_quote_data($q_id)
    {

        $sql = "SELECT quotations.notes, quotations.id, quotations.customer_details ,quotations.quotation_number, quotations.quotation_date as date , payment_method.description as payment_method, CONCAT(users_admin.first_name,' ', users_admin.last_name,' (',users_admin.user_email,')')as sales_rep FROM quotations INNER JOIN payment_method on payment_method.id = quotations.payment_method INNER JOIN users_admin ON users_admin.id = quotations.user_id WHERE quotations.id =  $q_id";

        $this->data_object->query_single_object($sql, 'quote_data');
    }

    public function fetch_products($table_id)
    {

        $table_data = '  
              employee_data += `<td class="">${value.product_code}</td>`;	
            employee_data += `<td class="  ">${value.product_name}</td>`;
              employee_data += `<td class="">${value.product_quantity}</td>`;	
            employee_data += `<td class="  ">${value.product_price}</td>`; 
            employee_data += `<td class="  ">
            
            <form action="" method="post">
            <input type="hidden" name="product_id" value="${value.id}">
                <button type="submit" name="add_product" class="btn btn-sm btn-secondary"><li class="fa fa-plus"></li>Add</button>
            </form>
            </td>`; 
                ';


        $sql = "SELECT products.product_name, products.product_code  ,products.product_quantity, products.product_price  FROM  products  WHERE 1";

        $this->data_object->data_query($sql, $table_id, $table_data, 'search_table');
    }
}
