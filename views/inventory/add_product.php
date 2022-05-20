<?php require 'controllers/inventory/products.add_product.controller.php'; ?>

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Toolbar-->
	<div class="toolbar" id="kt_toolbar">
		<!--begin::Container-->
		<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
			<!--begin::Page title-->
			<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
				<!--begin::Title-->
				<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Add Product
					<!--begin::Separator-->
					<span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
					<!--end::Separator-->
					<!--begin::Description-->
					<span class="text-muted fs-7 fw-bold mt-2">Home > Products > Add Product</span>
					<!--end::Description-->
				</h1>
				<!--end::Title-->
			</div>
			<!--end::Page title-->
			<!--begin::Actions-->
			<div class="d-flex align-items-center gap-2 gap-lg-3">
				<a href="inventory.php " class="btn btn-sm btn-secondary">
					<li class="fa fa-home "></li> &nbsp; Main
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

			<div class="d-flex flex-row flex-column-fluid align-items-stretch">
				<!--begin::Content-->
				<div class="content flex-row-fluid" id="kt_content">

					<!--begin::Form-->
					<form action="#" enctype="multipart/form-data" method="POST" class="form d-flex flex-column flex-lg-row">
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
									<div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true" style="background-image: url(assets/media/products/default.jpg)">
										<!--begin::Preview existing avatar-->
										<div class="image-input-wrapper w-150px h-150px"></div>
										<!--end::Preview existing avatar-->
										<!--begin::Label-->
										<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar"> <i class="bi bi-pencil-fill fs-7"></i>
											<!--begin::Inputs-->
											<input type="file" name="product_image" accept=".png, .jpg, .jpeg" />

											<!--end::Inputs-->
										</label>
										<!--end::Label-->


										<!--begin::Cancel--><span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
											<i class="bi bi-x fs-2"></i>
										</span>
										<!--end::Cancel-->
										<!--begin::Remove--><span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
											<i class="bi bi-x fs-2"></i>
										</span>
										<!--end::Remove-->
									</div>
									<!--end::Image input-->


									<!--begin::Description-->
									<div class="text-muted fs-7">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
									<!--end::Description-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Thumbnail settings-->
							<!--begin::Status-->
							<div class="card card-flush py-4">
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
									<select class="form-select mb-2" name="status_published" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_product_status_select">
										<option></option>
										<option value="1" selected="selected">Published</option>
										<option value="0">Inactive</option>
									</select>
									<!--end::Select2-->
									<!--begin::Description-->
									<div class="text-muted fs-7">Set the product status.</div>
									<!--end::Description-->

								</div>
								<!--end::Card body-->
							</div>
							<!--end::Status-->

						</div>
						<!--end::Aside column-->
						<!--begin::Main column-->
						<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">

							<!--begin::Tab content-->
							<div class="tab-content">
								<!--begin::Tab pane-->
								<div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
									<div class="d-flex flex-column gap-7 gap-lg-10">
										<!--begin::General options-->
										<div class="card card-flush py-4">
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
												<div class="mb-5 row">
													<div class="col-md-6 col-lg-6 col-12">
														<!--begin::Label-->
														<label class="required form-label">Product Name</label>

														<input type="text" name="product_name" required class="form-control mb-2" placeholder="Product name" value="" />

														<div class="text-muted fs-7">A product name is required and recommended to be unique.</div>
														<!--end::Description-->
													</div>
													<div class="col-md-6 col-lg-6 col-12 lg-my-0 md-my-0 sm-my-3 ">
														<!--begin::Label-->
														<label class="required form-label">Product Code</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" name="product_code" required class="form-control mb-2" placeholder="Product code" value="" />
														<!--end::Input-->
														<!--begin::Description-->
														<div class="text-muted fs-7">A product code is required and recommended to be unique.</div>
														<!--end::Description-->
													</div>


													<!-- quantity input -->
													<div class="col-md-6 col-lg-6 col-12 lg-my-0 md-my-0 my-3">
														<!--begin::Label-->
														<label class="required form-label"> Quantity</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="number" required name="product_quantity" class="form-control mb-2" placeholder="0" value="" />
														<!--end::Input-->
														<!--begin::Description-->
														<div class="text-muted fs-7">Initial product quantity.</div>
														<!--end::Description-->
													</div>


												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div>
													<!--begin::Label-->
													<label class="form-label">Description</label>
													<!--end::Label-->
													<!--begin::Editor-->
													<textarea class="form-control" name="product_description" data-kt-autosize="true"></textarea>
													<!-- end of hidden input -->

													<!--begin::Description-->
													<div class="text-muted fs-7 mt-5">Set a description to the product for better visibility.</div>
													<!--end::Description-->
												</div>
												<!--end::Input group-->
											</div>
											<!--end::Card header-->
										</div>
										<!--end::General options-->
										<!-- it controls the section foorr discounts do not remove -->


										<!-- end of hidden media card -->
										<!--begin::Pricing-->
										<div class="card card-flush py-4">
											<!--begin::Card header-->
											<div class="card-header">
												<div class="card-title">
													<h2>Category</h2>
												</div>
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body pt-0">

												<div class="col-md-6 col-lg-6 col-12 lg-my-0 md-my-0 my-3">

													<label class="form-label">Product Type</label>

													<?php
													$populate_select_obj->print_select_without_id_desc('category_name', 'categories', 'class="form-select mb-2"  required 		name="cat_id" data-control="select2" data-placeholder="Select an option" data-allow-clear="true"', 'where 1');
													?>


												</div>
												<div id="product_type_inputs">

												</div>


											</div>
											<!--end::Card header-->
										</div>
										<!--end::Pricing-->
										<!-- end of hidden media card -->
										<!--begin::Pricing-->
										<div class="card card-flush py-4">
											<!--begin::Card header-->
											<div class="card-header">
												<div class="card-title">
													<h2>Pricing</h2>
												</div>
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body pt-0">
												<!--begin::Input group-->
												<div class="row mb-5">
													<div class="col-6">
														<!--begin::Label-->
														<label class="required form-label">Base Price</label>

														<input type="text" required name="product_price" class="form-control mb-2" placeholder="0.00" value="" />

														<div class="text-muted fs-7">Set the product price.</div>

													</div>
													<div class="col-6">

														<label class="required form-label">Discount</label>

														<input type="text" name="product_discount" class="form-control mb-2" placeholder="0.00" value="" />

														<div class="text-muted fs-7">Set the product discount.</div>

													</div>
												</div>
												<!--end::Input group-->



											</div>
											<!--end::Card header-->
										</div>
										<!--end::Pricing-->
									</div>
								</div>
								<!--end::Tab pane-->

							</div>
							<!--end::Tab content-->
							<div class="d-flex justify-content-end">
								<!--begin::Button--><a onclick="document.getElementById('btn_back_to_products').click()" id="kt_ecommerce_add_product_cancel" class="btn btn-light-danger me-5">
									<li class="fa fa-times"></li> Cancel
								</a>
								<!--end::Button-->
								<!--begin::Button-->
								<button type="submit" name="add_new_product" class="btn btn-primary"> <span class="indicator-label">Add Product</span> </button>
								<!--end::Button-->
							</div>
						</div>
						<!--end::Main column-->
					</form>
					<!--end::Form-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Modals-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Post-->
</div>