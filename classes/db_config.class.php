<?php
class db_config
{
    private $db_servername = "localhost";
    private $db_username = "root";
    private $db_password = "";
    private $db_database = "e_store";

    // Create connection


    protected function db_conncetion()
    {
        $servername = $this->db_servername;
        $username = $this->db_username;
        $password = $this->db_password;
        $database = $this->db_database;

        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
            echo '<script> alert("Connection Error");  </script>';
            echo '<script>window.location.href="error.html"</script>';
            exit();
        }

        return $conn;
    }
}
