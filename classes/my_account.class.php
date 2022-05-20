<?php
 

class my_account extends data_object 

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

    public function fetch_user_data()
    {
        
        $user_id = $this -> user_id;
        $sql = "SELECT users_admin.user_email, users_admin.profile_image, users_admin.first_name, users_admin.last_name, users_admin.username, users_admin.phone_number, users_admin.username FROM users_admin WHERE users_admin.id = $user_id;";
        $this -> data_object -> query_single_object($sql);


    }

    public function remove_thumnail()
    {
        
        $user_id = $this -> user_id;
        $sql = "UPDATE users_admin SET users_admin.profile_image = 'default.jpg' WHERE users_admin.id = $user_id";
        
            
        $result = $this -> db_query_obj->sql_update_qury("$sql");
        



    }

    

    public function update_my_account_info()
    {
 
        $user_id = $this -> user_id; 
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $username = $_POST['username'];
        $phone_number = $_POST['phone_number'];
        $user_email = $_POST['user_email'];
        $file = $_FILES['profile_image'];

        $result_up = $this -> upload_userprofile_image($file, $user_id);

        $sql = "UPDATE users_admin SET   users_admin.first_name = '$first_name', users_admin.last_name = '$last_name',users_admin.username = '$username',users_admin.phone_number = '$phone_number',users_admin.user_email = '$user_email' WHERE users_admin.id = $user_id;";       
 
        $result = $this -> db_query_obj->sql_update_qury("$sql");        
   

        if ( $result_up == -1 and !$result )
        {    
            return  -1;  
        }
        elseif ( $result_up == -3 and !$result )
        {    
            return  -3;  
        }
        elseif ( $result_up == -4 and !$result )
        {    
            return  -4;  
        }
        elseif($result or $result_up)
        {
            return 1;  
        }
        else
        {
            return 0;  
        }



    }
    
    public function  upload_userprofile_image($file, $user_id)
    {
        $return_result =   1;
        
        if(empty(!$file))
        { 
            $errors= array();
            // $file_name = $file['name'];
            $file_size =$file['size'];
            $file_tmp =$file['tmp_name'];
            // $file_type=$file['type'];

            $explode_var = explode('.',$file['name']);
            $file_ext=strtolower(end($explode_var));
            
            $extensions= array("jpeg","jpg","png");
            
            if(in_array($file_ext,$extensions)=== false){
                //$errors[]="extension not allowed, please choose a JPEG or PNG file.";
                $return_result = -3;
            }            
            elseif($file_size > 2097152)
            {
            //$errors[]='File size must be excately 2 MB';
            $return_result = -4;

            }
            else
            {

            
            
            $rand = rand(1000,9999);           

            $product_image_name = $user_id.'_'.$rand.'.'.$file_ext;
       
            move_uploaded_file($file_tmp,"assets/media/users/".$product_image_name);

            $sql = "UPDATE users_admin SET users_admin.profile_image = '$product_image_name' WHERE users_admin.id = $user_id";
        
            
            $result = $this -> db_query_obj->sql_update_qury("$sql");
            
    
                if (!$result)
                {    
                    $return_result = -1;  
                }
                else
                {
                    $return_result = 1;  
                }
           }
        } 

        return $return_result;
    }



    
}

?>