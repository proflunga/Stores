

<?php
// defaults values
$from_date = date('Y-m-d').' 00:00:00';
$to_date = date('Y-m-d').' 23:59:00';

if(isset($_POST['search_sale']))
{
    $range = $_POST['date_range'];
    $range_array = explode(" - ", $range);
    $from_date = date('Y-m-d', strtotime($range_array[0])).' 00:00:00';;
    $to_date = date('Y-m-d', strtotime($range_array[1])).' 23:59:00';
                                  
}


?>