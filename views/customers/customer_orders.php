<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Customer Orders
                    <!--begin::Separator-->
                    <span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
                    <!--end::Separator-->
                    <!--begin::Description-->
                    <span class="text-muted fs-7 fw-bold mt-2">Home > Customers > Customer Orders </span>
                    <!--end::Description-->
                </h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">

                <!--begin::Primary button-->
                <a href="customers.php" class="btn btn-sm btn-secondary">
                    <li class="fa fa-users"></li>
                    &nbsp; All Customers
                </a>
                <!--end::Primary button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Row-->



            <?php require 'views/customers/includes/menu.php'; ?>

            <div class="row">
                <div class="col-xl-12">
                    <!--begin::Card-->
                    <div class="card">
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin:Search-->
                            <!--end:Search-->

                            <div class="table-responsive">


                                <table class="table table-striped table-row-bordered gy-5 gs-7 border rounded" id="orders_table_id">
                                    <thead>
                                        <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                                            <th class="min-w-100px">Ref #</th>
                                            <th class="min-w-200px">Status</th>
                                            <th class="min-w-200px">Date</th>
                                            <th class="min-w-200px">View</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <!--end::Action-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card-->
                </div>

            </div>
            <!--end::Modals-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>



<?php
if (isset($_GET['c_id'])) {
    $c_id = $_GET['c_id'];
} else {
    $c_id = 0;
}
$jsonData =  $customers_obj->fetch_orders_list($c_id, 'orders_table_id');
?>


<script>
    $(document).ready(function() {


        document.getElementById('orders_table_id').class = 'nav-link text-active-primary py-5 me-6  active';


        //datatable js
        $("#inquires_table_id").DataTable({
            "language": {
                "lengthMenu": "Show _MENU_",
            },
            "dom": "<'row'" +
                "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                ">" +

                "<'table-responsive'tr>" +

                "<'row'" +
                "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                ">"
        });

        document.getElementById('in_orders').classList += ' active';

    });
</script>