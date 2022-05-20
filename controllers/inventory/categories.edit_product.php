



<?php


if(isset($_POST['remove_category_thumbnail']))
{
    $result = $inventory_obj ->  remove_category_thumbnail($_POST);
     
    if(!$result)
    {
        
        $transaction->sweet_alert('Error!',  'Failed to remove thumbnail', 'error', 'Ok', 'btn btn-primary');

    }
    else
    {
        
        $transaction->sweet_alert('Success!',  'Thumbnail was removed', 'success', 'Ok', 'btn btn-primary');
    }

}

if(isset($_POST['update_category_thumbnail']))
{

    $result = $inventory_obj ->  update_category_thumbnail($_POST);
     
    if( $result == -1 )
    {
        $transaction->sweet_alert('Please note!',  'No thumbnail was uploaded', 'info', 'Ok', 'btn btn-primary');

    }
    elseif(!$result)
    {
        
        $transaction->sweet_alert('Error!',  'Failed to update thumbnail', 'error', 'Ok', 'btn btn-primary');

    }
    else
    {
        
        $transaction->sweet_alert('Success!',  'Thumbnail was changed', 'success', 'Ok', 'btn btn-primary');
    }

}

if(isset($_POST['change_category_status']))
{

    $result = $inventory_obj ->  change_category_status($_POST);
     
    if(!$result)
    {
        
        $transaction->sweet_alert('Error!',  'Failed to change status', 'error', 'Ok', 'btn btn-primary');

    }
    else
    {
        
        $transaction->sweet_alert('Success!',  'Status changed', 'success', 'Ok', 'btn btn-primary');
    }

}



if(isset($_POST['update_cat_for_cat']))
{
    $result = $inventory_obj -> update_cat_for_cat($_POST);
    if(!$result)
    {
        
        $transaction->sweet_alert('Error!',  'Failed to  change category', 'error', 'Ok', 'btn btn-primary');

    }
    else
    {
        
        $transaction->sweet_alert('Success!',  'Category changed', 'success', 'Ok', 'btn btn-primary');
    }
}
 


if(isset($_POST['update_cat_gen_info']))
{
    $result = $inventory_obj -> update_cat_gen_info($_POST);   

    if(!$result)
    {
        
        $transaction->sweet_alert('Error!',  'Failed to  change info', 'error', 'Ok', 'btn btn-primary');

    }
    else
    {
        
        $transaction->sweet_alert('Success!',  'Info updated', 'success', 'Ok', 'btn btn-primary');
    }
}

?>
