<?php


class orders extends data_object
{

    private $db_query_obj;
    private $user_id;
    private $date;
    private $data_object;


    public function __construct($db_query_obj, $user_id, $data_object)
    {
        $this->db_query_obj = $db_query_obj;
        $this->date = date('Y-m-d H:i:s');
        $this->user_id = $user_id;
        $this->data_object = $data_object;
    }



    // generate sale
    public function generate_new_sale($order_id)
    {

        $date_added = $this->date;
        $user_id = $this->user_id;
        $status = 1; // initial number of views

        $sql = "INSERT INTO `sales`(`user_id_fk`, `order_id`, `status`, `date`) VALUES ('$user_id','$order_id','$status','$date_added')";

        // insert into database
        $results = $this->db_query_obj->sql_insert_qury($sql);

        if ($results) {
            // successfully generated a sale
            return $results;
        } else {
            // error encountered adding a new product
            return 0;
        }
    }


    // insert into sales products table
    public function insert_sale_product($sales_id, $orders_products_id, $quantity)
    {

        $sql = "INSERT INTO `sales_products`( `sales_id`, `orders_products_id`, `quantity`) VALUES ('$sales_id','$orders_products_id','$quantity') ";

        // insert into sales_products
        $results = $this->db_query_obj->sql_update_qury($sql);

        if ($results) {
            // successfully inserted a new sale int products sales
            return $results;
        } else {
            // error encountered new sale int products sales
            return 0;
        }
    }

    // add to archieve
    public function add_to_archieve($order_id)
    {
        $status = true;

        $sql = "UPDATE `orders` SET `archied_status`='$status' WHERE orders.id = $order_id ";
        // update orders table

        $results = $this->db_query_obj->sql_update_qury($sql);

        if ($results) {
            // successfully updated
            return $results;
        } else {
            // error encountered updating database
            return 0;
        }
    }


    // update order status to processed
    public function process_order($order_id)
    {
        $status = true;

        $sql = "UPDATE `orders` SET `order_status`='$status' WHERE orders.id = $order_id ";

        // update orders table

        $results = $this->db_query_obj->sql_update_qury($sql);


        if ($results) {
            // successfully updated
            return $results;
        } else {
            // error encountered updating database
            return 0;
        }
    }

    // search any order using order ID
    public function fetch_order_products($order_id, $table_id)
    {

        $table_data = '  
        employee_data += `<td  id = "pro_id" class="text-gray-800  fs-5 fw-bold">${value.id}</td>`;	
        employee_data += "<td  class=\"text-gray-600  fs-5 fw-bolder\">"+value.product_name +"</td>";
        employee_data += "<td  class=\"text-gray-600  fs-5 fw-bolder\">"+value.product_code +"</td>";  
        employee_data += `<td id = "pro_quantity"  class="text-gray-600  fs-5 fw-bold"> ${value.quantity} </td>`; 
        employee_data += "<td  class=\"text-gray-600  fs-5 fw-bold \">"+value.price +"</td>";  
        
        employee_data += "<td  class=\"text-gray-800  fs-5 fw-bolder inline_totals \">"+(value.quantity *value.price)  +"</td>";';

        $sql = "SELECT products.product_name, orders_products.id, orders_products.quantity, products.product_code, quotations_products.price, products.product_image , tax.tax_amount
        FROM orders INNER JOIN orders_products ON orders.id = orders_products.orders_id INNER JOIN quotations_products ON quotations_products.id = orders_products.quotation_products_id INNER JOIN inquiries_products ON quotations_products.inquiry_product_id = inquiries_products.id INNER JOIN products ON inquiries_products.product_id = products.id 
        INNER JOIN tax ON tax.id = products.tax_id
        WHERE orders.id = $order_id";

        $this->data_object->data_query($sql, $table_id, $table_data);
    }



    // fetch order details
    public function fetch_order_details($order_id)
    {

        $sql = "SELECT inquiries.delivery_address, inquiries.date_of_enquiry, inquiries.id, inquiries.status, CONCAT(customers.first_name , ' ' ,customers.last_name) as full_name, customers.email, customers.phone_number, customers.address_line1, customers.address_line2, customers.address_line_city, customers.address_line_country, orders.*, CONCAT(users_admin.first_name , ' ' ,users_admin.last_name) as processed_by
        FROM orders LEFT JOIN inquiries ON inquiries.id = orders.inquiry_id 
        LEFT JOIN customers ON inquiries.customer_id = customers.id
        LEFT JOIN users_admin ON users_admin.id = orders.user_id
        where orders.id =  $order_id";

        $this->data_object->query_single_object($sql);
    }

    // search any order using order ID
    public function search_order($order_id)
    {

        $sql = "SELECT * FROM `orders` WHERE id = $order_id";

        // run query

        $results = $this->db_query_obj->sql_qury($sql);


        if ($results) {
            // successfully fetched record
            return $results;
        } else {
            // error encountered fetching from database
            return 0;
        }
    }

