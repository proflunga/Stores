<?php
require('controllers/inquiries/generate_quote.php');
?>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Toolbar-->
	<div class="toolbar" id="kt_toolbar">
		<!--begin::Container-->
		<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
			<!--begin::Page title-->
			<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
				<!--begin::Title-->
				<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1"> Quotations
					<!--begin::Separator-->
					<span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
					<!--end::Separator-->
					<!--begin::Description-->
					<span class="text-muted fs-7 fw-bold mt-2">Home > Quotations > Generate Quote</span>
					<!--end::Description-->
				</h1>
				<!--end::Title-->
			</div>
			<!--end::Page title-->
			<!--begin::Actions-->
			<div class="d-flex align-items-center gap-2 gap-lg-3">
				<!--begin::Primary button-->
				<a class="btn btn-secondary btn-sm" href="inquiries.php?action=quoted_inquiries">
					<li class="fa fa-arrow-left"></li> &nbsp; Back
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
			<div class="content flex-row-fluid" id="kt_content">
				<div class="d-flex flex-row flex-column-fluid align-items-stretch">
					<!--begin::Content-->
					<div class="content flex-row-fluid" id="kt_content">
						<!--begin::Layout-->
						<form action="" method="post">
							<div class="d-flex flex-column flex-lg-row">
								<!--begin::Content-->
								<div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-xl-10">
									<!--begin::Card-->
									<div class="card">
										<!--begin::Card body-->
										<div class="card-body p-12">
											<!--begin::Form-->
											<input type="hidden" value="" name="inq_id" id="inq_id_input">
											<!--begin::Wrapper-->
											<div class="d-flex flex-column align-items-start flex-xxl-row">
												<!--begin::Input group-->
												<div class="d-flex flex-center flex-equal fw-row text-nowrap order-1 order-xxl-2 "> <span class="fs-2x fw-bolder text-gray-800">Quotation #</span>
													<input type="text" class="form-control form-control-flush fw-bolder text-muted fs-3 w-125px" value="2021001" placehoder="...">
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="d-flex align-items-center justify-content-end flex-equal order-3 fw-row">
													<!--begin::Date-->
													<div class="fs-6 fw-bolder text-gray-700 text-nowrap"> Date:</div>
													<!--end::Date-->
													<!--begin::Input-->
													<div class="position-relative d-flex align-items-center w-150px">
														<!--begin::Datepicker-->
														<input class="form-control form-control-solid" name="quotation_date" placeholder="Pick a date" id="kt_datepicker_2" />
													</div>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
											</div>
											<!--end::Top-->
											<!--begin::Separator-->
											<div class="separator separator-dashed my-10"></div>
											<!--end::Separator-->
											<!--begin::Wrapper-->
											<div class="mb-0">
												<!--begin::Row-->
												<div class="row gx-10 mb-5">
													<!--begin::Col-->
													<div class="col-lg-6">
														<label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Customer Details</label>
														<!--begin::Input group-->
														<div class="mb-5">
															<input type="text" class="form-control form-control-solid" name="customer_name" placeholder="Name">
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-5">
															<input type="text" class="form-control form-control-solid" name="customer_email" placeholder="Email">
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-5">
															<textarea name="customer_notes" class="form-control form-control-solid" rows="3" placeholder="What is this invoice for?"></textarea>
														</div>
														<!--end::Input group-->
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
												<!--begin::Table wrapper-->
												<div class="table-responsive mb-10">
													<!--begin::Repeater-->
													<div id="products_repeater">
														<!--begin::Form group-->
														<div class="form-group">
															<div data-repeater-list="products_repeater">
																<div data-repeater-item>
																	<div class="form-group row mb-5 fs-8 ">
																		<div class="col-md-3 fs-8">
																			<label class="form-label fs-8">Item:</label>
																			<?php
																			$populate_select_obj->print_select_without_id_desc('product_name', 'products', 'class="form-select fs-8 " name="item_name" data-placeholder="Select an option"', 'where 1');
																			?>
																		</div>
																		<div class="col-md-3">
																			<label class="form-label">Item Code:</label>
																			<?php
																			$populate_select_obj->print_select_without_id_desc('product_code', 'products', 'class="form-select fs-8 " name="item_code" data-placeholder="Select an option" ', 'where 1');
																			?>
																		</div>
																		<div class="col-md-1">
																			<label class="form-label fs-8">QTY:</label>
																			<input class="form-control item_quantity fs-8" oninput="update_prices()" name="quantity" type="text" />
																		</div>
																		<div class="col-md-2">
																			<label class="form-label fs-8 ">Price:</label>
																			<input class="form-control fs-8 item_price" oninput="update_prices()" type="text" value="0" name="price" />
																		</div>
																		<div class="col-md-1">
																			<label class="form-label fs-8">Total:</label>
																			<input class="form-control fs-8 item_total" type="text" name="total" />
																		</div>
																		<div class="col-md-1 fs-8">
																			<a href="javascript:;" data-repeater-delete class="btn  btn-sm btn-light-danger mt-3 mt-md-9 fs-8"> <i class="la la-trash-o fs-3 "></i> </a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!--end::Form group-->
														<!--begin::Form group-->
														<div class="form-group">
															<a href="javascript:;" data-repeater-create class="btn btn-light-primary"> <i class="la la-plus"></i>Add </a>
														</div>
														<!--end::Form group-->
													</div>
													<!--end::Repeater-->
													<!--begin::Table-->
													<table class="table g-5 gs-0 mb-0 fw-bolder text-gray-700" data-kt-element="items">
														<!--begin::Table foot-->
														<tfoot>
															<tr class="border-top border-top-dashed align-top fs-6 fw-bolder text-gray-700">
																<th colspan="2" class="border-bottom border-bottom-dashed ps-0">
																	<div class="d-flex flex-column align-items-start">
																		<div class="fs-5">Subtotal</div>
																		<button class="btn btn-link py-1" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Coming soon">Add tax</button>
																		<button class="btn btn-link py-1" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Coming soon">Add discount</button>
																	</div>
																</th>
																<th colspan="2" class="border-bottom border-bottom-dashed text-end">$ <span data-kt-element="sub-total" id="sub_total">0.00</span> </th>
															</tr>
															<tr class="align-top fw-bolder text-gray-700">
																<th></th>
																<th colspan="2" class="fs-4 ps-0">Total</th>
																<th colspan="2" class="text-end fs-4 text-nowrap">$ <span data-kt-element="grand-total" id="grand_total">0.00</span> </th>
															</tr>
														</tfoot>
														<!--end::Table foot-->
													</table>
												</div>
												<!--end::Table-->
												<!--end::Item template-->
												<!--begin::Notes-->
												<div class="mb-0">
													<label class="form-label fs-6 fw-bolder text-gray-700">Notes</label>
													<textarea name="notes" class="form-control form-control-solid" rows="3" placeholder="Thanks for your business"></textarea>
												</div>
												<!--end::Notes-->
											</div>
											<!--end::Wrapper-->
											<!--end::Form-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Content-->
								<!--begin::Sidebar-->
								<div class="flex-lg-auto min-w-lg-300px">
									<!--begin::Card-->
									<div class="card" data-kt-sticky="true" data-kt-sticky-name="invoice" data-kt-sticky-offset="{default: false, lg: '200px'}" data-kt-sticky-width="{lg: '250px', lg: '300px'}" data-kt-sticky-left="auto" data-kt-sticky-top="150px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
										<!--begin::Card body-->
										<div class="card-body p-10">
											<!--begin::Input group-->
											<div class="mb-10">
												<!--begin::Label-->
												<label class="form-label fw-bolder fs-6 text-gray-700">Currency</label>
												<!--end::Label-->
												<?php
												$populate_select_obj->print_select_without_id_desc('description', 'payment_method', 'name="currency" aria-label="Select a Timezone" data-control="select2" data-placeholder="Select currency" class="form-select form-select-solid select2-hidden-accessible" data-select2-id="select2-data-10-n6tq" tabindex="-1" aria-hidden="true" ', 'where 1');
												?>
											</div>
											<!--begin::Actions-->
											<div class="mb-0">
												<!--begin::Row-->
												<div class="row mb-5">
													<!--begin::Col-->
													<div class="col"> <a href="#" class="btn btn-light btn-active-light-primary w-100">Preview</a> </div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col"> <a href="#" class="btn btn-light btn-active-light-primary w-100">Download</a> </div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
												<button type="submit" name="generate_quote" class="btn btn-primary w-100" id="generate_quote_id">
													<!--begin::Svg Icon | path: icons/duotune/general/gen016.svg--><span class="svg-icon svg-icon-3">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M15.43 8.56949L10.744 15.1395C10.6422 15.282 10.5804 15.4492 10.5651 15.6236C10.5498 15.7981 10.5815 15.9734 10.657 16.1315L13.194 21.4425C13.2737 21.6097 13.3991 21.751 13.5557 21.8499C13.7123 21.9488 13.8938 22.0014 14.079 22.0015H14.117C14.3087 21.9941 14.4941 21.9307 14.6502 21.8191C14.8062 21.7075 14.9261 21.5526 14.995 21.3735L21.933 3.33649C22.0011 3.15918 22.0164 2.96594 21.977 2.78013C21.9376 2.59432 21.8452 2.4239 21.711 2.28949L15.43 8.56949Z" fill="white"></path>
															<path opacity="0.3" d="M20.664 2.06648L2.62602 9.00148C2.44768 9.07085 2.29348 9.19082 2.1824 9.34663C2.07131 9.50244 2.00818 9.68731 2.00074 9.87853C1.99331 10.0697 2.04189 10.259 2.14054 10.4229C2.23919 10.5869 2.38359 10.7185 2.55601 10.8015L7.86601 13.3365C8.02383 13.4126 8.19925 13.4448 8.37382 13.4297C8.54839 13.4145 8.71565 13.3526 8.85801 13.2505L15.43 8.56548L21.711 2.28448C21.5762 2.15096 21.4055 2.05932 21.2198 2.02064C21.034 1.98196 20.8409 1.99788 20.664 2.06648Z" fill="white"></path>
														</svg>
													</span>
													<!--end::Svg Icon-->Send Quote
												</button>
											</div>
											<!--end::Actions-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Sidebar-->
							</div>
							<!--end::Layout-->
						</form>
					</div>
					<!--end::Content-->
				</div>
			</div>
			<!--end::Modals-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Post-->
