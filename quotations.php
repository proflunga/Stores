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
    page_validation($user_id, $db_query_obj, 'inquiries');
    ?>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">

    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->

            <?php require 'includes/admin/side_nav.php'; ?>

            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->

                <?php require 'includes/admin/header.php'; ?>

                <?php
                if (isset($_GET['action'])) {
                    if ($_GET['action'] == 'generate_quote') {
                        require 'views/quotations/generate_quote.php';
                    } elseif ($_GET['action'] == 'quotation_details' and isset($_GET['q_id'])) {
                        require 'views/quotations/quotation_details.php';
                    } elseif ($_GET['action'] == 'quotations_list') {
                        require 'views/quotations/quotations_list.php';
                    } elseif ($_GET['action'] == 'view_quotations') {
                        require 'views/quotations/view_quotations.php';
                    } else {

                        goto _default;
                    }
                } else {
                    _default:
                    require 'views/quotations/quotations.php';
                }


                ?>


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