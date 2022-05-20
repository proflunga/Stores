<?php

//dummy_user_id
session_start();

//Include required PHPMailer files
require $path_prefix . 'libraries/phpmailer/PHPMailer.php';
require $path_prefix . 'libraries/phpmailer/SMTP.php';
require $path_prefix . 'libraries/phpmailer/Exception.php';


//Assign fund id 
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = 0;
}

//Assign fund id 
if (isset($_SESSION['fund_id'])) {
    $fund_id = $_SESSION['fund_id'];
} else {
    $fund_id = 0;
}

//Assign acces level value

if (isset($_SESSION['access_level_id'])) {
    $access_level_id = $_SESSION['access_level_id'];
} else {
    $access_level_id = 0;
}

// Avoid Confirm Page Reload Promt
// echo '
// <script>
//     if ( window.history.replaceState ) {
//         window.history.replaceState( null, null, window.location.href );
//     }
// </script
// ';

//essentials
$mail = new mail;
$db_query_obj = new db_query;
$page_redirect  = new page_redirect;
$validation_check_obj  = new validation;



//dependants
$data_object = new data_object($db_query_obj);

$global_transaction = new global_transaction($user_id, $db_query_obj, $data_object);

//module/class objects
$populate_select_obj = new populate_select($db_query_obj);
$pos = new pos($user_id, $db_query_obj, $global_transaction, $data_object);
$sales = new sales($user_id, $db_query_obj, $global_transaction, $data_object);
$inventory_obj = new inventory($user_id, $db_query_obj, $global_transaction, $data_object);
$nav_header = new nav_header($user_id, $db_query_obj, $global_transaction, $data_object);
$my_account = new my_account($user_id, $db_query_obj, $global_transaction, $data_object);
$customers_obj = new customers($user_id, $db_query_obj, $global_transaction, $data_object);
$inquiries_obj = new inquiries($user_id, $db_query_obj, $global_transaction, $data_object);
$quotations_obj = new quotations($user_id, $db_query_obj, $global_transaction, $data_object);
$invoice_obj = new invoices($user_id, $db_query_obj, $global_transaction, $data_object);
$quotation_obj = new quotations($user_id, $db_query_obj, $global_transaction, $data_object);

$orders_obj = new orders($db_query_obj, $user_id, $data_object);
$management_obj = new usermanagement($user_id, $db_query_obj, $mail);
$notifications_obj = new notifications($user_id, $db_query_obj, $global_transaction, $data_object);


$transaction = new transaction($user_id, $db_query_obj, $fund_id, $access_level_id, $mail);
$view_transaction =  new view_transaction(0, $db_query_obj, $transaction, $fund_id);
