<?php

if (isset($_GET['inq_id'])) {
	$inq_id = $_GET['inq_id'];
} else {
	$page_redirect->redirect_page('inquiry.php');
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
				<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Inquiry Details
					<!--begin::Separator-->
					<span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
					<!--end::Separator-->
					<!--begin::Description-->
					<span class="text-muted fs-7 fw-bold mt-2">Home > Inquiries > Inquiry Details</span>
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

			<div class="row">
				<div class="col-xl-3">
					<!-- begin::Action-->
					<div class="card">
						<div class="card-body">
							Status: <div id="status_inq_id"></div>

							<a href="#" id="generate_quote_btn" class="">
								<div class="menu-item mb-3  bg-hover-light text-dark my-10">
									<!--begin::Sent-->
									<span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/general/gen016.svg-->
											<span class="svg-icon svg-icon-2 me-3">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M15.43 8.56949L10.744 15.1395C10.6422 15.282 10.5804 15.4492 10.5651 15.6236C10.5498 15.7981 10.5815 15.9734 10.657 16.1315L13.194 21.4425C13.2737 21.6097 13.3991 21.751 13.5557 21.8499C13.7123 21.9488 13.8938 22.0014 14.079 22.0015H14.117C14.3087 21.9941 14.4941 21.9307 14.6502 21.8191C14.8062 21.7075 14.9261 21.5526 14.995 21.3735L21.933 3.33649C22.0011 3.15918 22.0164 2.96594 21.977 2.78013C21.9376 2.59432 21.8452 2.4239 21.711 2.28949L15.43 8.56949Z" fill="currentColor"></path>
													<path opacity="0.3" d="M20.664 2.06648L2.62602 9.00148C2.44768 9.07085 2.29348 9.19082 2.1824 9.34663C2.07131 9.50244 2.00818 9.68731 2.00074 9.87853C1.99331 10.0697 2.04189 10.259 2.14054 10.4229C2.23919 10.5869 2.38359 10.7185 2.55601 10.8015L7.86601 13.3365C8.02383 13.4126 8.19925 13.4448 8.37382 13.4297C8.54839 13.4145 8.71565 13.3526 8.85801 13.2505L15.43 8.56548L21.711 2.28448C21.5762 2.15096 21.4055 2.05932 21.2198 2.02064C21.034 1.98196 20.8409 1.99788 20.664 2.06648Z" fill="currentColor"></path>
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title fw-bolder">Prepare Quotation</span>
									</span>
									<!--end::Sent-->
								</div>

							</a>

						</div>
					</div>
					<!-- end::Action-->
				</div>
				<div class="col-xl-9">
					<div class="card " style=" width: 210mm;  ">
						<!-- begin::Body-->
						<div class="card-body py-20">
							<!-- begin::Wrapper-->
							<div class="mw-lg-950px mx-auto w-100">
								<!-- begin::Header-->
								<div class="d-flex justify-content-between flex-column flex-sm-row mb-19">
									<h4 class="fw-boldest text-gray-800 fs-2qx pe-5 pb-7">INQUIRY <span class="text-muted"></span></h4>

									<!--end::Logo-->
									<div class="text-sm-end">

										<!--end::Logo-->
										<!--begin::Text-->
										<div class="text-sm-end text-muted mt-6">
											<div class="fw-bold fs-4 ">Customer Details</div>
											<div class="text-dark" id="customer_dets_id"> </div>

										</div>
										<!--end::Text-->
									</div>

								</div>
								<!--end::Header-->
								<div class="row ">
									<div class="col-xl-6 ">
										<div class="flex-root d-flex flex-column">
											<span class="text-muted">inquiry Number</span>
											<span class="fs-5" id="inq_number_id"></span>
										</div>
									</div>
									<div class="col-xl-6 d-flex text-end justify-content-end">
										<div class=" d-flex flex-column">
											<span class="text-muted">Date</span>
											<span class="fs-5" id="date_inq_id">-</span>
										</div>
									</div>
								</div>



								<div class="table-responsive border-bottom mb-14  mt-10">
									<table class="table table-striped fs-7" id="inquiry_products">
										<thead class="bg-secondary   ">
											<tr class="border-bottom fw-bolder text-uppercase">
												<th class="  text-left">&nbsp;&nbsp; Name</th>
												<th class="  text-left"> Code</th>
												<th class="   ">Quantity</th>
											</tr>
										</thead>
										<tbody>


										</tbody>

									</table>
								</div>



							</div>
							<!-- end::Body-->
						</div>
						<!--end::Modals-->
					</div>
				</div>
			</div>

		</div>
		<!-- end::Wrapper-->
	</div>
	<!--end::Post-->
</div>




<?php

if (isset($_GET['inq_id'])) {
	$inq_id = $_GET['inq_id'];
} else {
	$inq_id = 0;
}


$jsonData =  $inquiries_obj->fetch_inquiry_products('inquiry_products', $inq_id);
?>

<script>
	// A $( document ).ready() block.
	$(document).ready(function() {
		//get url parameter (inq_id)
		const queryString = window.location.search;
		const urlParams = new URLSearchParams(queryString);

		const inq_id = urlParams.get('inq_id');

		<?php
		if (isset($_GET['inq_id'])) {
			$inq_id = $_GET['inq_id'];
		} else {
			$inq_id = 0;
		}
		$inquiries_obj->fetch_inq_data($inq_id)
		?>

		if (inq_data.status_ == 0) {
			status = '<span class="badge badge-primary  "  >Pending </span> ';
		} else {

			status = '<span class="badge badge-warning  "  >Archived </span> ';

		}

		document.getElementById('generate_quote_btn').href = `inquiries.php?action=generate_quote&inq_id=${inq_id}`;
		document.getElementById('status_inq_id').innerHTML = status;
		document.getElementById('customer_dets_id').innerHTML = inq_data.customer_details;
		document.getElementById('inq_number_id').innerHTML = inq_data.Invoice_number;
		document.getElementById('date_inq_id').innerHTML = inq_data.date;
		document.getElementById('generate_quote_btn').href = 'quotations.php?action=generate_quote&inq_id=' + inq_data.id;

	});
</script>