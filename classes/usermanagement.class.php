<?php


class usermanagement
{

    private $db_query_obj;
    private $user_id;
    private $date;
    private $fund_id;
    private $access_level;
    private $mail;


    public function __construct($user_id, $db_query_obj, $mail)
    {
        $this->db_query_obj = $db_query_obj;
        $this->user_id = $user_id;
        $this->mail = $mail;
        $this->date = date('Y-m-d H:i:s');
    }
    // TANAKA*****************************************************




    public function add_bank($bank_name, $code)
    {
        # code...
        $fund_id = $_SESSION['fund_id'];
        $sql = "INSERT INTO `banks`( `code`, `name`, `fund_id`)  VALUES ('$bank_name','$code','$fund_id')";


        $result = $this->db_query_obj->sql_insert_qury($sql);
        if (!$result) {
            //error
            return 0;
        } else {
            //success
            return $result;
        }
    }

    public function bank_branches($code, $branch_name, $bank_id)
    {
        # code...
        $fund_id = $_SESSION['fund_id'];

        $sql = "INSERT INTO `bank_branches`( `code`, `branch_name`, `banks_id`, `fund_id`) VALUES ('$code','$branch_name','$bank_id','$fund_id')";


        $result = $this->db_query_obj->sql_insert_qury($sql);
        if (!$result) {
            //error
            return 0;
        } else {
            //success
            return $result;
        }
    }


    public function cities($name, $code, $id)
    {
        # code...
        $fund_id = $_SESSION['fund_id'];

        $sql = "INSERT INTO `cities`( `code`, `name`, `countries_id`, `fund_id`) VALUES ('$code','$name','$id','$fund_id')";


        $result = $this->db_query_obj->sql_insert_qury($sql);
        if (!$result) {
            //error
            return 0;
        } else {
            //success
            return $result;
        }
    }




    public function countries($name, $currency, $c_code, $t_code)
    {
        # code...
        $fund_id = $_SESSION['fund_id'];


        $sql = "INSERT INTO `countries`( `name`, `currency_name`, `currency_code`, `telephone_code`, `fund_id`)  VALUES ('$name','$currency','$c_code','$t_code','$fund_id')";


        $result = $this->db_query_obj->sql_insert_qury($sql);
        if (!$result) {
            //error
            return 0;
        } else {
            //success
            return $result;
        }
    }





    public function gender($desc, $code)
    {
        # code...
        $fund_id = $_SESSION['fund_id'];

        $sql = "INSERT INTO `gender`(`code`, `description`, `fund_id`)   VALUES ('$code','$desc','$fund_id')";


        $result = $this->db_query_obj->sql_insert_qury($sql);
        if (!$result) {
            //error
            return 0;
        } else {
            //success
            return $result;
        }
    }

    public function industry_code($desc, $code)
    {
        # code...
        $fund_id = $_SESSION['fund_id'];

        $sql = "INSERT INTO `industry_code`( `code`, `description`, `fund_id`)   VALUES ('$code','$desc','$fund_id')";


        $result = $this->db_query_obj->sql_insert_qury($sql);
        if (!$result) {
            //error
            return 0;
        } else {
            //success
            return $result;
        }
    }


    public function marital_status($desc, $code)
    {
        # code...

        $fund_id = $_SESSION['fund_id'];
        $sql = "INSERT INTO `marital_status`( `code`, `description`, `fund_id`) VALUES ('$code','$desc','$fund_id')";


        $result = $this->db_query_obj->sql_insert_qury($sql);
        if (!$result) {
            //error
            return 0;
        } else {
            //success
            return $result;
        }
    }




    public function titles($desc, $code)
    {
        # code...
        $fund_id = $_SESSION['fund_id'];

        $sql = "INSERT INTO `titles`( `code`, `description`, `fund_id`) VALUES ('$code','$desc','$fund_id')";


        $result = $this->db_query_obj->sql_insert_qury($sql);
        if (!$result) {
            //error
            return 0;
        } else {
            //success
            return $result;
        }
    }

