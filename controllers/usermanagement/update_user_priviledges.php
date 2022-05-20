
<?php


if (isset($_POST['user_priviledges'])) {
    $admin_user = $_POST['u_id'];

    $results = $transaction->update_priviledges_of_users($_POST, $admin_user);
    if ($results) {

        // successfully changed user privil
        $transaction->sweet_alert("Update User Priviledges", "Successfully updated user priviledges", 'success', 'Ok', 'btn btn-primary');
        // echo '<script> alert("Successfully updated user priviledges"); window.location.href = "../../usermanagement.php?action=user_priviledges&u_id='.$admin_user.'" ;</script>';
        // exit();

    } else {
        // error occured
        // successfully changed user privil
        $transaction->sweet_alert("Update User Priviledges", "Error updating user priviledges", 'danger', 'Ok', 'btn btn-primary');
    }
}





?>