 
<!DOCTYPE html>
 
 <html lang="en">
      
 <meta http-equiv="content-type" content="text/html;charset=UTF-8" /> 
 <head>
         
     
         <?php  require ('includes/auth/head.php') ?>
      
 </head>
     <!--end::Head-->
     <!--begin::Body-->
          <body id="kt_body"  class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled auth-bg">
         
      
         <!--begin::Main-->
         <!--begin::Root-->
 
 
 
     <?php 
     
     
     if (isset($_GET['action']))
     {
        if ($_GET['action'] == 'login')
        {
        
           goto login_form; 
        }
        elseif ($_GET['action'] == 'two_factor')
        { 
          
           require 'views/auth/two_factor.php'; 
        }
        elseif ($_GET['action'] == 'reset_password')
        { 
          
           require 'views/auth/reset_password.php'; 
        }
        elseif ($_GET['action'] == 'forgot_password')
        { 
          
           require 'views/auth/forgot_password.php'; 
        } 
         else
         {
            goto login_form;
         }
 
     }
     else
     {
         login_form:
         require 'views/auth/login.php'; 
     }
 
     
     ?>
 
 

 
 
     
         <!--end::Root-->
         <!--end::Main-->
         <!--begin::Javascript-->
          <?php require ('includes/auth/scripts.php') ?> 
              
       
         
     </body>
     <!--end::Body-->
  
 </html>