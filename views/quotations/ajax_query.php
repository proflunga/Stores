 

<?php

require '../../includes/global/controller_auto_class_loader.php';


if (isset($_POST['search_products'])) {


    $jsonData =  $quotations_obj->fetch_products('_products_table');
}
