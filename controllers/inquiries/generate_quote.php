<?php
// print_r($_POST);



if(isset($_POST['generate_quote'])){
    $products_repeater =  $_POST['products_repeater'];   #get all products of the form
    $quotation_date =  $_POST['quotation_date']; 
    $customer_name =  $_POST['customer_name']; 
    $customer_email =  $_POST['customer_email']; 
    $quotation_info =  $_POST['customer_notes']; 
    $quotation_notes =  $_POST['notes']; 
    $quotation_currency =  $_POST['currency']; 

    // iterate all products
    for($var = 0; $var< sizeof($products_repeater); $var++){
        $item_name = 0;
        if(isset($products_repeater[$var]["item_name"])){
            $item_name = $products_repeater[$var]["item_name"];
        }else{
            $item_name = $products_repeater[$var]["item_code"];
        }
        echo 'The value are as follows : >'.$item_name . " > ". $products_repeater[$var]["quantity"]." > ". $products_repeater[$var]["price"];
        echo "<br>";
    }

    


} 


?>

