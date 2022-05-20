<?php  


 

if(isset($_POST['respond']))
 
 {

    //Main Details Variables
    $enquiry_id = $_POST['e_id'] ;

    $product_id = $_POST['product_id'] ;
    
$user_id = 1;
    
     
   
 
    // $results = $enquiries->quote_enquiry($user_id,$enquiry_id,$product_id);
    $results = $enquiries->quote_enquiry($product_id,  $enquiry_id);
    
                        
    


   }




?>