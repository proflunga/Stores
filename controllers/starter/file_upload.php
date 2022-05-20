<?php

if(isset($_FILES['product_image']))
{
    $errors= array();
    // $file_name = $_FILES['product_image']['name'];
    $file_size =$_FILES['product_image']['size'];
    $file_tmp =$_FILES['product_image']['tmp_name'];
    // $file_type=$_FILES['product_image']['type'];
    $explode_var = explode('.',$_FILES['product_image']['name']);
    $file_ext=strtolower(end($explode_var));
    
    $extensions= array("jpeg","jpg","png");
    
    if(in_array($file_ext,$extensions)=== false){
        //$errors[]="extension not allowed, please choose a JPEG or PNG file.";
        $return_result = -1;
    }            
    elseif($file_size > 2097152){
       //$errors[]='File size must be excately 2 MB';
       $return_result = -2;

    }
    else
    {
    }
    
    
}


?>




