<?php
function class_AutoLoader($class_name)
{
    $path = "../../classes/";
    $extension = ".class.php";
    $full_path = $path . $class_name . $extension;

/*    if (!file_exists($full_path))
    {
        return false;
    }*/

    include_once $full_path;
}

//load all classes
spl_autoload_register('class_AutoLoader');

//path for phphmailer lib in objects
$path_prefix = '../../';
require 'includes/objects.php';

//require php spreadsheet library
require '../../libraries/php_spreadsheet/vendor/autoload.php';



?>