</div>
<script src="assets/plugins/custom/formrepeater/formrepeater.bundle.js"></script>
<!-- date time picker -->
<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script>
	// A $( document ).ready() block.
	$(document).ready(function() {
		//get url parameter (inq_id)
		const queryString = window.location.search;
		const urlParams = new URLSearchParams(queryString);
		const inq_id = urlParams.get('inq_id');
		document.getElementById('inq_id_input').value = inq_id;
		// set the date time picker
		$("#kt_datepicker_2").flatpickr();
	});
</script>
<script>
	$(document).ready(function() {
		$('#products_repeater').repeater({
			initEmpty: false,
			defaultValues: {
				'text-input': 'foo'
			},
			show: function() {
				$(this).slideDown();
				// Re-init select2
				$(this).find('[data-kt-repeater="select2"]').select2();
				// Re-init flatpickr
				$(this).find('[data-kt-repeater="datepicker"]').flatpickr();
				// Re-init tagify
				new Tagify(this.querySelector('[data-kt-repeater="tagify"]'));
			},
			hide: function(deleteElement) {
				$(this).slideUp(deleteElement);
			},
			ready: function() {
				// Init select2
				$('[data-kt-repeater="select2"]').select2();
				// Init flatpickr
				$('[data-kt-repeater="datepicker"]').flatpickr();
				// Init Tagify
				new Tagify(document.querySelector('[data-kt-repeater="tagify"]'));
			}
		});
	});
</script>
<!-- script for updating values of the prices -->
<script>
	//function to update the values of the invoice
	function update_prices() {
		let item_quantity = document.getElementsByClassName('item_quantity');
		let item_price = document.getElementsByClassName('item_price');
		let item_total = document.getElementsByClassName('item_total');
		//  grand total
		var grand_total = 0;
		//calculate values for total and print them
		for (let i = 0; i < item_quantity.length; i++) {
			item_total[i].value = parseFloat(item_quantity[i].value) * parseFloat(item_price[i].value);
			grand_total += parseFloat(item_total[i].value);
		}
		document.getElementById('sub_total').innerText = grand_total.toFixed(2);
		document.getElementById('grand_total').innerText = grand_total.toFixed(2);
	}
</script>