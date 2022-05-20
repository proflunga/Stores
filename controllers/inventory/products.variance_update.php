<?php

if(isset($_POST['variance_update']))
{
    $result = $inventory_obj -> variance_update($_POST);   

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