<!-- page header -->
<?php
$catalogue_header = "Category";
require 'includes/catalogue_header.php';
?>
<!-- ed of page header -->




<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Categories
                    <!--begin::Separator-->
                    <span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
                    <!--end::Separator-->
                    <!--begin::Description-->
                    <span class="text-muted fs-7 fw-bold mt-2">Home > Categories</span>
                    <!--end::Description-->
                </h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Primary button-->
                <a href="inventory.php?action=add_category" class="btn btn-sm btn-secondary">
                    <li class="fa fa-plus"></li> Add Category
                </a>
                <!--end::Primary button-->
                <!--begin::Primary button-->
                <a href="inventory.php?action=categories" class="btn btn-sm btn-secondary">
                    <li class="fa fa-home"></li> &nbsp; Main
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

            <!--begin::Post-->
            <div class="post d-flex flex-column-fluid" id="kt_post">
                <!--begin::Container-->
                <div id="kt_content_container" class="container-xxl">
                    <!--begin::Row-->

                    <form action="" method="post">
                        <div class="row mt-5 mb-5">
                            <div class="col-1">

                                <label class="form-label">ID</label>
                                <input type="number" class="form-control" name="name">
                            </div>

                            <div class="col-3">

                                <label class="form-label">Category Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>





                            <div class="col-2">
                                <div class="row">
                                    <label class="form-label">Action</label>
                                </div>
                                <div class="row">
                                    <button class="btn btn-light-primary " name="search_product">
                                        <li class="fa fa-search"></li> &nbsp; Search
                                    </button>
                                </div>

                            </div>
                        </div>
                    </form>

                    <div class="card card-flush shadow-sm">
                        <div class="card-header">
                            <h3 class="card-title fw-bolder">
                                <span class="svg-icon svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor"></path>
                                        <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor"></path>
                                    </svg>
                                </span> &nbsp; Category List
                            </h3>
                        </div>
                        <div class="card-body py-5">
                            <div class="table-responsive">
                                <table class="table align-middle table-row-dashed fs-7 gy-2" id="product_categories">

                                    <thead>
                                        <tr class=" text-gray-400 fw-bolder fs-7 text-uppercase gs-0">

                                            <th class="">id</th>
                                            <th class="">Name</th>
                                            <th class="">Alias</th>
                                            <th class="">Status</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                    <!--end::Modals-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Post-->
            <!--end::Modals-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>


<?php
$jsonData =  $inventory_obj->inv_list_categories('product_categories');
?>

<script>
    $(document).ready(function() {
        $("#product_categories").DataTable({
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
    });
</script>