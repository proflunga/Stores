<?php require 'controllers/inventory/categories.edit_product.php'; ?>


<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
   <!--begin::Toolbar-->
   <div class="toolbar" id="kt_toolbar">
      <!--begin::Container-->
      <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
         <!--begin::Page title-->
         <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
            <!--begin::Title-->
            <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">
               Edit Category
               <!--begin::Separator-->
               <span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
               <!--end::Separator-->
               <!--begin::Description-->
               <span class="text-muted fs-7 fw-bold mt-2">Home > Categories > Edit Category </span>
               <!--end::Description-->
            </h1>
            <!--end::Title-->
         </div>
         <!--end::Page title-->
         <!--begin::Actions-->
         <div class="d-flex align-items-center gap-2 gap-lg-3">

            <!--begin::Primary button-->
            <a href="inventory.php?action=categories" class="btn btn-sm btn-primary">
               <li class="fa fa-arrow-left"></li> &nbsp; Categories
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
         <div class="d-flex flex-row flex-column-fluid align-items-stretch">
            <!--begin::Content-->
            <div class="content flex-row-fluid" id="kt_content">
               <div class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework">
                  <!--begin::Aside column-->
                  <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                     <!--begin::Thumbnail settings-->
                     <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                           <!--begin::Card title-->
                           <div class="card-title">
                              <h2>Thumbnail</h2>
                           </div>
                           <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body text-center pt-0">
                           <!--begin::Image input-->
                           <form action="#" method="post" enctype="multipart/form-data">

                              <input type="hidden" id="cat_id_id" name="cat_id" value="">
                              <div id="cat_image_id" class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true" style="background-image: url(assets/media/categories/default.jpg)">
                                 <!--begin::Preview existing avatar-->
                                 <div class="image-input-wrapper w-150px h-150px"></div>
                                 <!--end::Preview existing avatar-->
                                 <!--begin::Label-->
                                 <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="" data-bs-original-title="Change avatar">
                                    <!--begin::Icon--><i class="bi bi-pencil-fill fs-7"></i>
                                    <!--end::Icon-->
                                    <!--begin::Inputs-->
                                    <input type="file" name="image" accept=".png, .jpg, .jpeg">
                                    <input type="hidden" name="avatar_remove">
                                    <!--end::Inputs-->
                                    <!-- hidden input to store the picture name that is in the database -->
                                    <input type="text" name="stored_picture" value="<?php echo $cat_details['image']; ?>" id="">
                                    <!-- end of hidden input -->
                                 </label>
                                 <!--end::Label-->
                                 <!--begin::Cancel--><span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="" data-bs-original-title="Cancel avatar">
                                    <i class="bi bi-x fs-2"></i>
                                 </span>
                                 <!--end::Cancel-->
                                 <!--begin::Remove--><span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove avatar">
                                    <i class="bi bi-x fs-2"></i>
                                 </span>
                                 <!--end::Remove-->
                              </div>
                              <!--end::Image input-->
                              <!--begin::Description-->
                              <div class="text-muted fs-7">Set the category thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
                              <!--end::Description-->
                              <div class="mt-5">
                                 <button name="remove_category_thumbnail" class="btn btn-light-danger">
                                    <li class="fa fa-times"></li> Remove
                                 </button>
                                 <button name="update_category_thumbnail" class="btn btn-light-primary">Save</button>
                              </div>
                           </form>
                        </div>
                        <!--end::Card body-->
                     </div>
                     <!--end::Thumbnail settings-->
                     <!--begin::Status-->
                     <div class="card card-flush py-4">
                        <form action="#" method="POST">

                           <input type="hidden" id="cat_status_id" name="cat_id" value="">

                           <!--begin::Card header-->
                           <div class="card-header">
                              <!--begin::Card title-->
                              <div class="card-title">
                                 <h2>Status</h2>
                              </div>
                              <!--end::Card title-->

                           </div>
                           <!--end::Card header-->
                           <!--begin::Card body-->
                           <div class="card-body pt-0">
                              <!--begin::Select2-->

                              <select class="form-select mb-5" name="status" aria-label="Select example" id="status_id">
                                 <option value="1"> Published</option>
                                 <option value="0">Inactive</option>
                              </select>
                              <!--end::Select2-->
                              <!--begin::Description-->
                              <div class="text-muted fs-7">Set the product status.</div>
                              <!--end::Description-->

                              <button class="btn btn-light-primary mt-5" name="change_category_status">Save</button>
                           </div>
                           <!--end::Card body-->

                        </form>
                     </div>
                     <!--end::Status-->
                     <!--begin::Status-->
                     <div class="card card-flush py-4">
                        <form action="#" method="post">

                           <input type="hidden" id="cat_category_id" name="cat_id" value="">
                           <!--begin::Card header-->
                           <div class="card-header">
                              <!--begin::Card title-->
                              <div class="card-title">
                                 <h2>Parent Category</h2>
                              </div>
                              <!--end::Card title-->

                           </div>

                           <div class="card-body pt-0">
                              <!--begin::Select2-->
                              <?php
                              $populate_select_obj->print_select_without_id_desc('category_name', 'categories', ' class="form-select mb-5"  name="category_id" aria-label="Select example"   id="category_id_id" ', 'where 1');

                              ?>
                              <!--end::Select2-->
                              <!--begin::Description-->
                              <div class="text-muted fs-7">Set the category</div>
                              <!--end::Description-->
                              <button class="btn btn-light-primary mt-5" name="update_cat_for_cat">Save</button>
                           </div>
                           <!--end::Card body-->
                        </form>
                     </div>
                     <!--end::Status-->
                  </div>
                  <!--end::Aside column-->
                  <!--begin::Main column-->
                  <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                     <!--begin::General options-->
                     <div class="card card-flush py-4">
                        <form action="#" method="post">

                           <input type="hidden" id="cat_gen_id" name="cat_id" value="">

                           <!--begin::Card header-->
                           <div class="card-header">
                              <div class="card-title">
                                 <h2>General</h2>
                              </div>
                           </div>
                           <!--end::Card header-->
                           <!--begin::Card body-->
                           <div class="card-body pt-0">
                              <!--begin::Input group-->
                              <div class="mb-10 fv-row fv-plugins-icon-container">
                                 <!--begin::Label-->
                                 <label class="required form-label">Category Name</label>
                                 <!--end::Label-->
                                 <!--begin::Input-->
                                 <input type="text" name="category_name" id="category_name_id" class="form-control mb-2" placeholder="Product name" value=" ">
                                 <!--end::Input-->
                                 <!--begin::Description-->
                                 <div class="text-muted fs-7">A category name is required and recommended to be unique.</div>
                                 <!--end::Description-->
                                 <div class="fv-plugins-message-container invalid-feedback"></div>
                              </div>
                              <!--end::Input group-->
                              <!--begin::Input group-->
                              <div class="mb-10 fv-row fv-plugins-icon-container">
                                 <!--begin::Label-->
                                 <label class="required form-label">Category Alias</label>
                                 <!--end::Label-->
                                 <!--begin::Input-->
                                 <input type="text" name="category_alias" id="category_alias_id" class="form-control mb-2" placeholder="Product name" value=" ">
                                 <!--end::Input-->
                                 <!--begin::Description-->
                                 <div class="text-muted fs-7">A category alias is required and recommended to be unique.</div>
                                 <!--end::Description-->
                                 <div class="fv-plugins-message-container invalid-feedback"></div>
                              </div>
                              <!--end::Input group-->
                              <!--begin::Input group-->
                              <div>
                                 <!--begin::Label-->
                                 <label class="form-label">Description</label>
                                 <!--end::Label-->
                                 <!--begin::Editor-->
                                 <textarea class="form-control" name="category_description" id="category_description_id" id="cat_desc_id" data-kt-autosize="true"></textarea>
                                 <!-- end of hidden input -->
                                 <!--begin::Description-->
                                 <div class="text-muted fs-7 mt-3">Set a description to the category for better visibility.</div>
                                 <!--end::Description-->
                              </div>
                              <!--end::Input group-->
                              <div>
                                 <button class="btn btn-light-primary mt-5" name="update_cat_gen_info">Save</button>
                              </div>
                           </div>
                           <!--end::Card header-->
                        </form>
                     </div>


                  </div>
                  <!--end::Main column-->
                  <div></div>
               </div>
            </div>
            <!--end::Content-->
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
   if (isset($_GET['cat_id'])) {
      $cat_id = $_GET['cat_id'];
   } else {
      $cat_id = 0;
   }
   $inventory_obj->category_data($cat_id)
   ?>


   //set   href links 
   $(document).ready(function() {

      //thumnail
      document.getElementById('cat_id_id').value = cat_id;
      document.getElementById('cat_image_id').style = "background-image: url(assets/media/categories/" + profile_data.image + ")";

      //status         
      document.getElementById('cat_status_id').value = cat_id;
      document.getElementById('status_id').value = profile_data.status;

      //category id 
      document.getElementById('cat_category_id').value = cat_id;
      document.getElementById('category_id_id').value = profile_data.parent_category;

      //general info         
      document.getElementById('cat_gen_id').value = cat_id;
      document.getElementById('category_name_id').value = profile_data.category_name;
      document.getElementById('category_description_id').value = profile_data.category_description;
      document.getElementById('category_alias_id').value = profile_data.category_alias;






   });
</script>