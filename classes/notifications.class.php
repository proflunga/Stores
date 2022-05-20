<?php


class notifications extends data_object

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

    public function clear_notifications()
    {
        $user_id = $this->user_id;
        $sql = "DELETE FROM notifications WHERE user_id = $user_id;";
        $result = $this->db_query_obj->sql_delete_qury("$sql");

        if (!$result) {
            return 0;
        } else {
            return 1;
        }
    }
    public function delete_notification($noti_id_)
    {
        $user_id = $this->user_id;
        $sql = "DELETE FROM notifications WHERE notifications.id = $noti_id_ and notifications.user_id = $user_id;";
        $this->db_query_obj->sql_delete_qury("$sql");
    }



    public function mark_as_read($noti_id)
    {
        $user_id = $this->user_id;
        $sql = "UPDATE   notifications SET notifications.read_status = 1 WHERE notifications.id = $noti_id and notifications.user_id = $user_id ;";
        $this->db_query_obj->sql_update_qury("$sql");
    }




    public function tax($table_id)
    {

        $table_data = ' 
        
        employee_data += `<td class="text-gray-800   fs-5 fw-bolder">x</td>`;	

        employee_data += `<td class="text-gray-800   fs-5 fw-bolder">x</td>`;	

        employee_data += `<td class="text-gray-600   fs-5 fw-bold">e</td>`;

        employee_data += `<td class="text-gray-600   fs-5 fw-bold">e</td>`;


         

  ';

        //  employee_data += `<td><a href="inventory.php?action=edit_category&c_id=${value.id }">View Category</a></td>`; 

        $sql = 'SELECT `id`, `code`, `description`, `tax_amount` FROM `tax` ';

        $this->data_object->data_query($sql, $table_id, $table_data);
    }

    public function noti_data($noti_data)
    {
        $user_id = $this->user_id;

        $sql = "SELECT notifications.id, notifications.title, notifications.msg,notifications.date FROM notifications WHERE notifications.user_id  = $user_id and  notifications.id = $noti_data ";

        $this->data_object->query_single_object($sql, 'noti_data');
    }

    public function fetch_notifications($table_id)
    {


        $user_id = $this->user_id;

        $table_data = '
       
        
        employee_data += ` <tr onclick="window.location.href=\'dashboard.php?action=view_notification&noti_id=${value.id}\'" class="bg-hover-light"> `;
        
        if (value.read_status ==0)
        {
            status =`<li class="fa fa-circle text-warning">`;
        }else
        {
            status =`<li class="fa fa-circle text-gray-300">`;
        }


        employee_data += `<td class="  fs-7 fw-bolder">${status}</li></td>`;	

        employee_data += `<td class=" fs-7 fw-bolder">${value.title}</td>`;	

        employee_data += `<td class="  fs-7 ">${value.msg}</td>`;

        employee_data += `<td class="   fs-7 fw-bold">${value.date}</td>`;
 
   
 

  ';

        //  employee_data += `<td><a href="inventory.php?action=edit_category&c_id=${value.id }">View Category</a></td>`; 

        $sql = "SELECT * FROM `notifications` WHERE notifications.user_id= $user_id";

        $this->data_object->data_query($sql, $table_id, $table_data);
    }
}
