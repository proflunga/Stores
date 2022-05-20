<?php

class inquiries extends data_object
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
    // Quote Enquiry Method

    public function quote_enquiry($product_id, $enquiry_id)
    {


        $sql = "INSERT INTO `products_ordered`(`products_id`, `enquiry_id`) VALUES ('$product_id','$enquiry_id')";



        $result = $this->db_query_obj->sql_insert_qury($sql);
        if (!$result) {
            //error
            return 0;
        } else {
            //success
            return $result;
        }
    }
    // Search Enquiry Method
    public function search_enquiry($data)
    {
        # code...
        $table_column = $data[''];
        $column_value = $data[''];


        $sql = "SELECT id FROM `enquiries` WHERE " . $table_column . "= '$column_value' ";


        $result = $this->db_query_obj->sql_qury($sql);
        if (!$result) {
            //error
            return 0;
        } else {
            //success
            return $result;
        }
    }
    public function insert_inquiry()
    {


        $sql = "";


        $result = $this->db_query_obj->sql_qury($sql);
    }
    public function insert_inquiry_product()
    {

        $sql = "";

        $result = $this->db_query_obj->sql_qury($sql);
    }
    public function insert_quotation()
    {

        $sql = "";

        $result = $this->db_query_obj->sql_qury($sql);
    }
    public function insert_quotation_product()
    {

        $sql = "";

        $result = $this->db_query_obj->sql_qury($sql);
    }






    public function fetch_archived_inquires($table_id)
    {

        $table_data = ' 
        
            employee_data += `<td class="fs-7"  >${value.id}</td>`;	
            employee_data += `<td class="fs-7"  text-gray-800">${value.full_name}</td>`;	
            employee_data += `<td class="fs-7"  >${value.company}</td>`;	
            employee_data += `<td class="fs-7"  >${value.date_}</td>`;	

         employee_data += `
            <td class="fs-7"  >
            
                  
                <div class="fs-7 d-flex flex-stack">
                    <form method="POST" action="">
                    <input type="hidden"  name="inq_id" value="${value.id}"">
                         <li class="fa fa-eye"></li> <a href="inquiries.php?action=inquiry_details&inq_id=${value.id}"  >&nbsp;View</a>&nbsp;&nbsp; 
                   
                        <button type="submit" name="unarchive_inquiry" class=" btn btn-light-primary btn-sm"><li class="fa fa-archive"></li>&nbsp;Unarchive</button>
                    </form>
                </div>  
                        
                
            </td>`;	

      ';

        //  employee_data += `<td><a href="inventory.php?action=edit_category&c_id=${value.id }">View Category</a></td>`; 

        $sql = "SELECT inquiries.id, CONCAT(customers.first_name, ' ',customers.last_name) as full_name,customers.company, inquiries.date_of_enquiry as date_, inquiries.status FROM inquiries INNER JOIN customers ON inquiries.customer_id =  customers.id WHERE inquiries.archied_status = 1;";

        $this->data_object->data_query($sql, $table_id, $table_data);
    }


    public function fetch_pending_inquires($table_id)
    {

        $table_data = ' 
        
            employee_data += `<td class="fs-7  ">${value.id}</td>`;	
            employee_data += `<td class="fs-7    text-gray-800">${value.full_name}</td>`;	
            employee_data += `<td class="fs-7  ">${value.company}</td>`;	
            employee_data += `<td class="fs-7  ">${value.date_}</td>`;	

        employee_data += `
            <td class="fs-7  ">
            
                    <div class="fs-7 d-flex flex-stack">
                     <form method="POST" action="">
                     
                        <form method="POST" value="${value.id}">
                            <input type="hidden"  name="inq_id" value="${value.id}"">
                            <a href="inquiries.php?action=inquiry_details&inq_id=${value.id}"  > <li class="fa fa-eye"></li> &nbsp;View</a>&nbsp;&nbsp;
                       
                            <button type="submit" name="archive_inquiry" class=" btn btn-light-primary btn-sm"><li class="fa fa-archive"></li>&nbsp;Archive</button>
                        </form>
                    </div>  
                
                </td>`;	
           

      ';

        //  employee_data += `<td><a href="inventory.php?action=edit_category&c_id=${value.id }">View Category</a></td>`; 

        $sql = "SELECT inquiries.id, CONCAT(customers.first_name, ' ',customers.last_name) as full_name,customers.company, inquiries.date_of_enquiry as date_, inquiries.status FROM inquiries INNER JOIN customers ON inquiries.customer_id = customers.id WHERE inquiries.status = 0 AND inquiries.archied_status = 0;";

        $this->data_object->data_query($sql, $table_id, $table_data);
    }

    public function fetch_inq_data($inq_id)
    {

        $sql = "SELECT CONCAT(customers.first_name,' ',customers.last_name,'<br>',customers.email,'<br>',customers.phone_number) as customer_details, inquiries.id, inquiries.Invoice_number, inquiries.archied_status as status_ ,inquiries.date_of_enquiry as date FROM inquiries INNER JOIN customers on customers.id = inquiries.customer_id WHERE inquiries.id =  $inq_id";

        $this->data_object->query_single_object($sql, 'inq_data');
    }


    public function fetch_inquiry_products($table_id, $inq_id)
    {

        $table_data = ' 
        var grand_total = 0;
        let line_total =  0;
         	
            employee_data += `<td class="   ">&nbsp;&nbsp;&nbsp;${value.product_name}</td>`;	
            employee_data += `<td class=" fw-bolder ">${value.product_code}</td>`;	
            employee_data += `<td class="  ">${value.quantity}</td>`;	 
             
 
            
           

      ';

        //  employee_data += `<td><a href="inventory.php?action=edit_category&c_id=${value.id }">View Category</a></td>`; 

        $sql = "SELECT products.id, products.product_code, products.product_name, products.product_price, inquiries_products.quantity FROM customers INNER JOIN inquiries on inquiries.customer_id = customers.id INNER JOIN inquiries_products on inquiries.id = inquiries_products.inquiries_id INNER JOIN products on products.id = inquiries_products.product_id WHERE inquiries.id = $inq_id;";

        $this->data_object->data_query($sql, $table_id, $table_data);
    }


    public function fetch_pending_inquiries_count()

    {
        $sql = "SELECT COUNT(inquiries.id) as count_ FROM inquiries WHERE inquiries.status = 0 AND inquiries.archied_status = 0;";

        $this->data_object->query_single_object($sql, 'data');
    }
    public function archive_inquiry($inq_id)
    {
        $sql = "UPDATE `inquiries` SET `archied_status`= 1 WHERE inquiries.id = $inq_id;";
        $result = $this->db_query_obj->sql_update_qury("$sql");

        return $result;
    }
    public function send_quote($inq_id)
    {
        $sql = "x";
        $result = $this->db_query_obj->sql_qury("$sql");

        return $result;
    }
    public function unarchive_inquiry($inq_id)
    {
        $sql = "UPDATE `inquiries` SET `archied_status`= 0 WHERE inquiries.id = $inq_id;";
        $result = $this->db_query_obj->sql_update_qury("$sql");


        return $result;
    }
}
