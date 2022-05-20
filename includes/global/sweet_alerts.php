<?php
   if (isset($_SESSION['sweet_alert_trigger']))
   {
   
       if ($_SESSION['sweet_alert_trigger'] == 'login_alert')
       {
           echo '
      <button type="button" hidden id="sweet_alert" class="btn btn-primary"> </button>
   
   
    <script> 
       
    const button = document.getElementById("sweet_alert");
   
   button.addEventListener("click", e =>{
       e.preventDefault();
   
       Swal.fire({
   		
           title: "Login success",
           text: "You are logged in as @' . $_SESSION['username'] . '",
           icon: "success",
           buttonsStyling: false,
           confirmButtonText: "Continue",
           customClass: {
               confirmButton: "btn  btn-hover-scale  btn-primary"
           }
       });
   });
   
   
   window.onload=function(){
   $("#sweet_alert").click();
   } 
   
   
   
   </script>
      ';
   
       }
       elseif ($_SESSION['sweet_alert_trigger'] == 'scheme_selected')
       {
   
           echo '  

      <button type="button" hidden id="scheme_selected" class="btn btn-primary"> </button>
   
   
    <script> 
       
    const button = document.getElementById("scheme_selected");
   
   button.addEventListener("click", e =>{
       e.preventDefault();
   
       Swal.fire({
   		
           title: "' . $_SESSION['fund_name'] . ' Selected",
           text: "Please note your session will expire after 10min of being inactive and you will be booted out and promted to provide your login credentials.",
           icon: "info",
           buttonsStyling: false,
           confirmButtonText: "Ok",
           customClass: {
               confirmButton: "btn  btn-hover-scale  btn-primary"
           }
       });
   });
   
   
   window.onload=function(){
   $("#scheme_selected").click();
   } 
   
   
   
   </script>
      ';
   
       }
   
       unset($_SESSION['sweet_alert_trigger']);
   }
   
   ?>