    public function fetch_pending_orders($table_id)
    {

        $table_data = ' 
        
            employee_data += `<td class="fs-5 fw-bold">${value.id}</td>`;	
            employee_data += `<td class="fs-5 fw-bolder text-gray-800">${value.full_name}</td>`;	
            employee_data += `<td class="fs-5 fw-bold">${value.company}</td>`;	
            employee_data += `<td class="fs-5 fw-bold">${value.date_}</td>`;	

        employee_data += `
            <td class="fs-5 fw-bold">
            
                    <div class="fs-7">
                        <a href="Orders.php?action=order_details&o_id=${value.id}" class="menu-link px-3"> <li class="fa fa-eye"></li> &nbsp;View</a>
                        <a href="inquiries.php?action=inquiry_archive&inq_id=${value.id}" class="menu-link px-3"><li class="fa fa-archive"></li>&nbsp;Archive</a>

                    </div>  
                
                </td>`;	
           

      ';

        //  employee_data += `<td><a href="inventory.php?action=edit_category&c_id=${value.id }">View Category</a></td>`; 

        $sql = "SELECT orders.id, CONCAT(customers.first_name, ' ',customers.last_name) as full_name,customers.company, inquiries.date_of_enquiry as date_, inquiries.status FROM inquiries INNER JOIN customers ON inquiries.customer_id = customers.id INNER JOIN orders on orders.inquiry_id = inquiries.id WHERE orders.order_status = 0 AND orders.archied_status = 0;";

        $this->data_object->data_query($sql, $table_id, $table_data);
    }

    public function fetch_processed_orders($table_id)
    {

        $table_data = ' 
        
            employee_data += `<td class="fs-5 fw-bold">${value.id}</td>`;	
            employee_data += `<td class="fs-5 fw-bolder text-gray-800">${value.full_name}</td>`;	
            employee_data += `<td class="fs-5 fw-bold">${value.company}</td>`;	
            employee_data += `<td class="fs-5 fw-bold">${value.date_}</td>`;	

        employee_data += `
            <td class="fs-5 fw-bold">
            
                    <div class="fs-7">
                        <a href="Orders.php?action=order_details&o_id=${value.id}" class="menu-link px-3"> <li class="fa fa-eye"></li> &nbsp;View</a>
                      

                    </div>  
                
                </td>`;	
           

      ';

        //  employee_data += `<td><a href="inventory.php?action=edit_category&c_id=${value.id }">View Category</a></td>`; 

        $sql = "SELECT orders.id, CONCAT(customers.first_name, ' ',customers.last_name) as full_name,customers.company, inquiries.date_of_enquiry as date_, inquiries.status FROM inquiries INNER JOIN customers ON inquiries.customer_id = customers.id INNER JOIN orders on orders.inquiry_id = inquiries.id WHERE orders.order_status = 1 AND orders.archied_status = 0;";

        $this->data_object->data_query($sql, $table_id, $table_data);
    }
    public function fetch_archived_orders($table_id)
    {

        $table_data = ' 
        
            employee_data += `<td class="fs-5 fw-bold">${value.id}</td>`;	
            employee_data += `<td class="fs-5 fw-bolder text-gray-800">${value.full_name}</td>`;	
            employee_data += `<td class="fs-5 fw-bold">${value.company}</td>`;	
            employee_data += `<td class="fs-5 fw-bold">${value.date_}</td>`;	

        employee_data += `
            <td class="fs-5 fw-bold">
            
                    <div class="fs-7">
                        <a href="Orders.php?action=order_details&o_id=${value.id}" class="menu-link px-3"> <li class="fa fa-eye"></li> &nbsp;View</a>
                        <a href="Orders.php?action=order_details&o_id=${value.id}" class="menu-link px-3"> <li class="fa fa-eye"></li> &nbsp;Unarchive</a>
                      

                    </div>  
                
                </td>`;	
           

      ';

        //  employee_data += `<td><a href="inventory.php?action=edit_category&c_id=${value.id }">View Category</a></td>`; 

        $sql = "SELECT orders.id, CONCAT(customers.first_name, ' ',customers.last_name) as full_name,customers.company, inquiries.date_of_enquiry as date_, inquiries.status FROM inquiries INNER JOIN customers ON inquiries.customer_id = customers.id INNER JOIN orders on orders.inquiry_id = inquiries.id WHERE orders.archied_status = 1;";

        $this->data_object->data_query($sql, $table_id, $table_data);
    }
    public function fetch_pending_orders_count()

    {
        $sql = "SELECT COUNT(orders.id) as count_ FROM orders WHERE orders.order_status = 0 AND orders.archied_status = 0;";

        $this->data_object->query_single_object($sql, 'data');
    }
}
