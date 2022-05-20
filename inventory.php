<!DOCTYPE html>


<html lang="en">
<!--begin::Head-->

<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>


   <?php
   require 'includes/admin/head.php';
   page_validation($user_id, $db_query_obj, 'inventory');
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
               if ($_GET['action'] == 'products') {

                  require 'views/inventory/products.php';
               } elseif ($_GET['action'] == 'delete_product') {

                  require 'views/inventory/delete_product.php';
               } elseif ($_GET['action'] == 'single_prod_stats') {

                  require 'views/inventory/single_prod_stats.php';
               } elseif ($_GET['action'] == 'all_products') {

                  require 'views/inventory/all_products.php';
               } elseif ($_GET['action'] == 'prod_stats_overall') {

                  require 'views/inventory/prod_stats_overall.php';
               } elseif ($_GET['action'] == 'categories') {

                  require 'views/inventory/categories.php';
               } elseif ($_GET['action'] == 'add_product') {

                  require 'views/inventory/add_product.php';
               } elseif ($_GET['action'] == 'all_categories') {

                  require 'views/inventory/all_categories.php';
               } elseif ($_GET['action'] == 'add_category') {

                  require 'views/inventory/add_category.php';
               } elseif ($_GET['action'] == 'edit_category') {

                  require 'views/inventory/edit_category.php';
               } elseif ($_GET['action'] == 'edit_product') {

                  require 'views/inventory/edit_product.php';
               } elseif ($_GET['action'] == 'receive_products') {
                  require 'views/inventory/receive_products.php';
               } elseif ($_GET['action'] == 'variance_analysis') {
                  require 'views/inventory/variance_analysis.php';
               } else {
                  goto _default;
               }
            } else {
               _default:
               require 'views/inventory/products.php';
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