 <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
     <!--begin::Toolbar-->
     <div class="toolbar" id="kt_toolbar">
         <!--begin::Container-->
         <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
             <!--begin::Page title-->
             <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                 <!--begin::Title-->
                 <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Invoice Details
                     <!--begin::Separator-->
                     <span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
                     <!--end::Separator-->
                     <!--begin::Description-->
                     <span class="text-muted fs-7 fw-bold mt-2">Home > Invoices > Invoice Details</span>
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

             <div class="card">
                 <!-- begin::Body-->
                 <div class="card-body py-20">
                     <!-- begin::Wrapper-->
                     <div class="mw-lg-950px mx-auto w-100">
                         <!-- begin::Header-->
                         <div class="d-flex justify-content-between flex-column flex-sm-row mb-19">
                             <h4 class="fw-boldest text-gray-800 fs-2qx pe-5 pb-7">INVOICE <span class="text-muted"></span></h4>

                             <!--end::Logo-->
                             <div class="text-sm-end">

                                 <!--end::Logo-->
                                 <!--begin::Text-->
                                 <div class="text-sm-end fw-bold fs-4 text-muted mt-7">
                                     <div>From</div>


                                     <div>x</div>

                                 </div>
                                 <!--end::Text-->
                             </div>

                         </div>
                         <!--end::Header-->
                         <!--begin::Order details-->
                         <div class="d-flex flex-column flex-sm-row gap-7 gap-md-10 fw-bolder">
                             <div class="flex-root d-flex flex-column">
                                 <span class="text-muted">System Ref</span>
                                 <span class="fs-5">#1</span>
                             </div>
                             <div class="flex-root d-flex flex-column">
                                 <span class="text-muted">Date</span>
                                 <span class="fs-5">-</span>
                             </div>
                             <div class="flex-root d-flex flex-column">
                                 <span class="text-muted">Invoice ID</span>
                                 <span class="fs-5">-</span>
                             </div>
                             <div class="flex-root d-flex flex-column">
                                 <span class="text-muted">Sales Ref</span>
                                 <span class="fs-5">n/a</span>
                             </div>
                         </div>
                         <!--end::Order details-->
                         <!--begin::Body-->
                         <div class="border-bottom pb-12">

                             <!--begin::Wrapper-->
                             <div class="d-flex justify-content-between flex-column flex-md-row">
                                 <!--begin::Content-->
                                 <div class="flex-grow-1 pt-8 mb-13">
                                     <!--begin::Table-->
                                     <div class="table-responsive border-bottom mb-14  ">
                                         <table class="table table-striped" id="inquiry_products">
                                             <thead class="bg-dark text-white ">
                                                 <tr class="border-bottom fs-6 fw-bolder   text-uppercase">
                                                     <th class=" "> #</th>
                                                     <th class="  text-left">Product Name</th>
                                                     <th class="  text-left">Product Code</th>
                                                     <th class="   ">Quantity</th>
                                                     <th class="   text-end">Price </th>
                                                     <th class="  text-end">Line Total </th>
                                                 </tr>
                                             </thead>
                                             <tbody>


                                             </tbody>
                                             <tfoot class=" fs-4 fw-boldest text-dark">
                                                 <td></td>
                                                 <td></td>
                                                 <td></td>
                                                 <td></td>
                                                 <td class="text-end">Grand Total</td>
                                                 <td class="text-end" id="grand_total_id">0.00</td>
                                             </tfoot>
                                         </table>
                                     </div>
                                     <!--end::Table-->

                                 </div>
                                 <!--end::Content-->


                             </div>
                             <!--end::Wrapper-->
                         </div>
                         <!--end::Body-->

                     </div>
                     <!-- end::Body-->
                 </div>
                 <!--end::Modals-->
             </div>
             <!--end::Container-->

         </div>
         <!-- end::Wrapper-->
     </div>
     <!--end::Post-->
 </div>