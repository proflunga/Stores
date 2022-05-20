<?php
class nav_header extends data_object
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

    public function profile_record()
    {
        $user_id = $this->user_id;

        $this->data_object->query_single_object("SELECT users_admin.profile_image, users_admin.username, CONCAT(users_admin.first_name,' ',users_admin.last_name) as full_name FROM users_admin WHERE id = $user_id;");
    }
    public function fetch_notificatiions($table_id)
    {
        $user_id = $this->user_id;

        $table_data = ' 
        employee_data += `<td>
         <a href="dashboard.php?action=view_notification&noti_id=${value.id}"  >
            <div class="d-flex flex-stack   bg-hover-light">
                   
                   
                        <div class="d-flex align-items-center mx-4 my-4"> 
                            <div class="  me-4">
                                <span class="symbol-label bg-light-primary">
                                    <li class="fa fa-circle text-warning"></li>
                                </span>
                            </div> 
                            <div class="mb-0 me-2">
                                <span class="fw-bolder">${value.title} </span>
                                <div class="text-gray-400 fs-7 ">${value.msg.substring(0, 15)}...</div>
                            </div>
                            <!--end::Title-->
                        </div>
                   
                        <span class="badge badge-light fs-8">${value.date.substring(0, 7)}</span>
                    
                </div>
                </a>
        </td>`; 
        

            ';


        $sql = "SELECT `id`, `date`, `title`,`msg`  FROM `notifications` WHERE notifications.user_id =   $user_id and notifications.read_status = 0 ORDER BY notifications.id DESC LIMIT 3   ";

        $this->data_object->data_query($sql, $table_id, $table_data, 'noti_data');
    }
    public function notification_counter()
    {
        $user_id = $this->user_id;
        $sql = "SELECT COUNT(notifications.id) as count_ FROM notifications WHERE notifications.user_id  = $user_id and notifications.read_status =0 ";

        $this->data_object->query_single_object($sql, 'notification_header');
    }
}
