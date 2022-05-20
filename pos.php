 <?php $dashboard = 'active'; ?>






<?php $dashboard = 'active'; ?>

<!DOCTYPE html>


<html lang="en">
<!--begin::Head-->

<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>


   <?php
   require 'includes/admin/head.php';
   page_validation($user_id, $db_query_obj, 'pos');
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
               if ($_GET['action'] == 'view_transactions') {
                  require 'views/pos/view_transactions.php';
               } elseif ($_GET['action'] == 'transaction_details') {
                  require 'views/pos/transaction_details.php';
               }else{
                  goto _default;
               }
               
            } else {
               _default:
               require 'views/pos/pos.php';
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