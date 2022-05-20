<?php
require('controllers/quotations/quotations.controller.php');
?>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1"> Invoice
                    <span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
                    <span class="text-muted fs-7 fw-bold mt-2">Home > Invoices > Generate Invoice</span>
                </h1>
            </div>
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <a class="btn btn-secondary btn-sm" href="billing.php">
                    <li class="fa fa-home"></li> &nbsp; Main
                </a>
                <a href="billing.php?action=invoices" class="btn btn-sm btn-secondary">
                    <li class="fa fa-list"></li> &nbsp; Invoices
                </a>
            </div>
        </div>
    </div>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="content flex-row-fluid" id="kt_content">
                <div class="d-flex flex-row flex-column-fluid align-items-stretch">
                    <div class="content flex-row-fluid" id="kt_content">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-xl-3">
                                    <div class="card" data-kt-sticky="true" data-kt-sticky-name="invoice" data-kt-sticky-offset="{default: false, lg: '200px'}" data-kt-sticky-width="{lg: '250px', lg: '300px'}" data-kt-sticky-left="auto" data-kt-sticky-top="150px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
                                        <div class="card-body p-10">

                                            <div class="mb-0">
                                                <div class="row mb-5">
                                                    <div class="">
                                                        <button name="save_draft" type="submit" class="btn btn-light btn-active-light-primary btn-sm w-100">
                                                            <li class="fa fa-save "></li> &nbsp; Save Draft
                                                        </button>
                                                    </div>
                                                </div>
                                                <button type="submit" name="generate_quotation" class="btn btn-sm btn-primary w-100" id="generate_quote_id">
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M15.43 8.56949L10.744 15.1395C10.6422 15.282 10.5804 15.4492 10.5651 15.6236C10.5498 15.7981 10.5815 15.9734 10.657 16.1315L13.194 21.4425C13.2737 21.6097 13.3991 21.751 13.5557 21.8499C13.7123 21.9488 13.8938 22.0014 14.079 22.0015H14.117C14.3087 21.9941 14.4941 21.9307 14.6502 21.8191C14.8062 21.7075 14.9261 21.5526 14.995 21.3735L21.933 3.33649C22.0011 3.15918 22.0164 2.96594 21.977 2.78013C21.9376 2.59432 21.8452 2.4239 21.711 2.28949L15.43 8.56949Z" fill="white"></path>
                                                            <path opacity="0.3" d="M20.664 2.06648L2.62602 9.00148C2.44768 9.07085 2.29348 9.19082 2.1824 9.34663C2.07131 9.50244 2.00818 9.68731 2.00074 9.87853C1.99331 10.0697 2.04189 10.259 2.14054 10.4229C2.23919 10.5869 2.38359 10.7185 2.55601 10.8015L7.86601 13.3365C8.02383 13.4126 8.19925 13.4448 8.37382 13.4297C8.54839 13.4145 8.71565 13.3526 8.85801 13.2505L15.43 8.56548L21.711 2.28448C21.5762 2.15096 21.4055 2.05932 21.2198 2.02064C21.034 1.98196 20.8409 1.99788 20.664 2.06648Z" fill="white"></path>
                                                        </svg>
                                                    </span>
                                                    Generate Inovice
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-9">
                                    <div class="card">
                                        <div class="card-body p-12">
                                            <input type="hidden" value="" name="inq_id" id="inq_id_input">
                                            <div class="d-flex flex-column align-items-start flex-xxl-row">
                                                <span class="fs-2x fw-bolder text-gray-800">Invoice</span>
                                            </div>
                                            <div class="separator separator-dashed my-10"></div>
                                            <div class="mb-0">
                                                <div class="row gx-10 mb-5">
                                                    <div class="col-lg-7">
                                                        <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Customer Details</label>
                                                        <div class="mb-5">

                                                            <?php

                                                            $populate_select_obj->print_select_with_more_columns(
                                                                ' id, CONCAT(customers.first_name," ", customers.last_name," (",customers.customer_code,")") as customer_details',
                                                                'customers',
                                                                'customer_details',
                                                                '  name="customer_id"   class="form-select form-select-sm fs-7" data-control="select2" data-placeholder="Select an option"  data-allow-clear="true"',
                                                                ""
                                                            )

                                                            ?>
                                                        </div>
                                                        <div class="mb-5">
                                                            <textarea id="customer_details_id" required name="cutomer_details" class="form-control form-control-sm form-control-solid" rows="3" placeholder="Details"></textarea>
                                                        </div>


                                                    </div>
                                                    <div class="col-lg-5">
                                                        <div class="mb-3">

                                                            <label class="form-label fs-6 fw-bolder text-gray-700 mb-3 required">Date</label>


                                                            <input id="quotation_date_id" required type="date" name="quotation_date" class="form-control form-control-sm">
                                                        </div>
                                                        <div class="mb-10">
                                                            <label class="form-label fs-6 fw-bolder text-gray-700 mb-3 required">Currency <span id="currency_payment_id_lbl" class="fs-8"></span></label>

                                                            <?php
                                                            $populate_select_obj->print_select_without_id_desc('description', 'payment_method', 'name="payment_method" required  data-control="select2" data-placeholder="Select currency" id="payment_method_id"class="form-select form-select-sm fs-8  select2-hidden-accessible"  ', 'where 1');
                                                            ?>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="table-responsive mb-10">

                                                    <table class="table align-middle table-row-dashed fs-7 gy-2" id="quotation_cart_products_table">
                                                        <thead>
                                                            <tr class="text-start text-gray-600 fw-bolder fs-7 text-uppercase gs-0 bg-light">

                                                                <th class="text-left min-w-100px">Product Name</th>

                                                                <th class="text-left min-w-100px">Code</th>
                                                                <th class="text-left min-w-100px">Quantity</th>

                                                                <th class="text-left min-w-70px">Price</th>
                                                                <th class="text-left min-w-70px">Line Total</th>
                                                                <th class="text-left min-w-70px text-end"> </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="fw-bold ">
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td> </td>
                                                                <td class="text-end">
                                                                    <li class="fa fa-plus"></li> <a href="" class="fs-7" data-bs-toggle="modal" data-bs-target="#kt_modal_3">Add </a>
                                                                </td>

                                                            </tr>
                                                        </tbody>
                                                        <tfoot class="mt-7">
                                                            <tr>
                                                                <th class=""> </th>

                                                                <th class=""> </th>
                                                                <th class=""> </th>

                                                                <th class="fw-bolder" id="sub_total_id">Sub Total </th>
                                                                <th class="fw-bolder">0.00 </th>
                                                                <th class=" "> </th>
                                                            </tr>
                                                            <tr>
                                                                <th class=""> </th>

                                                                <th class=""> </th>
                                                                <th class=""> </th>

                                                                <th class="fw-bolder"> Tax </th>
                                                                <th class="fw-bolder">0.00 </th>
                                                                <th class=" "> </th>
                                                            </tr>
                                                            <tr>
                                                                <th class=""> </th>

                                                                <th class=""> </th>
                                                                <th class=""> </th>

                                                                <th class="fw-bolder">Grand Total </th>
                                                                <th class="fw-bolder">0.00 </th>
                                                                <th class=" "> </th>
                                                            </tr>

                                                        </tfoot>
                                                    </table>

                                                </div>
                                                <div class="mb-0">
                                                    <textarea id="notes_id" name="notes" class="form-control form-control-sm form-control-solid" rows="3" placeholder="Notes"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL ************************************* -->
