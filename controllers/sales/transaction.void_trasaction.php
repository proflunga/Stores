

<?php

if(isset($_POST['void_transaction']))
{
    
    $result = $sales -> void_transaction($_POST);   

    if(!$result)
    {
        
        $transaction->sweet_alert('Error!',  'Action Failed ', 'error', 'Ok', 'btn btn-primary');

    }
    else
    {
        
        $transaction->sweet_alert('Success!',  'Transaction Voided', 'success', 'Ok', 'btn btn-primary');
    }
}


?>