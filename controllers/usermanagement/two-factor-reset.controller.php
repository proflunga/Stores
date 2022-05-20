
<?php




if (isset($_POST['two_factor_pins'])) {
    $results = $transaction->generate_new_two_factor_pins();


    if ($results) {
        // 
        $transaction->sweet_alert("reset Two Factor", "Successfully resetted new auth pins", 'success', 'Ok', 'btn btn-primary');
        // echo '<script> alert("Successfully resetted new auth pins"); window.location.href = "../../usermanagement.php?action=admin_reset_auth"; </script>';

    } else {
        // error
        $transaction->sweet_alert("reset Two Factor", "Error occured reseting two factor auth pins", 'danger', 'Ok', 'btn btn-primary');
        // echo '<script> alert("Error occured reseting two factor auth pins"); window.location.href = "../../usermanagement.php?action=admin_reset_auth"; </script>';
    }
}





?>