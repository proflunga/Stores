<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Toolbar-->
	<div class="toolbar" id="kt_toolbar">
		<!--begin::Container-->
		<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
			<!--begin::Page title-->
			<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
				<!--begin::Title-->
				<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Inquiries
					<!--begin::Separator-->
					<span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
					<!--end::Separator-->
					<!--begin::Description-->
					<span class="text-muted fs-7 fw-bold mt-2">Home > Inquiries</span>
					<!--end::Description-->
				</h1>
				<!--end::Title-->
			</div>
			<!--end::Page title-->
			<!--begin::Actions-->
			<div class="d-flex align-items-center gap-2 gap-lg-3">

				<!--begin::Primary button-->
				<?php require 'views/inquiries/includes/menu.php'; ?>
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
			<div class="content flex-row-fluid" id="kt_content">
				<!--begin::Products-->
				<div class="card card-flush">
					<!--begin::Card header-->
					<div class="card-header align-items-center py-5 gap-2 gap-md-5">
						<!--begin::Card title-->
						<div class="card-title">
							<!--begin::Search-->
							<div class="d-flex align-items-center position-relative my-1">
								<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg--><span class="svg-icon svg-icon-1 position-absolute ms-4">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none">
										<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
										<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Inquiry" />
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
									<th class=" ">Inquiry</th>
									<th class="text-left min-w-100px">Customer</th>

									<th class="text-left min-w-100px">Status</th>
									<th class="text-left min-w-100px">Price</th>
									<th class="text-left min-w-100px">Date</th>

									<th class="text-left min-w-70px">Actions</th>
								</tr>
								<!--end::Table row-->
							</thead>
							<!--end::Table head-->
							<!--begin::Table body-->
							<tbody class="fw-bold text-gray-600">
								<!-- traverse the table getting products details -->
								<?php

								$sql = "SELECT inquiries.id, customers.first_name, customers.last_name, inquiries.date_of_enquiry, inquiries.status FROM inquiries INNER JOIN customers ON inquiries.customer_id =  customers.id;;
			";


								$result = $db_query_obj->sql_qury("$sql");



								if (!$result || $result == null) {
									//error
									echo '';
								} else {
									//Inserted
									while ($row = mysqli_fetch_assoc($result)) {
										$customername = $row['first_name'];
										$inquiry_id = $row['id'];
										$date = $row['date_of_enquiry'];
										$inq_id = $row['id'];




										require 'includes/inquiry_row_table.php';
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
			<!--end::Modals-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Post-->
</div>














<script>
	document.addEventListener("DOMContentLoaded", function(event) {
		//we ready baby

		$('<script/>', {
			type: 'text/javascript',
			src: 'assets/js/custom/apps/ecommerce/catalog/products.js'
		}).appendTo('head');
	});
</script>