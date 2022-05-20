<?php

if (isset($_POST['add_new_product'])) {




    $product_name = $_POST['product_name'];
    $cat_id = $_POST['cat_id'];
    $product_description = $_POST['product_description'];

    $product_price = $_POST['product_price'];
    $product_discount = $_POST['product_discount'];
    $product_code = $_POST['product_code'];
    $product_quantity = $_POST['product_quantity'];

    $status_published = $_POST['status_published'];

    if (isset($_FILES['product_image'])) {
        $file = $_FILES['product_image'];
    } else {
        $file = null;
    }

    $result = $inventory_obj->add_new_product($cat_id, $product_name, $product_description, $product_price, $product_discount, $product_code, $product_quantity,   $status_published, $file);

    if ($result == -1) {

        $_SESSION['sweet_alert_obj'] = array('title' => 'Error', 'msg' => 'Product Category Error XPC01', 'icon' => 'error', 'btn_txt' => 'Ok', 'btn_style' => 'btn btn-primary',);
        echo '<script>history.back()</script>';
    } elseif ($result == -2) {

        $_SESSION['sweet_alert_obj'] = array('title' => 'Error', 'msg' => 'A Product already exists with the same Product Code', 'icon' => 'error', 'btn_txt' => 'Ok', 'btn_style' => 'btn btn-primary',);

        echo '<script>history.back()</script>';
    } elseif (!$result) {
        $_SESSION['sweet_alert_obj'] = array('title' => 'Error', 'msg' => 'Error Adding Product', 'icon' => 'error', 'btn_txt' => 'Ok', 'btn_style' => 'btn btn-primary',);
        echo '<script>history.back()</script>';
    } else {

        $_SESSION['sweet_alert_obj'] = array('title' => 'Successfull', 'msg' => 'New product added', 'icon' => 'success', 'btn_txt' => 'Ok', 'btn_style' => 'btn btn-primary',);



        $page_redirect->redirect_page("inventory.php?action=edit_product&p_id=$result");
    }
}
