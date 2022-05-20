<?php

class data_object
{
    private $db_query_obj;
    private $date;

    public function __construct($db_query_obj)
    {
        $this->db_query_obj = $db_query_obj;
        $this->date = date('Y-m-d H:i:s');
    }



    //for single object data *************************
    protected function query_object_array_object($sql, $obj_name = 'profile_data')
    {
        $data = '';
        $jsonData = '';

        $result = $this->db_query_obj->sql_qury("$sql");

        if (!$result) {
            //error             
            $data = "const $obj_name = '{}'; ";
        } else {

            //Inserted
            $obj = mysqli_fetch_object($result);


            $jsonData = json_encode($obj);

            $data = "const $obj_name = $jsonData; ";
        }



        echo "$data";
    }

    //for single object data *************************
    protected function query_single_object($sql, $obj_name = 'profile_data')
    {
        $data = '';
        $jsonData = '';

        $result = $this->db_query_obj->sql_qury("$sql");

        if (!$result) {
            //error             
            $data = "const $obj_name = '{}'; ";
        } else {

            //Inserted
            $obj = mysqli_fetch_object($result);


            $jsonData = json_encode($obj);

            $data = "const $obj_name = $jsonData; ";
        }



        echo "$data";
    }


    // For Tabular data ********************************

    protected function data_query_wt_table_row($sql, $table_id, $table_data, $varName = 'mydata')
    {
        $data = '';
        $jsonData = '';

        $result = $this->db_query_obj->sql_qury("$sql");

        if (!$result) {
            //error 
        } else {
            $count = 0;

            //Inserted
            while ($obj = mysqli_fetch_object($result)) {


                $comma = ',';
                if ($count == 0) {
                    $comma = '';
                }
                $jsonData .= $comma . json_encode($obj);

                $count += 1;
            }
        }

        $data = "const $varName = [$jsonData];";
        echo "<script>$data</script>";

        $this->print_td_wt_table_row($table_id, $table_data, $varName);
    }
    protected function data_query($sql, $table_id, $table_data, $varName = 'mydata')
    {
        $data = '';
        $jsonData = '';

        $result = $this->db_query_obj->sql_qury("$sql");

        if (!$result) {
            //error 
        } else {
            $count = 0;

            //Inserted
            while ($obj = mysqli_fetch_object($result)) {


                $comma = ',';
                if ($count == 0) {
                    $comma = '';
                }
                $jsonData .= $comma . json_encode($obj);

                $count += 1;
            }
        }

        $data = "const $varName = [$jsonData];";
        echo "<script>$data</script>";

        $this->print_td($table_id, $table_data, $varName);
    }

    private function print_td($table_id, $table_data, $varName)
    {
        echo "<script>  
                $(document).ready(function(){                    
                        
                        var employee_data = '';
                        $.each($varName, function(key, value){
                            employee_data += '<tr>';
                            $table_data			
                            employee_data += '</tr>';
                        });
                        $('#$table_id').append(employee_data); 
                });
            </script>
            ";
    }
    private function print_td_wt_table_row($table_id, $table_data, $varName)
    {
        echo "<script>  
                $(document).ready(function(){                    
                        
                        var employee_data = '';
                        $.each($varName, function(key, value){
                          
                            $table_data		
                            employee_data += '</tr>';	
                             
                        });
                        $('#$table_id').append(employee_data); 
                });
            </script>
            ";
    }
}
