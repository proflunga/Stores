<?php

require 'controllers/pos/pos.controller.php';

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
				<a href="#" onclick="history.back();" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app"> <i class="fa fa-arrow-left"></i> Back</a>
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

				<!--begin::Col-->
				<div class="col-xl-4 " style="margin: auto;">
					<div class="card shadow-sm">

						<div class="card-body">

							<h3 class="fs-5 fw-bold my-7 " id="company_details" align='center'></h3>
							<hr class="text-gray-500">
							<div class=" table-responsive">
								<table class="table table-hover table-rounded table-striped border gy-0 gs-2" id="receipt_id">
									<thead>
										<tr class="fw-bold fs-6  border-bottom-2 border-gray-200">
											<th>Items</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>

									</tbody>
								</table>
							</div>
							<div class="row px-3">
								<div class="col-6">
									<label class=" fw-bolder">Grand Total:</label>
								</div>
								<div class="col-6">
									<span class="d-flex flex-row-reverse fw-bolder" id="grand_total_">$ </span>
								</div>
							</div>
						</div>

						<div class="card-footer">
							<hr class="text-gray-500">

							<div class="row mb-5">

								<div class="col-6">
									<label class="">Receipt No.:</label>
								</div>
								<div class="col-6">
									<span class="d-flex flex-row-reverse" id="rec_no"></span>
								</div>
								<div class="col-6">
									<label class="">Payment Method:</label>
								</div>
								<div class="col-6">
									<span class="d-flex flex-row-reverse" id="payment_method_"></span>
								</div>
								<div class="col-6">
									<label class="">Customer ID: </label>
								</div>
								<div class="col-6">
									<span class="d-flex flex-row-reverse" id="cutomer_id_"></span>
								</div>

								<div class="col-6">
									<label class=" fw-bolder">Date:</label>
								</div>
								<div class="col-6">
									<span class="d-flex flex-row-reverse fw-bolder" id="trans_date_"> </span>
								</div>

							</div>


						</div>

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
<?php
if (isset($_GET['trans_id'])) {
	$trans_id = $_GET['trans_id'];
} else {
	$trans_id = 0;
}
$jsonData =  $pos->rec_products('receipt_id', $trans_id);
?>

<script>
	$(document).ready(function() {
		<?php
		if (isset($_GET['trans_id'])) {
			$trans_id = $_GET['trans_id'];
		} else {
			$trans_id = 0;
		}
		$pos->transaction_data($trans_id)
		?>

		<?php

		$global_transaction->company_data();
		?>

		document.getElementById('company_details').innerHTML = 'Receipt <br><br>' + company_data.company_details;

		document.getElementById('rec_no').innerHTML = transaction_data.rec_no;
		document.getElementById('payment_method_').innerHTML = transaction_data.payment_method;
		document.getElementById('cutomer_id_').innerHTML = transaction_data.customer_datails;
		document.getElementById('grand_total_').innerHTML = '$' + transaction_data.amount_charged;
		document.getElementById('trans_date_').innerHTML = transaction_data.date;
	});
</script>