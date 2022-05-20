<?php           

class enquiries 
{

    private $db_query_obj;
    private $user_id;
    private $date;
 
 

    public function __construct($db_query_obj, $user_id)
    {
        $this->db_query_obj = $db_query_obj;
        $this->user_id = $user_id;
        $this->date = date('Y-m-d H:i:s');
        
    } 

     // Quote Enquiry Method

    public function quote_enquiry($product_id,$enquiry_id) {


        $sql = "INSERT INTO `products_ordered`(`products_id`, `enquiry_id`) VALUES ('$product_id','$enquiry_id')";
        
          
        
        $result = $this->db_query_obj->sql_insert_qury($sql);
        if (!$result)
        {
            //error
            return 0;

        }
        else
        {
            //success
            return $result;

        }



    }
     // Search Enquiry Method
    public function search_enquiry($data)
    {
        # code...
        $table_column = $data[''];
        $column_value = $data[''];
        

        $sql = "SELECT id FROM `enquiries` WHERE ".$table_column."= '$column_value' ";


        $result = $this->db_query_obj->sql_qury($sql);
        if (!$result)
        {
            //error
            return 0;

        }
        else
        {
            //success
            return $result;

        }
    }
            public function insert_inquiry(){


                $sql="";


                $result = $this->db_query_obj->sql_qury($sql);


            }
            public function insert_inquiry_product(){

                $sql="";

                $result = $this->db_query_obj->sql_qury($sql);


                
            }
            public function insert_quotation(){

                $sql="";

                $result = $this->db_query_obj->sql_qury($sql);


                
            }
            public function insert_quotation_product(){

                $sql="";

                $result = $this->db_query_obj->sql_qury($sql);


            
        }




    
}










































?>