
<?php
// Set path for autoloader
$path = "classes";
require '../../includes/global/controller_auto_class_loader.php';




if (isset($_GET['action']) and isset($_GET['u_id'])) {

    if ($_GET['action'] == 'approve_new_user') {
        $user_id  = $_GET['u_id'];

        $transaction->approve_new_portal_user($user_id);

        echo $user_id . ' Approved';
    } elseif ($_GET['action'] == 'activate_user') {
        $user_id  = $_GET['u_id'];

        $transaction->activate_portal_user($user_id);

        echo $user_id . ' Activated';
    } elseif ($_GET['action'] == 'deactivate_user') {
        $user_id  = $_GET['u_id'];

        $transaction->deactivate_portal_user($user_id);

        echo $user_id . ' Deactivated';
    } else {
        $page_redirect->redirect_page('usermanagement.php?action=portal_users');
    }
}



?>