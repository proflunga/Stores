 <?php require 'controllers/sales/transaction.void_trasaction.php'; ?>


 <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
 	<!--begin::Toolbar-->
 	<div class="toolbar" id="kt_toolbar">
 		<!--begin::Container-->
 		<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
 			<!--begin::Page title-->
 			<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
 				<!--begin::Title-->
 				<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Receipt
 					<!--begin::Separator-->
 					<span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
 					<!--end::Separator-->
 					<!--begin::Description-->
 					<span class="text-muted fs-7 fw-bold mt-2">Home > Payments > Receipt</span>
 					<!--end::Description-->
 				</h1>
 				<!--end::Title-->
 			</div>
 			<!--end::Page title-->
 			<!--begin::Actions-->
 			<div class="d-flex align-items-center gap-2 gap-lg-3">
 				<!--begin::Actions-->
 				<div class="d-flex align-items-center gap-2 gap-lg-3">

 					<a href="#" onclick="history.back();" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app"> <i class="fa fa-arrow-left"></i> back</a>
 				</div>
 				<!--end::Actions-->
 				<a href="sales.php?action=sales_transactions" class="btn btn-primary btn-sm">
 					<li class="fa fa-list"></li> &nbsp; Payments
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
 			<div class="mb-7">
 				<div class="d-flex flex-stack flex-wrap mt-lg-5 ">

 					<form action="#" method="post">
 						<input type="hidden" value="" id="void_trans_id" name="trans_id">

 						<div id="void_btn_id">

 						</div>

 					</form>
 					<button id="print_btn" class="btn btn-secondary btn-sm">
 						<li class="fa fa-print"> </li> &nbsp; Print
 					</button>
 					<!-- begin::Action-->
 				</div>
 			</div>
 			<hr>

 			<div id="pdf_prev_id" class="card" style=" width: 210mm;  ">
 				<!-- begin::Body-->
 				<div class="card-body py-20">
 					<!-- begin::Wrapper-->
 					<div class="mw-lg-950px mx-auto w-100">

 						<div class="row">
 							<div class="col-lg-6">
 								<label class="form-label justify-content-start  fw-boldest text-gray-800 fs-4 "> Receipt </label>

 							</div>
 							<div class="col-lg-6">
 								<div class="text-gray-600  justify-content-end  text-end fw-bold "><span id="company_data_id"> </span> </div>

 							</div>
 						</div>

 						<hr>

 						<div class="row mb-7">
 							<div class="flex-root d-flex flex-column">
 								<span class="text-muted fw-bolder">Customer Details: </span>
 								<span id="hd_customer"></span>
 							</div>
 						</div>

 						<!--end::Header-->
 						<div class="row">
 							<div class="col-lg-3 flex-root d-flex flex-column">
 								<span class="text-muted">Rec No.</span>
 								<span class="fs-7 fw-bold" id="trans_num_id"></span>
 							</div>
 							<div class="col-lg-3 flex-root d-flex flex-column">
 								<span class="text-muted">Sales Rep:</span>
 								<span class="fs-7 fw-bold" id="hd_trans_username"></span>
 							</div>
 							<div class="col-lg-3 flex-root d-flex flex-column">
 								<span class="text-muted">Date: </span>
 								<span class="fs-7 fw-bold" id="hd_trans_date"></span>
 							</div>
 							<div class="col-lg-3 flex-root d-flex flex-column">
 								<span class="text-muted">Payment: </span>
 								<span class="fs-7 fw-bold" id="hd_trans_payment_method"></span>
 							</div>
 						</div>
 						<!--begin::Body-->
 						<div class="border-bottom pb-12">


 							<!--begin::Content-->
 							<div class="flex-grow-1 pt-8 mb-13">
 								<!--begin::Table-->

 								<div class="table-responsive fs-7">
 									<table class="table table-striped gy-2 gs-7" id="pos_sale_products_id">
 										<thead>
 											<tr class="border-bottom fw-bolder   text-uppercase bg-light">
 												<th class="">Item #</th>
 												<th class="">Product Name</th>
 												<th class=""> Code</th>
 												<th class="">Quantity</th>
 												<th class="">Price</th>
 												<th class="text-end"> Total</th>
 											</tr>
 										</thead>
 										<tbody>

 										</tbody>



 									</table>


 								</div>
 								<!--end::Wrapper-->



 							</div>
 							<div class="table-responsive fs-7">
 								<table class="table table-striped " id="pos_sale_products_id">
 									<thead>



 										<th></th>
 										<th></th>
 										<th></th>
 										<th></th>
 										<th class="text-end">
 											<span class="  fw-bolder text-muted mb-3">GRAND TOTAL:</span>
 										</th>
 										<th class="text-end">
 											<span id="total_amount_id" class="  fw-boldest">$</span>
 										</th>
 									</thead>

 								</table>


 							</div>
 							<!--end::Wrapper-->



 						</div>

 						<!-- end::Footer-->
 					</div>
 					<!-- end::Wrapper-->
 				</div>
 				<!-- end::Body-->
 			</div>

 		</div>

 	</div>
 	<!--end::Post-->
 </div>



 <?php
	if (isset($_GET['trans_id'])) {
		$trans_id = $_GET['trans_id'];
	} else {
		$trans_id = 0;
	}
	$jsonData =  $sales->pos_sale_products('pos_sale_products_id', $trans_id);
	?>


 <script>
 	// thumbnail JS	********************
 	// A $( document ).ready() block.
 	$(document).ready(function() {


 		document.getElementById('print_btn').addEventListener('click', function printDiv() {
 			var printContents = document.getElementById('pdf_prev_id').innerHTML;
 			var originalContents = document.body.innerHTML;

 			document.body.innerHTML = printContents;

 			window.print();

 			document.body.innerHTML = originalContents;
 		});




 		<?php
			if (isset($_GET['trans_id'])) {
				$trans_id = $_GET['trans_id'];
			} else {
				$trans_id = 0;
			}
			$sales->transaction_data($trans_id);


			$global_transaction->company_data();


			?>


 		//thumbnail section
 		document.getElementById('hd_customer').innerHTML = transaction_data.customer_datails;
 		document.getElementById('hd_trans_username').innerHTML = transaction_data.user_username
 		document.getElementById('hd_trans_date').innerHTML = transaction_data.date;
 		document.getElementById('hd_trans_payment_method').innerHTML = transaction_data.payment_method;

 		var amount_charged = transaction_data.amount_charged;
 		let ac_var = Number(amount_charged).toFixed(2);
 		document.getElementById('total_amount_id').innerHTML = '$' + ac_var;

 		//void		
 		document.getElementById('void_trans_id').value = transaction_data.rec_no;
 		document.getElementById('company_data_id').innerHTML = company_data.company_details;



 		if (transaction_data.void_status == 0) {

 			document.getElementById('void_btn_id').innerHTML = '<button name="void_transaction" class="btn btn-danger btn-sm my-1">  &nbsp; Void Transaction</button>';
 			document.getElementById('trans_num_id').innerHTML = transaction_data.rec_no;
 			document.getElementById('trans_status_hd').innerHTML = ' <span class="badge badge-light-success">Processed</span>';

 		} else {

 			document.getElementById('void_btn_id').innerHTML = '<button disabled  class="btn btn-light-danger">Transaction is Void</button>';
 			let trans_ref_num = '#' + trans_id;
 			document.getElementById('trans_num_id').innerHTML = transaction_data.rec_no.strike();
 			document.getElementById('trans_status_hd').innerHTML = '<span class="badge badge-light-danger">Voided</span>';
 		}




 	});
 </script>