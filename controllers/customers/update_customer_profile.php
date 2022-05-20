<?php
if(isset($_POST['update_profile'])){

    $user_email = $_POST['user_email'] ;
    $company_name = $_POST['company_name'];
    $customer_gender_id = $_POST['customer_gender_id'] ;
    $address_1 = $_POST['address_1'] ;
    $address_2 = $_POST['address_2'] ;
    $city = $_POST['city'] ;
    $phone_number = $_POST['phone_number'] ;
    $c_id = $_POST['c_id'] ;
   

    // transfere data to classs
    $results = $customers_obj->  update_customer_details($user_email,$customer_gender_id,$address_1,$address_2,$city,$c_id, $phone_number, $company_name);
    if($results){
        // successful update
        $transaction->sweet_alert('Successful',  'Successfully updated customer details.', 'success', 'Ok', 'btn btn-primary');
    }else{
        // errror
        $transaction->sweet_alert('Error',  'Error occured updating customer details.', 'error', 'Ok', 'btn btn-primary');
    }
  
}


?>