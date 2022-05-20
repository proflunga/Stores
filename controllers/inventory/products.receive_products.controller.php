<?php

if(isset($_POST['recieve_product']))
{
    $result = $inventory_obj -> recieve_product($_POST);   

    if(!$result)
    {
        
        $transaction->sweet_alert('Error!',  'Action Failed', 'error', 'Ok', 'btn btn-primary');

    }
    else
    {
        
        $transaction->sweet_alert('Success!',  'Product quantity added', 'success', 'Ok', 'btn btn-primary');
    }
}
 



?>