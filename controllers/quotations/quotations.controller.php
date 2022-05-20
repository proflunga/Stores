<?php


if (isset($_POST['save_draft'])    and isset($_POST['cutomer_details']) and isset($_POST['quotation_date']) and isset($_POST['payment_method'])) {
    if (isset($_POST['customer_id'])) {
        $customer_id = $_POST['customer_id'];
    } else {
        $customer_id = 0;
    }

    if (isset($_POST['notes'])) {
        $notes = $_POST['notes'];
    } else {
        $notes = '';
    }


    $cutomer_details = $_POST['cutomer_details'];
    $quotation_date = $_POST['quotation_date'];
    $payment_method = $_POST['payment_method'];
    $notes = $_POST['notes'];

    $result =  $quotations_obj->update_quotation_cart($customer_id, $cutomer_details, $quotation_date, $payment_method, $notes);
    if ($result) {

        $_SESSION['sweet_alert_obj'] = array('title' => 'Successful', 'msg' => 'Quotation Draft Saved', 'icon' => 'success', 'btn_txt' => 'Ok', 'btn_style' => 'btn btn-primary',);
        $page_redirect->redirect_page('quotations.php?action=generate_quote');
    }
}


if (isset($_POST['generate_quotation']) and isset($_POST['cutomer_details']) and isset($_POST['quotation_date']) and isset($_POST['payment_method'])) {
    // update_cart_first
    if (isset($_POST['customer_id'])) {
        $customer_id = $_POST['customer_id'];
    } else {
        $customer_id = 0;
    }

    if (isset($_POST['notes'])) {
        $notes = $_POST['notes'];
    } else {
        $notes = '';
    }


    $cutomer_details = $_POST['cutomer_details'];
    $quotation_date = $_POST['quotation_date'];
    $payment_method = $_POST['payment_method'];
    $notes = $_POST['notes'];

    $result =  $quotations_obj->update_quotation_cart($customer_id, $cutomer_details, $quotation_date, $payment_method, $notes);
    if ($result) {
        $result =  $quotations_obj->generate_quotation();
        if ($result == -1) {

            $_SESSION['sweet_alert_obj'] = array('title' => 'Failed', 'msg' => 'Customer details cannot be empty', 'icon' => 'error', 'btn_txt' => 'Ok', 'btn_style' => 'btn btn-primary',);
            echo '<script>history.back()</script>';
        } elseif ($result == -2) {

            $_SESSION['sweet_alert_obj'] = array('title' => 'Failed', 'msg' => 'Please Specify a Valid Quotation Date', 'icon' => 'error', 'btn_txt' => 'Ok', 'btn_style' => 'btn btn-primary',);
            echo '<script>history.back()</script>';
        } elseif ($result == -3) {

            $_SESSION['sweet_alert_obj'] = array('title' => 'Failed', 'msg' => 'Please select Currency', 'icon' => 'error', 'btn_txt' => 'Ok', 'btn_style' => 'btn btn-primary',);
            echo '<script>history.back()</script>';
        } elseif ($result) {

            $_SESSION['sweet_alert_obj'] = array('title' => 'Successful', 'msg' => 'Quotation Generated!', 'icon' => 'success', 'btn_txt' => 'Ok', 'btn_style' => 'btn btn-primary',);

            $page_redirect->redirect_page("quotations.php?action=quotation_details&q_id=$result");
        } else {

            $_SESSION['sweet_alert_obj'] = array('title' => 'Failed', 'msg' => 'Make sure all the details are correct', 'icon' => 'error', 'btn_txt' => 'Ok', 'btn_style' => 'btn btn-primary',);
            echo '<script>history.back()</script>';
        }
    }

    if (isset($_POST['add_product']) and isset($_POST['product_id'])) {

        $result =  $quotations_obj->add_product_to_cart($customer_id, $cutomer_details, $quotation_date, $payment_method, $notes);
    }
}
