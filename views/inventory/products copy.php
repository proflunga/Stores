<!-- page header -->
<?php
$catalogue_header = "Products";
require 'includes/catalogue_header.php';

//  handle form request to delete product
if (isset($_POST['delete_product'])) {
   require 'controllers/catalogue/delete_product.php';
}
?>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
   <!--begin::Toolbar-->
   <div class="toolbar" id="kt_toolbar">
      <!--begin::Container-->
      <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
         <!--begin::Page title-->
         <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
            <!--begin::Title-->
            <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">
               Inventory
               <!--begin::Separator-->
               <span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
               <!--end::Separator-->
               <!--begin::Description-->
               <span class="text-muted fs-7 fw-bold mt-2">Home > Inventory</span>
               <!--end::Description-->
            </h1>
            <!--end::Title-->
         </div>
         <!--end::Page title-->
         <!--begin::Actions-->
         <div class="d-flex align-items-center gap-2 gap-lg-3">


            <!-- include menu ******************* -->
            <script>
               $(function() {
                  $("#cust_menu_div").load("views/inventory/includes/menu.products.html");
               });
            </script>
            <div id="cust_menu_div">
            </div>
            <!-- end include menu ******************* -->



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
         <!-- ed of page header -->
         <div class="d-flex flex-row flex-column-fluid align-items-stretch">
            <!--begin::Content-->
            <div class="content flex-row-fluid" id="kt_content">
               <!--begin::Products-->
               <div class="card card-flush">
                  <!--begin::Card header-->
                  <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                     <!--begin::Card title-->
                     <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                           <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                           <span class="svg-icon svg-icon-1 position-absolute ms-4">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                 <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                 <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                              </svg>
                           </span>
                           <!--end::Svg Icon-->
                           <input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Product" />
                        </div>
                        <!--end::Search-->
                     </div>
                     <!--end::Card title-->
                     <!--begin::Card toolbar-->
                     <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                        <div class="w-100 mw-150px">
                           <!--begin::Select2-->
                           <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-product-filter="status">
                              <option></option>
                              <option value="all">All</option>
                              <option value="published">Published</option>
                              <option value="scheduled">Scheduled</option>
                              <option value="inactive">Inactive</option>
                           </select>
                           <!--end::Select2-->
                        </div>
                        <!--begin::Add product--><a href="inventory.php?action=add_product" class="btn btn-primary">Add Product</a>
                        <!--end::Add product-->
                     </div>
                     <!--end::Card toolbar-->
                  </div>
                  <!--end::Card header-->
                  <!--begin::Card body-->
                  <div class="card-body pt-0">
                     <!--begin::Table-->
                     <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                        <!--begin::Table head-->
                        <thead>
                           <!--begin::Table row-->
                           <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                              <th class="w-10px pe-2">
                                 <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_products_table .form-check-input" value="1" />
                                 </div>
                              </th>
                              <th class="min-w-200px">Product</th>
                              <th class="text-end min-w-100px">Product Code</th>
                              <th class="text-end min-w-70px">Qty</th>
                              <th class="text-end min-w-100px">Price</th>
                              <th class="text-end min-w-100px">Rating</th>
                              <th class="text-end min-w-100px">Status</th>
                              <th class="text-end min-w-70px">Actions</th>
                           </tr>
                           <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">
                           <!-- traverse the table getting products details -->
                           <?php
                           $sql = "SELECT * FROM `products`";
                           $results = $db_query_obj->sql_qury("$sql");

                           // validate results
                           if ($results) {
                              while ($row = mysqli_fetch_assoc($results)) {
                                 require 'includes/products_table_row.php';
                              }
                           }

                           ?>
                        </tbody>
                        <!--end::Table body-->
                     </table>
                     <!--end::Table-->
                  </div>
                  <!--end::Card body-->
               </div>
               <!--end::Products-->
            </div>
            <!--end::Content-->
         </div>
         <!--end::Modal - New Product-->
         <!--end::Modals-->
      </div>
      <!--end::Container-->
   </div>
   <!--end::Post-->
</div>
<!-- for products table -->
<script>
   document.addEventListener("DOMContentLoaded", function(event) {
      //we ready baby

      $('<script/>', {
         type: 'text/javascript',
         src: 'assets/js/custom/apps/ecommerce/catalog/products.js'
      }).appendTo('head');
   });
</script>
<!-- delete product js method -->
<script>
   function delete_product(id, product) {
      // product_id, product_information

      Swal.fire({
         html: `Are you sure you want to delete ${product}?`,
         icon: "warning",
         buttonsStyling: false,
         showCancelButton: true,
         confirmButtonText: "Delete!",
         cancelButtonText: 'Cancel',
         customClass: {
            confirmButton: "btn btn-danger",
            cancelButton: 'btn btn-primary'
         }
      }).then(val => {
         if (val['isConfirmed']) {
            // create a form and submit the form with that information to delete the product
            var form = document.createElement("form");
            document.body.appendChild(form);
            form.method = "POST";
            form.action = "";
            var element1 = document.createElement("input");
            element1.name = "delete_product";
            element1.value = id;
            element1.type = 'number';
            form.appendChild(element1);
            form.submit();

         }

      });
   }
</script>