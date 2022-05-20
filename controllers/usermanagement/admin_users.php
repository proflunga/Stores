
<?php



if (isset($_GET['action']) and isset($_GET['u_id']))
{

    if(isset($_POST['approve_new_user']))
    {
        $user_id  = $_POST['u_id'];
        $username = $management_obj -> name_from_id_finder( 'users_admin','username',$user_id);

        $management_obj -> approve_new_admin_user($user_id);

        $management_obj->sweet_alert("Successful!", 'User @'.$username."\'s account is now active", 'success', 'Ok', 'btn btn-primary');
        

    }
    elseif(isset($_POST['activate_user']) )
    {
        $user_id  = $_POST['u_id'];
        
        $username = $management_obj -> name_from_id_finder( 'users_admin','username',$user_id);

        $management_obj -> activate_admin_user($user_id);
        $management_obj->sweet_alert("Successful!", 'User @'.$username." is now active", 'success', 'Ok', 'btn btn-primary');
        

    
   

    }
    elseif(isset($_POST['deactivate_user']) )
    {
        $user_id  = $_POST['u_id'];
                $username = $management_obj -> name_from_id_finder( 'users_admin','username',$user_id);

    $management_obj -> deactivate_admin_user($user_id);

    echo $user_id.' Deactivated';
    $management_obj->sweet_alert("Successful!", 'User @'.$username." is now inactive", 'success', 'Ok', 'btn btn-primary');
        
 
    }else{

    }
   

    


}



?>