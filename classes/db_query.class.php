<?php

class db_query extends db_config
{
    private $conn;

    public function __construct()
    {

        $this->conn = $this->db_conncetion();
    }

    public function sql_qury($sql_string)
    {

        $sql = "$sql_string";

        //checking connection
        if ($this->conn == false)
        {
            return 0;
        }
        else
        {
            $result = mysqli_query($this->conn, $sql);
            //Error handling for query
            if ($result)
            {
                $resultCheck = mysqli_num_rows(mysqli_query($this->conn, $sql));

                //checking results
                if ($resultCheck == 0)
                {
                    goto return_null;

                }
                else
                {

                    return $result;

                }

            }
            else
            {
                return_null:
                return 0;
            }
        }

    }

    // insert query method
    
    
    public function sql_insert_qury($sql_string1)
    {

        $sql = "$sql_string1";

        //checking connection
        if ($this->conn == false)
        {
            return 0;
        }
        else
        {
            $result = mysqli_query($this->conn, $sql);
            //Error handling for query
            if ($result)
            {
               return mysqli_insert_id($this->conn);

            }
            else
            {
                return 0;
            }
        }

    }

    // db update query class
    public function sql_update_qury($sql_string1){
        $sql = "$sql_string1";
        

        //checking connection
        if ($this->conn == false)
        {
            return 0;
        }
        else
        {
            $result = mysqli_query($this->conn, $sql);
            //Error handling for query
            if ( $this->conn -> affected_rows )
            {
               return 1;

            }
            else
            {
                return 0;
            }
        }

    }

     // db delete query function
     public function sql_delete_qury($sql_string1)
     {
        $sql = "$sql_string1";
        

        //checking connection
        if ($this->conn == false)
        {
            return 0;
        }
        else
        {
            $result = mysqli_query($this->conn, $sql);
            //Error handling for query
            if ( $this->conn -> affected_rows )
            {
               return 1;

            }
            else
            {
                return 0;
            }
        }

    }
}

?>
