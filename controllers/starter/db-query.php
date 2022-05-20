<?php 

 //__________________________non class______________________________
$sql = "";
$result = $db_query_obj->sql_qury("$sql");

if (!$result)
{
    //error
    
}
else
{
    //Inserted
    while ($row= mysqli_fetch_assoc($result))
    {

    } 
}


 

//____________________classes query __________________________-

$sql = "";
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

    }  

}



 

?>