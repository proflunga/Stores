<?php


class customers extends data_object

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



    public function fetch_customer_profile_data($c_id)
    {

        // $sql = "SELECT customers.id, gender.description as gender, gender.id as gender_id, customers.username, CONCAT(customers.address_line1,'<br/>', customers.address_line2,'<br/>', countries.name,' ', cities.name) as address_ FROM customers INNER JOIN gender on gender.id = customers.gender_id INNER JOIN countries on countries.id = customers.address_line_country INNER JOIN cities on cities.id = customers.address_line_city WHERE customers.id = $c_id;";

        $sql = "SELECT * FROM customers where customers.id = $c_id;";

        $this->data_object->query_single_object($sql);
    }

    public function fetch_customer_details($c_id, $js_obj)
    {

        $sql = "SELECT customers.first_name, customers.customer_code ,customers.last_name, customers.company, customers.phone_number , customers.email FROM customers WHERE customers.id = $c_id;";

        $this->data_object->query_single_object($sql, $js_obj);
    }

    public function fetch_total_sales($c_id, $js_obj)
    {

        $sql = "SELECT SUM(pos_sale.total_bill) as total_sales FROM pos_sale WHERE pos_sale.customer_id = $c_id;";

        $this->data_object->query_single_object($sql, $js_obj);
    }

    public function fetch_total_inquiries($c_id, $js_obj)
    {

        $sql = "SELECT COUNT(inquiries.customer_id) as count FROM inquiries WHERE inquiries.customer_id = $c_id;";

        $this->data_object->query_single_object($sql, $js_obj);
    }

    public function fetch_total_orders($c_id, $js_obj)
    {

        $sql = "SELECT COUNT(orders.id) as count FROM orders INNER JOIN inquiries ON inquiries.id = orders.inquiry_id WHERE inquiries.customer_id = $c_id;";

        $this->data_object->query_single_object($sql, $js_obj);
    }

    public function fetch_total_site_visits($c_id, $js_obj)
    {

        $sql = "SELECT site_visits.count as count FROM site_visits WHERE site_visits.customer_id = $c_id;";

        $this->data_object->query_single_object($sql, $js_obj);
    }


    public function fetch_sales_list($c_id, $table_id)
    {
        $table_data = ' 
        
        employee_data += `<td class="text-gray-800   fs-5 fw-bolder">${value.id}</td>`;	
        
        

        let styled_status = ``; 

        if(value.void_status == 0)
        {
            styled_status = `<span class="badge badge-light-success">Processed</span>`;
        }
        else if(value.void_status == 1)
        {                
            styled_status = `<span class="badge badge-light-danger">Void</span>`;
        } 

         
        employee_data += `<td>${styled_status }</td>`;
        employee_data += `<td>${value.date }</td>`;  

        employee_data += `<td class="text-gray-800 text-hover-primary fs-7 fw-bolder">
     
        <a href="sales.php?action=transaction_details&trans_id=${value.id }"  class="badge btn-sm badge-secondary"
            >
            <li class="fa fa-eye"></li> &nbsp; View 
        </a> 
     

        </td>`; 

        ';


        $sql = "SELECT pos_sale.id ,pos_sale.void_status, pos_sale.date FROM pos_sale WHERE pos_sale.customer_id = $c_id;";
        $this->data_object->data_query($sql, $table_id, $table_data);
    }

    public function fetch_orders_list($c_id, $table_id)
    {
        $table_data = ' 
        
        employee_data += `<td class="text-gray-800   fs-5 fw-bolder">${value.id}</td>`;	
        
        

        let styled_status = ``; 

        if(value.order_status == 1)
        {
            styled_status = `<span class="badge badge-light-warning">Processed</span>`;
        }
        else if(value.order_status == 0)
        {                
            styled_status = `<span class="badge badge-light-warning">Pending</span>`;
        }
        else
        {
            styled_status = `<span class="badge badge-light-danger">na</span>`;
        }

        
        if(value.archied_status == 1)
        {                
            styled_status = `<span class="badge badge-light-danger">Archived</span>`;
        }

        employee_data += `<td>${styled_status }</td>`;
        employee_data += `<td>${value.date }</td>`;  

        employee_data += `<td class="text-gray-800 text-hover-primary fs-7 fw-bolder">
     
        <a href="orders.php?action=order_details&o_id=${value.id }"  class="badge btn-sm badge-secondary"
            >
            <li class="fa fa-eye"></li> &nbsp; View 
        </a> 
     

        </td>`; 

        ';






        $sql = "SELECT orders.id, orders.order_status, orders.archied_status, orders.date FROM orders INNER JOIN inquiries on inquiries.id = orders.inquiry_id WHERE inquiries.customer_id = 1;";


        $this->data_object->data_query($sql, $table_id, $table_data);
    }

    public function fetch_inquires_list($c_id, $table_id)
    {
        $table_data = ' 
        
        employee_data += `<td class="text-gray-800   fs-5 fw-bolder">${value.id}</td>`;	
        
        

        let styled_status = ``; 

        if(value.status == 1)
        {
              styled_status = `<span class="badge badge-light-success">Quoted</span>`;
        }
        else if(value.status == 0)
        {                
            styled_status = `<span class="badge badge-light-warning">Pending</span>`;
        }
        else
        {
            styled_status = `<span class="badge badge-light-danger">na</span>`;
        }

        employee_data += `<td>${styled_status }</td>`;
        employee_data += `<td>${value.date_of_enquiry }</td>`;  

        employee_data += `<td class="text-gray-800 text-hover-primary fs-7 fw-bolder">
     
        <a href="inquiries.php?action=inquiry_details&inq_id=${value.id }"  class="badge btn-sm badge-secondary"
            >
            <li class="fa fa-eye"></li> &nbsp; View 
        </a> 
     

        </td>`; 

         ';






        $sql = "SELECT inquiries.id, inquiries.status,inquiries.date_of_enquiry FROM inquiries WHERE inquiries.customer_id = $c_id;";


        $this->data_object->data_query($sql, $table_id, $table_data);
    }

    // update customer user details
    public function update_customer_details($user_email, $customer_gender_id, $address_1, $address_2, $city, $c_id, $phone_number, $company_name)
    {
        $date = $this->date;
        $sql = "UPDATE `customers` SET `email` = '$user_email', `gender_id`='$customer_gender_id',`address_line1`='$address_1',`address_line2`='$address_2',`address_line_city`='$city',`phone_number`='$phone_number',`company`='$company_name',`last_modified`='$date' WHERE `id`='$c_id' ";


        return $this->db_query_obj->sql_update_qury("$sql");
    }

    // add customer details
    public function add_customer_details($company, $first_name, $last_name, $nationality, $id_number, $dob, $gender_id, $address_line1, $address_line2, $address_line_city, $address_line_country, $email, $phone_number)
    {
        $date = $this->date;
        $user_id = $this->user_id;
        $phone_code = 1;
        $result = 0;

        $code = $this->customer_id_code_generator();



        if ($this->global_transaction->existance_finder('customers', 'id', 'id_number', $id_number)) {

            $result = -1;
        } else {
            if ($this->global_transaction->existance_finder('customers', 'id', 'email', $email)) {

                $result = -2;
            } else {
                $sql = "INSERT INTO `customers`(`id`, `company`, `customer_code`, `first_name`, `last_name`, `nationality`, `id_number`, `dob`, `gender_id`, `address_line1`, `address_line2`, `address_line_city`, `address_line_country`, `email`, `phone_number`, `phone_code`, `user_id`, `date_added`, `last_modified`, `username`) VALUES (null, '$company','$code', '$first_name', '$last_name', '$nationality', '$id_number', '$dob', '$gender_id', '$address_line1', '$address_line2', '$address_line_city', '$address_line_country', '$email', '$phone_number',$phone_code ,'$user_id', '$date', '$date', '$email') ";


                $result =  $this->db_query_obj->sql_insert_qury($sql);
            }
        }


        return $result;
    }

    public function customer_id_code_generator()
    {
        $flag = 0;
        $rand_ = rand(100, 999);
        $date = $this->date;

        $code = substr($date, 2, 2) . substr($date, 5, 2) . $rand_;


        while (!$flag) {
            $flag = $this->global_transaction->existance_finder('customers', 'customer_code', 'customer_code', $code);
            if (!$flag) {

                $flag = 1;
            }
        }

        return $code;
    }
}
