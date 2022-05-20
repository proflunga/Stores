<?php

class populate_select extends db_config
{
    private $conn;
    public function __construct($db_query_obj)
    {
        $this->db_query_obj = $db_query_obj;
    }

    // print Identification Types
    public function print_select($table_name, $select_attributes, $where_clause)
    {

        $sql = "SELECT $table_name.id, $table_name.description FROM $table_name   $where_clause";


        $this->select_printer($select_attributes, $sql, 'id', 'description');
    }


    // print Identification Types
    public function print_select_with_non_id_return_value($colum_desc, $table_name, $select_attributes, $return_column)
    {

        $sql = "SELECT $table_name.$return_column, $table_name.$colum_desc FROM $table_name   ";

        $this->select_printer($select_attributes, $sql, "$return_column", $colum_desc);
    }


    public function print_select_without_id_desc($colum_desc, $table_name, $select_attributes, $where_clause)
    {

        $sql = "SELECT $table_name.id, $table_name.$colum_desc FROM $table_name   $where_clause";

        $this->select_printer($select_attributes, $sql, 'id', $colum_desc);
    }
    // print Identification Types
    public function print_select_for_render($colum_desc, $table_name, $select_attributes, $where_clause, $selected_option)
    {

        $sql = "SELECT $table_name.id, $table_name.$colum_desc FROM $table_name   $where_clause";

        $this->select_printer_render($select_attributes, $sql, 'id', $colum_desc, $selected_option);
    }


    //this funtion does the actual printing
    private function select_printer_render($select_attributes, $sql, $index1, $index2, $selected_option)
    {

        $conn = $this->conn;

        $result = $this->db_query_obj->sql_qury("$sql");

        echo '<select ' . $select_attributes . ' >';

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

                if ($selected_option ==  $row["id"]) {

                    // option value as opt_val and option ptrint as opt_print
                    $value =  $row["$index1"];
                    $title = $row["$index2"];
                    echo '<option selected value="' . $value . '">' . $title . '</option>';
                } else {




                    $value =  $row["$index1"];
                    $title = $row["$index2"];
                    echo '<option value="' . $value . '">' . $title . '</option>';
                }
            }
        }
        echo ' </select>';
    }

    // printselect with more than one attrribute
    public function print_select_with_more_columns($table_columns, $table_name, $print_column, $select_attributes, $where_clause)
    {

        $sql = "SELECT $table_columns FROM $table_name  $where_clause";

        $this->select_printer($select_attributes, $sql, 'id', $print_column);
    }



    //this funtion does the actual printing
    private function select_printer($select_attributes, $sql, $index1, $index2)
    {
        $result = $this->db_query_obj->sql_qury("$sql");

        echo '<select  ' . $select_attributes . '   >';
        echo '<option selected="selected" disabled="disabled" value="">Choose...</option>';

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

                $value =  $row["$index1"];
                $title = $row["$index2"];
                echo '<option value="' . $value . '">' . $title . '</option>';
            }
        }





        echo ' </select>';
    }
}
