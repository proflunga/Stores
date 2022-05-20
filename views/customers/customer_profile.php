<!-- require update controller -->
<?php require 'controllers/customers/update_customer_profile.php'; ?>
<!-- /end of require controller -->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Customer Profile
                    <!--begin::Separator-->
                    <span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
                    <!--end::Separator-->
                    <!--begin::Description-->
                    <span class="text-muted fs-7 fw-bold mt-2">Home > Customers > Customer Profile </span>
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
                <form action="" method="post">
                    <div class="col-xl-6">
                        <div class="flex-column flex-lg-row-auto mb-10">
                            <!--begin::Card-->
                            <div class="card mb-5  ">
                                <!--begin::Card body-->
                                <div class="card-body pt-15">

                                    <!--begin::Details content-->
                                    <div class="pb-5 fs-6">
                                        <!--begin::Details item-->
                                        <div class="fw-bolder mt-5">Company </div>

                                        <input type="text" name="company_name" id="company_name" class="form-control mb-2" value="" />
                                        <!--begin::Details item-->
                                        <!--begin::Details item-->
                                        <div class="fw-bolder mt-5">Email</div>
                                        <!--begin::Input-->
                                        <input type="text" name="user_email" id="username_id" class="form-control mb-2" value="" />


                                        <!--end::Details content-->
                                        <!--begin::Details item-->
                                        <div class="fw-bolder mt-5">Gender</div>
                                        <!--begin::Input-->
                                        <?php
                                        $populate_select_obj->print_select_without_id_desc('description', 'gender', ' class="form-select mb-5"  name="customer_gender_id" aria-label="Select example"   id="customer_gender_id" ', 'where 1');
                                        ?>


                                        <!--begin::Details item-->
                                        <!--begin::Details item-->
                                        <div class="fw-bolder mt-5">Phone Number</div>
                                        <!--begin::Input-->
                                        <input type="text" name="phone_number" id="phone_number" class="form-control mb-2" value="" />
                                        <!--begin::Address line 1 -->
                                        <div class="fw-bolder mt-5"> Address Line 1</div>
                                        <!--begin::Input-->
                                        <input type="text" name="address_1" id="address_1" class="form-control mb-2" value="" />

                                        <!-- address line2 -->

                                        <div class="fw-bolder mt-5"> Address Line 2</div>
                                        <!--begin::Input-->
                                        <input type="text" name="address_2" id="address_2" class="form-control mb-2" value="" />

                                        <!-- adddress city -->
                                        <div class="fw-bolder mt-5">Address City</div>
                                        <!--begin::Input-->
                                        <?php
                                        $populate_select_obj->print_select_without_id_desc('name', 'cities', ' class="form-select mb-5"  name="city" aria-label="Select example"   id="city_id" ', 'where 1');
                                        ?>


                                        <!--begin::Details item-->
                                        <input type="hidden" id="customer_id" name="c_id">

                                    </div>
                                    <!--end::Card body-->
                                    <div class="mt-5">
                                        <button name="update_profile" class="btn btn-light-primary">Save</button>
                                    </div>
                                </div>
                                <!--end::Card-->
                            </div>
                        </div>

                </form>

            </div>
            <!--end::Modals-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>






<script>
    //get url parameter (c_id)
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);

    const cat_id = urlParams.get('cat_id');


    <?php
    if (isset($_GET['c_id'])) {
        $c_id = $_GET['c_id'];
    } else {
        $c_id = 0;
    }
    $customers_obj->fetch_customer_profile_data($c_id)
    ?>


    //set   href links 
    $(document).ready(function() {

        // document.getElementById('account_id').innerHTML =   'ID:-'+profile_data.id;
        document.getElementById('customer_gender_id').value = profile_data.gender_id;
        document.getElementById('username_id').value = '' + profile_data.email;
        document.getElementById('address_1').value = '' + profile_data.address_line1;
        document.getElementById('address_2').value = '' + profile_data.address_line2;
        document.getElementById('city_id').value = '' + profile_data.address_line_city;
        document.getElementById('phone_number').value = '' + profile_data.phone_number;
        document.getElementById('company_name').value = '' + profile_data.company;

        // get the 
        var get_value = "<?php echo $_GET['c_id']; ?>";
        document.getElementById('customer_id').value = get_value;

        document.getElementById('cl_profile').classList += ' active';


    });
</script>