<?php
if (isset($_POST['submit'])) {

   if (empty($_POST['username'])) {
      $input1_mgs = 'Username cannot be empty';
   } elseif (empty($_POST['password'])) {
      $input2_mgs = 'Password  cannot be empty';
   } else {
      $username = $_POST["username"];
      $password = $_POST["password"];

      $sql = "SELECT users_admin.user_email ,  users_admin.new_account_flag, users_admin.access_level_id, users_admin.fund_id, users_admin.id, users_admin.username, users_admin.password_reset_flag, users_admin.two_factor_status,users_admin.account_status FROM users_admin WHERE users_admin.username = '$username' AND users_admin.password = '$password';";

      $result = $db_query_obj->sql_qury("$sql");

      if (!$result) {

         $input2_mgs = 'Wrong password or username!';
      } else {
         //Inserted
         $row = mysqli_fetch_assoc($result);

         $user_id = $row['id'];
         $password_reset_flag = $row['password_reset_flag'];
         $new_account_flag =  $row["new_account_flag"];
         $two_factor_status =  $row["two_factor_status"];
         $account_status = $row['account_status'];
         $user_fund_id = $row['fund_id'];
         $user_email = $row['user_email'];
         $access_level_id = $row['access_level_id'];



         require 'includes/level1_sessions_login.php';


         if ($new_account_flag == '1') {
            $input2_mgs = 'Your Account is still waiting approval!';
         } elseif ($account_status == '0') {
            $input2_mgs = 'Your Account has been deactivated (Contact Support Center)';
         } elseif ($password_reset_flag == '1') {
            $page_redirect->redirect_page('auth.php?action=reset_password');
         } elseif ($two_factor_status == '1') {
            $page_redirect->redirect_page('auth.php?action=two_factor');
         } else {


            $page_redirect->redirect_page("dashboard.php");
         }
      }
   }
}

?>

<div class="d-flex flex-column flex-root">
   <!--begin::Authentication - Sign-in -->
   <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(/metronic8/demo2/assets/media/illustrations/sigma-1/14.png">
      <!--begin::Content-->
      <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
         <!--begin::Wrapper-->

         <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
            <!--begin::Form-->
            <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" method="post">
               <!--begin::Heading-->
               <div class="text-center mb-10">
                  <!--begin::Logo-->
                  <?php //require ('includes/auth/logo.php') 
                  ?><br /><br />
                  <!--end::Logo-->
                  <!--begin::Link-->
                  <div class="text-gray-400 fw-bold mb-5 fs-4">Login
                  </div>
                  <!--begin::Title-->
                  <a href="index.php" class="mb-12">
                     <img alt="Logo" src="assets/media/logos/logo-alt.png" class="h-40px">
                  </a>
                  <!--end::Title-->
                  <hr />
                  <!--end::Link-->
               </div>
               <!--begin::Heading-->
               <!--begin::Input group-->
               <div class="fv-row mb-10">
                  <!--begin::Label-->
                  <label class="form-label fs-6 fw-bolder text-dark">Username</label>
                  <!--end::Label-->
                  <!--begin::Input-->
                  <input class="form-control form-control-lg form-control-solid" type="text" name="username" autocomplete="off" />
                  <!--end::Input-->
                  <?php if (isset($input1_mgs)) {
                     echo '<label class="text-danger">' . $input1_mgs . '</label>';
                  } ?>
               </div>
               <!--end::Input group-->
               <!--begin::Input group-->
               <div class="fv-row mb-10">
                  <!--begin::Wrapper-->
                  <div class="d-flex flex-stack mb-2">
                     <!--begin::Label-->
                     <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                     <!--end::Label-->
                     <!--begin::Link-->
                     <a href="auth.php?action=forgot_password" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
                     <!--end::Link-->
                  </div>
                  <!--end::Wrapper-->
                  <!--begin::Input-->
                  <input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" />
                  <?php if (isset($input2_mgs)) {
                     echo '<label class="text-danger">' . $input2_mgs . '</label>';
                  } ?>
                  <!--end::Input-->
               </div>
               <!--end::Input group-->
               <!--begin::Actions-->
               <div class="text-center">
                  <!--begin::Submit button-->
                  <!--id="kt_sign_in_submit"-->
                  <button name="submit" type="submit" class="btn btn-lg btn-primary w-100 mb-5">
                     <span class="indicator-label">Sign in</span>
                     <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                  </button>
                  <!--end::Submit button-->
                  <!--end::Google link-->
               </div>
               <!--end::Actions-->
            </form>
            <!--end::Form-->
         </div>
         <!--end::Wrapper-->
      </div>
      <!--end::Content-->
      <!--begin::Footer-->
      <!--end::Footer-->
   </div>
   <!--end::Authentication - Sign-in-->
</div>