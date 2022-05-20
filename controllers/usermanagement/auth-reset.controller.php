
<?php

if (isset($_POST['password_reset'])) {
    $ticket_pin = $_POST['ticket'];
    $admin_user = $_POST['u_id'];

    $results = $management_obj->generate_new_password($ticket_pin, $admin_user);


    if ($results) {
        $management_obj->sweet_alert("Password Reset", "Successfully resetted password", 'success', 'Ok', 'btn btn-primary');
    } else {
        // error
        $management_obj->sweet_alert("Password Reset", "Error occured resetting user password", 'warning', 'Ok', 'btn btn-warning');
        // echo '<script> alert("Error occured resetting user password."); window.location.href = "../../usermanagement.php?action=admin_change_pin&u_id='.$admin_user.'"; </script>';
    }
}
//   else{
//     $management_obj->sweet_alert("Password Reset", "Internal Server Error Occurred", 'warning', 'Ok', 'btn btn-danger');

//  }





?>