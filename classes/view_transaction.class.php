<?php


class view_transaction
{
    private $db_query_obj;
    private $employer_id;

    public function __construct($employer_id, $db_query_obj)
    {
        $this->db_query_obj = $db_query_obj;
        $this->employer_id = $employer_id;
    }

    //******************* Contribution Calender ********************** */\ 
public function tabs_contribution_years()
{
     
    $emp_id = $this->employer_id;

    $sql = "SELECT contributions_parent.contribution_month FROM contributions_parent
    WHERE contributions_parent.employer_id = $emp_id ORDER by contributions_parent.contribution_month DESC ";

     
    $result = $this -> db_query_obj->sql_qury("$sql");

    if (!$result)
    {
        //error
        
    }
    else
    {
        $count = 0;
        $contribution_year =0;

        
        //Inserted
        while ($row= mysqli_fetch_assoc($result))
        {  
            
            if ($count == 0)
            {
                $active = 'active';

            }
            else
            {
                $active = '';
            }
            

                  
            if ($contribution_year  == substr($row['contribution_month'],0,4))
            {
                
          

            }
            else
            {
                $contribution_year = substr($row['contribution_month'],0,4);
                echo '
                <li class="nav-item w-md-150px me-0 mb-3">
                <a class="nav-link  '.$active.' " data-bs-toggle="tab" href="#panel'.$contribution_year.'">'.$contribution_year.'</a>
                </li> 
                ';
            }
            
          

              $count +=1;      

        }  
     


    }




   
}

public function tabs_contribution_months()
{
    $emp_id = $this->employer_id;

    $sql2 = "SELECT contributions_parent.contribution_month FROM contributions_parent
    WHERE contributions_parent.employer_id = $emp_id ORDER by contributions_parent.contribution_month DESC   ;";

     
    $result2 = $this -> db_query_obj->sql_qury("$sql2");
   

    if (!$result2)
    {
        //error
        
    }
    else
    { 
         
        $count = 0;
        $contribution_year =0;
        //Inserted
        while ($row2= mysqli_fetch_assoc($result2))
        {  

                  
            if ($contribution_year  == substr($row2['contribution_month'],0,4))
            {
                
          

            }
            else
            {
                if ($count == 0)
                {
                    $active = 'active';

                }
                else
                {
                    $active = '';
                }
                
                
                $contribution_year = substr( $row2['contribution_month'],0,4);
                
                echo '
                   
                <div class="tab-pane fade show  '.$active.' " id="panel'.$contribution_year.'" role="tabpanel">
                
                '; 
             
               for ($m=1;$m<=12;$m++)
               {
                   if(  strlen($m)==1)
                   {
                    $m = '0'.$m;
                   }


                   $month = $this -> month_from_number($m);
                   
                $sql3 = "SELECT contributions_parent.id FROM contributions_parent WHERE contributions_parent.employer_id = $emp_id AND contributions_parent.contribution_month = '$contribution_year-$m';";
             

                $result3 = $this -> db_query_obj->sql_qury("$sql3");
                
                if ($result3)
                {

                 
                    echo '<div class="mb-10">
                    <div class="form-check form-check-custom form-check-solid">
                        <input  onclick="return false;" class="form-check-input" type="checkbox" checked id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">'.$month.'</label>
                    </div>
                </div>';
                    
                }
                else
                {
                    echo '<div class="mb-10">
                    <div class="form-check form-check-custom form-check-solid">
                        <input  onclick="return false;" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">'.$month.'</label>
                    </div>
                </div>';

                }


               }

               echo '
                 
               </div>

               ';
            }

            $contribution_year =  substr($row2['contribution_month'],0,4);
            $count +=1;
            

        }  
     


    }

   

}


    //***************************************************************** */
    //******************* billing Calender ********************** */\
    public function tabs_billing_years()
    {
         
        $emp_id = $this->employer_id;

        $sql = "SELECT DISTINCT (billing.billing_month) FROM billing WHERE 1 order by billing.billing_month desc;";

         
        $result = $this -> db_query_obj->sql_qury("$sql");

        if (!$result)
        {
            //error
            
        }
        else
        {
            $count = 0;
            $contribution_year =0;

            
            //Inserted
            while ($row= mysqli_fetch_assoc($result))
            {  
                
                if ($count == 0)
                {
                    $active = 'active';

                }
                else
                {
                    $active = '';
                }
                

                      
                if ($contribution_year  == substr($row['billing_month'],0,4))
                {
                    
              

                }
                else
                {
                    $contribution_year = substr($row['billing_month'],0,4);
                    echo '
                    <li class="nav-item w-md-150px me-0 mb-3">
                    <a class="nav-link  '.$active.' " data-bs-toggle="tab" href="#panel'.$contribution_year.'">'.$contribution_year.'</a>
                    </li> 
                    ';
                }
                
              

                  $count +=1;      

            }  
         
    

        }


 

       
    }

