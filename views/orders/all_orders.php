<!-- handle order archieve -->
<?php
if (isset($_POST['add_to_archieve'])) {
	require "controllers/orders/order_archieve.php";
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
				<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Orders
					<!--begin::Separator-->
					<span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
					<!--end::Separator-->
					<!--begin::Description-->
					<span class="text-muted fs-7 fw-bold mt-2"></span>
					<!--end::Description-->
				</h1>
				<!--end::Title-->
			</div>
			<!--end::Page title-->
			<!--begin::Actions-->
			<div class="d-flex align-items-center gap-2 gap-lg-3">
				<!--begin::Filter menu-->
				<div class="m-0">
					<!--begin::Menu toggle-->
					<a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
						<!--begin::Svg Icon | path: icons/duotune/general/gen031.svg--><span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->Filter
					</a>
					<!--end::Menu toggle-->
					<!--begin::Menu 1-->
					<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_624f4b9f4ef0c">
						<!--begin::Header-->
						<div class="px-7 py-5">
							<div class="fs-5 text-dark fw-bolder">Filter Options</div>
						</div>
						<!--end::Header-->
						<!--begin::Menu separator-->
						<div class="separator border-gray-200"></div>
						<!--end::Menu separator-->
						<!--begin::Form-->
						<div class="px-7 py-5">
							<!--begin::Input group-->
							<div class="mb-10">
								<!--begin::Label-->
								<label class="form-label fw-bold">Status:</label>
								<!--end::Label-->
								<!--begin::Input-->
								<div>
									<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_624f4b9f4ef0c" data-allow-clear="true">
										<option></option>
										<option value="1">Approved</option>
										<option value="2">Pending</option>
										<option value="2">In Process</option>
										<option value="2">Rejected</option>
									</select>
								</div>
								<!--end::Input-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="mb-10">
								<!--begin::Label-->
								<label class="form-label fw-bold">Member Type:</label>
								<!--end::Label-->
								<!--begin::Options-->
								<div class="d-flex">
									<!--begin::Options-->
									<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
										<input class="form-check-input" type="checkbox" value="1" /> <span class="form-check-label">Author</span> </label>
									<!--end::Options-->
									<!--begin::Options-->
									<label class="form-check form-check-sm form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="2" checked="checked" /> <span class="form-check-label">Customer</span> </label>
									<!--end::Options-->
								</div>
								<!--end::Options-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="mb-10">
								<!--begin::Label-->
								<label class="form-label fw-bold">Notifications:</label>
								<!--end::Label-->
								<!--begin::Switch-->
								<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
									<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
									<label class="form-check-label">Enabled</label>
								</div>
								<!--end::Switch-->
							</div>
							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="d-flex justify-content-end">
								<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
								<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
							</div>
							<!--end::Actions-->
						</div>
						<!--end::Form-->
					</div>
					<!--end::Menu 1-->
				</div>
				<!--end::Filter menu-->
				<!--begin::Secondary button-->
				<!--end::Secondary button-->
				<!--begin::Primary button--><a href=".html" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
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
			<div class="row g-5 g-xl-8">
				<!--begin::Col-->
				<div class="col-xl-12">
					<div class="card  ">
						<div class="card-body pt-9 pb-0">
							<!--begin::Details-->
							<div class="d-flex flex-wrap flex-sm-nowrap mb-6">
								<!--begin::Image-->
								<!--end::Image-->
								<!--begin::Wrapper-->
								<div class="flex-grow-1">
									<!--begin::Head-->
									<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
										<!--begin::Details-->
										<div class="d-flex flex-column">
											<!--begin::Status-->
											<!--end::Status-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Head-->
								</div>
								<!--end::Wrapper-->
							</div>
							<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
								<!--begin::Nav item-->
								<li class="nav-item mt-2">
									<div class="menu-item px-3"> <a href="FundRules.php?action=employer_rules" class="nav-link text-active-primary ms-0 me-10 py-5 active"> ALL ORDERS</a> </div>
								</li>
								<!--end::Nav item-->
							</ul>
						</div>
					</div>
				</div>
				<!--end::Col-->
				<div class="col-xl-12">
					<div class=" ">
						<!--begin::Tabs-->
						<ul class="nav row mb-5">
							<li class="nav-item col-12 col-lg mb-5 mb-lg-0">
								<a class="nav-link btn btn-flex btn-color-muted btn-outline btn-outline-default btn-active-primary d-flex flex-grow-1 flex-column flex-center py-5 h-1250px  active" data-bs-toggle="tab" href="#kt_general_widget_1_1">
									<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg--><span class="svg-icon svg-icon-3x mb-5 mx-0">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black"></path>
											<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black"></path>
										</svg>
									</span>
									<!--end::Svg Icon--><span class="fs-6 fw-bold">All
										<br>Orders</span>
								</a>
							</li>
							<li class="nav-item col-12 col-lg mb-5 mb-lg-0">
								<a class="nav-link btn btn-flex btn-color-muted btn-outline btn-outline-default btn-active-primary d-flex flex-grow-1 flex-column flex-center py-5 h-1250px  " data-bs-toggle="tab" href="#kt_general_widget_1_2">
									<!--begin::Svg Icon | path: icons/duotune/general/gen008.svg--><span class="svg-icon svg-icon-3x mb-5 mx-0">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M3 2H10C10.6 2 11 2.4 11 3V10C11 10.6 10.6 11 10 11H3C2.4 11 2 10.6 2 10V3C2 2.4 2.4 2 3 2Z" fill="black"></path>
											<path opacity="0.3" d="M14 2H21C21.6 2 22 2.4 22 3V10C22 10.6 21.6 11 21 11H14C13.4 11 13 10.6 13 10V3C13 2.4 13.4 2 14 2Z" fill="black"></path>
											<path opacity="0.3" d="M3 13H10C10.6 13 11 13.4 11 14V21C11 21.6 10.6 22 10 22H3C2.4 22 2 21.6 2 21V14C2 13.4 2.4 13 3 13Z" fill="black"></path>
											<path opacity="0.3" d="M14 13H21C21.6 13 22 13.4 22 14V21C22 21.6 21.6 22 21 22H14C13.4 22 13 21.6 13 21V14C13 13.4 13.4 13 14 13Z" fill="black"></path>
										</svg>
									</span>
									<!--end::Svg Icon--><span class="fs-6 fw-bold">New
										<br>Orders</span>
								</a>
							</li>
							<li class="nav-item col-12 col-lg mb-5 mb-lg-0">
								<a class="nav-link btn btn-flex btn-color-muted btn-outline btn-outline-default btn-active-primary d-flex flex-grow-1 flex-column flex-center py-5 h-1250px  " data-bs-toggle="tab" href="#kt_general_widget_1_3">
									<!--begin::Svg Icon | path: icons/duotune/general/gen008.svg--><span class="svg-icon svg-icon-3x mb-5 mx-0">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M3 2H10C10.6 2 11 2.4 11 3V10C11 10.6 10.6 11 10 11H3C2.4 11 2 10.6 2 10V3C2 2.4 2.4 2 3 2Z" fill="black"></path>
											<path opacity="0.3" d="M14 2H21C21.6 2 22 2.4 22 3V10C22 10.6 21.6 11 21 11H14C13.4 11 13 10.6 13 10V3C13 2.4 13.4 2 14 2Z" fill="black"></path>
											<path opacity="0.3" d="M3 13H10C10.6 13 11 13.4 11 14V21C11 21.6 10.6 22 10 22H3C2.4 22 2 21.6 2 21V14C2 13.4 2.4 13 3 13Z" fill="black"></path>
											<path opacity="0.3" d="M14 13H21C21.6 13 22 13.4 22 14V21C22 21.6 21.6 22 21 22H14C13.4 22 13 21.6 13 21V14C13 13.4 13.4 13 14 13Z" fill="black"></path>
										</svg>
									</span>
									<!--end::Svg Icon--><span class="fs-6 fw-bold">
										<br>Sales</span>
								</a>
							</li>
						</ul>
						<!--begin::Tab content-->
						<div class="tab-content">
							<!-- all orders tab -->
							<div class="tab-pane fade show active" id="kt_general_widget_1_1">
								<!--begin::Tables Widget 2-->
								<div class="row">
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
																<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
																<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
															</svg>
														</span>
														<!--end::Svg Icon-->
														<input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Order">
													</div>
													<!--end::Search-->
												</div>
												<!--end::Card title-->
												<!--begin::Card toolbar-->
												<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
													<!--begin::Flatpickr-->
													<div class="input-group w-250px">
														<input class="form-control form-control-solid rounded rounded-end-0 flatpickr-input" placeholder="Pick date range" id="kt_ecommerce_sales_flatpickr" type="hidden">
														<button class="btn btn-icon btn-light" id="kt_ecommerce_sales_flatpickr_clear">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg--><span class="svg-icon svg-icon-2">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="black"></rect>
																	<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="black"></rect>
																</svg>
															</span>
															<!--end::Svg Icon-->
														</button>
													</div>
													<!--end::Flatpickr-->
												</div>
												<!--end::Card toolbar-->
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body pt-0">
												<!--begin::Table-->
												<div id="kt_ecommerce_sales_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
													<div class="table-responsive">
														<table class="table align-middle table-row-dashed fs-6 		gy-5" id="kt_ecommerce_sales_table">
															<!--begin::Table head-->
															<thead>
																<!--begin::Table row-->
																<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
																	<th class="w-10px pe-2">
																		<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
																			<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_sales_table .form-check-input" value="1" />
																		</div>
																	</th>
																	<th class="min-w-100px">Order ID</th>
																	<th class="min-w-175px">Customer</th>
																	<th class="text-end min-w-70px">Status</th>
																	<th class="text-end min-w-100px">Total</th>
																	<th class="text-end min-w-100px">Date Added</th>
																	<th class="text-end min-w-100px">Actions</th>
																</tr>
																<!--end::Table row-->
															</thead>
															<tbody class="fw-bold text-gray-600">
																<!--end::Table head-->
																<!--begin::Table body-->
																<?php

																$sql = "SELECT orders.*, customers.first_name, customers.last_name, orders.date, inquiries.id as enq , 
																					(SELECT SUM(orders_products.quantity * quotations_products.price) FROM orders 
																					INNER JOIN orders_products ON orders.id = orders_products.orders_id INNER JOIN quotations_products ON quotations_products.id = orders_products.quotation_products_id INNER JOIN inquiries_products ON quotations_products.inquiry_product_id = inquiries_products.id INNER JOIN products ON inquiries_products.product_id = products.id INNER JOIN tax ON tax.id = products.tax_id WHERE orders.id = orders.id) as total
																					FROM orders 
																					INNER JOIN inquiries ON inquiries.id = orders.inquiry_id  
																					INNER JOIN customers ON customers.id = inquiries.customer_id
																					";


																$result = $db_query_obj->sql_qury("$sql");



																if (!$result || $result == null) {
																	//error
																	echo '';
																} else {
																	//fetch the data
																	while ($row_all_orders = mysqli_fetch_assoc($result)) {
																		$customername = $row_all_orders['first_name'] . ' ' . $row_all_orders['last_name'];

																		// if we get the data display it here
																		require('includes/all_orders_table_row.php');
																	}
																}

																?>
																</tr>
															</tbody>
															<!--end::Table body-->
														</table>
													</div>
												</div>
												<!--end::Table-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Products-->
									</div>
								</div>
							</div>
							<!-- end: all orders -->
							<!-- new orders section -->
							<div class="tab-pane fade" id="kt_general_widget_1_2">
								<!--begin::Tables Widget 2-->
								<div class="row">
									<!--begin::Col-->
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
															<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
															<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
														</svg>
													</span>
													<!--end::Svg Icon-->
													<input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Order">
												</div>
												<!--end::Search-->
											</div>
											<!--end::Card title-->
											<!--begin::Card toolbar-->
											<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
												<!--begin::Flatpickr-->
												<div class="input-group w-250px">
													<input class="form-control form-control-solid rounded rounded-end-0 flatpickr-input" placeholder="Pick date range" id="kt_ecommerce_sales_flatpickr" type="hidden">
													<input class="form-control form-control-solid rounded rounded-end-0 form-control input" placeholder="Pick date range" tabindex="0" type="text" readonly="readonly">
													<button class="btn btn-icon btn-light" id="kt_ecommerce_sales_flatpickr_clear">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg--><span class="svg-icon svg-icon-2">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="black"></rect>
																<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="black"></rect>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
												</div>
												<!--end::Flatpickr-->
											</div>
											<!--end::Card toolbar-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Table-->
											<div id="kt_ecommerce_sales_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
												<div class="table-responsive">
													<table class="table align-middle table-row-dashed fs-6 gy-5 	dataTable no-footer" id="kt_ecommerce_products_table">
														<!--begin::Table head-->
														<thead>
															<!--begin::Table row-->
															<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
																<th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 29.25px;">
																	<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
																		<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_sales_table .form-check-input" value="1">
																	</div>
																</th>
																<th class="text-end min-w-100px">Order ID</th>
																<th class="text-end min-w-100px">Customer</th>
																<th class="text-end min-w-100px">Status</th>
																<th class="text-end min-w-100px">Total</th>
																<th class="text-end min-w-100px">Date Added</th>
																<th class="text-end min-w-75px">Actions</th>
															</tr>
															<!--end::Table row-->
														</thead>
														<!--end::Table head-->
														<!--begin::Table body-->
														<tbody class="fw-bold text-gray-600">
															<?php

															$sql = "SELECT orders.*, customers.first_name, customers.last_name, orders.date, inquiries.id as enq,(SELECT SUM(orders_products.quantity * quotations_products.price) FROM orders 
																INNER JOIN orders_products ON orders.id = orders_products.orders_id INNER JOIN quotations_products ON quotations_products.id = orders_products.quotation_products_id INNER JOIN inquiries_products ON quotations_products.inquiry_product_id = inquiries_products.id INNER JOIN products ON inquiries_products.product_id = products.id INNER JOIN tax ON tax.id = products.tax_id WHERE orders.id = orders.id) as total
																FROM orders INNER JOIN inquiries ON inquiries.id = orders.inquiry_id  INNER JOIN customers ON customers.id = inquiries.customer_id
																WHERE orders.order_status = 0 and orders.archied_status = 0;";


															$result = $db_query_obj->sql_qury("$sql");



															if (!$result || $result == null) {
																//error
																echo '';
															} else {
																//fetch data 
																while ($row_new_orders = mysqli_fetch_assoc($result)) {
																	$customername = $row_new_orders['first_name'] . ' ' . $row_new_orders['last_name'];
																	$orderid = $row_new_orders['id'];
																	// table row
																	require('includes/new_orders_table_row.php');
																}
															}

															?>
														</tbody>
														<!--end::Table body-->
													</table>
												</div>
											</div>
											<!--end::Table-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Products-->
									<!--end::Col-->
								</div>
							</div>
							<!-- end : new orders -->
							<!--end::Tables Widget 2-->
							<!-- sales section -->
							<div class="tab-pane fade" id="kt_general_widget_1_3">
								<!--begin::Tables Widget 2-->
								<div class="row">
									<!--begin::Col-->
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
															<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
															<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
														</svg>
													</span>
													<!--end::Svg Icon-->
													<input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Order">
												</div>
												<!--end::Search-->
											</div>
											<!--end::Card title-->
											<!--begin::Card toolbar-->
											<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
												<!--begin::Flatpickr-->
												<div class="input-group w-250px">
													<input class="form-control form-control-solid rounded rounded-end-0 flatpickr-input" placeholder="Pick date range" id="kt_ecommerce_sales_flatpickr" type="hidden">
													<input class="form-control form-control-solid rounded rounded-end-0 form-control input" placeholder="Pick date range" tabindex="0" type="text" readonly="readonly">
													<button class="btn btn-icon btn-light" id="kt_ecommerce_sales_flatpickr_clear">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg--><span class="svg-icon svg-icon-2">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="black"></rect>
																<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="black"></rect>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
												</div>
												<!--end::Flatpickr-->
											</div>
											<!--end::Card toolbar-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Table-->
											<div id="kt_ecommerce_sales_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
												<div class="table-responsive">
													<table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_ecommerce_category_table">
														<!--begin::Table head-->
														<thead>
															<!--begin::Table row-->
															<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
																<th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" aria-label=" " style="width: 29.25px;">
																	<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
																		<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_sales_table .form-check-input" value="1">
																	</div>
																</th>
																<th class="text-end min-w-100px">Order ID</th>
																<th class="text-end min-w-100px">Customer</th>
																<th class="text-end min-w-100px">Status</th>
																<th class="text-end min-w-100px">Total</th>
																<th class="text-end min-w-100px">Date Added</th>
																<th class="text-end min-w-75px">Actions</th>
															</tr>
															<!--end::Table row-->
														</thead>
														<!--end::Table head-->
														<!--begin::Table body-->
														<tbody class="fw-bold text-gray-600">
															<?php

															$sql = "SELECT orders.*, customers.first_name, customers.last_name, orders.date, inquiries.id as enq ,(SELECT SUM(orders_products.quantity * quotations_products.price) FROM orders 
																	INNER JOIN orders_products ON orders.id = orders_products.orders_id INNER JOIN quotations_products ON quotations_products.id = orders_products.quotation_products_id INNER JOIN inquiries_products ON quotations_products.inquiry_product_id = inquiries_products.id INNER JOIN products ON inquiries_products.product_id = products.id INNER JOIN tax ON tax.id = products.tax_id WHERE orders.id = orders.id) as total
																	FROM orders INNER JOIN inquiries ON inquiries.id = orders.inquiry_id  INNER JOIN customers ON customers.id = inquiries.customer_id
																	WHERE orders.order_status = 1 and orders.archied_status = 0;";


															$result = $db_query_obj->sql_qury("$sql");



															if (!$result || $result == null) {
																//error
																echo '';
															} else {
																//fetch data 
																while ($row_sales = mysqli_fetch_assoc($result)) {
																	$customername = $row_sales['first_name'] . ' ' . $row_sales['last_name'];
																	$orderid = $row_sales['id'];
																	// table row
																	require('includes/sales_table_row.php');
																}
															}

															?>
														</tbody>
														<!--end::Table body-->
													</table>
												</div>
											</div>
											<!--end::Table-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Products-->
									<!--end::Col-->
								</div>
							</div>
							<!-- end : sales -->
						</div>
						<!--end::Tab content-->
					</div>
				</div>
				<!--end::Col-->
			</div>
		</div>
		<!--end::Container-->
	</div>
	<!--end::Post-->
</div>
<!-- code to archieve  orders -->
<script>
	function archieve_order(id) {
		// product_id, product_information
		Swal.fire({
			html: `Are you sure you want to archieve order #${id}?`,
			icon: "warning",
			buttonsStyling: false,
			showCancelButton: true,
			confirmButtonText: "Archieve!",
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
				element1.name = "add_to_archieve";
				element1.value = id;
				element1.type = 'number';
				form.appendChild(element1);
				form.submit();
			}
		});
	}
</script>


<script>
	// <!-- JS for all orders-->
	document.addEventListener("DOMContentLoaded", function(event) {
		//js  data table for all orders
		$('<script/>', {
			type: 'text/javascript',
			src: 'assets/js/custom/apps/ecommerce/sales/listing.js'
		}).appendTo('head');
		// for for data table for new orders : used produst table
		$('<script/>', {
			type: 'text/javascript',
			src: 'assets/js/custom/apps/ecommerce/catalog/products.js'
		}).appendTo('head');

		// js data table for sales: used category table
		$('<script/>', {
			type: 'text/javascript',
			src: 'assets/js/custom/apps/ecommerce/catalog/categories.js'
		}).appendTo('head');

	});
</script>