 <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
     <!--begin::Toolbar-->
     <div class="toolbar" id="kt_toolbar">
         <!--begin::Container-->
         <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
             <!--begin::Page title-->
             <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                 <!--begin::Title-->
                 <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Quotation Details
                     <!--begin::Separator-->
                     <span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
                     <!--end::Separator-->
                     <!--begin::Description-->
                     <span class="text-muted fs-7 fw-bold mt-2">Home > Quotations > Quotation Details</span>
                     <!--end::Description-->
                 </h1>
                 <!--end::Title-->
             </div>
             <!--end::Page title-->
             <!--begin::Actions-->
             <div class="d-flex align-items-center gap-2 gap-lg-3">

                 <a href="#" onclick="history.back();" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app"> <i class="fa fa-arrow-left"></i> back</a>
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

             <div class="row">
                 <div class="col-xl-3">
                     <!-- begin::Action-->
                     <div class="card">
                         <div class="card-body">
                             Status: <div id="status_inq_id"></div>

                             <a href="#" class="">
                                 <div class="menu-item mb-3 bg-light  bg-hover-secondary text-dark my-10">
                                     <!--begin::Sent-->
                                     <span class="menu-link">
                                         <span class="menu-icon">
                                             <!--begin::Svg Icon | path: icons/duotune/general/gen016.svg-->
                                             <span class="svg-icon svg-icon-2 me-3">
                                                 <li class="fa fa-print"></li>
                                             </span>
                                             <!--end::Svg Icon-->
                                         </span>
                                         <span class="menu-title fw-bolder">Print Quotation</span>
                                     </span>
                                     <!--end::Sent-->
                                 </div>

                             </a>

                         </div>
                     </div>
                     <!-- end::Action-->
                 </div>
                 <div class="col-xl-9">
                     <div class="card " style=" width: 210mm;  ">
                         <!-- begin::Body-->
                         <div class="card-body py-20">
                             <!-- begin::Wrapper-->
                             <div class="mw-lg-950px mx-auto w-100">
                                 <!-- begin::Header-->
                                 <div class="d-flex justify-content-between flex-column flex-sm-row mb-10">
                                     <h4 class="fw-boldest text-gray-800 fs-2qx pe-5 pb-7">QUOTATION <span class="text-gray-800"></span></h4>

                                     <!--end::Logo-->
                                     <div class=" ">
                                         <div class="text-sm-end text-gray-800 ">
                                             <div class="fw-bold fs-5" id="company_details_id"> </div>

                                         </div>
                                     </div>

                                 </div>
                                 <!--end::Header-->
                                 <div class="row my-5">

                                     <div class="fw-bolder fs-6">Customer Details </div>
                                     <div class="text-dark" id="customer_dets_id"> </div>
                                 </div>
                                 <div class="row ">
                                     <div class="col-xl-3 ">

                                         <span class="text-dark fw-bolder">Quotation No.</span><br>
                                         <span class="fs-7" id="quote_number_id"></span>
                                     </div>
                                     <div class="col-xl-3 ">

                                         <span class="text-dark fw-bolder">Payment Method</span><br>
                                         <span class="fs-7" id="payment_method_id"></span>
                                     </div>
                                     <div class="col-xl-3 ">

                                         <span class="text-dark fw-bolder">Sales Rep</span><br>
                                         <span class="fs-7" id="sales_rep_id"></span>
                                     </div>
                                     <div class="col-xl-3 ">
                                         <span class="text-dark fw-bolder">Date</span><br>
                                         <span class="fs-7" id="date_inq_id">-</span>
                                     </div>
                                 </div>



                                 <div class="table-responsive border-bottom mb-14  mt-10">
                                     <table class="table table-striped fs-7" id="quotation_products_table">
                                         <thead class="bg-secondary   ">
                                             <tr class="border-bottom fw-bolder text-uppercase">
                                                 <th class="  text-left">&nbsp;&nbsp; Name</th>
                                                 <th class="  text-left"> Code</th>
                                                 <th class="   ">Quantity</th>
                                                 <th class="   ">Price</th>
                                                 <th class="   text-end   ">Line Total &nbsp;&nbsp;</th>
                                             </tr>
                                         </thead>
                                         <tbody>


                                         </tbody>

                                     </table>
                                 </div>

                                 <div class="row">
                                     <div class="col-xl-12">
                                         <span class="fs-6 " id="notes_id"></span>
                                     </div>
                                 </div>



                             </div>
                             <!-- end::Body-->
                         </div>
                         <!--end::Modals-->
                     </div>
                 </div>
             </div>

         </div>
         <!-- end::Wrapper-->
     </div>
     <!--end::Post-->
 </div>




 <?php

    if (isset($_GET['q_id'])) {
        $q_id = $_GET['q_id'];
    } else {
        $q_id = 0;
    }


    $jsonData =  $quotations_obj->fetch_quotation_products('quotation_products_table', $q_id);
    ?>

 <script>
     // A $( document ).ready() block.
     $(document).ready(function() {
         //get url parameter (inq_id)
         const queryString = window.location.search;
         const urlParams = new URLSearchParams(queryString);

         const inq_id = urlParams.get('inq_id');

         <?php
            if (isset($_GET['q_id'])) {
                $q_id = $_GET['q_id'];
            } else {
                $q_id = 0;
            }
            $quotations_obj->fetch_quote_data($q_id);

            $global_transaction->company_data($q_id);
            ?>


         document.getElementById('customer_dets_id').innerHTML = quote_data.customer_details;
         document.getElementById('quote_number_id').innerHTML = quote_data.quotation_number;
         document.getElementById('date_inq_id').innerHTML = quote_data.date;
         document.getElementById('payment_method_id').innerHTML = quote_data.payment_method;
         document.getElementById('sales_rep_id').innerHTML = quote_data.sales_rep;
         document.getElementById('company_details_id').innerHTML = company_data.company_details;
         document.getElementById('notes_id').innerHTML = quote_data.notes;

     });
 </script>