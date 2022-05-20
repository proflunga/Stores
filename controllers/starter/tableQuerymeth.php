
//render table
    <?php
        $jsonData=  $sales -> all_sale_transactions('sale_transactions');
    ?> 



<!-- in class -->
<?php

public function pos_sale_products($table_id, $trans_id)
{
    $table_data = '  
    employee_data += "<td  class=\"text-gray-800  fs-5 fw-bold\">"+value.id+"</td>";	
    employee_data += "<td  class=\"text-gray-600  fs-5 fw-bolder\">"+value.prod_name +"</td>";
    employee_data += "<td  class=\"text-gray-600  fs-5 fw-bolder\">"+value.prod_code +"</td>";  
    employee_data += "<td  class=\"text-gray-600  fs-5 fw-bold\">"+value.quantity +"</td>"; 
    employee_data += "<td  class=\"text-gray-600  fs-5 fw-bold\">"+value.price +"</td>";  
    
    employee_data += "<td  class=\"text-gray-800  fs-5 fw-bolder\">"+value.line_total +"</td>"; 
      
';


?>
