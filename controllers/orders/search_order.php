<?php

if(isset($_POST['search_order'])){

    $order_id = $_POST['order_id'];

    // update the order table
    $result = $orders_obj ->search_order($order_id);

    if($result){
        $id = mysqli_fetch_assoc($result)['id'];
        // echo successfully found the id of the order
        echo '<script>window.location.href = "Orders.php?action=order_details&o_id='.$id.'"; </script>';
    }else{
        // echo error occured
        echo '<script>alert("Order was not found"); </script>';
    }


} 

?>