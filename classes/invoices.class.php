<?php

class invoices extends data_object
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

    public function fetch_invoice_list($table_id)
    {

        $table_data = ' 
    
        
          employee_data += "<td  class=\"text-gray-800  fs-5 fw-bold\">"+value.id+"</td>";	
          
        employee_data += "<td  class=\"text-gray-600  fs-5 fw-bold\">"+value.amount_charged +"</td>"; 
        employee_data += "<td  class=\"text-gray-600  fs-5 fw-bold\">"+value.customer +"</td>"; 
        employee_data += "<td  class=\"text-gray-600  fs-5 fw-bold\">"+value.date +"</td>";         
        employee_data += "<td  class=\"text-gray-800  fs-5 fw-bolder\">"+value.payment_method +"</td>";  
        employee_data += "<td  class=\"text-gray-600  fs-5 fw-bolder\">"+value.user_username +"</td>";
            employee_data += `<td class="fs-5 fw-bold"><a href="sales.php?action=invoice_details&q_id=${value.id}" class="btn btn-sm btn-hover-scale btn-light"><li class="fa fa-eye"></li> View Quote</a></td>`;
             

      ';

        //  employee_data += `<td><a href="inventory.php?action=edit_category&c_id=${value.id }">View Category</a></td>`; 

        $sql = "SELECT invoices.id, CONCAT(customers.first_name,' ', customers.last_name,'(ID:',customers.id,')') as customer , users_admin.username AS user_username, payment_method.description AS payment_method, invoices.total_bill AS amount_charged, invoices.date 

        FROM invoices INNER JOIN users_admin on invoices.user_id = users_admin.id 
        INNER JOIN payment_method on payment_method.id = invoices.payment_method_id 

        INNER JOIN customers ON customers.id = invoices.customer_id ORDER BY invoices.id DESC LIMIT 100;";

        $this->data_object->data_query($sql, $table_id, $table_data);
    }
}