    public function tabs_billing_months()
    {
        $emp_id = $this->employer_id;

        $sql2 = "SELECT DISTINCT (billing.billing_month) FROM billing WHERE 1 order by billing.billing_month desc;";
 
         
        $result2 = $this -> db_query_obj->sql_qury("$sql2");
       
 
        if (!$result2)
        {
            //error 
            
        }
        else
        { 
             
            $count = 0;
            $contribution_year =0;
            //Inserted
            while ($row2= mysqli_fetch_assoc($result2))
            {  

                      
                if ($contribution_year  == substr($row2['billing_month'],0,4))
                {
                    
              

                }
                else
                {
                    if ($count == 0)
                    {
                        $active = 'active';

                    }
                    else
                    {
                        $active = '';
                    }
                    
                    
                    $contribution_year = substr( $row2['billing_month'],0,4);
                    
                    echo '
                       
                    <div class="tab-pane fade show  '.$active.' " id="panel'.$contribution_year.'" role="tabpanel">
                    
                    '; 
                 
                   for ($m=1;$m<=12;$m++)
                   {
                       if(  strlen($m)==1)
                       {
                        $m = '0'.$m;
                       }


                       $month = $this -> month_from_number($m);
                       $sql3 ="SELECT DISTINCT (billing.billing_month) FROM billing WHERE billing.billing_month = '$contribution_year-$m' order by billing.id desc ;";
                       
 
                 

                    $result3 = $this -> db_query_obj->sql_qury("$sql3");
                    
                    if ($result3)
                    {

                     
                        echo '<div class="mb-10">
                        <div class="form-check form-check-custom form-check-solid">
                            <input  onclick="return false;" class="form-check-input" type="checkbox" checked id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">'.$month.'</label>
                        </div>
                    </div>';
                        
                    }
                    else
                    {
                        echo '<div class="mb-10">
                        <div class="form-check form-check-custom form-check-solid">
                            <input  onclick="return false;" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">'.$month.'</label>
                        </div>
                    </div>';

                    }


                   }

                   echo '
                     
                   </div>

                   ';
                }

                $contribution_year =  substr($row2['billing_month'],0,4);
                $count +=1;
                

            }  
         
    

        }

       

    }

    //***************************************************************** */
    public function month_from_number($number)
    {
        if ($number == 1)
        {
            return 'Jan';

        }elseif ($number == 2)
        {
            return 'Feb';

        }elseif ($number == 3)
        {
            return 'Mar';

        }elseif ($number == 4)
        {
            return 'Apr';

        }elseif ($number == 5)
        {
            return 'May';

        }elseif ($number == 6)
        {
            return 'Jun';

        }elseif ($number == 7)
        {
            return 'Jul';

        }elseif ($number == 8)
        {
            return 'Aug';

        }elseif ($number == 9)
        {
            return 'Sep';

        }elseif ($number == 10)
        {
            return 'Oct';

        }elseif ($number == 11)
        {
            return 'Nov';

        }elseif ($number == 12)
        {
            return 'Dec';

        }
        else{
            return 0;
        }
        
    }

    public function month_id_to_double_num($number)
    {
        if ($number == 1)
        {
            return '01';

        }elseif ($number == 2)
        {
            return '02';

        }elseif ($number == 3)
        {
            return '03';

        }elseif ($number == 4)
        {
            return '04';

        }elseif ($number == 5)
        {
            return '05';

        }elseif ($number == 6)
        {
            return '06';

        }elseif ($number == 7)
        {
            return '07';

        }elseif ($number == 8)
        {
            return '08';

        }elseif ($number == 9)
        {
            return '09';

        }elseif ($number == 10)
        {
            return '10';

        }elseif ($number == 11)
        {
            return '11';

        }elseif ($number == 12)
        {
            return '12';

        }
        else{
            return 0;
        }
        
    }

}