    public function bank_account_type($savings, $current)
    {
        # code...
        $fund_id = $_SESSION['fund_id'];

        $sql = "INSERT INTO `bank_account_types`(`savings`, `current`, `fund_id`) VALUES ('$savings','$current','$fund_id');";


        $result = $this->db_query_obj->sql_insert_qury($sql);
        if (!$result) {
            //error
            return 0;
        } else {
            //success
            return $result;
        }
    }

    public function tax_table($type, $frequency, $date, $lower_band, $upper_band, $cumulative)
    {
        # code...

        $fund_id = $_SESSION['fund_id'];
        $sql = "INSERT INTO `tax_tables`( `tax_type`, `frequency`, `effective_date`, `lower_band`, `upper_band`, `cumulative`, `fund_id`)VALUES ('$type','$frequency','$date','$lower_band','$upper_band','$cumulative','$fund_id')";

        $result = $this->db_query_obj->sql_insert_qury($sql);
        if (!$result) {
            //error
            return 0;
        } else {
            //success
            return $result;
        }
    }

    public function user_branches($desc, $code)
    {
        # code...
        $fund_id = $_SESSION['fund_id'];

        $sql = "INSERT INTO `user_branches`( `fund_id`, `code`, `description`)  VALUES ('$desc','$code','$fund_id')";

        $result = $this->db_query_obj->sql_insert_qury($sql);
        if (!$result) {
            //error
            return 0;
        } else {
            //success
            return $result;
        }
    }
    public function user_groups($desc, $code)
    {
        # code...
        $fund_id = $_SESSION['fund_id'];

        $sql = "INSERT INTO `user_group`( `fund_id`, `code`, `description`)VALUES ('$fund_id','$desc','$code')";

        $result = $this->db_query_obj->sql_insert_qury($sql);
        if (!$result) {
            //error
            return 0;
        } else {
            //success
            return $result;
        }
    }





