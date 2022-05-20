<?php

if (isset($_POST['delete_product']) and isset($_POST['delete_product'])) {

    $product_id = $_POST['prod_id'];
    $result = $inventory_obj->delete_product($product_id);



    if (!$result) {

        $_SESSION['sweet_alert_obj'] = array('title' => 'Error', 'msg' => 'Action Failed', 'icon' => 'error', 'btn_txt' => 'Ok', 'btn_style' => 'btn btn-primary',);
    } else {

        $_SESSION['sweet_alert_obj'] = array('title' => 'Success', 'msg' => 'Product  Deleted', 'icon' => 'success', 'btn_txt' => 'Ok', 'btn_style' => 'btn btn-primary',);
        $page_redirect->redirect_page('inventory.php?action=all_products');
    }
}
