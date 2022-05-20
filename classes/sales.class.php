

<?php


class sales extends data_object

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



    public function void_transaction($var)
    {
        $trans_id = $_POST['trans_id'];
        $user_id = $this->user_id;



        $sql = "SELECT pos_sales_products.product_id, pos_sales_products.quantity FROM pos_sales_products WHERE pos_sales_products.pos_sale_id = $trans_id;";
        $result = $this->db_query_obj->sql_qury("$sql");

        if (!$result) {
            //error

        } else {
            //Inserted
            while ($row = mysqli_fetch_assoc($result)) {
                $prod_id = $row['product_id'];
                $product_quantity = $row['quantity'];
                $this->add_stock($prod_id, $product_quantity);
            }
        }



        $sql = "UPDATE pos_sale SET pos_sale.void_status = 1, pos_sale.voided_by = $user_id WHERE pos_sale.id = $trans_id";


        $result = $this->db_query_obj->sql_update_qury("$sql");

        if (!$result) {
            return  0;
        } else {
            return $result;
        }
    }

    public function all_sale_transactions($table_id)
    {
        $table_data = '  
        employee_data += "<td  class=\"  fw-bold\">"+value.id+"</td>";	
          
        employee_data += "<td  class=\"  fw-bold\">"+value.amount_charged +"</td>"; 
        employee_data += "<td  class=\"  fw-bold\">"+value.customer +"</td>"; 
        employee_data += "<td  class=\"  fw-bold\">"+value.date +"</td>";         
        employee_data += "<td  class=\" \">"+value.payment_method +"</td>";  
        employee_data += "<td  class=\" \">"+value.user_username +"</td>"; 

        if(value.void_status ==0)
        {
            status = `<span class="badge badge-light-success fs-8  "> Processed</span>`;
        }else
        {
           status = `<span class="badge badge-light-danger fs-8  "> Void</span>`;
        }
        employee_data += `<td>${status}</td>`;
        employee_data += `<td><a class="  fs-7  " href="sales.php?action=transaction_details&trans_id=${value.id}"> <li class="fa fa-eye"></li>&nbsp;View </a></td>`;  
    ';

        $sql = "SELECT pos_sale.void_status , pos_sale.id, CONCAT(customers.first_name,' ', customers.last_name,'(ID:',customers.id,')') as customer , CONCAT(users_admin.first_name,' ',users_admin.last_name) AS user_username, payment_method.description AS payment_method, pos_sale.total_bill AS amount_charged, pos_sale.date FROM pos_sale INNER JOIN users_admin on pos_sale.user_id = users_admin.id INNER JOIN payment_method on payment_method.id = pos_sale.payment_method_id INNER JOIN customers ON customers.id = pos_sale.customer_id ORDER BY pos_sale.id DESC LIMIT 100;;";

        $this->data_object->data_query($sql, $table_id, $table_data);
    }

    public function test_users($table_id)
    {
        $table_data = '  
        employee_data += "<td  >"+value.id+"</td>";	
        employee_data += "<td  >"+value.username+"</td>";
        employee_data += "<td  >"+value.user_email+"</td>";   
      
    ';

        $sql = 'SELECT users_admin.id, users_admin.username,users_admin.user_email FROM users_admin;';

        $this->data_object->data_query($sql, $table_id, $table_data);
    }

    public function pos_sale_products($table_id, $trans_id)
    {
        $table_data = '  
        employee_data += "<td  class=\"fs-7 fw-bold\">"+value.id+"</td>";	
        employee_data += "<td  class=\"fs-7 fw-bolder\">"+value.prod_name +"</td>";
        employee_data += "<td  class=\"fs-7 fw-bolder\">"+value.prod_code +"</td>";  
        employee_data += "<td  class=\"fs-7 fw-bold\">"+value.quantity +"</td>"; 
        employee_data += "<td  class=\"fs-7 text-end fw-bold\">"+value.price +"</td>";  
        
        employee_data += "<td  class=\"fs-7 text-end fw-bolder\">"+value.line_total +"</td>"; 
          
    ';

        $sql = "SELECT pos_sales_products.id, products.product_name AS prod_name, products.product_code as prod_code, pos_sales_products.quantity, pos_sales_products.price, pos_sales_products.date , pos_sales_products.quantity * pos_sales_products.price AS line_total FROM pos_sales_products INNER JOIN products on products.id = pos_sales_products.product_id WHERE pos_sales_products.pos_sale_id = $trans_id;";

        $this->data_object->data_query($sql, $table_id, $table_data);
    }




    public function  add_stock($prod_id, $product_quantity)
    {

        $sql = "SELECT products.product_quantity FROM products WHERE products.id = $prod_id ";
        $result = $this->db_query_obj->sql_qury("$sql");

        if (!$result) {
            //error
            return 0;
        } else {
            //Inserted
            $row = mysqli_fetch_assoc($result);
            $existing_quantity = $row['product_quantity'];

            $updated_quantity = $existing_quantity + $product_quantity;

            $sql = "UPDATE products SET products.product_quantity = '$updated_quantity'  WHERE products.id = $prod_id";

            $result = $this->db_query_obj->sql_update_qury("$sql");

            if (!$result) {
                return  0;
            } else {
                return $result;
            }
        }
    }

    public function get_sales_summary($from_date, $to_date)
    {

        $sql = "SELECT SUM( pos_sales_products.quantity * pos_sales_products.price) as sales_revenue, SUM(pos_sales_products.quantity) as products_cold, SUM(pos_sales_products.quantity) as total_items FROM `pos_sales_products` INNER JOIN pos_sale ON pos_sale.id =pos_sales_products.pos_sale_id  WHERE  pos_sale.void_status = 0 and pos_sales_products.date BETWEEN '$from_date' AND '$to_date' ";

        $this->data_object->query_single_object($sql);
    }

    // get top products
    public function get_top_products($table_id, $from_date, $to_date)
    {

        $table_data = ' employee_data += `<td class="symbol symbol-50px me-5"> <img  src="assets/media/products/${value.product_image}" class="" alt=""></td>`;	
        employee_data += `<td>
        <a href="#" class="text-dark text-hover-primary fs-6 fw-bolder">${value.product_name}</a>
            <span class="text-muted fw-bold">${value.product_code}</span>
        </td>`;               
        ';


        $sql = "SELECT products.product_name, products.product_image, products.product_code, SUM(pos_sales_products.quantity) as total_sale FROM pos_sales_products INNER JOIN products ON pos_sales_products.product_id = products.id INNER JOIN pos_sale on pos_sale.id = pos_sales_products.pos_sale_id WHERE pos_sales_products.date BETWEEN '$from_date' AND '$to_date' and pos_sale.void_status = 0 GROUP BY products.id ORDER BY total_sale DESC LIMIT 5; ";

        $this->data_object->data_query($sql, $table_id, $table_data);
    }

    // get top sales
    public function get_top_sales($table_id, $from_date, $to_date)
    {

        $table_data = ' employee_data += `<td  > <span class="svg-icon svg-icon-2">
														<svg  width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M22 7H2V11H22V7Z" fill="black"></path>
															<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="black"></path>
														</svg>
													</span></td>`;	
        employee_data += `<td>
        <a href="sales.php?action=transaction_details&trans_id=${value.id}" class="text-dark text-hover-primary fs-6 fw-bold">Sales ID: ${value.id}</a>
            
        </td>`;   
        
        employee_data += `<td class="text-end ">
       
            <span class="fw-boldest  "> &nbsp; &nbsp; $${value.total_bill}</span>
        </td>`;               
        ';

        $sql = "SELECT pos_sale.total_bill, pos_sale.id,  pos_sale.date from pos_sale
        WHERE pos_sale.void_status = 0 AND pos_sale.date BETWEEN '$from_date' AND '$to_date'
        ORDER BY total_bill DESC LIMIT 5 ";



        $this->data_object->data_query($sql, $table_id, $table_data, 'top_sales');
    }


    public function transaction_data($trans_id)
    {
        $user_id = $this->user_id;

        $sql = "SELECT pos_sale.id as rec_no,  CONCAT(customers.customer_code,'<br>',  customers.first_name,' ', customers.last_name )  as customer_datails, pos_sale.void_status, pos_sale.id, users_admin.username AS user_username, payment_method.description AS payment_method, pos_sale.total_bill AS amount_charged, pos_sale.date FROM pos_sale INNER JOIN users_admin on pos_sale.user_id = users_admin.id INNER JOIN payment_method on payment_method.id = pos_sale.payment_method_id INNER JOIN customers ON customers.id = pos_sale.customer_id WHERE pos_sale.id = $trans_id and  users_admin.id = $user_id";

        $this->data_object->query_single_object($sql, 'transaction_data');
    }
}
