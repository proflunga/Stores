<?php

if(isset($_POST['add_to_archieve'])){

    $order_id = $_POST['add_to_archieve'];

    // update the order table
    $result = $orders_obj ->add_to_archieve($order_id);

    if($result == 1){
        // echo successfully
        echo '<script>alert("Successfully archieved order"); </script>';
    }else{
        // echo error occured
        echo '<script>alert("Error occured archieving the order"); </script>';
    }


} 

?>