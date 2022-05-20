<?php



if(isset($_POST['update_my_profile_details']))
{
    $result = $my_account ->  update_my_account_info($_POST);
     
    if(!$result)
    {
        
        $transaction->sweet_alert('Error!',  'Failed to udate Details', 'error', 'Ok', 'btn btn-primary');

    }
    elseif($result == -1)
    {        
        $transaction->sweet_alert('Update Failed!',  'No changes detected', 'info', 'Ok', 'btn btn-primary');
    }
    elseif($result == -3)
    {        
        $transaction->sweet_alert('Update Failed!',  'Extension not allowed, please choose a JPEG or PNG file.', 'error', 'Ok', 'btn btn-primary');
    }
    elseif($result == -4)
    {        
        $transaction->sweet_alert('Update Failed!',  'File size must be less than 2 MB', 'error', 'Ok', 'btn btn-primary');
    }
    else
    {
        
        $transaction->sweet_alert('Success!',  'Details updated', 'success', 'Ok', 'btn btn-primary');
    }
}



if(isset($_POST['remove_thumbail']))
{
    $result = $my_account ->  remove_thumnail();
 
}
?>



 