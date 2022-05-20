<div class="row">
    <div class="card mb-6 mb-xl-9">
        <div class="card-body pt-9 pb-0">
            <!--begin::Details-->
            <div class="d-flex flex-wrap flex-sm-nowrap mb-6">
                <!--begin::Image-->
                <div class="d-flex flex-center flex-shrink-0 bg-light rounded w-100px h-100px w-lg-150px h-lg-150px me-7 mb-4">
                    <img class="mw-50px mw-lg-75px" src="assets/media/avatars/default.jpg" alt="image">
                </div>
                <!--end::Image-->
                <!--begin::Wrapper-->
                <div class="flex-grow-1">
                    <!--begin::Head-->
                    <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                        <!--begin::Details-->
                        <div class="d-flex flex-column">
                            <!--begin::Status-->
                            <div class="d-flex align-items-center mb-1">
                                <a id="customers_customer_name" class="text-gray-800 text-hover-primary fs-2 fw-bolder me-3"></a>
                            </div>
                            <!--end::Status-->
                            <!--begin::Description-->
                            <div id="customers_company_name" class="d-flex flex-wrap fw-bold mb-4 fs-5 text-gray-400"> </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Details-->

                        <!--end::Actions-->
                    </div>
                    <!--end::Head-->
                    <!--begin::Info-->
                    <div class="d-flex flex-wrap justify-content-start">
                        <!--begin::Stats-->
                        <div class="d-flex flex-wrap">
                            <!--begin::Stat-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <!--begin::Number-->
                                <div class="d-flex align-items-center">
                                    <div class="fs-5 fw-bolder" id="customer_code_id"></div>
                                </div>
                                <!--end::Number-->
                                <!--begin::Label-->
                                <div class="fw-bold fs-6 text-gray-400">Customer ID</div>
                                <!--end::Label-->
                            </div>
                            <!--end::Stat-->
                        </div>
                        <!--end::Stats-->
                        <!--begin::Stats-->
                        <div class="d-flex flex-wrap">
                            <!--begin::Stat-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <!--begin::Number-->
                                <div class="d-flex align-items-center">
                                    <div class="fs-5 fw-bolder" id="phone_number_id"></div>
                                </div>
                                <!--end::Number-->
                                <!--begin::Label-->
                                <div class="fw-bold fs-6 text-gray-400">Phone Number</div>
                                <!--end::Label-->
                            </div>
                            <!--end::Stat-->
                        </div>
                        <!--end::Stats-->
                        <!--begin::Stats-->
                        <div class="d-flex flex-wrap">
                            <!--begin::Stat-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <!--begin::Number-->
                                <div class="d-flex align-items-center">
                                    <div class="fs-5 fw-bolder" id="email_address_id"></div>
                                </div>
                                <!--end::Number-->
                                <!--begin::Label-->
                                <div class="fw-bold fs-6 text-gray-400">Email Address</div>
                                <!--end::Label-->
                            </div>
                            <!--end::Stat-->
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Details-->
            <div class="separator"></div>
            <!--begin::Nav-->
            <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
                <!--begin::Nav item-->
                <li class="nav-item">
                    <a id="cl_overview" class="nav-link text-active-primary py-5 me-6 " href="">Overview</a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item">
                    <a id="cl_profile" class="nav-link text-active-primary py-5 me-6" href="">Profile</a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item">
                    <a id="in_profile" class="nav-link text-active-primary py-5 me-6" href="">Inquiries</a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item">
                    <a id="in_orders" class="nav-link text-active-primary py-5 me-6" href="">Orders</a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item">
                    <a id="in_purchases" class="nav-link text-active-primary py-5 me-6" href="">Payments</a>
                </li>
                <!--end::Nav item-->
            </ul>
            <!--end::Nav-->
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);

        const c_id = urlParams.get('c_id');

        <?php
        if (isset($_GET['c_id'])) {
            $c_id = $_GET['c_id'];
        } else {
            $c_id = 0;
        }
        $customers_obj->fetch_customer_details($c_id, 'c_details')
        ?>


        document.getElementById('cl_overview').href = 'customers.php?action=cutomer_details&c_id=' + c_id;
        document.getElementById('cl_profile').href = 'customers.php?action=customer_profile&c_id=' + c_id;
        document.getElementById('in_profile').href = 'customers.php?action=customer_inquires&c_id=' + c_id;
        document.getElementById('in_orders').href = 'customers.php?action=customer_orders&c_id=' + c_id;
        document.getElementById('in_purchases').href = 'customers.php?action=customer_sales&c_id=' + c_id;


        document.getElementById('customers_customer_name').innerHTML = c_details.first_name + ' ' + c_details.last_name + ' ( ' + c_details.company + ' )';
        document.getElementById('customers_company_name').innerHTML = 'Customer Name (Company) ';
        document.getElementById('phone_number_id').innerHTML = c_details.phone_number;
        document.getElementById('email_address_id').innerHTML = c_details.email;
        document.getElementById('customer_code_id').innerHTML = c_details.customer_code;


    });
</script>