
<?php


if (isset($_POST['create_admin_user'])) {

    // personal details
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $nat_id = $_POST['nat_id'];

    // contact details
    $mobile_number = $_POST['mobile_number'];
    $email = $_POST['email'];

    // account details
    $user_group = $_POST['user_group'];
    $access_level_id = $_POST['access_level_id'];
    $username = $_POST['username'];
    $user_password = $_POST['user_password'];

        //check if the account exist
        if ($transaction->existance_finder('users_admin', 'id', 'username', $username)) {
            // user exist
            $transaction->sweet_alert('Error!',  'User with username '.$username.'  already exist', 'error', 'Ok', 'btn btn-primary');
            
        } else {

            // create user now
            $results = $management_obj->create_new_user($first_name, $last_name, $nat_id, $mobile_number, $username, $email, $user_password, $user_group, $access_level_id);
            if($results){
                // successfully cerated account
                $transaction->sweet_alert('Successful',  'User '.$username.' \'s account has been created successfully.', 'successs', 'Ok', 'btn btn-primary');
            }else{
                // error inserting new account
                $transaction->sweet_alert('Error!',  'Error creating new user', 'error', 'Ok', 'btn btn-primary');
            }
        }

    
}





?>