<div class="modal fade" tabindex="-1" id="kt_modal_3">
    <div class="modal-dialog">
        <div class="modal-content position-absolute">

            <form action="" method="post">
                <div class="modal-header">
                    <h5 class="modal-title">Add Product to Quotaion</h5>

                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <span class="svg-icon svg-icon-2x"></span>
                    </div>
                </div>

                <div class="modal-body">




                    <table class="table align-middle table-row-dashed fs-8 gy-2" id="_products_table">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">

                                <th class=" ">Product Name</th>
                                <th class=" "> Code</th>
                                <th class=" ">Qty Available</th>
                                <th class=" ">Price</th>
                                <th class=" text-end">Action</th>

                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">


                        </tbody>
                        <!--end::Table body-->
                    </table>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add</button>
                </div>

            </form>
        </div>
    </div>
</div>

<!-- end ************************************* -->

<?php

$jsonData =  $quotation_obj->fetch_quotation_cart_products('quotation_cart_products_table');


$jsonData =  $quotations_obj->fetch_products('_products_table');
?>
<script>
    $(document).ready(function() {
        $("#_products_table").DataTable({
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

        // Object Declaration******************************
        <?php
        if (isset($_GET['inq_id'])) {
            $inq_id = $_GET['inq_id'];
        } else {
            $inq_id = 0;
        }
        $quotation_obj->fetch_quotation_data($inq_id)
        ?>


        document.getElementById('quotation_date_id').value = quotation_data.quotation_date;
        if (!quotation_data.notes == undefined) {
            document.getElementById('notes_id').value = quotation_data.notes;
        } else {
            document.getElementById('notes_id').value = '';
        }

        if (!quotation_data.notes == undefined) {
            document.getElementById('customer_details_id').value = quotation_data.customer_details;
        } else {
            document.getElementById('customer_details_id').value = '';
        }


        document.getElementById('payment_method_id').value = quotation_data.payment_method;
        document.getElementById('currency_payment_id_lbl').innerHTML = ' (<li class="fa fa-check text-success"></li> ' + quotation_data.payment_method_name +
            ')';

        //document.getElementById('sub_total_id').innerHTML = sub_total;



    });






    // modal js****************************************************************************************
    // Make the DIV element draggable:
    var element = document.querySelector('#kt_modal_3');
    dragElement(element);

    function dragElement(elmnt) {
        var pos1 = 0,
            pos2 = 0,
            pos3 = 0,
            pos4 = 0;
        if (elmnt.querySelector('.modal-content')) {
            // if present, the header is where you move the DIV from:
            elmnt.querySelector('.modal-content').onmousedown = dragMouseDown;
        } else {
            // otherwise, move the DIV from anywhere inside the DIV:
            elmnt.onmousedown = dragMouseDown;
        }

        function dragMouseDown(e) {
            e = e || window.event;
            e.preventDefault();
            // get the mouse cursor position at startup:
            pos3 = e.clientX;
            pos4 = e.clientY;
            document.onmouseup = closeDragElement;
            // call a function whenever the cursor moves:
            document.onmousemove = elementDrag;
        }

        function elementDrag(e) {
            e = e || window.event;
            e.preventDefault();
            // calculate the new cursor position:
            pos1 = pos3 - e.clientX;
            pos2 = pos4 - e.clientY;
            pos3 = e.clientX;
            pos4 = e.clientY;
            // set the element's new position:
            elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
            elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
        }

        function closeDragElement() {
            // stop moving when mouse button is released:
            document.onmouseup = null;
            document.onmousemove = null;
        }
    }
    // end *****************************************************************************************

    X
</script>