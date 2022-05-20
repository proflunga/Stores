<?php

if(isset($_POST['remove_thumbnail']))
{
    $result = $inventory_obj ->  remove_thumbnail($_POST);
     
    if( $result == -1 )
    {
        $transaction->sweet_alert('Please note!',  'No thumbnail was uploaded', 'info', 'Ok', 'btn btn-primary');

    }
    elseif(!$result)
    {
        
        $transaction->sweet_alert('Error!',  'Failed to remove thumbnail', 'error', 'Ok', 'btn btn-primary');

    }
    else
    {
        
        $transaction->sweet_alert('Success!',  'Thumbnail was removed', 'success', 'Ok', 'btn btn-primary');
    }

}
 

if(isset($_POST['update_thumbnail']))
{
    $result = $inventory_obj -> update_thumbnail($_POST);
    if(!$result)
    {
        
        $transaction->sweet_alert('Error!',  'Failed to update thumbnail', 'error', 'Ok', 'btn btn-primary');

    }
    else
    {
        
        $transaction->sweet_alert('Success!',  'Thumbnail changed', 'success', 'Ok', 'btn btn-primary');
    }
}

if(isset($_POST['change_prod_status']))
{
    $result = $inventory_obj -> change_prod_status($_POST);
    if(!$result)
    {
        
        $transaction->sweet_alert('Error!',  'Failed to  change produuct  status', 'error', 'Ok', 'btn btn-primary');

    }
    else
    {
        
        $transaction->sweet_alert('Success!',  'Status changed', 'success', 'Ok', 'btn btn-primary');
    }
}


if(isset($_POST['update_category']))
{
    $result = $inventory_obj -> update_category($_POST);
    if(!$result)
    {
        
        $transaction->sweet_alert('Error!',  'Failed to  change category', 'error', 'Ok', 'btn btn-primary');

    }
    else
    {
        
        $transaction->sweet_alert('Success!',  'Category changed', 'success', 'Ok', 'btn btn-primary');
    }
}

if(isset($_POST['update_Product_general_info']))
{
    $result = $inventory_obj -> update_Product_general_info($_POST);   

    if(!$result)
    {
        
        $transaction->sweet_alert('Error!',  'Failed to  change info', 'error', 'Ok', 'btn btn-primary');

    }
    else
    {
        
        $transaction->sweet_alert('Success!',  'Info updated', 'success', 'Ok', 'btn btn-primary');
    }
}


if(isset($_POST['update_pricing']))
{
    $result = $inventory_obj -> update_pricing($_POST);   

    if(!$result)
    {
        
        $transaction->sweet_alert('Error!',  'Failed to  change info', 'error', 'Ok', 'btn btn-primary');

    }
    else
    {
        
        $transaction->sweet_alert('Success!',  'Pricing updated', 'success', 'Ok', 'btn btn-primary');
    }
}


 


 
?>

 