<?php

require 'controllers/pos/pos.controller.php';

?>




<div class="content d-flex flex-column flex-column-fluid" id="page_container">
   <!--begin::Toolbar-->
   <div class="toolbar" id="kt_toolbar">
      <!--begin::Container-->


      <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
         <!--begin::Page title-->
         <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
            <!--begin::Title-->
            <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">
               Point of Sale
               <!--begin::Separator-->
               <span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
               <!--end::Separator-->
               <!--begin::Description-->
               <span class="text-muted fs-7 fw-bold mt-2">HOME > POS</span>
               <!--end::Description-->
            </h1>
            <!--end::Title-->
         </div>
         <!--end::Page title-->
         <!--begin::Actions-->
         <div class="d-flex align-items-center gap-2 gap-lg-3">


            <a href="pos.php?action=view_transactions" class="btn btn-secondary btn-sm">
               <span class="svg-icon svg-icon-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                     <path d="M22 7H2V11H22V7Z" fill="currentColor"></path>
                     <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="currentColor"></path>
                  </svg>
               </span>


               Transactions
            </a>

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

         <div class="row">
            <div class="col-xl-8">
               <!--begin::Mixed Widget 12-->
               <div class="card mb-5">
                  <div class="card-body">
                     <form action="" method="post">
                        <div class="col-3  ">
                           <label class="form-label    fs-8 fw-bolder">Select Product Type</label>
                           <?php
                           $populate_select_obj->print_select_with_non_id_return_value('category_name', 'categories', ' name="prod_type" id="prod_type_id"  class="form-select  form-select-sm "   data-placeholder="Select an option"', "category_alias")
                           ?>
                        </div>

                        <div class="row mt-5 mb-5" id="products_liquids_srch_area">



                           <div class="row">
                              <div class="col-12" id="search_btn">

                              </div>
                           </div>



                        </div>
                     </form>

                  </div>

               </div>
               <!--begin::Card-->
               <div class="card">
                  <!--begin::Body-->
                  <div class="card-body  ">
                     <!--begin:Search-->
                     <!--end:Search-->
                     <form action="" method="post">

                        <div class="row">
                           <div class="mb-10 col-lg-6">
                              <input type="text" name="product_name" class="form-control form-control-sm form-control-solid" placeholder="Product Name" />
                           </div>
                           <div class="mb-10 col-lg-3">
                              <input type="text" name="product_code" class="form-control form-control-sm form-control-solid" placeholder="Code" />
                           </div>
                           <div class="mb-10 col-lg-3">
                              <button class="btn   btn-light-primary" type="submit" name="primary_search">
                                 <li class="fa fa-search"></li>
                              </button>
                           </div>
                        </div>
                     </form>

                     <table class="table align-middle table-row-dashed fs-8 gy-2" id="pos_product_result">
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
                     <!--end::Action-->


                  </div>
                  <!--end::Body-->
               </div>
               <!--end::Card-->
               <!--end::Mixed Widget 12-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-4">
               <div class="card shadow-sm">
                  <div class="card-body card-scroll h-300px">
                     <div class="d-flex justify-content-between mb-5">
                        <h3 class="card-title mt-3">
                           <span>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                 <path opacity="0.3" d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z" fill="black"></path>
                                 <path d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z" fill="black"></path>
                                 <path d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z" fill="black"></path>
                              </svg>
                           </span>Checkout
                        </h3>
                        <a href="pos.php?cancel_order=true" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Clear Cart">
                           <span class="svg-icon svg-icon-2">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                 <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="#cd3e3e"></path>
                                 <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="#cd3e3e"></path>
                                 <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="#cd3e3e"></path>
                              </svg>
                           </span>
                        </a>
                     </div>




                     <div class="table-responsive">
                        <table class="table table-hover table-rounded table-striped border gy-2 gs-2">
                           <thead>
                              <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                                 <th>Item</th>
                                 <th>Total</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                              $grand_total_ = 0;

                              $sql = "SELECT products.product_name, pos_cart.quantity, pos_cart.price, pos_cart.id as prod_cart_id FROM products INNER JOIN pos_cart on products.id = pos_cart.product_id WHERE pos_cart.user_id = $user_id ORDER BY pos_cart.id ASC ;";
                              $result = $db_query_obj->sql_qury("$sql");

                              if (!$result) {
                                 //error

                              } else {
                                 //Inserted
                                 while ($row = mysqli_fetch_assoc($result)) {
                                    $prod_name = $row['product_name'];
                                    $prod_quantity = $row['quantity'];
                                    $prod_price = $row['price'];
                                    $prod_cart_id = $row['prod_cart_id'];

                                    require 'views/pos/includes/pos.populate_cart.php';
                                 }
                              }


                              ?>

                           </tbody>

                        </table>
                     </div>
                  </div>
                  <div class="card-footer">
                     <form action="#" method="post">
                        <div class="row mb-5">
                           <div class="col-6">

                              <label class="form-label fs-7 fw-bolder">Payment Method</label>
                              <?php

                              $populate_select_obj->print_select_without_id_desc('code', 'payment_method', 'required name="payment_method"   class="form-select form-select-sm fs-8" data-control="select2" data-placeholder="Select an option"', "")

                              ?>

                           </div>

                           <div class="col-6">

                              <label class="form-label fs-7 fw-bolder">Customer Name</label>
                              <?php

                              $populate_select_obj->print_select_with_more_columns(
                                 ' id, CONCAT(customers.first_name , " ", customers.last_name, " (", customers.id_number , ")") as customer_name',
                                 'customers',
                                 'customer_name',
                                 'required name="customer_id"   class="form-select form-select-sm fs-8" data-control="select2" data-placeholder="Select an option"',
                                 ""
                              )

                              ?>

                           </div>

                        </div>
                        <div class="row">
                           <div class="col-12">


                              <input type="hidden" value="0.01" name="total_bill">
                              <?php
                              $total_bill = $global_transaction->pos_cart_sum();
                              if (!$total_bill) {
                                 $total_bill =  number_format(0, 2);
                              } else {
                                 $total_bill = number_format($total_bill, 2);
                              }
                              ?>
                              <button name="make_sale" class="btn btn-success btn-hover-rise fw-bolder fs-3" style="width: 100%;"> Charge (<?php echo $total_bill ?>)</button>



                           </div>
                        </div>
                     </form>
                  </div>
               </div>

            </div>
         </div>
         <!--end::Modals-->
      </div>
      <!--end::Container-->
   </div>
   <!--end::Post-->
