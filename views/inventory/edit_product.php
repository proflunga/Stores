<?php require 'controllers/inventory/products.edit_product.controller.php'; ?>



<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Toolbar-->
	<div class="toolbar" id="kt_toolbar">
		<!--begin::Container-->
		<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
			<!--begin::Page title-->
			<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
				<!--begin::Title-->
				<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">
					Edit Product
					<!--begin::Separator-->
					<span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
					<!--end::Separator-->
					<!--begin::Description-->
					<span class="text-muted fs-7 fw-bold mt-2">Home > Products > Edit Products</span>
					<!--end::Description-->
				</h1>
				<!--end::Title-->
			</div>
			<!--end::Page title-->
			<!--begin::Actions-->
			<div class="d-flex align-items-center gap-2 gap-lg-3">
				<a href="inventory.php?action=products" class="btn btn-sm btn-primary btn-hover-rise" id="btn_back_to_products">
					<li class="fa fa-arrow-left"></li> &nbsp; Products
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

					<!--begin::Aside column-->
					<div class="form d-flex flex-column flex-lg-row">
						<form enctype="multipart/form-data" method="post" action="#">
							<input type="hidden" id="inp_thumb_prod_id" name="prod_id" value="">
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
										<div id="pro_thumbnail" class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true" style="background-image: url(assets/media/products/default.jpg)">
											<!--begin::Preview existing avatar-->
											<div class="image-input-wrapper w-150px h-150px"></div>
											<!--end::Preview existing avatar-->
											<!--begin::Label-->
											<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar"> <i class="bi bi-pencil-fill fs-7"></i>
												<!--begin::Inputs-->
												<input type="file" name="product_image" accept=".png, .jpg, .jpeg" />
												<input type="hidden" name="avatar_remove">
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

										<div class="mt-5">
											<button name="remove_thumbnail" class="btn btn-light-danger">
												<li class="fa fa-times"></li> Remove
											</button>
											<button name="update_thumbnail" class="btn btn-light-primary">Save</button>
										</div>
										<!--end::Description-->
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Thumbnail settings-->


						</form>
						<!--begin::Status-->
						<div class="card card-flush py-4">
							<form action="#" method="POST">

								<input type="hidden" id="inp_status_prod_id" name="prod_id" value="">

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

									<select class="form-select mb-5" name="product_status" aria-label="Select example" id="prod_status">
										<option value="1"> Published</option>
										<option value="0">Inactive</option>
									</select>
									<!--end::Select2-->
									<!--begin::Description-->
									<div class="text-muted fs-7">Set the product status.</div>
									<!--end::Description-->

									<button class="btn btn-light-primary mt-5" name="change_prod_status">Save</button>
								</div>
								<!--end::Card body-->

							</form>
						</div>
						<!--end::Status-->
						<!--begin::Category & tags-->
						<div class="card card-flush py-4">
							<form action="#" method="post">

								<input type="hidden" id="inp_category_prod_id" name="prod_id" value="">


								<!--begin::Card header-->
								<div class="card-header">
									<!--begin::Card title-->
									<div class="card-title">
										<h2>Product Details</h2>
									</div>
									<!--end::Card title-->
								</div>
								<!--end::Card header-->
								<!--begin::Card body-->
								<div class="card-body pt-0">
									<!--begin::Input group-->
									<!--begin::Label-->
									<label class="form-label">Categories</label>
									<!--end::Label-->
									<!--begin::Select2-->
									<?php



									$populate_select_obj->print_select_without_id_desc('category_name', 'categories', ' class="form-select mb-5"  name="category_id" aria-label="Select example"   id="control_category_id" ', 'where 1');


									?>
									<!--end::Input group-->
									<button class="btn btn-light-primary mt-5" name="update_category">Save</button>
								</div>
							</form>
							<!--end::Card body-->
						</div>
						<!--end::Category & tags-->
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
											<form method="post" action="#">

												<input type="hidden" id="inp_gen_prod_id" name="prod_id" value="">
												<!--begin::Input group-->
												<div class="mb-5 row">
													<div class="col-md-6 col-lg-6 col-12">
														<!--begin::Label-->
														<label class="required form-label">Product Name</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" name="product_name" id="prod_name_id" class="form-control mb-2" placeholder="Product name" value="" />
														<!--end::Input-->
														<!--begin::Description-->
														<div class="text-muted fs-7">A product name is required and recommended to be unique.</div>
														<!--end::Description-->
													</div>
													<div class="col-md-6 col-lg-6 col-12 lg-my-0 md-my-0 sm-my-3 ">
														<!--begin::Label-->
														<label class="required form-label">Product Code</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" name="product_code" id="prod_code_id" class="form-control mb-2" placeholder="Product code" value="" />
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
														<input type="number" id="prod_quantity_id" readonly disabled required class="form-control form-control-solid mb-2" placeholder="0" value="" />
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
													<textarea class="form-control" name="product_description" id="prod_desc_id" data-kt-autosize="true"></textarea>
													<!-- end of hidden input -->

													<!--begin::Description-->
													<div class="text-muted fs-7 mt-5">Set a description to the product for better visibility.</div>
													<!--end::Description-->
												</div>
												<!--end::Input group-->
												<div>
													<button class="btn btn-light-primary mt-5" name="update_Product_general_info">Save</button>
												</div>

											</form>
										</div>
										<!--end::Card header-->
									</div>
									<!--end::General options-->



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
											<form method="post" action="#">
												<!--begin::Input group-->
												<input type="hidden" value="" name="prod_id" id="inp_prod_pricing">
												<div class="row mb-5">
													<div class="col-6">
														<!--begin::Label-->
														<label class="required form-label">Base Price</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" id="product_price_id" name="product_price" class="form-control mb-2" placeholder="0.00" value="" />
														<!--end::Input-->
														<!--begin::Description-->
														<div class="text-muted fs-7">Set the product price.</div>
														<!--end::Description-->
													</div>
													<div class="col-6">
														<!--begin::Label-->
														<label class="required form-label">Discount</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" id="product_discount_id" name="product_discount" class="form-control mb-2" placeholder="0.00" value="" />
														<!--end::Input-->
														<!--begin::Description-->
														<div class="text-muted fs-7">Set the product discount.</div>
														<!--end::Description-->
													</div>
												</div>
												<!--end::Input group-->


												<!--begin::Tax-->
												<div class="d-flex flex-wrap gap-5 ">
													<!--begin::Input group-->
													<div class="fv-row w-100 flex-md-root ">
														<div class="col-md-6 col-lg-6 col-12">
															<!--begin::Label-->
															<label class="required form-label">TAX</label>
															<!--end::Label-->

															<?php


															$populate_select_obj->print_select_without_id_desc('description', 'tax', ' class="form-select mb-5" id="product_tax_id"  name="tax_id" aria-label="Select example"   id="prod_status"', 'where 1');
															?>


															<!--end::Select2-->
															<!--begin::Description-->
															<div class="text-muted fs-7">Set the product VAT.</div>
															<!--end::Description-->
														</div>
													</div>
													<!--end::Input group-->

												</div>
												<!--end:Tax-->

												<div>
													<button name="update_pricing" class="btn btn-light-primary mt-5">Save</button>
												</div>

											</form>
										</div>
										<!--end::Card header-->
									</div>
									<!--end::Pricing-->
								</div>
							</div>
							<!--end::Tab pane-->

						</div>

					</div>
					<!--end::Main column-->

				</div>

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


