<?php
if (isset($_POST['inq_id']) and isset($_POST['archive_inquiry'])) {
    $inq_id = $_POST['inq_id'];
    $inquiries_obj->archive_inquiry($inq_id);
}

if (isset($_POST['generate_quote']) and isset($_POST['inq_id'])) {
    $inq_id = $_POST['inq_id'];
    $result = $inquiries_obj->send_quote($inq_id);
    if (!$result) {
        $transaction->sweet_alert('Failed',  'Transaction Error. Make sure you have submitted your data in the correct format', 'error', 'Ok', 'btn btn-primary');
    } else {
        $transaction->sweet_alert('Success!',  'Quotation Sent to customer', 'success', 'Ok', 'btn btn-primary');
    }
}

if (isset($_POST['unarchive_inquiry'])  and isset($_POST['inq_id'])) {
    $inq_id = $_POST['inq_id'];
    $inquiries_obj->unarchive_inquiry($inq_id);
}
