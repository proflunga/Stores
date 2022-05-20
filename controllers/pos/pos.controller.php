<?php

if (isset($_GET['pos_c_id'])) {
    $pos_c_id = $_GET['pos_c_id'];


    $result = $pos->delete_pos_cart_item($pos_c_id);

    if (!$result) {

        $transaction->sweet_alert('Error!',  'An error occured while deleting cart item', 'error', 'Ok', 'btn btn-primary');
        $page_redirect->redirect_page('pos.php');
    } else {

        $transaction->sweet_alert('Success!',  'Item Deleted', 'success', 'Ok', 'btn btn-primary');
        $page_redirect->redirect_page('pos.php');
    }
}
if (isset($_GET['cancel_order'])) {
    $result = $pos->cancel_order();

    if (!$result) {
        $transaction->sweet_alert('Error!',  'An error occured while cancelling order', 'error', 'Ok', 'btn btn-primary');
        $page_redirect->redirect_page('pos.php');
    } else {
        $transaction->sweet_alert('Success!',  'Order cancelled', 'success', 'Ok', 'btn btn-primary');
        $page_redirect->redirect_page('pos.php');
    }
}

if (isset($_POST['make_sale']) and isset($_POST['payment_method'])  and isset($_POST['customer_id'])) {


    $payment_method = $_POST['payment_method'];
    $customer_id = $_POST['customer_id'];
    $total_bill = $global_transaction->pos_cart_sum();



    if (!$total_bill) {
        $transaction->sweet_alert('Error!',  'You cannot process a Zero Order', 'error', 'Ok', 'btn btn-primary');
    } else {
        //$payment_method_id, $tax,$total_bill)
        $result = $pos->make_sale($payment_method, 1, $total_bill, $customer_id);
        if (!$result) {

            $transaction->sweet_alert('Error!',  'An error occured while processing order', 'error', 'Ok', 'btn btn-primary');
        } else {

            $_SESSION['sweet_alert_obj'] = array('title' => 'Successful', 'msg' => 'Order Processed Successfull', 'icon' => 'success', 'btn_txt' => 'Ok', 'btn_style' => 'btn btn-primary',);
            $page_redirect->redirect_page("pos.php?action=transaction_details&trans_id=$result");
        }
    }
}


if (isset($_POST['add_to_cart']) and isset($_POST['product_id']) and  isset($_POST['quantity'])) {
    $quantity = $_POST['quantity'];
    if ($quantity > 0) {
        $product_id = $_POST['product_id'];
        print_r($product_id);

        //saerch
        $price = $global_transaction->name_from_id_finder('products', 'product_price', $product_id);


        $result = $pos->add_to_pos_cart($product_id, $quantity, $price);

        if (!$result) {
            $page_redirect->redirect_page('pos.php');
        } elseif ($result == -3) {

            $transaction->sweet_alert('Error!',  'Stock not available or on hold', 'error', 'Ok', 'btn btn-primary');
        } elseif ($result == -3) {

            $transaction->sweet_alert('Error!',  'Transaction Error', 'error', 'Ok', 'btn btn-primary');
        } else {
            $page_redirect->redirect_page('pos.php');
        }
    } else {
        $transaction->sweet_alert('Error!',  'Invalid quantity figure', 'error', 'Ok', 'btn btn-primary');
    }
}


if (isset($_POST['search_product'])) {
    if (isset($_POST['prod_type'])) {

        $prod_type = $_POST['prod_type'];


        if (isset($_POST['prod_brands'])) {
            $prod_brands = $_POST['prod_brands'];
        } else {
            $prod_brands = '';
        }
        if (isset($_POST['prod_flavours'])) {
            $prod_flavours = $_POST['prod_flavours'];
        } else {

            $prod_flavours = '';
        }
        if (isset($_POST['prod_strength'])) {
            $prod_strength = $_POST['prod_strength'];
        } else {

            $prod_strength = '';
        }
        if (isset($_POST['prod_colour'])) {
            $prod_colour = $_POST['prod_colour'];
        } else {

            $prod_colour = '';
        }
        if (isset($_POST['prod_model'])) {
            $prod_model = $_POST['prod_model'];
        } else {

            $prod_model = '';
        }


        if ($prod_type == 'liquids') {

            $pos->search_pos_liquids($prod_type, $prod_brands, $prod_flavours,  $prod_strength);
        } elseif ($prod_type == 'devices') {
            $pos->search_pos_devices($prod_type, $prod_brands, $prod_flavours,  $prod_strength);
        }
    }
}

if (isset($_POST['primary_search'])) {

    if (isset($_POST['product_name'])) {
        $name = $_POST['product_name'];
    } else {
        $name = "";
    }

    if (isset($_POST['product_code'])) {
        $code = $_POST['product_code'];
    } else {

        $code = "";
    }

    $result = $pos->primary_search($name, $code);
}
