<?php

class global_transaction extends data_object
{

    private $db_query_obj;
    private $data_object;
    private $user_id;
    private $date;

    public function __construct($user_id, $db_query_obj, $data_object)
    {
        $this->db_query_obj = $db_query_obj;
        $this->data_object = $data_object;
        $this->user_id = $user_id;
        $this->date = date('Y-m-d H:i:s');
    }

 

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


    public function company_data()
    {

        $sql = "SELECT CONCAT(company_details.name,'<br>',company_details.physical_address,'<br>',company_details.phone_numbers,'<br>',company_details.email) as company_details FROM company_details ORDER BY company_details.id DESC LIMIT 1";

        $this->data_object->query_single_object($sql, 'company_data');
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

    public function month_from_number($number)
    {
        if ($number == 1) {
            return 'Jan';
        } elseif ($number == 2) {
            return 'Feb';
        } elseif ($number == 3) {
            return 'Mar';
        } elseif ($number == 4) {
            return 'Apr';
        } elseif ($number == 5) {
            return 'May';
        } elseif ($number == 6) {
            return 'Jun';
        } elseif ($number == 7) {
            return 'Jul';
        } elseif ($number == 8) {
            return 'Aug';
        } elseif ($number == 9) {
            return 'Sep';
        } elseif ($number == 10) {
            return 'Oct';
        } elseif ($number == 11) {
            return 'Nov';
        } elseif ($number == 12) {
            return 'Dec';
        } else {
            return 0;
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


    public function pos_cart_sum()
    {
        $user_id = $this->user_id;
        $sum_charge = 0;
        $sql = "SELECT pos_cart.price  , pos_cart.quantity FROM pos_cart WHERE pos_cart.user_id = $user_id;";
        $result = $this->db_query_obj->sql_qury("$sql");

        if (!$result) {
            //error

        } else {
            //Inserted
            while ($row = mysqli_fetch_assoc($result)) {

                $sum = $row["price"];
                $quantity = $row["quantity"];
                $line_total =  $sum * $quantity;

                $sum_charge +=  $line_total;
            }
        }

        return $sum_charge;
    }

    public function  pos_prod_finder($product_id)
    {

        $user_id = $this->user_id;
        $sql = "SELECT pos_cart.id FROM pos_cart WHERE pos_cart.product_id = $product_id and pos_cart.user_id =$user_id;";
        $result = $this->db_query_obj->sql_qury("$sql");

        if (!$result) {
            //error
            return 0;
        } else {
            $row = mysqli_fetch_assoc($result);
            return $row["id"];
        }
    }
}
