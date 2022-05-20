<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>


   <?php
   require 'includes/admin/head.php';
   page_validation($user_id, $db_query_obj, 'manage_users');
   ?>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
   <!--Begin::Google Tag Manager (noscript) -->
   <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
   </noscript>
   <!--End::Google Tag Manager (noscript) -->
   <!--begin::Main-->
   <!--begin::Root-->
   <div class="d-flex flex-column flex-root">
      <!--begin::Page-->
      <div class="page d-flex flex-row flex-column-fluid">
         <!--begin::Aside-->

         <?php require 'includes/admin/side_nav.php'; ?>
         <!--end::Aside-->
         <!--begin::Wrapper-->
         <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Header-->

            <?php require 'includes/admin/header.php'; ?>
            <!--end::Header-->
            <!--begin::Content-->
            <?php

            if (isset($_GET['action'])) {

               if ($_GET['action'] == 'admin_dashboard') {

                  goto _default;
               } elseif ($_GET['action'] == 'admin_new_accounts') {

                  require 'views/usermanagement/admin_new_accounts.php';
               } elseif ($_GET['action'] == 'admin_active_accounts') {

                  require 'views/usermanagement/admin_active_accounts.php';
               } elseif ($_GET['action'] == 'admin_disabled_account') {

                  require 'views/usermanagement/admin_disabled_account.php';
               } elseif ($_GET['action'] == 'admin_profile_dash') {

                  require 'views/usermanagement/admin_profile_dash.php';
               } elseif ($_GET['action'] == 'admin_profile') {

                  require 'views/usermanagement/admin_profile.php';
               } elseif ($_GET['action'] == 'user_priviledges') {

                  require 'views/usermanagement/user_priviledges.php';
               } elseif ($_GET['action'] == 'admin_acc_details') {

                  require 'views/usermanagement/admin_acc_details.php';
               } elseif ($_GET['action'] == 'create_admin_user') {

                  require 'views/usermanagement/create_admin_user.php';
               } elseif ($_GET['action'] == 'admin_change_pin') {

                  require 'views/usermanagement/admin_change_pin.php';
               } elseif ($_GET['action'] == 'admin_acc_status') {

                  require 'views/usermanagement/admin_acc_status.php';
               } else {
                  goto _default;
               }
            } else {
               _default:
               require 'views/usermanagement/admin_dashboard.php';
            }


            ?>
            <!--end::Content-->
            <!--begin::Footer-->

            <!--end::Footer-->
         </div>
         <!--end::Wrapper-->
      </div>
      <!--end::Page-->
   </div>
   <!--end::Root-->
   <!--begin::Drawers-->



   <?php require 'includes/admin/scripts.php'; ?>

   <!--end::Page Custom Javascript-->
   <!--end::Javascript-->
</body>
<!--end::Body-->

</html>