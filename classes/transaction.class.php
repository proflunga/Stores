<?php


class transaction 
{

    private $db_query_obj;
    private $user_id;
    private $date;
    private $fund_id;
    private $access_level;
    private $mail;
 

    public function __construct($user_id, $db_query_obj,$fund_id, $access_level, $mail)
    {
        $this->db_query_obj = $db_query_obj;
        $this->user_id = $user_id;
        $this->date = date('Y-m-d H:i:s');
        $this->fund_id = $fund_id;
        $this->access_level = $access_level;
        $this ->mail = $mail;
    } 
// TANAKA*****************************************************


    

public function add_bank( $bank_name,$code)
{
    # code...
    $fund_id = $_SESSION['fund_id'];
    $sql = "INSERT INTO `banks`( `code`, `name`, `fund_id`)  VALUES ('$bank_name','$code','$fund_id')";
   

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

public function bank_branches($code, $branch_name,$bank_id)
{
    # code...
    $fund_id = $_SESSION['fund_id'];
  
    $sql = "INSERT INTO `bank_branches`( `code`, `branch_name`, `banks_id`, `fund_id`) VALUES ('$code','$branch_name','$bank_id','$fund_id')";
  
     
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

    
public function cities($name,$code,$id)
{
    # code...
    $fund_id = $_SESSION['fund_id'];

    $sql = "INSERT INTO `cities`( `code`, `name`, `countries_id`, `fund_id`) VALUES ('$code','$name','$id','$fund_id')";
  
     
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

    
 
   
public function client_types($desc,$code)
{
    # code...
    $fund_id = $_SESSION['fund_id'];
  
    $sql = "INSERT INTO `client_types`( `code`, `Description`, `fund_id`)   VALUES ('$code','$desc','$fund_id')";
  
     
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
   
public function company_types($desc,$code)
{
    # code...
    $fund_id = $_SESSION['fund_id'];
  
    $sql = "INSERT INTO `company_type`(`code`, `description`, `fund_id`)   VALUES ('$code','$desc','$fund_id')";
  
     
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
public function countries($name,$currency,$c_code,$t_code)
{
    # code...
    $fund_id = $_SESSION['fund_id'];
  
  
    $sql = "INSERT INTO `countries`( `name`, `currency_name`, `currency_code`, `telephone_code`, `fund_id`)  VALUES ('$name','$currency','$c_code','$t_code','$fund_id')";
  
     
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

public function director_types($desc,$code)
{
    # code...
    $fund_id = $_SESSION['fund_id'];
  
    $sql = "INSERT INTO `director_types`( `code`, `description`, `fund_id`) VALUES ('$code','$desc','$fund_id')";
     
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


public function dependent_type($desc,$code)
{
    # code...

    $fund_id = $_SESSION['fund_id'];
    $sql = "INSERT INTO `dependant_types`(`code`, `description`, `fund_id`)  VALUES ('$code','$desc','$fund_id')";
     
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


public function financial_year($code,$desc,$first,$last)
{
# code...
$fund_id = $_SESSION['fund_id'];

$sql = "INSERT INTO `financial_year`( `fund_id`,`code`,  `description`, `first_month`, `last_month`) VALUES ('$fund_id','$code','$desc','$first','$last')";
 
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


public function gender($desc,$code)
{
    # code...
    $fund_id = $_SESSION['fund_id'];
  
    $sql = "INSERT INTO `gender`(`code`, `description`, `fund_id`)   VALUES ('$code','$desc','$fund_id')";
  
     
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

public function industry_code($desc,$code)
{
    # code...
    $fund_id = $_SESSION['fund_id'];
  
    $sql = "INSERT INTO `industry_code`( `code`, `description`, `fund_id`)   VALUES ('$code','$desc','$fund_id')";
  
     
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


public function marital_status($desc,$code)
{
    # code...

    $fund_id = $_SESSION['fund_id'];
    $sql = "INSERT INTO `marital_status`( `code`, `description`, `fund_id`) VALUES ('$code','$desc','$fund_id')";
  
     
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



public function scheme_type($code,$desc)
{
    # code...
    $fund_id = $_SESSION['fund_id'];
  
    $sql = "INSERT INTO `scheme_types`( `code`, `description`, `fund_id`) VALUES ('$code','$desc','$fund_id')";

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



public function titles($desc,$code)
{
    # code...
    $fund_id = $_SESSION['fund_id'];
  
    $sql = "INSERT INTO `titles`( `code`, `description`, `fund_id`) VALUES ('$code','$desc','$fund_id')";
   
     
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

public function bank_account_type($savings,$current)
{
    # code...
    $fund_id = $_SESSION['fund_id'];
  
    $sql = "INSERT INTO `bank_account_types`(`savings`, `current`, `fund_id`) VALUES ('$savings','$current','$fund_id');";

     
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

public function tax_table($type,$frequency,$date,$lower_band,$upper_band,$cumulative)
{
    # code...

    $fund_id = $_SESSION['fund_id'];
    $sql = "INSERT INTO `tax_tables`( `tax_type`, `frequency`, `effective_date`, `lower_band`, `upper_band`, `cumulative`, `fund_id`)VALUES ('$type','$frequency','$date','$lower_band','$upper_band','$cumulative','$fund_id')";

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

public function fund_branches($desc,$code)
{
    # code...
    $fund_id = $_SESSION['fund_id'];
  
    $sql = "INSERT INTO `fund_branches`( `fund_id`, `code`, `description`) VALUES ('$fund_id','$code','$desc')";

     
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
public function user_branches($desc,$code)
{
    # code...
    $fund_id = $_SESSION['fund_id'];
  
    $sql = "INSERT INTO `user_branches`( `fund_id`, `code`, `description`)  VALUES ('$desc','$code','$fund_id')";

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
public function user_groups($desc,$code)
{
    # code...
    $fund_id = $_SESSION['fund_id'];
  
    $sql = "INSERT INTO `user_group`( `fund_id`, `code`, `description`)VALUES ('$fund_id','$desc','$code')";
    
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





public function month($month_number,$month_name)
{
    # code...
    $fund_id = $_SESSION['fund_id'];
    $fund_id = $_SESSION['fund_id'];
    $sql = "INSERT INTO `months`( `fund_id`,`month_number`,  `month_name`) VALUES ('$fund_id','$month_number','$month_name')";

     
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

public function relationship_types($code)
{
    # code...

    $fund_id = $_SESSION['fund_id'];
  
    $sql = "INSERT INTO `relationship_types`( `fund_id`,`code`) VALUES('$fund_id','$code')";

     
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

public function communication_types($code)
{
    # code...

    $fund_id = $_SESSION['fund_id'];
  
    $sql = "INSERT INTO `communication_types`( `fund_id`,`code`) VALUES('$fund_id','$code')";

     
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

public function occupations($code)
{
    # code...
    $fund_id = $_SESSION['fund_id'];
  
    $sql = "INSERT INTO `occupations`( `code`, `fund_id`) VALUES('$code',$fund_id)";

     
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

public function regions($code)
{
    # code...

    $fund_id = $_SESSION['fund_id'];
  
    $sql = "INSERT INTO `regions`( `fund_id`,`code`) VALUES('$fund_id','$code')";

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

public function business_classes($code)
{
    # code...

    $fund_id = $_SESSION['fund_id'];
  
    $sql = "INSERT INTO `business_class`(`fund_id`,`code`) VALUES ('$fund_id','$code')";

     
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


public function regional_offices($code)
{
    # code...

    $fund_id = $_SESSION['fund_id'];
  
    $sql = "INSERT INTO `regional_office`( `fund_id`,`code`) VALUES('$fund_id','$code')";

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


public function service_providers($code)
{
    # code...

    $fund_id = $_SESSION['fund_id'];
  
    $sql = "INSERT INTO `service_provider`( `fund_id`, `code`)  VALUES ('$fund_id','$code')";


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

    

//TANAKA***************************************************
    //create fund

    public function create_fund( $scheme_name, $reg_no, $scheme_description, $tax_no, $scheme_type, $reassuarance_no, $commencement_date, $presevation_fund, $scheme_default_currency, $phone_number, $email_address, $address_line1, $address_line2, $city, $country, $bank_name, $bank_branch, $bank_acc_name, $bank_acc_number
    )
    {

        $sql = "INSERT INTO `funds`(`id`,  `scheme_name`, `reg_no`, `scheme_description`, `tax_no`, `scheme_type`, `reassuarance_no`, `commencement_date`, `presevation_fund`, `scheme_default_currency`, `phone_number`, `email_address`, `address_line1`, `address_line2`, `city`, `country`, `bank_name`, `bank_branch`, `bank_acc_name`, `bank_acc_number`) VALUES ( null,'$scheme_name', '$reg_no', '$scheme_description', '$tax_no', '$scheme_type', '$reassuarance_no', '$commencement_date', '$presevation_fund', $scheme_default_currency, 
        
        $phone_number, '$email_address', '$address_line1', '$address_line2', '$city', '$country', $bank_name, $bank_branch, '$bank_acc_name', '$bank_acc_number'
        
        )";
 

$result = $this -> db_query_obj->sql_insert_qury("$sql");

if (!$result)
{
    //error
    
}
else
{
    //Inserted

}


    }

    public function check_if_date_in_range_exists($lower_date ,$upper_date  )
    {
        
        //start range date calculator
        $start    = new DateTime("$lower_date");
        $start-> modify('first day of this month');
        $end      = new DateTime("$upper_date");
        $end-> modify('first day of next month');
        $interval = DateInterval::createFromDateString('1 month');
        $period   = new DatePeriod($start, $interval, $end);
        $flag = 0;

        //diplasy all daates z
        foreach ($period as $dt) 
        {    
            $dt->format("Y-m")  ; 
            $cont_year =   $dt->format('Y');  
            $cont_month =   $dt->format('m');  
            $month_year = $cont_year .'-'. $cont_month;
            

            $sql_2 = "SELECT fund_contribution_calender.lower_date, fund_contribution_calender.upper_date FROM fund_contribution_calender WHERE fund_contribution_calender.fund_id = 16 ;";
            $result_2 = $this -> db_query_obj->sql_qury("$sql_2");

            if (!$result_2)
            {
                //error
                
            }
            else
            {
                //Inserted
                while ($row_2= mysqli_fetch_assoc($result_2))
                {
                    $db_date_lower = $row_2['lower_date'];
                    $db_date_upper = $row_2['upper_date'];

                    //start range date calculator
                    $start_2    = new DateTime("$db_date_lower");
                    $start_2-> modify('first day of this month');
                    $end_2      = new DateTime("$db_date_upper");
                    $end_2-> modify('first day of next month');
                    $interval_2 = DateInterval::createFromDateString('1 month');
                    $period_2   = new DatePeriod($start_2, $interval_2, $end_2);

                    foreach ($period_2 as $dt_2) 
                    {    
                        $dt_2->format("Y-m")  ; 
                        $cont_year_2 =   $dt_2->format('Y');  
                        $cont_month_2 =   $dt_2->format('m');  
                        $db_date = $cont_year_2 .'-'. $cont_month_2;
                        
                        if($db_date == $month_year)
                        {
                            $flag = 1;
                            goto _exit_function;
            
                        }
                    

                    }


                     
                    
                }  

            }


           

           
            
                
        }

        _exit_function:
        return $flag;


    }
    //search types funtions_______________________________________________________________________________________start
    //****************************************************************************************************************** */
    public function search_type_codes_from_codes($table_name, $client_type_code)
    {
        $sql = "SELECT $table_name.id FROM $table_name WHERE $table_name.code = '$client_type_code'";
        $result = $this
            ->db_query_obj
            ->sql_qury("$sql");

        if (!$result)
        {
            //error
            $client_type = 0;

        }
        else
        {
            $row = mysqli_fetch_assoc($result);
            //Inserted
            $client_type = $row['id'];

        }

        return $client_type;
    }

    //****************************************************************************************************************** */
    //search types funtions_______________________________________________________________________________________end
    //search types funtions_______________________________________________________________________________________start
    //****************************************************************************************************************** */
    public function search_type_codes_from_codes_without_id_descr($table_name, $client_type_code, $column)
    {
        $sql = "SELECT $table_name.id FROM $table_name WHERE $table_name.$column = '$client_type_code'";
        $result = $this
            ->db_query_obj
            ->sql_qury("$sql");

        if (!$result)
        {
            //error
            $client_type = 0;

        }
        else
        {
            $row = mysqli_fetch_assoc($result);
            //Inserted
            $client_type = $row['id'];

        }

        return $client_type;
    }




    public function approve_new_portal_user($user_id) 
    {
        
        $sql = "UPDATE   `users_portal` set  `status_approval`=1,`status_active`=1,`new_account_status`=0 WHERE users_portal.id = $user_id";
        $result = $this -> db_query_obj->sql_update_qury("$sql");
        

    }
    

    public function deactivate_portal_user($user_id) 
    {
        $sql = "UPDATE   `users_portal` set   `status_active`=0  WHERE users_portal.id = $user_id";
        $result = $this -> db_query_obj->sql_update_qury("$sql");

    }

    public function activate_portal_user($user_id) 
    {
        $sql = "UPDATE   `users_portal` set   `status_active`=1  WHERE users_portal.id = $user_id";
        $result = $this -> db_query_obj->sql_update_qury("$sql");

    }
    //****************************************************************************************************************** */
    //search types funtions_______________________________________________________________________________________end
    

    //existance finder_______________________________________________________________________________________start
    //****************************************************************************************************************** */



    public function record_id_finder( $table_name,$column1,$value)
    {
        $sql = "SELECT $table_name.id FROM $table_name WHERE $table_name.$column1 = '$value'";


        $result = $this
            ->db_query_obj
            ->sql_qury("$sql");

        if (!$result)
        {
            //error
            return 0;

        }
        else
        {
            $row = mysqli_fetch_assoc($result);
             
            return $row["id"];
            

            

        }

    }

    public function name_from_id_finder( $table_name,$column1,$value)
    {
        $sql = "SELECT $table_name.$column1 FROM $table_name WHERE $table_name.id = '$value'";

        
        $result = $this
            ->db_query_obj
            ->sql_qury("$sql");

        if (!$result)
        {
            //error
            return 0;

        }
        else
        {
            $row = mysqli_fetch_assoc($result);
            return $row["$column1"];

        }

    }

    public function existance_finder_from_integer($table_name, $column1, $column2, $value)
    {
        $sql = "SELECT $table_name.$column1 FROM $table_name WHERE $table_name.$column2 = $value ORDER by $table_name.$column1  DESC LIMIT 1"; 
        
 
        $result = $this
            ->db_query_obj
            ->sql_qury("$sql");

        if (!$result)
        {
            //error
            return 0;

        }
        else
        {
            $row = mysqli_fetch_assoc($result);
            return $row["$column1"];

        }

    }

    public function existance_finder($table_name, $column1, $column2, $value)
    {
        $sql = "SELECT $table_name.$column1 FROM $table_name WHERE $table_name.$column2 = '$value' ORDER by $table_name.$column1  DESC"; 
        

        $result = $this
            ->db_query_obj
            ->sql_qury("$sql");

        if (!$result)
        {
            //error
            return 0;

        }
        else
        {
            $row = mysqli_fetch_assoc($result);
            return $row["$column1"];

        }

    }

    //****************************************************************************************************************** */
    //existance finder_______________________________________________________________________________________end
    

    //New Employer Registration_____________________________________________________________________________________end
    public function generate_ssr_algorithm()
    {

        $flag = 0;
        $ssr = 0;

        while ($flag == 0)
        {
            $ssr = rand(100000, 999999);
            $sql = "SELECT COUNT(*) as count FROM employers WHERE ssr =  $ssr;";

            $result = $this
                ->db_query_obj
                ->sql_qury("$sql");
            $row = mysqli_fetch_assoc($result);

            if ($row['count'] == 0)
            {
                //error
                $flag = 1;

            }

        }

        return $ssr;

    }

    //function to upload document and rename files
    public function upload_doc($filename, $file_name_header, $uploads_dir_parameter)
    {
        $ext = pathinfo($_FILES["$filename"]['name'], PATHINFO_EXTENSION);
        $file_name = "$file_name_header-" . rand(100000000000, 999999999999) . "." . $ext;
        $tname = $_FILES["$filename"]["tmp_name"];
        move_uploaded_file($tname, $uploads_dir_parameter . '/' . $file_name);

        

        return $file_name;
    }

    public function register_employer_admin($ssr, $business_registration_number, $trade_name, $legal_name, $industry_code, $company_type, $business_activity, $registration_date, $start_date, $address_line1, $address_line2, $address_city, $address_country, $mobile_number, $telephone_number, $email, $bank_name, $branch_name, $account_number, $sd_articles_of_association, $sd_cert_of_inc, $sd_cr5, $sd_cr6, $sd_mem_of_assoc )
    {



        //needed for insert query
        $fund_id = $this->fund_id;
        $user_id = $this->user_id;
        $registered_by = $user_id;
        $current_date = date('Y-m-d H:i:s');

        $employer_id = $this->existance_finder('employers', 'id', 'business_registration_number', $business_registration_number);
         
        if($employer_id != 0)
        {
            
            goto registr_into_fund;
        }
        
        ///***********************register new employer */
        $sql = "INSERT INTO
   
           `employers`
           
           
           (`id`,   `ssr`,  `business_registration_number`,   `trade_name`, `legal_name`, `industry_code`, `company_type`, `business_activity`, `registration_date`, `start_date`, `address_line1`, `address_line2`, `address_city`, `address_country`, `mobile_number`, `telephone_number`, `email`, `bank_name`, `branch_name`, `account_number`, `sd_articles_of_association`, `sd_cert_of_inc`, `sd_cr5`, `sd_cr6`, `sd_mem_of_assoc`,  `registered_by`,   `disableed_by`)
           
           VALUES 
           
           (Null,  '$ssr',  '$business_registration_number','$trade_name', '$legal_name', $industry_code, $company_type, '$business_activity', '$registration_date', '$start_date', '$address_line1', '$address_line2', $address_city, $address_country, '$mobile_number', '$telephone_number', '$email', $bank_name, '$branch_name', '$account_number', '$sd_articles_of_association', '$sd_cert_of_inc', '$sd_cr5', '$sd_cr6', '$sd_mem_of_assoc',  $registered_by,   null)";
  

        $employer_id = $this ->db_query_obj ->sql_insert_qury("$sql");

        if (!$employer_id)
        {
            //error
            return 0;

        }
        else
        {
            registr_into_fund:
            //success
        $sql2 = "INSERT INTO `fund_employers`(`id`, `employer_id`, `fund_id`, `date_joined` ) VALUES (null,$employer_id,$fund_id,'$current_date ')";
        $this ->db_query_obj ->sql_insert_qury("$sql2");

       
        

        }
        
        return $employer_id;

    }

    //New Employer Registration_______________________________________________________________________________________end


    public function geerate_notificatons($title, $message )
    {
        $date = $this ->date;
        $user_id = $this ->  user_id;
        
        $sql = "INSERT INTO `notifications`(`id`, `title`, `message`, `time`, `status`, `user_id`, `type`) VALUES ( null,'$title','$message','$date',1, $user_id, 'type')";
        $result = $this -> db_query_obj->sql_insert_qury("$sql");

       
        
    }
    

    //New Employer Employee Registration_____________________________________________________________________________________end
    public function generate_ssn_algorithm()
    {

        $flag = 0;
        $ssr = 0;

        while ($flag == 0)
        {
            $ssn = (rand(100, 999) . '-' . rand(100, 999));
            $sql = "SELECT COUNT(*) as count FROM individuals WHERE ssn =  $ssn;";

            $result = $this
                ->db_query_obj
                ->sql_qury("$sql");
            $row = mysqli_fetch_assoc($result);

            if ($row['count'] == 0)
            {
                //error
                $flag = 1;

            }

        }

        return $ssn;

    }
    

             
    public function  log_claim($member_id , $claimant_id,$event_date,$report_date)
    {
        $date = $this -> date;
        $user_id = $this -> user_id;
        $fund_id = $this -> fund_id;

        

    $sql = "INSERT INTO `claim_logged_claims`(`id`, `member_id`, `claimant_id`, `event_date`, `report_date`, `logged_by`, `date_logged`, `status`,`fund_id`) VALUES (null,$member_id ,$claimant_id,'$event_date','$report_date',$user_id,'$date',1,$fund_id)";

    

        $result = $this -> db_query_obj->sql_insert_qury("$sql");

        if (!$result)
        {
            //error
            return 0;
            
        }
        else
        {
            //Inserted
            return $result;

        }



    }


    public function register_individual($ssn, $national_id, $title, $first_name, $middle_name, $last_name, $marital_status, $gender, $nationality, $citizenship, $birth_date, $address_line1, $address_line2, $city, $country, $mobile_number, $telephone_number, $email_address, $drivers_licence, $passport_number, $status_registration, $status_active_account)
    {

        //needed for insert query
        $user_id = $this->user_id;
        $created_by = $user_id;
        $created_on = date('Y-m-d H:i:s');

        $sql = "INSERT INTO `individuals`(`id`, `ssn`, `national_id`, `title`, `first_name`, `middle_name`, `last_name`, `marital_status`, `gender`, `nationality`, `citizenship`, `birth_date`, `address_line1`, `address_line2`, `city`, `country`, `mobile_number`, `telephone_number`, `email_address`, `drivers_licence`, `passport_number`, `created_on`, `created_by`, `status_registration`, `status_active_account`) VALUES ( null, '$ssn', '$national_id', $title, '$first_name', '$middle_name', '$last_name', $marital_status, $gender, $nationality, $citizenship, '$birth_date', '$address_line1', '$address_line2', $city, $country, '$mobile_number', '$telephone_number', '$email_address', '$drivers_licence', '$passport_number', '$created_on', $created_by,0,0)";

        

        $last_insert_id = $this
            ->db_query_obj
            ->sql_insert_qury("$sql");

        if (!$last_insert_id)
        {
            //error
            return 0;

        }
        else
        {
            //success
            return $last_insert_id;

        }

    }

    public function allocate_director_to_company($director_type_id, $individuals_id, $director_at)
    {
        $date_joined = date('Y-m-d H:i:s');
        $fund_id = $this -> fund_id;

        $sql = "INSERT INTO `directors`(`id`,`fund_id`, `director_type_id`, `individual_id`, `director_at`, `date_joined`) VALUES (null,$fund_id,$director_type_id,$individuals_id,$director_at, '$date_joined')";

         

        $result = $this
            ->db_query_obj
            ->sql_insert_qury("$sql");

        if (!$result)
        {
            //error
            
        }
        else
        {
            //Inserted
            
        }

    }

    public function register_director($directors_repeater, $director_at)
    {
        //check if director is exisiting
        //_____________________________________________________________________________________________________________________________
        $loop_count = 0;

        $repeater_size = count($directors_repeater) - 1;

        for ($x = 0;$x <= $repeater_size;$x++)
        {

            $director_ssn = $directors_repeater[$loop_count]['ssn'];
            $director_ssn = $directors_repeater[$loop_count]['national_id'];

            $individuals_id = $this->existance_finder('individuals', 'id', 'ssn', $director_ssn);
            $individuals_id = $this->existance_finder('individuals', 'id', 'national_id', $director_ssn);
            
           


            $director_type_id = $directors_repeater[$loop_count]['director_type'];

            if ($individuals_id == 0)
            {

                $ssn = $this->generate_ssn_algorithm();

                //echo director record not existing
                $individuals_id = $this->register_individual($ssn, $directors_repeater[$loop_count]['national_id'], $directors_repeater[$loop_count]['title'], $directors_repeater[$loop_count]['first_name'], $directors_repeater[$loop_count]['middle_name'], $directors_repeater[$loop_count]['last_name'], $directors_repeater[$loop_count]['marital_status'], $directors_repeater[$loop_count]['gender'], $directors_repeater[$loop_count]['nationality'], $directors_repeater[$loop_count]['citizenship'], $directors_repeater[$loop_count]['birth_date'], $directors_repeater[$loop_count]['address_line1'], $directors_repeater[$loop_count]['address_line2'], $directors_repeater[$loop_count]['city'], $directors_repeater[$loop_count]['country'], $directors_repeater[$loop_count]['director_mobile_number'], $directors_repeater[$loop_count]['director_telephone_number'], $directors_repeater[$loop_count]['email_address'], $directors_repeater[$loop_count]['drivers_licence'], $directors_repeater[$loop_count]['passport_number'], 0, 0);

                $this->allocate_director_to_company($director_type_id, $individuals_id, $director_at);
            }
            else
            {

                //echo director record   existing
                $this->allocate_director_to_company($director_type_id, $individuals_id, $director_at);

            }


            $loop_count += 1;

        }
        //______________________________________________________________________________________________________________________________________
        
    }

    public function age_calculator($dateOfBirth)
    { 

        $date = $this -> date;
        $date = substr($date,0,10);
        $dateOfBirth;

        $diff = date_diff(date_create($dateOfBirth), date_create($date));

        return $diff->format('%y');

    }

    public function date_difference_calculator($lowerDate, $upperDate)
    {
        

        $diff = date_diff(date_create($lowerDate), date_create($upperDate));
         

        return $diff->format('%d');

    }

    
   
    public function validate_register_director($directors_repeater )
    {
        
        $error_log= 0;
        //check if director is exisiting
        //_____________________________________________________________________________________________________________________________
        $loop_count = 0;
 

        $repeater_size = count($directors_repeater) - 1;

        for ($x = 0;$x <= $repeater_size;$x++)
        {

            $director_ssn = $directors_repeater[$loop_count]['ssn'];

            

            $individuals_id = $this->existance_finder('individuals', 'id', 'ssn', $director_ssn);
            
            if (isset($directors_repeater[$loop_count]['director_type']))
            {
                $director_type_id = $directors_repeater[$loop_count]['director_type'];
 
            }
            else
            {
                $director_type_id = 0;
            }

            
            if ($individuals_id == 0)
            {
                



                 

                $age = $directors_repeater[$loop_count]['birth_date'];
                $age = $this -> age_calculator($age);

              

                 
                //echo director record not existing 
 

                //ERROR LOG validations********************************************************
                if (strlen($directors_repeater[$loop_count]['national_id'])!=11)
                {
                    $error_log .= '<br/>&'.'National ID not valid. It must be in the format 00000000X00';
                   

                } 
                if ( strlen($directors_repeater[$loop_count]['first_name'])<3)
                {
                    $error_log .= '<br/>&'.'First Name Should contain more than 2 Charecters';
                  

                }   
                if ( strlen($directors_repeater[$loop_count]['last_name'])<3)
                {
                    $error_log .= '<br/>&'.'Last Name Should contain more than 2 Charecters';
                  

                }  
                if ( $age < 18)
                {
                    if(isset($directors_repeater[$loop_count]['title']))
                    {
                        $title = $this ->  name_from_id_finder('titles','description',$directors_repeater[$loop_count]['title']);
                        $error_log .= '<br/>&'.$title.' '.$directors_repeater[$loop_count]['last_name'].' with age '.$age.' does not meet minimum age requirement of 18 years';
                      

                    }
                    else
                    {
                        $error_log .= '<br/>& Director does not meet minimum age requirement of 18 years';
                      

                    }
                  

                } 
                if ( strlen($directors_repeater[$loop_count]['address_line1'])<3)
                {
                    $error_log .= '<br/>&'.'Address Line 1 Should contain more than 2 Charecters';
                  

                }
                if ( strlen($directors_repeater[$loop_count]['address_line2'])<3)
                {
                    $error_log .= '<br/>&'.'Address Line 2 Should contain more than 2 Charecters';
                  

                }
                 
                if ( strlen($directors_repeater[$loop_count]['director_mobile_number'])<13 or strlen($directors_repeater[$loop_count]['director_mobile_number'])>15 )
                {
                    $error_log .= '<br/>&'.'Invalid Phone Number';
                  

                } 
                 
                if ( strlen($directors_repeater[$loop_count]['director_telephone_number'])< 13 or  strlen($directors_repeater[$loop_count]['director_telephone_number'])> 15)
                {
                    $error_log .= '<br/>&'.'Invalid Telephone Number';
                  

                } 

                
                //******************************************************************************** */

         
 
            }
            else
            {

                //echo director record   existing 

            }

            $loop_count += 1;



        }
        //______________________________________________________________________________________________________________________________________
        endOfFunction:
        return array ($error_log, $loop_count);
    }

    //New individual Registration_______________________________________________________________________________________end
    //Bulk Upload ____________________________________________________________________________________________________________________
    //************************************************************************************************************************** */
    
    public function employee_upload($employee_sheet, $employer_id,   $contribution_month, $date_submitted)
    { 
        $fund_id = $this -> fund_id;
        
        //other variables
        $count = 0;
        $current_date = date('Y-m-d H:i:s');

        //screen for allowed file extensions
        $allowed_ext = ['xls', 'csv', 'xlsx'];

        //get excel file uploaded
        // $file_ = $employee_sheet['name'];

         
        // $file_ext = pathinfo($file_, PATHINFO_EXTENSION);

                
            $contribution_parent_id = $this -> upload_contributions_parent($employer_id,$contribution_month , $date_submitted  );

            foreach ($employee_sheet as $row)
            {
                if ($count >= 1)
                {

                    //read cells_____________________________________
                    //Get personal detail
                    $NationalIdNumber = $row['0'];
                    $ssn = $row['1'];
                    $Title = $row['2'];
                    $Firstname = $row['3'];
                    $MIddleName = $row['4'];
                    $Surname = $row['5'];
                    $marital_status = $row['6'];
                    $gender = $row['7'];
                    $Nationality = $row['8'];
                    $Citizenship = $row['9'];
                    $BirthDate = $row['10'];
                    $addressline1 = $row['11'];
                    $addressline2 = $row['12'];
                    $addresscity = $row['13'];
                    $addressCountry = $row['14'];
                    $MobileNumber = $row['15'];
                    $TelephoneNumber = $row['16'];
                    $EmailAddress = $row['17'];
                    $DriverslicenceNumber = $row['18'];
                    $PassportNumber = $row['19'];

                    //Get employment details
                    $NatureofEmployment = $row['20'];
                    $CurrentWorksNumber = $row['21'];
                    $EmployeeType = $row['22'];
                    $DateOfEmployment = $row['23'];
                    $Station = $row['24'];
                    $Salary = $row['25'];
                    $Ministry = $row['26'];
                    $Occupation = $row['27'];

                    //_______________________________________________
                    //format input _____________________________________
                    

                    $Title = $this->search_type_codes_from_codes('titles', $Title);
                    $marital_status = $this->search_type_codes_from_codes('marital_status', $marital_status);
                    $gender = $this->search_type_codes_from_codes('gender', $gender);

                    $Nationality = $this->search_type_codes_from_codes_without_id_descr('countries', $Nationality, 'name');
                    $Citizenship = $this->search_type_codes_from_codes_without_id_descr('countries', $Citizenship, 'name');
                    $addresscity = $this->search_type_codes_from_codes_without_id_descr('countries', $addresscity, 'name');
                    $addressCountry = $this->search_type_codes_from_codes_without_id_descr('countries', $addressCountry, 'name');

                   
                    //___________________________________________________________
                    //check if a person already exists
                    if ($this->existance_finder('individuals', 'id', 'snn', $ssn))
                    {

                        $individuals_id = $this->existance_finder('individuals', 'id', 'snn', $ssn);

                        goto existing_member;
                    }
                   

                    

                    if ($this->existance_finder('individuals', 'id', 'national_id', $NationalIdNumber))
                    {

                        $individuals_id = $this->existance_finder('individuals', 'id', 'national_id', $NationalIdNumber);
                        goto existing_member;
                    }

                    
                    // if ($this->existance_finder('individuals', 'id', 'drivers_licence', $DriverslicenceNumber))
                    // {

                    //     $individuals_id = $this->existance_finder('individuals', 'id', 'drivers_licence', $DriverslicenceNumber);
                    //     goto existing_member;     
                    // }


                    // if ($this->existance_finder('individuals', 'id', 'passport_number', $PassportNumber))
                    // {

                    //     $individuals_id = $this->existance_finder('individuals', 'id', 'passport_number', $PassportNumber);
                    //     goto existing_member;
                    // }
                  
                  
                    //_________________________________________________________________________
                    

                    //___________________________Executed only for new employees only________________________________________________ 

                    $ssn = $this->generate_ssn_algorithm();

                    


                    $individuals_id = $this->register_individual($ssn,  $NationalIdNumber , $Title , $Firstname , $MIddleName , $Surname , $marital_status , $gender , $Nationality , $Citizenship , $BirthDate , $addressline1 , $addressline2 , $addresscity , $addressCountry , $MobileNumber , $TelephoneNumber , $EmailAddress , $DriverslicenceNumber , $PassportNumber ,0,0);

                   

                   
 
                    //__________________________________________________________End Execution__________________________________________________________
                    

                         existing_member:

                         //check if memeber exist first NB %%%%%%%%%%%%%%%%%%
                         $this ->  register_member($individuals_id);
                         //%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

                         
                         $employment_details = array('employer_id'=>$employer_id, 'NatureofEmployment'=>$NatureofEmployment, 'EmployeeType'=>$EmployeeType, 'Station'=>$Station, 'Salary'=>$Salary, 'Ministry'=>$Ministry, 'Occupation'=>$Occupation, 'DateOfEmployment'=>$DateOfEmployment);

                         $this -> upload_employment_details($this->fund_id,$individuals_id ,  $employment_details);


                         

                         $tax_component=  $this -> fund_tax_coponent($fund_id); 
                        //get the employment ID of the query record
                        $employment_id = $this -> existance_finder_from_integer('employment','id','member_id',$individuals_id);
                        //get latest salary from cureent emploment_id   
                        $current_Salary = $this -> existance_finder_from_integer('employment','salary','id',$employment_id);   
                           
                        $this -> upload_contributions($contribution_parent_id, $individuals_id,     $current_Salary, $employment_id,   $tax_component,$date_submitted);
                    
 

                        
 

                }

                $count += 1;

            }

        

    }

    public function if_isset_validation($variable)
    {
        if($variable)
        {
            return $variable;

        }
        else
        {
            return '';

        }

    }


    public function register_member($individual_id)
    {
        $fund_id = $this -> fund_id;
        $date = $this -> date;


        $sql2 = "INSERT INTO `fund_members`(`id`, `individual_id`, `fund_id`, `date_joined` ) VALUES (null,$individual_id,$fund_id,'$date' )";
      
        $this ->db_query_obj ->sql_insert_qury("$sql2");
    }


    public function validate_employee_upload($employee_sheet,$min_age,$max_age )
    { 
        
        //other variables
        $count = 0;
        $current_date = date('Y-m-d H:i:s');

        //screen for allowed file extensions
        $allowed_ext = ['xls', 'csv', 'xlsx'];

        //get excel file uploaded
        $file_ = $employee_sheet['name'];

         
        $file_ext = pathinfo($file_, PATHINFO_EXTENSION);
        
        $error_log  = '0';

        if (in_array($file_ext, $allowed_ext))
        { 

            $inputFileName =  $employee_sheet['tmp_name'];
            

            /** Load $inputFileName to a Spreadsheet object **/
            $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);
            $data = $spreadsheet->getActiveSheet()
                ->toArray();

                
                 
            foreach ($data as $row)
            {
                if ($count >= 1)
                {

                    //read cells_____________________________________
                    //Get personal detail
                    $NationalIdNumber = $row['0'];
                    $ssn = $row['1'];
                    $Title = $row['2'];
                    $Firstname = $row['3'];
                    $MIddleName = $row['4'];
                    $Surname = $row['5'];
                    $marital_status = $row['6'];
                    $gender = $row['7'];
                    $Nationality = $row['8'];
                    $Citizenship = $row['9'];
                    $BirthDate = $row['10'];
                    $addressline1 = $row['11'];
                    $addressline2 = $row['12'];
                    $addresscity = $row['13'];
                    $addressCountry = $row['14'];
                    $MobileNumber = $row['15'];
                    $TelephoneNumber = $row['16'];
                    $EmailAddress = $row['17'];
                    $DriverslicenceNumber = $row['18'];
                    $PassportNumber = $row['19'];

                    //Get employment details
                    $NatureofEmployment = $row['20'];
                    $CurrentWorksNumber = $row['21'];
                    $EmployeeType = $row['22'];
                    $DateOfEmployment = $row['23'];
                    $Station = $row['24'];
                    $Salary = $row['25'];
                    $Ministry = $row['26'];
                    $Occupation = $row['27'];
 
                    
                    if (!empty($ssn))
                    {
                        $ssn_find = $this->existance_finder('individuals', 'id', 'ssn', $ssn);
                       
                    } 
                    else
                    {
                        $ssn_find = -1;
                    }
                    
                    $age = $BirthDate;
                    $age = $this -> age_calculator($age);
 
                    
                     //Not Validated*****
                    $DriverslicenceNumber;
                    $PassportNumber; 
                     $NatureofEmployment;
                    $CurrentWorksNumber;
                    $EmployeeType;
                    $DateOfEmployment;
                    $Station;
                    $Salary;
                    $Ministry;
                    $Occupation       ;             
                    //***** */

                    if (strlen($NationalIdNumber) !=11)
                    {
                        $error_log .= '<br/>&'.'Invalid National ID for employee on row '. ($count+1) ;
                    }
                    if ($ssn_find != -1)
                    {
                         
                         
                        if ($ssn_find==0)
                        {
                            
                            $error_log .= '<br/>&'.'Cannot find SSN for employee on row '.($count+1);
                            
                        }

                    }
                    if (strlen($Firstname)<3)
                    {
                        
                        $error_log .= '<br/>&'.'First Name should be more than 2 charecters for employee on row '. ($count+1);
                        
                    }
                    if (strlen($Surname)<3)
                    {
                        
                        $error_log .= '<br/>&'.'Last Name should be more than 2 charecters for employee on row '. ($count+1);
                        
                    }
                    if (strlen($addressline1)<3)
                    {
                        
                        $error_log .= '<br/>&'.'Address Line 1 should be more than 2 charecters for employee on row '. ($count+1);
                        
                    }
                    if (strlen($addressline2)<3)
                    {
                        
                        $error_log .= '<br/>&'.'Address Line 2 should be more than 2 charecters for employee on row '. ($count+1);
                        
                    }
                    if (strlen($MobileNumber)!=14)
                    {
                        
                        $error_log .= '<br/>&'.'Invalid mobile number for employee on row '. ($count+1);
                        
                    }
                    if (strlen($TelephoneNumber)!=14)
                    {
                        
                        $error_log .= '<br/>&'.'invalid telephone number for employee on row '. ($count+1);
                        
                    } 
                    if ( $age < $min_age)
                    { 
                        
                        $error_log .= '<br/>&'.$Title.' '. $Surname.'  on row '. ($count+1) .' aged '.$age.' years is below minimum age requirement of '.$min_age;
                        
                    }

                    if ( $age > $max_age)
                    {
                        
                        $error_log .= '<br/>&'.'Employee on row '. ($count+1) .' aged '.$age.' years is above maximum age requirement of '.$max_age;
                        
                    }

                    

                    

                    //Validation_________________________________________________________________
                    
                         
                        
 

                }

                $count += 1;

            }

        }
        else
        {
         
            $error_log .= '&  Error on employee  file upload(Check your file format. Only pdf and jpg file formats are allowed) <br/>';
        }

        return array($error_log,($count-1) ) ;

    }

    public function  portal_login($id, $client_id,$client_type,$status_email_two_factor ,$status_approval,$status_active,$new_account_status)
    {
        
         
        if ($status_approval == 0) {
            $result =  'not_active';
             
        }
        elseif ($status_active == 0) {
            $result =  'account_deactivated';
             
        }
        elseif ($new_account_status == 1) {
            $result =    'new_account';
             
        }
        elseif ($status_email_two_factor == 1) {
            $result =   'two_factor';
             
        } 
        else
        {
            $result =  0;
        }
 



         

        return  $result;

    }

    public function add_contribution_calender(  $code, $name, $fund_id, $lower_date, $upper_date, $contributions_due_date, $effective_date)
    {
        $fund_id = $this -> fund_id;
        $user_id = $this -> user_id;

        $sql = "INSERT INTO `fund_contribution_calender`(`id`, `code`, `name`, `fund_id`, `lower_date`, `upper_date`, `contributions_due_date`, `effective_date`,  `user_id`) VALUES ( null, '$code', '$name', $fund_id, '$lower_date', '$upper_date', '$contributions_due_date', '$effective_date', $user_id)";

         

        $result = $this -> db_query_obj-> sql_insert_qury("$sql");

        return $result;

       

    }


    public function fund_tax_coponent($fund_id)
    {
        //return 0 = no fund rules, return 1 means fund rule exist
        $sql = "SELECT fund_rules_contributions.id, fund_rules_contributions.empoyer_rate, fund_rules_contributions.member_rate, fund_rules_contributions.voluntary_rate FROM fund_rules_contributions WHERE fund_rules_contributions.fund_id = $fund_id  ORDER BY fund_rules_contributions.id DESC LIMIT 1";
       
        $result = $this -> db_query_obj->sql_qury("$sql");

        $tax_component = array('contribution_rule_id','employer_component','member_component','voluntary_component'); 
        
        if (!$result)
        {
           return 0;
            
        }
        else
        {
            $row= mysqli_fetch_assoc($result);
           
            $tax_component['contribution_rule_id'] =  $row['id'];
            $tax_component['employer_component'] =  $row['empoyer_rate'];
            $tax_component['member_component'] =  $row['member_rate'];
            $tax_component['voluntary_component'] =  $row['voluntary_rate'];

            return $tax_component ;
        
        }
        
    }

    //************************************************************************************************************************** */

    public function upload_contributions_parent($employer_id,$contribution_month , $date_submitted )
    {
        $upload_date = date('Y-m-d H:i:s');
        $fund_id = $this -> fund_id;
        $user_id = $this -> user_id;
        
        $sql = "INSERT INTO `contributions_parent`(`id`, `fund_id`,`employer_id`, `contribution_month`, `recorded_on`, `date_submitted`, `user_id`) VALUES ( null,$fund_id,$employer_id,'$contribution_month','$upload_date', '$date_submitted',$user_id)";
 
    
        $result = $this -> db_query_obj->sql_insert_qury("$sql");
    
        if (!$result)
        {
            //error
            return 0;
            
        }
        else
        {
            //Inserted
            return $result;
    
        }


    }

    public function upload_contributions($contribution_parent_id,$member_id  , $salary, $employment_id,  $tax_component )
    {
        
        $contribution_rule_id =  $tax_component['contribution_rule_id'];
        $employer_component =  $tax_component['employer_component'];
        $member_component =  $tax_component['member_component'];
        $voluntary_component =  $tax_component['voluntary_component'];        
        
        $sql = "INSERT INTO `contributions`(`id` , `member_id`,  `employment_id`,`contribution_rule_id`,  `salary`, `employer_component`, `member_component`, `voluntary_component`,  `contributions_parent_id`) VALUES (null, $member_id, $employment_id, $contribution_rule_id,   $salary,  $employer_component, $member_component, $voluntary_component ,$contribution_parent_id)";
    
        $result = $this -> db_query_obj->sql_insert_qury("$sql");
    
        if (!$result)
        {
            //error
            
        }
        else
        {
            //Inserted
    
        }
    

        
    }
    
public function upload_employment_details($fund_id , $member_id,  $employment_details)
{
    
    $upload_date = date('Y-m-d H:i:s');


    $NatureofEmployment = $employment_details['NatureofEmployment'];
    $EmployeeType = $employment_details['EmployeeType'];
    $Station = $employment_details['Station'];
    $Salary = $employment_details['Salary'];
    $Ministry = $employment_details['Ministry'];
    $Occupation = $employment_details['Occupation'];
    $DateOfEmployment = $employment_details['DateOfEmployment'];
    $employer_id = $employment_details['employer_id'];
     
    $flag = 0;
    
    // employment.employer_id FROM $table_name WHERE employment.employer_id = 131 ORDER by employment.employer_id  
    


    $existing_value = array(     
    'employer_id'=>  $this -> existance_finder('employment','employer_id','employer_id',$employer_id) ,
    'NatureofEmployment'=>  $this -> existance_finder('employment','NatureofEmployment','NatureofEmployment',$NatureofEmployment) ,
    'EmployeeType'=>  $this -> existance_finder('employment','EmployeeType','EmployeeType',$EmployeeType) ,
    'Station'=>  $this -> existance_finder('employment','Station','Station',$Station),
    'Salary'=>  $this -> existance_finder('employment','Salary','Salary',$Salary) ,
    'Ministry'=>  $this -> existance_finder('employment','Ministry','Ministry',$Ministry) ,
    'Occupation'=>  $this -> existance_finder('employment','Occupation','Occupation',$Occupation) ,
    'DateOfEmployment'=>  $this -> existance_finder('employment','DateOfEmployment','DateOfEmployment',$DateOfEmployment) );

    
  
    $existing_columns = array(     
    'employer_id'=> 0,
    'NatureofEmployment'=> 0,
    'EmployeeType'=> 0,
    'Station'=> 0,
    'Salary'=> 0,
    'Ministry'=> 0,
    'Occupation'=> 0,
    'DateOfEmployment'=> 0);

    $employment_details = array_values( $employment_details);
    $existing_value = array_values( $existing_value);

    for($a=0;$a<= 7;$a++)
    { 
        if ($employment_details[$a]   !=  $existing_value[$a])
        {     
            $existing_columns[$a] = 1;
            $flag = 1;
        } 
    } 

  
        
    if($flag == 1)
    {
        $sql = "INSERT INTO `employment`(`id`,`fund_id`, `member_id`, `employer_id`, `NatureofEmployment`, `EmployeeType`, `Station`, `Salary`, `Ministry`, `Occupation`, `DateOfEmployment`, `upload_date`) VALUES ( null, $fund_id, $member_id,  $employer_id,  '$NatureofEmployment',  '$EmployeeType',  '$Station',  $Salary,  '$Ministry',  '$Occupation',  '$DateOfEmployment',  '$upload_date')";
 

        $result = $this -> db_query_obj->sql_insert_qury("$sql");

        if (!$result)
        {
            //error
            
        }
        else
        {
            //Inserted

        }
    }

    return $flag;

   
 
}
    //Portal___________________________________________________start

    public function register_on_portal($client_id, $client_type_code, $username, $password)
    {

        //needed for insert query
        $user_id = $this->user_id;
        $registered_by = $user_id;
        $created_on = date('Y-m-d H:i:s');

        $client_type = $this->search_type_codes_from_codes('client_types', $client_type_code);

        $sql = "INSERT INTO `users_portal`(`id`, `client_id`, `client_type`, `username`, `password`, `status_email_two_factor`, `two_factor_email_pin`, `status_approval`, `status_active`, `new_account_status`, `created_on` ) VALUES ( null, $client_id, $client_type, '$username', '$password',  0, null , 0, 0, 1,'$created_on'  ) ";

        $result = $this
            ->db_query_obj
            ->sql_insert_qury("$sql");

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

    //Portal___________________________________________________end
//claims*********************************************************
    public function register_claim(  $c_id)
    {
        
        $date = $this -> date;
        $user_id = $this -> user_id;

        $sql = "INSERT INTO `claims_registered_claims`(`id`, `claim_id`, `registered_by`, `registered_on`, `status`) VALUES (null,$c_id,$user_id , '$date',1)";
     

        $result = $this -> db_query_obj->sql_insert_qury("$sql");
        
        $sql = "UPDATE claim_logged_claims SET claim_logged_claims.status = 0 WHERE claim_logged_claims.id = $c_id";
        $result = $this -> db_query_obj->sql_update_qury("$sql");

    }
    public function check_claim(  $c_id)
    {
        
        $date = $this -> date;
        $user_id = $this -> user_id;

        $sql = "INSERT INTO `claims_checked_claims`(`id`, `claim_id`, `checked_by`, `checked_on`, `status`) VALUES (null,$c_id,$user_id,'$date',1)";

        $result = $this -> db_query_obj->sql_insert_qury("$sql");
        
        $sql = "UPDATE claims_registered_claims SET claims_registered_claims.status = 0 WHERE claims_registered_claims.claim_id = $c_id";
        $result = $this -> db_query_obj->sql_update_qury("$sql");
 


    }
    public function authorize_claim(  $c_id)
    {
        
        $date = $this -> date;
        $user_id = $this -> user_id;

        $sql = "INSERT INTO `claims_authorized_claims`(`id`, `claim_id`, `authorized_by`, `authorized_on`, `status`) VALUES (null,$c_id,$user_id,'$date',1)";

        $result = $this -> db_query_obj->sql_insert_qury("$sql");
        
        $sql = "UPDATE claims_checked_claims SET claims_checked_claims.status = 0 WHERE claims_checked_claims.claim_id = $c_id";
        $result = $this -> db_query_obj->sql_update_qury("$sql");

    }
    
    //******************************************************************** */

    public function search_individual($id_type,$id_number)
    {

        $sql = "SELECT individuals.id FROM individuals WHERE individuals.$id_type = '$id_number';";
        $result = $this -> db_query_obj->sql_qury("$sql");

     


    
        if (!$result)
        {
            //error
                return 0;
            
        }
        else
        {
            //Inserted
            $row= mysqli_fetch_assoc($result);
            return  $row['id'];
    
        }
    

    }


 



    
    // ==============================================================================================================
    //                  20/02/2022 ADMIN TRANSACTIONS ADDED =======
    // ==================================================================================================================

    // add contribution rule method
    public function add_contribution_rules( $data)
    {
        # code...
        $member_category_id = $data['member_category_id'];
        $empoyer_rate = $data['empoyer_rate'];
        $member_rate = $data['member_rate'];
        $voluntary_rate = $data['voluntary_rate'];
        $effective_date = $data['efective_date'];
        $fund_id = $_SESSION['fund_id'];
        $date = date('Y-m-d');

        $sql = "INSERT INTO `fund_rules_contributions`( `fund_id`, `member_category_id`, `empoyer_rate`, `member_rate`, `voluntary_rate`, `efective_date`, `recorded_on`) VALUES ('$fund_id','$member_category_id','$empoyer_rate','$member_rate','$voluntary_rate','$effective_date','$date')";
 
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

    // add membership rules method
    public function add_membership_rules( $data)
    {
        # code... 
        $member_category_id =  $data['member_category_id'];
        $min_age = $data['min_age'];
        $max_age = $data['max_age'];
        $effective_date = $data['efective_date'];
        $fund_id = $_SESSION['fund_id'];
        $date = date('Y-m-d');

        $sql = "INSERT INTO `fund_rules_membership_requiremens`( `fund_id`,  `min_age`, `max_age`, `effective_date`, `date_inserted`,`member_category_id`) VALUES ('$fund_id'    ,'$min_age','$max_age','$effective_date','$date',$member_category_id)";

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

    // add membership rules method
    public function add_claim_rule( $data)
    {
        # code...
        $rule_name = $data['rule_name'];
        $formula = $data['formula'];
        $efective_date = $data['efective_date'];
        $retirement = $data['retirement'];
        $fund_id = $_SESSION['fund_id'];
        $date = date('Y-m-d');

        $sql = "INSERT INTO `fund_rules_claims`( `fund_id`, `rule_name`, `formula`, `early_retirement`, `efective_date`, `recorded_on`) VALUES ('$fund_id','$rule_name','$formula','$retirement','$efective_date','$date')";

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


    // add membership rules method
    public function add_claim_type( $data)
    {
        # code...
        $code = $data['code'];
        $member_category_id = $data['member_category_id'];
        $description = $data['description'];
        $effective_date = $data['effective_date']; 
        $fund_id = $_SESSION['fund_id'];
        $date = date('Y-m-d');

        $sql = "INSERT INTO `fund_claim_types`(`id`, `fund_id`, `member_category_id`, `code`, `description`, `effective_date`, `date_created`) VALUES (null, $fund_id, $member_category_id, '$code', '$description','$effective_date', '$date')";

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


    // add dependent type rules method
    public function add_dependant_type( $data)
    {
        # code...
        $member_category_id = $data['member_category_id'];
        $dependant_type = $data['dependant_type'];
        $min_age = $data['min_age'];
        $max_age = $data['max_age'];
        $efective_date = $data['efective_date'];
        $fund_id = $_SESSION['fund_id'];
        $date = date('Y-m-d');

        $sql = "INSERT INTO `fund_rules_dependant_types`( `fund_id`, `member_category_id`, `dependant_type`, `min_age`, `max_age`, `effective_date`, `recorded_on`) VALUES ('$fund_id','$member_category_id','$dependant_type','$min_age','$max_age','$efective_date','$date')";

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

    // search employer method
    public function search_employer( $data)
    {
        # code...
        $table_column = $data['id_type'];
        $column_value = $data['id_number'];
        

        $sql = "SELECT id FROM `employers` WHERE ".$table_column."= '$column_value' ";


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

    //*******************************************End 20-02-2022*************************************************** */

    public function existance_finder_individual($ssn,$NationalIdNumber,  $EmailAddress, $DriverslicenceNumber, $PassportNumber)
    {
        if ($this->existance_finder('individuals', 'id', 'national_id', $NationalIdNumber))
        {

            $individuals_id = $this->existance_finder('individuals', 'id', 'national_id', $NationalIdNumber);
            return 'national_id';
           
        }
        elseif ($this->existance_finder('individuals', 'id', 'ssn', $ssn))
        {

            $individuals_id = $this->existance_finder('individuals', 'id', 'ssn', $ssn);
            return 'ssn';
           
        } 
        elseif ($this->existance_finder('individuals', 'id', 'drivers_licence', $DriverslicenceNumber))
        {

            $individuals_id = $this->existance_finder('individuals', 'id', 'drivers_licence', $DriverslicenceNumber);
            return 'drivers_licence';
         
        }
        elseif ($this->existance_finder('individuals', 'id', 'passport_number', $PassportNumber))
        {

            $individuals_id = $this->existance_finder('individuals', 'id', 'passport_number', $PassportNumber);
            return 'passport_number';
         
        }
        else
        {
            return 0;

        }
    }

    public function  run_billing($billing_month, $description)
    {
        $user_id =$this -> user_id;
        $date = $this -> date;
        $total_billing_amount=0;

        $sql3 = "INSERT INTO `billing`(`id`, `billing_month`, `executed_by`, `date_of_billing` ) VALUES (null,  '$billing_month', $user_id, '$date' )";

        $result3 = $this -> db_query_obj->sql_insert_qury("$sql3");
        $billing_table_id =  $result3;
        //_______________________________

        $sql = "SELECT employers.id FROM employers WHERE 1;";
        $result = $this -> db_query_obj->sql_qury("$sql");

        if (!$result)
        {
            //error
            
        }
        else
        {

            //Inserted
            while ($row= mysqli_fetch_assoc($result))
            {
                
            $total_billing_amount=0;
                
                 $employer_id = $row['id'];

                 $sql2 = "SELECT contributions_parent.id, contributions.salary, contributions.component FROM contributions INNER JOIN contributions_parent on contributions_parent.id = contributions.contributions_parent_id WHERE contributions_parent.employer_id = $employer_id;";

                 $contribution_id =0;

                $result2 = $this -> db_query_obj->sql_qury("$sql2");



                if (!$result2)
                {
                    //error
                    
                }
                else
                {
                    //Inserted
                    while ($row2= mysqli_fetch_assoc($result2))
                    {
                        $contribution_id = $row2['id'];

                        $amount_charged = $row2['salary'] * ($row2['component'] *0.01);
                        $total_billing_amount += $amount_charged;
    
                    }  

                }

               
               

               
                $sql4 = "INSERT INTO `billing_invoices`(`id`, `employer_id`, `billing_table_id`, `contribution_id`, `description`, `amount_charged`) VALUES (null, $employer_id,  $billing_table_id, $contribution_id, '$description', $total_billing_amount)";

                $result4 = $this -> db_query_obj->sql_insert_qury("$sql4");
                

                 

            }  

        } 

        return $billing_table_id;
 

    }

 
      public function display_sweet_alert()
      {
          
   echo '
   <button type="button" hidden id="alert_custom" class="btn btn-primary"> </button>


 <script> 
    
 const button = document.getElementById("alert_custom");

button.addEventListener("click", e =>{
    e.preventDefault();
ß
    Swal.fire({
		
        title: "'.$_SESSION['alert'][0].'",
        text: "'.$_SESSION['alert'][1].'",
        icon: "'.$_SESSION['alert'][2].'",
        buttonsStyling: false,
        confirmButtonText: "Ok, noted!",
        customClass: {
            confirmButton: "btn btn-primary"
        }
    });
});


window.onload=function(){
$("#alert_custom").click();
} 



</script>
   ';

   unset($_SESSION['alert']); 
      }

    
    
    
    
    
    //   ====================================================================================================================
    //      ============================================= 24/02/22 ====================================================

    //   Methods for registering employee
 









    // ==============================================================================
    // ====================================25/02/2022 =============================
    // =========================================================================

    public function process_payment($employer_id, $paid_by, $amount, $description, $payment_method)
    {
        $user_id =$this -> user_id;
        $date = date('Y-m-d');

        $sql3 = "INSERT INTO `payment_receipts`( `employer_id`, `description`, `payment_method`, `sales_rep`, `date_paid`, `amount_paid`, `paid_by`) VALUES ('$employer_id','$description','$payment_method','$user_id','$date','$amount','$paid_by')"; 

        return $this -> db_query_obj->sql_insert_qury("$sql3");

    }


    // ********************************09-03-22************************************

    public function _status_table( $parent_table_id, $table, $column, $notes, $status)
    {
        $user_id =$this -> user_id;
        $date = date('Y-m-d');
        $access_level = $this -> access_level;


        $level = $this -> existance_finder($table, 'level', $column, $parent_table_id);

        if ( !$level)
        {
           $level =1;
        } 
        elseif (  $level == 3)
        {
           $level =3;
        }
         else
         {
            $level += 1; 

         }



        $sql = "INSERT INTO `$table`(`id`, `$column`, `user_id`, `date`, `notes`, `level`, `status`) VALUES ( null, '$parent_table_id', '$user_id', '$date', '$notes', '$level ', '$status')"; 

        return $this -> db_query_obj->sql_insert_qury("$sql");




        

    }



    //************************8dditions */
    //04 march 2022 additions 

 
 
 
 


 
 



 

//******************************10-03-22 */

public function create_employer_approval_levels($code, $name)
{
    $fund_id = $this->fund_id;
    
    $sql = "INSERT INTO `fund_employer_approval_levels`(`id`, `fund_id`, `code`, `name`) VALUES (null,$fund_id,'$code', '$name')"; 
    $result = $this -> db_query_obj->sql_insert_qury("$sql");

          
}

public function create_employer_eligibility($allowed_dependant_types, $minimum_employees)
{
    $fund_id = $this->fund_id;
    $sql = "INSERT INTO `fund_employer_eligibility`(`id`, `fund_id`, `allowed_dependant_types`, `minimum_employees`) VALUES (null, $fund_id, $allowed_dependant_types ,$minimum_employees)"; 
    $result = $this -> db_query_obj->sql_insert_qury("$sql");
}

public function create_member_categories($code, $name ,$effective_date)
{
    $fund_id = $this->fund_id;
    $sql = "INSERT INTO `fund_member_categories`(`id`, `fund_id`, `code`, `description`,`effective_date`) VALUES (null,$fund_id,'$code','$name','$effective_date')"; 
    $result = $this -> db_query_obj->sql_insert_qury("$sql");
}

public function create_regional_offices($regional_offices_id )
{
    $fund_id = $this->fund_id;
    $sql = "INSERT INTO `fund_regional_offices`(`id`, `fund_id`, `regional_offices_id`) VALUES (null,$fund_id,$regional_offices_id)"; 
    $result = $this -> db_query_obj->sql_insert_qury("$sql");
}

public function create_service_providers($service_provider_type, $provider_id)
{
    $fund_id = $this->fund_id;
    $sql = "INSERT INTO `fund_service_provider`(`id`, `fund_id`, `service_provider_type`, `service_provider_id`) VALUES (null,$fund_id,$service_provider_type,$provider_id)"; 
  
    $result = $this -> db_query_obj->sql_insert_qury("$sql");
}

// 11-03-22*********************************************8

public function trim_string_from_specific_char($input_string, $charecter)
{
    // coounter******************
  
    $str ='';
    $found_char_flag =0;

    $chars = str_split($input_string);
    
    foreach ($chars as $char) {

        if ($char == $charecter)
        {
            $found_char_flag = 1;

        }
       

       if ( $found_char_flag == 1)
       {
        $str .= $char;

       }
       else
       {
        $str .= '*';
       }
       
        
    } 

    return $str;

    //*********************
}// 11-03-22*********************************************8

public function specific_charecter_counter($input_string, $charecter)
{
    // coounter******************
    $count = 0;
    $str = $input_string;
    $chars = str_split($str);
    
    foreach ($chars as $char) {
         
        if ($char == "$charecter")
        {
          $count += 1;
        } 
    } 

    return $count;

    //*********************
}

 
    // register priviledges  
    // 12-03-22 **********************************************************************************
   

     public function generate_password_reset_ticket($user_email)
     {
         $ticket_num = rand(10000,99999);
         
         
         $sql = "UPDATE `users_admin` SET `password_reset_ticket_num`= $ticket_num   WHERE users_admin.user_email = '$user_email' "; 
        $update_flag = $this -> db_query_obj->sql_update_qury("$sql");
 

        if($update_flag)
        {
              // email body ********************

            $subject = 'Password Reset Ticket';
            $body = 'Ticket Number #PR-'.$ticket_num.' was generated for your password request. Please provide this ticket number to the System Administrator.' ;
            $email_to = $user_email;


            $this -> mail -> send_email($subject, $body,$email_to);

            return $ticket_num; 

        }
        else
        {
            return 0;

        }

         

         
            
 



     }

     public function  update_scheme_reg_details($scheme_name, $scheme_description , $reg_no, $tax_no, $description, $reassuarance_no ,$commencement_date, $presevation_fund,$currency_code )
     {
        $fund_id = $this -> fund_id;

        $sql = "UPDATE `funds` SET  `scheme_name`='$scheme_name',`reg_no`='$reg_no',`scheme_description`='$scheme_description',`tax_no`='$tax_no',`scheme_type`=$description,`reassuarance_no`=$reassuarance_no,`commencement_date`='$commencement_date',`presevation_fund`='$presevation_fund',`scheme_default_currency`=$currency_code  WHERE funds.id = $fund_id";
   

        return  $this -> db_query_obj->sql_update_qury("$sql");
         
     }
// 16-03-22 ************************************************8
//////******************************************************************* */
    //get priviledge count from a user ID
    public function get_priviledge_count($user_id)
    {
        $sql2 = "SELECT `id`, `user_id`, `fund_id`, SUM( `create_fund`+`fund_details`+ `membership_rules`+ `contribution_rules`+ `claim_rules`+ `dependent_types`+ `directors`+ `contribution_history`+ `contribution_upload`+ `employess`+ `invoices`+ `payments_history`+ `process_payment`+ `register_employee`+ `membership_detail`+ `employment_details`+ `contribution_table`+ `log_a_claim`+ `logged_claims`+ `registered_claims`+ `checked_claims`+ `authorised_claims`+ `benefit_report`+ `run_billing`+ `reconciliation`+ `billing_history`+ `rejected_claims`+ `billing_report`+ `banks`+ `bank_account_types`+ `bank_branches`+ `business_classes`+ `cities`+ `claim_types`+ `client_types`+ `communication_type`+ `company_type`+ `countries`+ `dependent_type`+ `director_types`+ `financial_year`+ `fund_branches`+ `gender`+ `industry_code`+ `marital-status`+ `occupation`+ `months`+ `relationship_type`+ `region`+ `scheme_type`+ `tax_tables`+ `tittle`+ `user_branches`+ `user_groups`+`select_scheme`+ `admin_new_accounts`+ `admin_active_account`+`admin_deactivate_account`+ `portal_new_account`+ `portal_active_account`+ `portal_deactivate_account`) as user_privi FROM `user_priviledges` WHERE user_id = $user_id";

        return $this ->db_query_obj
        ->sql_qury("$sql2");


    }


    


    // ******************************************************************************************************
    // ************************************************************************************************************

    //register user method
    public function register_user($username, $user_email, $branch, $client_id, $access_level_id, $user_group){

        $otp_password = random_int(100000, 999999);
        $otp_pin = random_int(10000, 99999);
        $fund_id  = $this->fund_id;

        $sql3 = "INSERT INTO `users_admin`( `fund_id`,`username`, `user_email`, `password`, `branch`, `password_reset_flag`, `two_factor_status`, `two_factor_pin`, `client_id`, `account_status`, `user_group`, `new_account_flag`,`access_level_id`) VALUES ('$fund_id','$username','$user_email','$otp_password','$branch',1,1,'$otp_pin','$client_id',0,'$user_group',1,'$access_level_id')"; 
       
        $results_reg_user = $this -> db_query_obj->sql_insert_qury("$sql3");




        return $results_reg_user;



    }

    // public function to return attributes of a check box
    public function check_box_attributes($val){
        if($val == 1){
            return 'checked';
        }
        return "";

    }


    // get user priviledge data  and return attributes of a check box;
    public function get_priviledge_data_check_box_attributes($user_id)
    {
        $sql2 = "SELECT `id`, `user_id`, `fund_id`, `create_fund`, `fund_details`, `membership_rules`, `contribution_rules`, `claim_rules`, `dependent_types`, `directors`, `contribution_history`, `contribution_upload`, `employess`, `invoices`, `payments_history`, `process_payment`, `register_employee`, `membership_detail`, `employment_details`, `contribution_table`, `log_a_claim`, `logged_claims`, `registered_claims`, `checked_claims`, `authorised_claims`, `benefit_report`, `run_billing`, `reconciliation`, `billing_history`, `rejected_claims`, `billing_report`, `banks`, `bank_account_types`, `bank_branches`, `business_classes`, `cities`, `claim_types`, `client_types`, `communication_type`, `company_type`, `countries`, `dependent_type`, `director_types`, `financial_year`, `fund_branches`, `gender`, `industry_code`, `marital-status`, `occupation`, `months`, `relationship_type`, `region`, `scheme_type`, `tax_tables`, `tittle`, `user_branches`, `user_groups`,`select_scheme`, `admin_new_accounts`, `admin_active_account`, `admin_deactivate_account`, `portal_new_account`, `portal_active_account`, `portal_deactivate_account` FROM `user_priviledges` WHERE `user_id` = $user_id ";
 
        $results = $this ->db_query_obj
        ->sql_qury("$sql2");
        if(!$results){
            // error
        }
        $data = mysqli_fetch_assoc($results);
        // 
        $data['create_fund'] = $this->check_box_attributes($data['create_fund']);
        $data['fund_details'] = $this->check_box_attributes($data['fund_details']);
        $data['membership_rules'] = $this->check_box_attributes($data['membership_rules']);
        $data['contribution_rules'] = $this->check_box_attributes($data['contribution_rules']);
        $data['dependent_types'] = $this->check_box_attributes($data['dependent_types']);
        $data['directors'] = $this->check_box_attributes($data['directors']);
        $data['contribution_history'] = $this->check_box_attributes($data['contribution_history']);
        $data['contribution_upload'] = $this->check_box_attributes($data['contribution_upload']);
        $data['employess'] = $this->check_box_attributes($data['employess']);
        $data['invoices'] = $this->check_box_attributes($data['invoices']);
        $data['payments_history'] = $this->check_box_attributes($data['payments_history']);
        $data['process_payment'] = $this->check_box_attributes($data['process_payment']);
        $data['register_employee'] = $this->check_box_attributes($data['register_employee']);
        $data['membership_detail'] = $this->check_box_attributes($data['membership_detail']);
        $data['employment_details'] = $this->check_box_attributes($data['employment_details']);
        $data['contribution_table'] = $this->check_box_attributes($data['contribution_table']);
        $data['log_a_claim'] = $this->check_box_attributes($data['log_a_claim']);
        $data['logged_claims'] = $this->check_box_attributes($data['logged_claims']);
        $data['registered_claims'] = $this->check_box_attributes($data['registered_claims']);
        $data['checked_claims'] = $this->check_box_attributes($data['checked_claims']);
        $data['authorised_claims'] = $this->check_box_attributes($data['authorised_claims']);
        $data['benefit_report'] = $this->check_box_attributes($data['benefit_report']);
        $data['run_billing'] = $this->check_box_attributes($data['run_billing']);
        $data['reconciliation'] = $this->check_box_attributes($data['reconciliation']);
        $data['billing_history'] = $this->check_box_attributes($data['billing_history']);
        $data['rejected_claims'] = $this->check_box_attributes($data['rejected_claims']);
        $data['billing_report'] = $this->check_box_attributes($data['billing_report']);
        $data['banks'] = $this->check_box_attributes($data['banks']);
        $data['bank_account_types'] = $this->check_box_attributes($data['bank_account_types']);
        $data['bank_branches'] = $this->check_box_attributes($data['bank_branches']);
        $data['business_classes'] = $this->check_box_attributes($data['business_classes']);
        $data['cities'] = $this->check_box_attributes($data['cities']);
        $data['claim_types'] = $this->check_box_attributes($data['claim_types']);
        $data['client_types'] = $this->check_box_attributes($data['client_types']);
        $data['communication_type'] = $this->check_box_attributes($data['communication_type']);
        $data['company_type'] = $this->check_box_attributes($data['company_type']);
        $data['countries'] = $this->check_box_attributes($data['countries']);
        $data['dependent_type'] = $this->check_box_attributes($data['dependent_type']);
        $data['director_types'] = $this->check_box_attributes($data['director_types']);
        $data['financial_year'] = $this->check_box_attributes($data['financial_year']);
        $data['fund_branches'] = $this->check_box_attributes($data['fund_branches']);
        $data['gender'] = $this->check_box_attributes($data['gender']);
        $data['industry_code'] = $this->check_box_attributes($data['industry_code']);
        $data['marital-status'] = $this->check_box_attributes($data['marital-status']);
        $data['occupation'] = $this->check_box_attributes($data['occupation']);
        $data['months'] = $this->check_box_attributes($data['months']);
        $data['claim_rules'] = $this->check_box_attributes($data['claim_rules']);
        $data['relationship_type'] = $this->check_box_attributes($data['relationship_type']);
        $data['region'] = $this->check_box_attributes($data['region']);
        $data['tax_tables'] = $this->check_box_attributes($data['tax_tables']);
        $data['tittle'] = $this->check_box_attributes($data['tittle']);
        $data['user_branches'] = $this->check_box_attributes($data['user_branches']);
        $data['user_groups'] = $this->check_box_attributes($data['user_groups']);
        $data['select_scheme'] = $this->check_box_attributes($data['select_scheme']);
        $data['admin_new_accounts'] = $this->check_box_attributes($data['admin_new_accounts']);
        $data['admin_active_account'] = $this->check_box_attributes($data['admin_active_account']);
        $data['admin_deactivate_account'] = $this->check_box_attributes($data['admin_deactivate_account']);
        $data['portal_new_account'] = $this->check_box_attributes($data['portal_new_account']);
        $data['portal_active_account'] = $this->check_box_attributes($data['portal_active_account']);
        $data['portal_deactivate_account'] = $this->check_box_attributes($data['portal_deactivate_account']);

        //return values
        return $data;



    }

    //update user priviledges
    public function update_priviledges_of_users($data, $user_id)
    {
        
        
        // 
        $create_fund =isset($data['create_fund']) ? 1 : 0 ;
        $fund_details = isset($data['fund_details']) ? 1 : 0 ;
        $membership_rules = isset($data['membership_rules']) ? 1 : 0  ;
        $contribution_rules = isset($data['contribution_rules'] )? 1 : 0 ;
        $dependent_types =  isset($data['dependent_types'] ) ? 1 : 0 ;
        $directors = isset ($data['directors'])? 1 : 0 ;
        $contribution_history = isset ($data['contribution_history'])? 1 : 0 ;
        $contribution_upload = isset ($data['contribution_upload'])? 1 : 0 ;
        $employess = isset ($data['employess'])? 1 : 0 ;
        $invoices = isset ($data['invoices'])? 1 : 0 ;
        $payments_history = isset  ($data['payments_history'])? 1 : 0 ;
        $process_payment = isset  ($data['process_payment'])? 1 : 0 ;
        $register_employee = isset  ($data['register_employee'])? 1 : 0 ;
        $membership_detail = isset ($data['membership_detail'])? 1 : 0 ;
        $employment_details = isset ($data['employment_details'])? 1 : 0 ;
        $contribution_table = isset ($data['contribution_table'])? 1 : 0 ;
        $log_a_claim = isset ($data['log_a_claim']) ? 1 : 0 ;
        $logged_claims = isset ($data['logged_claims'])? 1 : 0 ;
        $registered_claims = isset ($data['registered_claims'])? 1 : 0 ;
        $checked_claims = isset ($data['checked_claims'])? 1 : 0 ; 
        $authorised_claims = isset ($data['authorised_claims'])? 1 : 0 ;
        $benefit_report = isset ($data['benefit_report'])? 1 : 0 ;
        $run_billing = isset ($data['run_billing'])? 1 : 0 ;
        $reconciliation = isset ($data['reconciliation']) ? 1 : 0 ;
        $billing_history = isset ($data['billing_history'])? 1 : 0 ;
        $rejected_claims = isset ($data['rejected_claims'])? 1 : 0 ;
        $billing_report = isset ($data['billing_report'])? 1 : 0 ;
        $banks = isset ($data['banks'] )? 1 : 0 ;
        $bank_account_types = isset ($data['bank_account_types']) ? 1 : 0 ;
        $bank_branches = isset ($data['bank_branches']) ? 1 : 0 ;
        $business_classes = isset ($data['business_classes']) ? 1 : 0 ;
        $cities = isset( $data['cities']) ? 1 : 0 ;
        $claim_types = isset ($data['claim_types']) ? 1 : 0 ;
        $client_types = isset ($data['client_types']) ? 1 : 0 ;
        $communication_type = isset ($data['communication_type']) ? 1 : 0 ;
        $company_type = isset ($data['company_type']) ? 1 : 0 ;
        $countries = isset ($data['countries'])? 1 : 0 ;
        $countries = isset ($data['dependent_type'])? 1 : 0 ;
        $director_types = isset ($data['director_types'])? 1 : 0 ;
        $financial_year = isset ($data['financial_year'])? 1 : 0 ;
        $fund_branches = isset ($data['fund_branches']) ? 1 : 0 ;
        $gender = isset ($data['gender']) ? 1 : 0 ;
        $industry_code = isset ($data['industry_code']) ? 1 : 0 ;
        $marital_status = isset ($data['marital-status']) ? 1 : 0 ;
        $occupation = isset ($data['occupation'])? 1 : 0 ;
        $months = isset ($data['months']) ? 1 : 0 ;
        $relationship_type = isset ($data['relationship_type'])? 1 : 0 ;
        $region = isset ($data['region'])? 1 : 0 ;
        $tax_tables = isset ($data['tax_tables']) ? 1 : 0 ;
        $tittle = isset ($data['tittle'])? 1 : 0 ;
        $user_branches = isset ($data['user_branches']) ? 1 : 0 ;
        $user_groups = isset ($data['user_groups']) ? 1 : 0 ;
        // added attbts
        $dependent_type = isset ($data['dependent_type'])? 1 : 0 ;
        $scheme_type = isset ($data['scheme_type']) ? 1 : 0 ;
        $claim_rules  = isset($data['claim_rules']) ? 1 : 0 ;
        $select_scheme  = isset($data['select_scheme']) ? 1 : 0 ;
        $admin_new_accounts  = isset($data['admin_new_accounts']) ? 1 : 0 ;
        $admin_active_account  = isset($data['admin_active_account']) ? 1 : 0 ;
        $admin_deactivate_account  = isset($data['admin_deactivate_account']) ? 1 : 0 ;
        $portal_new_account  = isset($data['portal_new_account']) ? 1 : 0 ;
        $portal_active_account  = isset($data['portal_active_account']) ? 1 : 0 ;
        $portal_deactivate_account  = isset($data['portal_deactivate_account']) ? 1 : 0 ;

        


       

        //update quuery
        $sql2 = "UPDATE `user_priviledges` SET `create_fund`='$create_fund',`fund_details`='$fund_details',`membership_rules`='$membership_rules',`contribution_rules`='$contribution_rules',`claim_rules`='$claim_rules',`dependent_types`='$dependent_types',`directors`='$directors',`contribution_history`='$contribution_history',`contribution_upload`='$contribution_upload',`employess`='$employess',`invoices`='$invoices',`payments_history`='$payments_history',`process_payment`='$process_payment',`register_employee`='$register_employee',`membership_detail`='$membership_detail',`employment_details`='$employment_details',`contribution_table`='$contribution_table',`log_a_claim`='$log_a_claim',`logged_claims`='$logged_claims',`registered_claims`='$registered_claims',`checked_claims`='$checked_claims',`authorised_claims`='$authorised_claims',`benefit_report`='$benefit_report',`run_billing`='$run_billing',`reconciliation`='$reconciliation',`billing_history`='$billing_history',`rejected_claims`='$rejected_claims',`billing_report`='$billing_report',`banks`='$banks',`bank_account_types`='$bank_account_types',`bank_branches`='$bank_branches',`business_classes`='$business_classes',`cities`='$cities',`claim_types`='$claim_types',`client_types`='$client_types',`communication_type`='$communication_type',`company_type`='$company_type',`countries`='$countries',`dependent_type`='$dependent_type',`director_types`='$director_types',`financial_year`='$financial_year',`fund_branches`='$fund_branches',`gender`='$gender',`industry_code`='$industry_code',`marital-status`='$marital_status',`occupation`='$occupation',`months`='$months',`relationship_type`='$relationship_type',`region`='$region',`scheme_type`='$scheme_type',`tax_tables`='$tax_tables',`tittle`='$tittle',`user_branches`='$user_branches',`user_groups`='$user_groups' ,`select_scheme`='$select_scheme',`admin_new_accounts`='$admin_new_accounts',`admin_active_account`='$admin_active_account',`admin_deactivate_account`='$admin_deactivate_account',`portal_new_account`='$portal_new_account',`portal_active_account`='$portal_active_account',`portal_deactivate_account`='$portal_deactivate_account' WHERE
        `user_id` = $user_id ";

        
        return $this-> db_query_obj->sql_update_qury("$sql2");

        
        
    }



    // activate deactivate admin accounts
    
    public function approve_new_admin_user($user_id) 
    {
        
        $sql = "UPDATE   `users_admin` set  `new_account_flag`=0,`account_status`=1 WHERE users_admin.id = $user_id";
        $result = $this -> db_query_obj->sql_update_qury("$sql");
        

    }
    

    public function deactivate_admin_user($user_id) 
    {
        $sql = "UPDATE   `users_admin` set   `account_status`=0  WHERE users_admin.id = $user_id";
        $result = $this -> db_query_obj->sql_update_qury("$sql");

    }

    public function activate_admin_user($user_id) 
    {
        $sql = "UPDATE   `users_admin` set   `account_status`=1  WHERE users_admin.id = $user_id";
        $result = $this -> db_query_obj->sql_update_qury("$sql");

    }


    

    // register priviledges
    // get user priviledge data  and return attributes of a check box;
    public function set_user_previledges($user_id)
    {
        $fund_id = $this->fund_id;
        $val = false;

        $sql2 = "INSERT INTO `user_priviledges`(`user_id`, `fund_id`, `create_fund`, `fund_details`, `membership_rules`, `contribution_rules`, `claim_rules`, `dependent_types`, `directors`, `contribution_history`, `contribution_upload`, `employess`, `invoices`, `payments_history`, `process_payment`, `register_employee`, `membership_detail`, `employment_details`, `contribution_table`, `log_a_claim`, `logged_claims`, `registered_claims`, `checked_claims`, `authorised_claims`, `benefit_report`, `run_billing`, `reconciliation`, `billing_history`, `rejected_claims`, `billing_report`, `banks`, `bank_account_types`, `bank_branches`, `business_classes`, `cities`, `claim_types`, `client_types`, `communication_type`, `company_type`, `countries`, `dependent_type`, `director_types`, `financial_year`, `fund_branches`, `gender`, `industry_code`, `marital-status`, `occupation`, `months`, `relationship_type`, `region`, `scheme_type`, `tax_tables`, `tittle`, `user_branches`, `user_groups`) VALUES ('$user_id','$fund_id','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val')";
        
        return $results = $this ->db_query_obj
        ->sql_insert_qury("$sql2");
        

    }
    // 12-03-22 **********************************************************************************
     public function  reset_user_admin($user_id, $new_password)
     {
        $sql = "UPDATE `users_admin` SET `password`='$new_password' , `password_reset_flag`= 0 WHERE users_admin.id = $user_id ";
   

        return  $this -> db_query_obj->sql_update_qury("$sql");

     }

 

     
    // function to update individual
    public function update_individual($client_id, $title, $first_name, $middle_name, $last_name, $marital_status, $nationality, $citizenship, $AddresslLine1, $AddresslLine2, $city, $country, $MobileNumber, $telephone, $email, $drivers_licence, $passport)
    {
        

        $sql2 = "UPDATE `individuals` SET `title`='$title',`first_name`='$first_name',`middle_name`='$middle_name',`last_name`='$last_name',`marital_status`='$marital_status',`nationality`='$nationality',`citizenship`='$citizenship',`address_line1`='$AddresslLine1',`address_line2`='$AddresslLine2',`city`='$city',`country`='$country',`mobile_number`='$MobileNumber',`telephone_number`='$telephone',`email_address`='$email',`drivers_licence`='$drivers_licence',`passport_number`='$passport' WHERE id = $client_id";
        
        return $results = $this ->db_query_obj
        ->sql_update_qury("$sql2");
        

    }

    // update user details
       // update user data
       public function update_users($user, $username, $email, $branch, $user_group, $user_level)
       {
          
   
           $sql2 = "UPDATE `users_admin` SET `username`='$username',`user_email`='$email',`branch`='$branch', `user_group`='$user_group' ,`access_level_id`='$user_level' WHERE id = $user";
           
           return $results = $this ->db_query_obj
           ->sql_update_qury("$sql2");
           
   
       }
   

    // reset pins for all users in the system
    public function generate_new_two_factor_pins()
     {
        
         
         
         $sql = "SELECT user_email FROM `users_admin` WHERE new_account_flag = 0 and account_status = 1"; 
        $emails_results = $this -> db_query_obj->sql_qury("$sql");
 

        if($emails_results)
        {

            // fetch emails and send emails
            while($email = mysqli_fetch_assoc($emails_results)){
                // email body ********************
                $new_pin = rand(10000,99999);
                $subject = 'New Two Factor Pin';
                $body = 'New Two Factor Authentication Number #NSSA-'.$new_pin.' was generated. Please provide this pin number everytime you log in to the system.' ;
                $email_to = $email['user_email'];
    
    
                $mail_send = $this -> mail -> send_email($subject, $body,$email_to);
                print_r($mail_send);

                // save the pins to database
                $sql_update = "UPDATE `users_admin` SET `two_factor_pin`='$new_pin' WHERE user_email = '$email_to' ";
                $results_update = $this -> db_query_obj->sql_update_qury("$sql_update");

                
            }
              

           

            return true; 

        }
        else
        {
            return 0;

        }

     }
     
 // reset pins for all users in the system
 public function generate_new_password($ticket_pin,$admin_id)
 {

     $sql = "SELECT * FROM `users_admin` WHERE id = $admin_id and password_reset_ticket_num = '$ticket_pin' "; 
    $admin_user_results = $this -> db_query_obj->sql_qury("$sql");
     //    if found
     if($admin_user_results){
         // reset password
         $new_password = rand(10000000,99999999);
         $sql_update = "UPDATE `users_admin` SET `password_reset_flag`=1, `password`='$new_password' WHERE id = $admin_id ";
         $results_update = $this -> db_query_obj->sql_update_qury("$sql_update");




         // send the results to the email
         $subject = 'Password Reset';
         $body = 'Your request for password reset has been processed. Below is your one time password to entere and reset it to something you can remember: <br>'. $new_password ;
         $email_to = mysqli_fetch_assoc($admin_user_results)['user_email'];


         $mail_send = $this -> mail -> send_email($subject, $body,$email_to);
         return 1;
     }else{
         // return 0 meaning ticket number and user were nt found
         return 0;
     }


   
 }


    // send account details to admin user
    public function send_auth_to_admin($admin_id)
    {
 
        $sql = "SELECT * FROM `users_admin` WHERE id = $admin_id "; 
       $admin_user_results = $this -> db_query_obj->sql_qury("$sql");
    //    if found
        if($admin_user_results){
            // reset password
            $admin_details = mysqli_fetch_assoc($admin_user_results);
            
            // send the results to the email
            $subject = 'Account Created';
            if($admin_details['two_factor_status'] == 1){
                $body = 'Your NSSA account has been created. Below are your login credentials:<br> username: '.$admin_details["username"]. ' <br>email: '. $admin_details["user_email"]. '<br>password: '.$admin_details["password"].'<br> Two Factor Pin:'.$admin_details["two_factor_pin"];
            }else{
                $body = 'Your NSSA account has been created. Below are your login credentials:<br> username: '.$admin_details["username"]. ' <br>email: '. $admin_details["user_email"]. '<br>password: '.$admin_details["password"];
            }
            

            $email_to = $admin_details["user_email"] ;


            $mail_send = $this -> mail -> send_email($subject, $body,$email_to);
            return 1;
        }else{
            // return 0 meaning ticket number and user were nt found
        return 0;
    }


      
    }

    public function sweet_alert($alert_title, $alert_msg, $icon, $btn_txt, $btn_style)
    {
    
        echo '
        
        <script>

            document.addEventListener("DOMContentLoaded", function(){
            
                Swal.fire({
                        title: "'.$alert_title.'",
                        text: "'.$alert_msg.'",
                        icon: "'.$icon.'",
                        buttonsStyling: false,
                        confirmButtonText: "'.$btn_txt.'",
                        customClass: {
                            confirmButton: "'.$btn_style.'"
                        }
                    });
            
                 
            });
                    
                   
             
             
        </script>


        ';

        
 
       


      
    }
    
    // 18-03-22 *************************************************************************
    // Tafadzwa
    
    public function update_employer($tradename,$legalname,$industrycode,$companytype,$businessactivity,$startdate,$employer_id){


        $sql2 = "UPDATE `employers` SET `trade_name`='$tradename',`legal_name`='$legalname', `industry_code`='$industrycode',`business_activity`='$businessactivity', `company_type`='$companytype',`start_date`='$startdate' WHERE `id`='$employer_id'";
        
                   

$result = $this -> db_query_obj->sql_update_qury("$sql2");

    return $result;





}

 public function update_employerContactDetails($addressline1,$addressline2,$country,$city,$mobileNumber, $telephoneNumber,$email, $employer_id){


        $sql2 = "UPDATE `employers` SET `address_line1`='$addressline1',`address_line2`='$addressline2', `address_city`='$city',`address_country`='$country', `mobile_number`='$mobileNumber',`telephone_number`='$telephoneNumber',`email`='$email' WHERE `id`='$employer_id'";
        
                   

$result = $this -> db_query_obj->sql_update_qury("$sql2");

    return $result;

}
public function update_employerBankingDetails($bankname,$branchname,$accountnumber, $employer_id){


        $sql2 = "UPDATE `employers` SET `bank_name`='$bankname',`branch_name`='$branchname', `account_number`='$accountnumber' WHERE `id`='$employer_id'";
        
                   

$result = $this -> db_query_obj->sql_update_qury("$sql2");

    return $result;

}
public function update_reg_details($scheme_name,$scheme_description,$reg_no,$tax_no,$description,$reassuarance_no,$commencement_date, $presevation_fund,$currency_code){
     

    $fund_id = $this->fund_id;
    $sql2 = "UPDATE `funds` SET `scheme_name`='$scheme_name',`reg_no`='$reg_no',`scheme_description`='$scheme_description',`tax_no`='$tax_no',`reassuarance_no`='$reassuarance_no',`commencement_date`='$commencement_date',`presevation_fund`='$presevation_fund',`scheme_default_currency`='$currency_code' WHERE `id`=$fund_id";
        

$result = $this -> db_query_obj->sql_update_qury("$sql2");

    return $result;

}
public function update_contact_details($phone_number,$email_address,$address_line1,$address_line2,$city,$country){
     

    $fund_id = $this->fund_id;
    $sql2 = "UPDATE `funds` SET `phone_number`='$phone_number',`email_address`='$email_address',`address_line1`='$address_line1',`address_line2`='$address_line2',`city`='$city',`country`='$country' WHERE `id`=$fund_id"; 

        

$result = $this -> db_query_obj->sql_update_qury("$sql2");

    return $result;

}
public function update_bank_details($bank_name,$bank_branch,$bank_acc_name,$bank_acc_number){
     

    $fund_id = $this->fund_id;
    $sql2 = "UPDATE `funds` SET `bank_name`='$bank_name',`bank_branch`='$bank_branch',`bank_acc_name`='$bank_acc_name',`bank_acc_number`='$bank_acc_number'  WHERE `id`=$fund_id"; 
    
    
        

$result = $this -> db_query_obj->sql_update_qury("$sql2");

    return $result;

}


public function update_Employer_doc($table_column,$column_value, $employer_id)
{
    $sql2 = "UPDATE `employers` SET `$table_column,`='$column_value'   WHERE `e`=$employer_id"; 
    
    $result = $this -> db_query_obj->sql_update_qury("$sql2");

}
    
    // register dependent
    public function register_dependent($member_id, $dependent_id, $dependant_type_id)
    {
       $date = date('Y-m-d');

        $sql2 = "INSERT INTO `dependants`( `member_id`, `dependent_id`, `dependant_type_id`, `date_registered`) VALUES ('$member_id','$dependent_id', '$dependant_type_id', '$date')";
        
        return $results = $this ->db_query_obj
        ->sql_insert_qury("$sql2");
   

    }
    
    
    
    public function disable_calender_status($cal_id)
    {
        $sql = "UPDATE fund_contribution_calender SET  fund_contribution_calender.active_status= 0 WHERE fund_contribution_calender.id = $cal_id ";
        $result = $this -> db_query_obj->sql_update_qury("$sql");
        return $result;

    }
    public function activate_calender_status($cal_id)
    {
        $sql = "UPDATE fund_contribution_calender SET  fund_contribution_calender.active_status= 1 WHERE fund_contribution_calender.id = $cal_id ";
        $result = $this -> db_query_obj->sql_update_qury("$sql");
        return $result;

    }
    public function audit_year($cal_id)
    {
        $sql = "UPDATE fund_contribution_calender SET  fund_contribution_calender.audited_status= 1 WHERE fund_contribution_calender.id = $cal_id ";
        $result = $this -> db_query_obj->sql_update_qury("$sql");
        return $result;

    }
    public function Reverse_audit_year($cal_id)
    {
        $sql = "UPDATE fund_contribution_calender SET  fund_contribution_calender.audited_status= 0 WHERE fund_contribution_calender.id = $cal_id ";
        $result = $this -> db_query_obj->sql_update_qury("$sql");
        return $result;

    }


    
      
    
}