</div>




<script>
   const search_btn_ = `<div class="col-4"><button type="submit" class="btn btn-light-primary" id="search_liq_btn" name="search_product">
                                 <li class="fa fa-search"></li> &nbsp;
                              </button></div>`;


   $(document).ready(function() {

      // Query product brands *************************************************  
      document.getElementById('prod_type_id').addEventListener('change', function fetch_funtion(e) {
         e.preventDefault()

         var prod_type = document.getElementById('prod_type_id').value;
         if (prod_type == 'liquids') {

            var params = 'prod_type=' + prod_type + '&query_product_liq=1';

         } else if (prod_type == 'devices') {

            var params = 'prod_type=' + prod_type + '&query_product_dev=1';


         } else if (prod_type == 'accessories') {

            var params = 'prod_type=' + prod_type + '&query_product_acc=1';

         }




         var xhr = new XMLHttpRequest();
         xhr.open('POST', 'views/pos/ajax_query.php', true);
         xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

         xhr.onload = function() {
            // var my_data = JSON.parse(this.responseText);
            // console.log(this.responseText);
            // document.getElementById('error_log').innerHTML = my_data.name+' '+my_data.surname;

            //    const prod_type_data = JSON.parse(this.responseText);

            if (prod_type == 'liquids') {

               document.getElementById('products_liquids_srch_area').innerHTML = this.responseText;

               document.getElementById('products_liquids_srch_area').innerHTML += search_btn_;



            } else if (prod_type == 'devices') {


               document.getElementById('products_liquids_srch_area').innerHTML = this.responseText;

               document.getElementById('products_liquids_srch_area').innerHTML += search_btn_;

            } else if (prod_type == 'accessories') {


               document.getElementById('products_liquids_srch_area').innerHTML = this.responseText;

               document.getElementById('products_liquids_srch_area').innerHTML += search_btn_;


            }




         }

         xhr.send(params);

      });

      $("#pos_product_result").DataTable();




   });
</script>