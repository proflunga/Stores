<?php

if (isset($_POST['clear_notifications'])) {

    $result = $notifications_obj->clear_notifications();
    if ($result) {
        $page_redirect->redirect_page('dashboard.php?action=notifications');
    } else {
        $transaction->sweet_alert('Info!',  'Empty Tray', 'info', 'Ok', 'btn btn-primary');
    }
}
if (isset($_POST['delete_notification']) and isset($_POST['noti_id_'])) {
    $noti_id_ = $_POST['noti_id_'];
    $notifications_obj->delete_notification($noti_id_);


    $page_redirect->redirect_page('dashboard.php?action=notifications');
}