<script>
	// thumbnail JS	********************
	// A $( document ).ready() block.
	$(document).ready(function() {
		//get url parameter (c_id)
		const queryString = window.location.search;
		const urlParams = new URLSearchParams(queryString);

		const p_id = urlParams.get('p_id');

		<?php
		if (isset($_GET['p_id'])) {
			$prod_id = $_GET['p_id'];
		} else {
			$prod_id = 0;
		}
		$inventory_obj->product_data($prod_id)
		?>

		//thumbnail section
		document.getElementById('inp_thumb_prod_id').value = p_id;
		document.getElementById('pro_thumbnail').style = 'background-image: url(assets/media/products/' + profile_data.product_image;

		//status section
		document.getElementById('inp_status_prod_id').value = p_id;
		document.getElementById('prod_status').value = profile_data.status_published;

		//category section
		document.getElementById('inp_category_prod_id').value = p_id;
		document.getElementById('control_category_id').value = profile_data.category_id;

		//general info		
		document.getElementById('inp_gen_prod_id').value = p_id;
		document.getElementById('prod_name_id').value = profile_data.product_name;
		document.getElementById('prod_code_id').value = profile_data.product_code;
		document.getElementById('prod_quantity_id').placeholder = profile_data.product_quantity;
		document.getElementById('prod_desc_id').value = profile_data.product_description;

		//pricing		
		document.getElementById('inp_prod_pricing').value = p_id;
		document.getElementById('product_price_id').value = profile_data.product_price;
		document.getElementById('product_discount_id').value = profile_data.product_discount;
		document.getElementById('product_tax_id').value = profile_data.tax_id;


	});
</script>