    public function month($month_number, $month_name)
    {
        # code...
        $fund_id = $_SESSION['fund_id'];
        $fund_id = $_SESSION['fund_id'];
        $sql = "INSERT INTO `months`( `fund_id`,`month_number`,  `month_name`) VALUES ('$fund_id','$month_number','$month_name')";


        $result = $this->db_query_obj->sql_insert_qury($sql);
        if (!$result) {
            //error
            return 0;
        } else {
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
        if (!$result) {
            //error
            return 0;
        } else {
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
        if (!$result) {
            //error
            return 0;
        } else {
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
        if (!$result) {
            //error
            return 0;
        } else {
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
        if (!$result) {
            //error
            return 0;
        } else {
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
        if (!$result) {
            //error
            return 0;
        } else {
            //success
            return $result;
        }
    }




    //search types funtions_______________________________________________________________________________________start
    //****************************************************************************************************************** */
    public function search_type_codes_from_codes($table_name, $client_type_code)
    {
        $sql = "SELECT $table_name.id FROM $table_name WHERE $table_name.code = '$client_type_code'";
        $result = $this
            ->db_query_obj
            ->sql_qury("$sql");

        if (!$result) {
            //error
            $client_type = 0;
        } else {
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

        if (!$result) {
            //error
            $client_type = 0;
        } else {
            $row = mysqli_fetch_assoc($result);
            //Inserted
            $client_type = $row['id'];
        }

        return $client_type;
    }




    public function approve_new_portal_user($user_id)
    {

        $sql = "UPDATE   `users_portal` set  `status_approval`=1,`status_active`=1,`new_account_status`=0 WHERE users_portal.id = $user_id";
        $result = $this->db_query_obj->sql_update_qury("$sql");
    }


    public function deactivate_portal_user($user_id)
    {
        $sql = "UPDATE   `users_portal` set   `status_active`=0  WHERE users_portal.id = $user_id";
        $result = $this->db_query_obj->sql_update_qury("$sql");
    }

    public function activate_portal_user($user_id)
    {
        $sql = "UPDATE   `users_portal` set   `status_active`=1  WHERE users_portal.id = $user_id";
        $result = $this->db_query_obj->sql_update_qury("$sql");
    }
    //****************************************************************************************************************** */
    //search types funtions_______________________________________________________________________________________end


    //existance finder_______________________________________________________________________________________start
    //****************************************************************************************************************** */



    public function record_id_finder($table_name, $column1, $value)
    {
        $sql = "SELECT $table_name.id FROM $table_name WHERE $table_name.$column1 = '$value'";


        $result = $this
            ->db_query_obj
            ->sql_qury("$sql");

        if (!$result) {
            //error
            return 0;
        } else {
            $row = mysqli_fetch_assoc($result);

            return $row["id"];
        }
    }

    public function name_from_id_finder($table_name, $column1, $value)
    {
        $sql = "SELECT $table_name.$column1 FROM $table_name WHERE $table_name.id = '$value'";


        $result = $this
            ->db_query_obj
            ->sql_qury("$sql");

        if (!$result) {
            //error
            return 0;
        } else {
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

        if (!$result) {
            //error
            return 0;
        } else {
            $row = mysqli_fetch_assoc($result);
            return $row["$column1"];
        }
    }

    //****************************************************************************************************************** */
    //existance finder_______________________________________________________________________________________end







    public function register_individual($national_id, $title, $first_name, $middle_name, $last_name, $marital_status, $gender, $nationality, $citizenship, $birth_date, $address_line1, $address_line2, $city, $country, $mobile_number, $telephone_number, $email_address, $drivers_licence, $passport_number, $status_registration, $status_active_account)
    {

        //needed for insert query
        $user_id = $this->user_id;
        $created_by = $user_id;
        $created_on = date('Y-m-d H:i:s');

        $sql = "INSERT INTO `individuals`(`id`, `national_id`, `title`, `first_name`, `middle_name`, `last_name`, `marital_status`, `gender`, `nationality`, `citizenship`, `birth_date`, `address_line1`, `address_line2`, `city`, `country`, `mobile_number`, `telephone_number`, `email_address`, `drivers_licence`, `passport_number`, `created_on`, `created_by`, `status_registration`, `status_active_account`) VALUES ( null, '$national_id', $title, '$first_name', '$middle_name', '$last_name', $marital_status, $gender, $nationality, $citizenship, '$birth_date', '$address_line1', '$address_line2', $city, $country, '$mobile_number', '$telephone_number', '$email_address', '$drivers_licence', '$passport_number', '$created_on', $created_by,0,0)";



        $last_insert_id = $this
            ->db_query_obj
            ->sql_insert_qury("$sql");

        if (!$last_insert_id) {
            //error
            return 0;
        } else {
            //success
            return $last_insert_id;
        }
    }



    public function date_difference_calculator($lowerDate, $upperDate)
    {


        $diff = date_diff(date_create($lowerDate), date_create($upperDate));


        return $diff->format('%d');
    }





    public function search_individual($id_type, $id_number)
    {

        $sql = "SELECT individuals.id FROM individuals WHERE individuals.$id_type = '$id_number';";
        $result = $this->db_query_obj->sql_qury("$sql");





        if (!$result) {
            //error
            return 0;
        } else {
            //Inserted
            $row = mysqli_fetch_assoc($result);
            return  $row['id'];
        }
    }











    //*******************************************End 20-02-2022*************************************************** */

    public function existance_finder_individual($ssn, $NationalIdNumber,  $EmailAddress, $DriverslicenceNumber, $PassportNumber)
    {
        if ($this->existance_finder('individuals', 'id', 'national_id', $NationalIdNumber)) {

            $individuals_id = $this->existance_finder('individuals', 'id', 'national_id', $NationalIdNumber);
            return 'national_id';
        } elseif ($this->existance_finder('individuals', 'id', 'ssn', $ssn)) {

            $individuals_id = $this->existance_finder('individuals', 'id', 'ssn', $ssn);
            return 'ssn';
        } elseif ($this->existance_finder('individuals', 'id', 'drivers_licence', $DriverslicenceNumber)) {

            $individuals_id = $this->existance_finder('individuals', 'id', 'drivers_licence', $DriverslicenceNumber);
            return 'drivers_licence';
        } elseif ($this->existance_finder('individuals', 'id', 'passport_number', $PassportNumber)) {

            $individuals_id = $this->existance_finder('individuals', 'id', 'passport_number', $PassportNumber);
            return 'passport_number';
        } else {
            return 0;
        }
    }



    public function set_sweet_alert($title,  $msg,  $type)
    {
        $alert_var = array($title,  $msg,  $type);
        $_SESSION['alert'] = $alert_var;
    }

    public function display_sweet_alert()
    {

        echo '
   <button type="button" hidden id="alert_custom" class="btn btn-primary"> </button>


 <script> 
    
    const button = document.getElementById("alert_custom");

    button.addEventListener("click", e =>{
        e.preventDefault();
        Swal.fire({
            
            title: "' . $_SESSION['alert'][0] . '",
            text: "' . $_SESSION['alert'][1] . '",
            icon: "' . $_SESSION['alert'][2] . '",
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



    // ********************************09-03-22************************************

    public function _status_table($parent_table_id, $table, $column, $notes, $status)
    {
        $user_id = $this->user_id;
        $date = date('Y-m-d');
        $access_level = $this->access_level;


        $level = $this->existance_finder($table, 'level', $column, $parent_table_id);

        if (!$level) {
            $level = 1;
        } elseif ($level == 3) {
            $level = 3;
        } else {
            $level += 1;
        }



        $sql = "INSERT INTO `$table`(`id`, `$column`, `user_id`, `date`, `notes`, `level`, `status`) VALUES ( null, '$parent_table_id', '$user_id', '$date', '$notes', '$level ', '$status')";

        return $this->db_query_obj->sql_insert_qury("$sql");
    }





    // register priviledges

    // 12-03-22 **********************************************************************************


    public function generate_password_reset_ticket($user_email)
    {
        $ticket_num = rand(10000, 99999);


        $sql = "UPDATE `users_admin` SET `password_reset_ticket_num`= $ticket_num   WHERE users_admin.user_email = '$user_email' ";
        $update_flag = $this->db_query_obj->sql_update_qury("$sql");


        if ($update_flag) {
            // email body ********************

            $subject = 'Password Reset Ticket';
            $body = 'Ticket Number #PR-' . $ticket_num . ' was generated for your password request. Please provide this ticket number to the System Administrator.';
            $email_to = $user_email;


            $this->mail->send_email($subject, $body, $email_to);

            return $ticket_num;
        } else {
            return 0;
        }
    }

    //code will be modified to match the system requirements
    public function get_priviledge_count($user_id)
    {
        $sql2 = "SELECT `id`, `user_id`, `fund_id`, SUM( `create_fund`+`fund_details`+ `membership_rules`+ `contribution_rules`+ `claim_rules`+ `dependent_types`+ `directors`+ `contribution_history`+ `contribution_upload`+ `employess`+ `invoices`+ `payments_history`+ `process_payment`+ `register_employee`+ `membership_detail`+ `employment_details`+ `contribution_table`+ `log_a_claim`+ `logged_claims`+ `registered_claims`+ `checked_claims`+ `authorised_claims`+ `benefit_report`+ `run_billing`+ `reconciliation`+ `billing_history`+ `rejected_claims`+ `billing_report`+ `banks`+ `bank_account_types`+ `bank_branches`+ `business_classes`+ `cities`+ `claim_types`+ `client_types`+ `communication_type`+ `company_type`+ `countries`+ `dependent_type`+ `director_types`+ `financial_year`+ `fund_branches`+ `gender`+ `industry_code`+ `marital-status`+ `occupation`+ `months`+ `relationship_type`+ `region`+ `scheme_type`+ `tax_tables`+ `tittle`+ `user_branches`+ `user_groups`+`select_scheme`+ `admin_new_accounts`+ `admin_active_account`+`admin_deactivate_account`+ `portal_new_account`+ `portal_active_account`+ `portal_deactivate_account`) as user_privi FROM `user_priviledges` WHERE user_id = $user_id";

        return $this->db_query_obj
            ->sql_qury("$sql2");
    }





    // ******************************************************************************************************
    // ************************************************************************************************************

    //register user method
    public function register_user($username, $user_email, $branch, $client_id, $access_level_id, $user_group)
    {

        $otp_password = random_int(100000, 999999);
        $otp_pin = random_int(10000, 99999);
        $fund_id  = $this->fund_id;

        $sql3 = "INSERT INTO `users_admin`( `fund_id`,`username`, `user_email`, `password`, `branch`, `password_reset_flag`, `two_factor_status`, `two_factor_pin`, `client_id`, `account_status`, `user_group`, `new_account_flag`,`access_level_id`) VALUES ('$fund_id','$username','$user_email','$otp_password','$branch',1,1,'$otp_pin','$client_id',0,'$user_group',1,'$access_level_id')";

        $results_reg_user = $this->db_query_obj->sql_insert_qury("$sql3");

        return $results_reg_user;
    }

    // public function to return attributes of a check box
    public function check_box_attributes($val)
    {
        if ($val == 1) {
            return 'checked';
        }
        return "";
    }


    // get user priviledge data  and return attributes of a check box;
    public function get_priviledge_data_check_box_attributes($user_id)
    {
        $sql2 = "SELECT `id`, `user_id`, `fund_id`, `create_fund`, `fund_details`, `membership_rules`, `contribution_rules`, `claim_rules`, `dependent_types`, `directors`, `contribution_history`, `contribution_upload`, `employess`, `invoices`, `payments_history`, `process_payment`, `register_employee`, `membership_detail`, `employment_details`, `contribution_table`, `log_a_claim`, `logged_claims`, `registered_claims`, `checked_claims`, `authorised_claims`, `benefit_report`, `run_billing`, `reconciliation`, `billing_history`, `rejected_claims`, `billing_report`, `banks`, `bank_account_types`, `bank_branches`, `business_classes`, `cities`, `claim_types`, `client_types`, `communication_type`, `company_type`, `countries`, `dependent_type`, `director_types`, `financial_year`, `fund_branches`, `gender`, `industry_code`, `marital-status`, `occupation`, `months`, `relationship_type`, `region`, `scheme_type`, `tax_tables`, `tittle`, `user_branches`, `user_groups`,`select_scheme`, `admin_new_accounts`, `admin_active_account`, `admin_deactivate_account`, `portal_new_account`, `portal_active_account`, `portal_deactivate_account` FROM `user_priviledges` WHERE `user_id` = $user_id ";

        $results = $this->db_query_obj
            ->sql_qury("$sql2");
        if (!$results) {
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
        $create_fund = isset($data['create_fund']) ? 1 : 0;
        $fund_details = isset($data['fund_details']) ? 1 : 0;
        $membership_rules = isset($data['membership_rules']) ? 1 : 0;
        $contribution_rules = isset($data['contribution_rules']) ? 1 : 0;
        $dependent_types =  isset($data['dependent_types']) ? 1 : 0;
        $directors = isset($data['directors']) ? 1 : 0;
        $contribution_history = isset($data['contribution_history']) ? 1 : 0;
        $contribution_upload = isset($data['contribution_upload']) ? 1 : 0;
        $employess = isset($data['employess']) ? 1 : 0;
        $invoices = isset($data['invoices']) ? 1 : 0;
        $payments_history = isset($data['payments_history']) ? 1 : 0;
        $process_payment = isset($data['process_payment']) ? 1 : 0;
        $register_employee = isset($data['register_employee']) ? 1 : 0;
        $membership_detail = isset($data['membership_detail']) ? 1 : 0;
        $employment_details = isset($data['employment_details']) ? 1 : 0;
        $contribution_table = isset($data['contribution_table']) ? 1 : 0;
        $log_a_claim = isset($data['log_a_claim']) ? 1 : 0;
        $logged_claims = isset($data['logged_claims']) ? 1 : 0;
        $registered_claims = isset($data['registered_claims']) ? 1 : 0;
        $checked_claims = isset($data['checked_claims']) ? 1 : 0;
        $authorised_claims = isset($data['authorised_claims']) ? 1 : 0;
        $benefit_report = isset($data['benefit_report']) ? 1 : 0;
        $run_billing = isset($data['run_billing']) ? 1 : 0;
        $reconciliation = isset($data['reconciliation']) ? 1 : 0;
        $billing_history = isset($data['billing_history']) ? 1 : 0;
        $rejected_claims = isset($data['rejected_claims']) ? 1 : 0;
        $billing_report = isset($data['billing_report']) ? 1 : 0;
        $banks = isset($data['banks']) ? 1 : 0;
        $bank_account_types = isset($data['bank_account_types']) ? 1 : 0;
        $bank_branches = isset($data['bank_branches']) ? 1 : 0;
        $business_classes = isset($data['business_classes']) ? 1 : 0;
        $cities = isset($data['cities']) ? 1 : 0;
        $claim_types = isset($data['claim_types']) ? 1 : 0;
        $client_types = isset($data['client_types']) ? 1 : 0;
        $communication_type = isset($data['communication_type']) ? 1 : 0;
        $company_type = isset($data['company_type']) ? 1 : 0;
        $countries = isset($data['countries']) ? 1 : 0;
        $countries = isset($data['dependent_type']) ? 1 : 0;
        $director_types = isset($data['director_types']) ? 1 : 0;
        $financial_year = isset($data['financial_year']) ? 1 : 0;
        $fund_branches = isset($data['fund_branches']) ? 1 : 0;
        $gender = isset($data['gender']) ? 1 : 0;
        $industry_code = isset($data['industry_code']) ? 1 : 0;
        $marital_status = isset($data['marital-status']) ? 1 : 0;
        $occupation = isset($data['occupation']) ? 1 : 0;
        $months = isset($data['months']) ? 1 : 0;
        $relationship_type = isset($data['relationship_type']) ? 1 : 0;
        $region = isset($data['region']) ? 1 : 0;
        $tax_tables = isset($data['tax_tables']) ? 1 : 0;
        $tittle = isset($data['tittle']) ? 1 : 0;
        $user_branches = isset($data['user_branches']) ? 1 : 0;
        $user_groups = isset($data['user_groups']) ? 1 : 0;
        // added attbts
        $dependent_type = isset($data['dependent_type']) ? 1 : 0;
        $scheme_type = isset($data['scheme_type']) ? 1 : 0;
        $claim_rules  = isset($data['claim_rules']) ? 1 : 0;
        $select_scheme  = isset($data['select_scheme']) ? 1 : 0;
        $admin_new_accounts  = isset($data['admin_new_accounts']) ? 1 : 0;
        $admin_active_account  = isset($data['admin_active_account']) ? 1 : 0;
        $admin_deactivate_account  = isset($data['admin_deactivate_account']) ? 1 : 0;
        $portal_new_account  = isset($data['portal_new_account']) ? 1 : 0;
        $portal_active_account  = isset($data['portal_active_account']) ? 1 : 0;
        $portal_deactivate_account  = isset($data['portal_deactivate_account']) ? 1 : 0;






        //update quuery
        $sql2 = "UPDATE `user_priviledges` SET `create_fund`='$create_fund',`fund_details`='$fund_details',`membership_rules`='$membership_rules',`contribution_rules`='$contribution_rules',`claim_rules`='$claim_rules',`dependent_types`='$dependent_types',`directors`='$directors',`contribution_history`='$contribution_history',`contribution_upload`='$contribution_upload',`employess`='$employess',`invoices`='$invoices',`payments_history`='$payments_history',`process_payment`='$process_payment',`register_employee`='$register_employee',`membership_detail`='$membership_detail',`employment_details`='$employment_details',`contribution_table`='$contribution_table',`log_a_claim`='$log_a_claim',`logged_claims`='$logged_claims',`registered_claims`='$registered_claims',`checked_claims`='$checked_claims',`authorised_claims`='$authorised_claims',`benefit_report`='$benefit_report',`run_billing`='$run_billing',`reconciliation`='$reconciliation',`billing_history`='$billing_history',`rejected_claims`='$rejected_claims',`billing_report`='$billing_report',`banks`='$banks',`bank_account_types`='$bank_account_types',`bank_branches`='$bank_branches',`business_classes`='$business_classes',`cities`='$cities',`claim_types`='$claim_types',`client_types`='$client_types',`communication_type`='$communication_type',`company_type`='$company_type',`countries`='$countries',`dependent_type`='$dependent_type',`director_types`='$director_types',`financial_year`='$financial_year',`fund_branches`='$fund_branches',`gender`='$gender',`industry_code`='$industry_code',`marital-status`='$marital_status',`occupation`='$occupation',`months`='$months',`relationship_type`='$relationship_type',`region`='$region',`scheme_type`='$scheme_type',`tax_tables`='$tax_tables',`tittle`='$tittle',`user_branches`='$user_branches',`user_groups`='$user_groups' ,`select_scheme`='$select_scheme',`admin_new_accounts`='$admin_new_accounts',`admin_active_account`='$admin_active_account',`admin_deactivate_account`='$admin_deactivate_account',`portal_new_account`='$portal_new_account',`portal_active_account`='$portal_active_account',`portal_deactivate_account`='$portal_deactivate_account' WHERE
        `user_id` = $user_id ";


        return $this->db_query_obj->sql_update_qury("$sql2");
    }



    // activate deactivate admin accounts

    public function approve_new_admin_user($user_id)
    {

        $sql = "UPDATE   `users_admin` set  `new_account_flag`=0,`account_status`=1 WHERE users_admin.id = $user_id";
        $result = $this->db_query_obj->sql_update_qury("$sql");
    }


    public function deactivate_admin_user($user_id)
    {
        $sql = "UPDATE   `users_admin` set   `account_status`=0  WHERE users_admin.id = $user_id";
        $result = $this->db_query_obj->sql_update_qury("$sql");
    }

    public function activate_admin_user($user_id)
    {
        $sql = "UPDATE   `users_admin` set   `account_status`=1  WHERE users_admin.id = $user_id";
        $result = $this->db_query_obj->sql_update_qury("$sql");
    }




    // code will be modified to match the system requirements
    public function set_user_previledges($user_id)
    {
        $fund_id = $this->fund_id;
        $val = false;

        $sql2 = "INSERT INTO `user_priviledges`(`user_id`, `fund_id`, `create_fund`, `fund_details`, `membership_rules`, `contribution_rules`, `claim_rules`, `dependent_types`, `directors`, `contribution_history`, `contribution_upload`, `employess`, `invoices`, `payments_history`, `process_payment`, `register_employee`, `membership_detail`, `employment_details`, `contribution_table`, `log_a_claim`, `logged_claims`, `registered_claims`, `checked_claims`, `authorised_claims`, `benefit_report`, `run_billing`, `reconciliation`, `billing_history`, `rejected_claims`, `billing_report`, `banks`, `bank_account_types`, `bank_branches`, `business_classes`, `cities`, `claim_types`, `client_types`, `communication_type`, `company_type`, `countries`, `dependent_type`, `director_types`, `financial_year`, `fund_branches`, `gender`, `industry_code`, `marital-status`, `occupation`, `months`, `relationship_type`, `region`, `scheme_type`, `tax_tables`, `tittle`, `user_branches`, `user_groups`) VALUES ('$user_id','$fund_id','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val','$val')";

        return $results = $this->db_query_obj
            ->sql_insert_qury("$sql2");
    }
    // 12-03-22 **********************************************************************************
    public function  reset_user_admin($user_id, $new_password)
    {
        $sql = "UPDATE `users_admin` SET `password`='$new_password' , `password_reset_flag`= 0 WHERE users_admin.id = $user_id ";


        return  $this->db_query_obj->sql_update_qury("$sql");
    }




    // function to update individual details
    public function update_individual($client_id, $title, $first_name, $middle_name, $last_name, $marital_status, $nationality, $citizenship, $AddresslLine1, $AddresslLine2, $city, $country, $MobileNumber, $telephone, $email, $drivers_licence, $passport)
    {


        $sql2 = "UPDATE `individuals` SET `title`='$title',`first_name`='$first_name',`middle_name`='$middle_name',`last_name`='$last_name',`marital_status`='$marital_status',`nationality`='$nationality',`citizenship`='$citizenship',`address_line1`='$AddresslLine1',`address_line2`='$AddresslLine2',`city`='$city',`country`='$country',`mobile_number`='$MobileNumber',`telephone_number`='$telephone',`email_address`='$email',`drivers_licence`='$drivers_licence',`passport_number`='$passport' WHERE id = $client_id";

        return $results = $this->db_query_obj
            ->sql_update_qury("$sql2");
    }

    // update user details
    public function update_users($user, $username, $email, $user_group, $user_level)
    {


        $sql2 = "UPDATE `users_admin` SET `username`='$username',`user_email`='$email', `user_group`='$user_group' ,`access_level_id`='$user_level' WHERE id = $user";

        $results = $this->db_query_obj->sql_update_qury("$sql2");
        return $results;
    }


    // reset pins for all users in the system
    public function generate_new_two_factor_pins()
    {



        $sql = "SELECT user_email FROM `users_admin` WHERE new_account_flag = 0 and account_status = 1";
        $emails_results = $this->db_query_obj->sql_qury("$sql");


        if ($emails_results) {

            // fetch emails and send emails
            while ($email = mysqli_fetch_assoc($emails_results)) {
                // email body ********************
                $new_pin = rand(10000, 99999);
                $subject = 'New Two Factor Pin';
                $body = 'New Two Factor Authentication Number #NSSA-' . $new_pin . ' was generated. Please provide this pin number everytime you log in to the system.';
                $email_to = $email['user_email'];


                $mail_send = $this->mail->send_email($subject, $body, $email_to);
                print_r($mail_send);

                // save the pins to database
                $sql_update = "UPDATE `users_admin` SET `two_factor_pin`='$new_pin' WHERE user_email = '$email_to' ";
                $results_update = $this->db_query_obj->sql_update_qury("$sql_update");
            }




            return true;
        } else {
            return 0;
        }
    }


    // reset pins for all users in the system
    public function generate_new_password($ticket_pin, $admin_id)
    {

        $sql = "SELECT * FROM `users_admin` WHERE id = $admin_id and password_reset_ticket_num = '$ticket_pin' ";
        $admin_user_results = $this->db_query_obj->sql_qury("$sql");
        //    if found
        if ($admin_user_results) {
            // reset password
            $new_password = rand(10000000, 99999999);
            $sql_update = "UPDATE `users_admin` SET `password_reset_flag`=1, `password`='$new_password' WHERE id = $admin_id ";
            $results_update = $this->db_query_obj->sql_update_qury("$sql_update");




            // send the results to the email
            $subject = 'Password Reset';
            $body = 'Your request for password reset has been processed. Below is your one time password to entere and reset it to something you can remember: <br>' . $new_password;
            $email_to = mysqli_fetch_assoc($admin_user_results)['user_email'];


            $mail_send = $this->mail->send_email($subject, $body, $email_to);
            return 1;
        } else {
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
                        title: "' . $alert_title . '",
                        text: "' . $alert_msg . '",
                        icon: "' . $icon . '",
                        buttonsStyling: false,
                        confirmButtonText: "' . $btn_txt . '",
                        customClass: {
                            confirmButton: "' . $btn_style . '"
                        }
                    });
            
                 
            });
                    
                   
             
             
        </script>


        ';
    }

    // create user account
    public function create_new_user($first_name, $last_name, $nat_id, $phone_number, $username, $user_email, $password, $user_group, $access_level_id){

        $account_status = 1;

        $sql3 = "INSERT INTO `users_admin`(`first_name`, `last_name`, `nat_id`, `phone_number`, `username`, `user_email`, `password`, `account_status`, `user_group`, `access_level_id`) VALUES ('$first_name', '$last_name', '$nat_id', '$phone_number', '$username', '$user_email', '$password','$account_status', '$user_group', '$access_level_id')";

        $results_reg_user = $this->db_query_obj->sql_insert_qury("$sql3");

        return $results_reg_user;
    }
}
