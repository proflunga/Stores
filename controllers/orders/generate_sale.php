<?php
if(isset($_POST['add_new_sale'])){

    $product_id_array = json_decode($_POST['id'], true);
    $product_quantity_array = json_decode($_POST['product_quantity'], true) ;
    $order_id = $_POST['o_id'];
                                     
    
    
    $sale_id = $orders_obj ->generate_new_sale($order_id);

    $success_flag = 0;
    
    if($sale_id){

        // update order to status 2
        $orders_obj->process_order($order_id);


        // successfully created a sale
        //start inserting into sales_products
        for($var = 0; $var< sizeof($product_id_array); $var++){

            // insert
            $result = $orders_obj ->insert_sale_product($sale_id, $product_id_array[$var], $product_quantity_array[$var]);

            // check for error
            if(!$result){
                echo 'Error inserting into order products table';
                break;
            }else{
                // successful insert
                $success_flag = 1;
            }

            // if successfull
            if(($var == sizeof($product_id_array)- 1) and $success_flag){
                goto successfull_insert;
            }
                

            

        }
    }


    successfull_insert:
    echo 'Successfully inserted';



} 

?>