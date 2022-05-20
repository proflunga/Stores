<!-- require add controller -->
<?php require 'controllers/customers/add_customer.controller.php'; ?>
<!-- /end of require controller -->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Add New Customers
                    <!--begin::Separator-->
                    <span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
                    <!--end::Separator-->
                    <!--begin::Description-->
                    <span class="text-muted fs-7 fw-bold mt-2">Home > Customers > Add New Cutomer</span>
                    <!--end::Description-->
                </h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">

                <!--end::Primary button-->
                <a href="customers.php" class="btn btn-hover-rise btn-sm btn-secondary">
                    <li class="fa fa-home"></li>&nbsp;Main
                </a>
                <!--end::Primary button-->
                <!--begin::Primary button-->
                <a href="customers.php?action=all_customers" class="btn btn-sm btn-secondary">
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

            <form action="" method="post">

                <div class="row">
                    <div class="col-12">
                        <div class=" card  mt-7">
                            <div class="card-body py-3 mt-7">
                                <div class="input-group mb-5">
                                    <h3>Personal Details</h3>
                                </div>

                                <div class="form-group row g-3">
                                    <div class="row ">
                                        <div class="col-md-4 mb-10">
                                            <label class="form-label"> First Name:</label>
                                            <input required="" type="text" name="first_name" class="form-control  form-control-sm mb-2 mb-md-0">
                                        </div>
                                        <div class="col-md-4 mb-10">
                                            <label class="form-label"> Last Name:</label>
                                            <input required="" type="text" name="last_name" class="form-control  form-control-sm mb-2 mb-md-0">
                                        </div>
                                        <div class="col-md-4 mb-10">
                                            <label class="form-label"> Gender:</label>
                                            <?php
                                            $populate_select_obj->print_select_without_id_desc('description', 'gender', 'class="form-select form-select-sm mb-2" name="gender" data-control="select2" data-placeholder="Select an option" data-allow-clear="true"', 'where 1');
                                            ?>
                                        </div>
                                        <div class="col-md-4 mb-10">
                                            <label class="form-label"> Nationality:</label>
                                            <?php
                                            $populate_select_obj->print_select_without_id_desc('name', 'countries', 'class="form-select mb-2  form-select-sm " name="nationality" data-control="select2" data-placeholder="Select an option" data-allow-clear="true"', 'where 1');
                                            ?>
                                        </div>

                                        <div class="col-md-4 mb-10">
                                            <label class="form-label"> D.O.B:</label>
                                            <input required="" type="date" name="birth_date" class="form-control  form-control-sm mb-2 mb-md-0">
                                        </div>

                                        <div class="col-md-4 mb-10">
                                            <label class="form-label"> ID Number:</label>
                                            <input required="" type="text" name="national_id" class="form-control  form-control-sm mb-2 mb-md-0">
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                    <dov class="col-6">
                        <div class=" card  mt-7">
                            <div class="card-body py-3 mt-7">
                                <h3 class="my-2">Contact Details</h3>
                                <div class="row my-2">
                                    <div class="col-md-6 mb-10">
                                        <label class="form-label"> Address Line 1:</label>
                                        <input required="" type="text" name="address_line1" class="form-control  form-control-sm mb-2 mb-md-0">
                                    </div>
                                    <div class="col-md-6 mb-10">
                                        <label class="form-label"> Address Line 2:</label>
                                        <input type="text" name="address_line2" class="form-control  form-control-sm mb-2 mb-md-0">
                                    </div>
                                    <div class="col-md-6 mb-10">
                                        <label class="form-label"> City:</label>
                                        <?php
                                        $populate_select_obj->print_select_without_id_desc('name', 'cities', 'class="form-select mb-2  form-select-sm " name="city" data-control="select2" data-placeholder="Select an option" data-allow-clear="true"', 'where 1');
                                        ?>
                                    </div>
                                    <div class="col-md-6 mb-10">
                                        <label class="form-label"> Country:</label>
                                        <?php
                                        $populate_select_obj->print_select_without_id_desc('name', 'countries', 'class="form-select mb-2  form-select-sm " name="country" data-control="select2" data-placeholder="Select an option" data-allow-clear="true"', 'where 1');
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-10">
                                        <label class="form-label"> Mobile Number:</label>
                                        <input required="" type="text" name="mobile_number" class="form-control  form-control-sm mb-2 mb-md-0">
                                    </div>
                                    <div class="col-md-6 mb-10">
                                        <label class="form-label"> Email:</label>
                                        <input required="" type="email" name="email" class="form-control  form-control-sm mb-2 mb-md-0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </dov>


                    <div class="col-6">

                        <div class=" card  mt-7">
                            <div class=" card-body py-3 mt-7">
                                <h3 class="my-2">Company Details</h3>

                                <div class="row">
                                    <div class="col-md-12 mb-10">
                                        <label class="form-label"> Company Name:</label>
                                        <input required="" type="text" name="company_name" class="form-control  form-control-sm mb-2 mb-md-0">
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mt-7 mb-10">
                            <div class="d-flex justify-content-start">
                                <button type="submit" name="add_customer" class="btn btn-hover-scale btn-primary"> Add Customer</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>




    </div>
    <!--end::Container-->
</div>
<!--end::Post-->
</div>