<?php
session_start(); 
 unset($_SESSION['fund_id']) ;
 unset($_SESSION['fund_name']) ;
 
echo '<script>window.location.href="../../SelectFund.php"</script>' ;

?>