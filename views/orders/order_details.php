<?php
// get the order_id
if (!isset($_GET['o_id'])) {
	echo '<script> window.location.href = "orders.php"; </script>';
}
$order_id = $_GET['o_id'];
require "controllers/orders/generate_sale.php";
?>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Toolbar-->
	<div class="toolbar" id="kt_toolbar">
		<!--begin::Container-->
		<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
			<!--begin::Page title-->
			<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
				<!--begin::Title-->
				<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Order Details
					<!--begin::Separator-->
					<span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
					<!--end::Separator-->
					<!--begin::Description-->
					<span class="text-muted fs-7 fw-bold mt-2">Home > Orders > Order Details</span>
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
			<!--begin::Row-->
			<div id="pdf_prev_id" class="card">
				<!-- begin::Body-->
				<div class="card-body py-20">
					<!-- begin::Wrapper-->
					<div class="mw-lg-950px mx-auto w-100">
						<!-- begin::Header-->
						<div class="d-flex justify-content-between flex-column flex-sm-row mb-19">
							<h4 class="fw-boldest text-gray-800 fs-2qx pe-5 pb-7">Order Details <br> <span class="text-muted fw-bolder fs-2" id="order_id">#0</span>
								<span id="order_status" class="badge "></span>
							</h4>
							<!--end::Logo-->

							<div class="text-sm-end">
								<!--end::Logo-->
								<!--begin::Text-->
								<div class=" fw-bold fs-4 text-muted mt-7">
									<div><span class="text-gray-800">Processed By: </span> <span id="order_username"></span></div>
									<div><span class="text-gray-800">Customer Name: </span> <span id="order_customer"></span></div>
									<div><span class="text-gray-800">Date: </span> <span id="order_date"></span></div>
								</div>
								<!--end::Text-->
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="border-bottom pb-12">
							<!--begin::Wrapper-->
							<div class="d-flex justify-content-between flex-column flex-md-row">
								<!--begin::Content-->
								<div class="flex-grow-1 pt-8 mb-13">
									<!--begin::Table-->
									<div class="table-responsive border-bottom mb-14">
										<table class="table" id="order_table">
											<thead>
												<tr class="border-bottom fs-6 fw-bolder text-muted text-uppercase">
													<th class="  ">Item #</th>
													<th class=" ">Product Name</th>
													<th class=" ">Product Code</th>
													<th class="  ">Quantity</th>
													<th class="  ">Price</th>
													<th class="  ">Line Total</th>
												</tr>
											</thead>
										</table>
									</div>
									<!--end::Table-->
								</div>
								<!--end::Content-->
								<!--begin::Separator-->
								<div class="border-end d-none d-md-block mh-450px mx-9"></div>
								<!--end::Separator-->
								<!--begin::Content-->
								<div class="text-end pt-10">
									<!--begin::Total Amount-->
									<div class="fs-3 fw-bolder text-muted mb-3">TOTAL AMOUNT</div>
									<div id="total_amount_id" class="fs-xl-2x fs-2 fw-boldest">$</div>
									<!--end::Total Amount-->
									<div class="border-bottom w-100 my-7 my-lg-16"></div>
									<!--begin::Invoice To-->
								</div>
								<!--end::Content-->

							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Body-->
						<!-- begin::Footer-->
						<div class="d-flex flex-stack flex-wrap mt-lg-10 pt-0">
							<!-- begin::Actions-->
							<div class="my-1 me-5"> </div>
							<!-- end::Actions-->
							<form action="#" method="post">

								<div id="void_btn_id"> </div>
							</form>
							<!-- begin::Action-->
							<!-- end::Action-->
						</div>
						<!-- end::Footer-->
					</div>
					<!-- end::Wrapper-->
				</div>
				<!-- end::Body-->
			</div>
			<!--end::Modals-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Post-->
</div>

<!-- create order details object -->

<!-- populate the table with order data -->
<?php
$orders_obj->fetch_order_products($order_id, "order_table");
?>
<!-- set overal total -->
<script>
	<?php
	$orders_obj->fetch_order_details($order_id);
	?>

	$(document).ready(() => {
		var totals = document.querySelectorAll('.inline_totals');
		var total = 0;
		totals.forEach(a => {
			total = total + parseFloat(a.innerText);
		});

		document.getElementById("total_amount_id").innerText = "$ " + total;
		document.getElementById("order_username").innerHTML = profile_data.processed_by;
		document.getElementById("order_customer").innerHTML = profile_data.full_name;
		document.getElementById("order_date").innerHTML = new Date(profile_data.date);
		document.getElementById("order_id").innerHTML = "#" + profile_data.id;

		// order status section
		var order_status = document.getElementById("order_status");
		if (profile_data.order_status == 1 && profile_data.archied_status == 0) {
			order_status.classList.add("badge-light-success");
			order_status.innerHTML = "Processed";

		} else if (profile_data.order_status == 0 && profile_data.archied_status == 1) {
			order_status.classList.add("badge-light-danger");
			order_status.innerHTML = "Archieved";

		} else if (profile_data.order_status == 0) {
			var products_id = document.querySelectorAll("#pro_id");
			var products_quantity = document.querySelectorAll("#pro_quantity");

			document.getElementById('void_btn_id').innerHTML += `<input type="number" style = "display:none;"name="o_id" value = "${profile_data.id}" id="">`;
			var products_obj = []
			products_id.forEach(product => {
				products_obj.push(parseInt(product.innerText));

			});
			document.getElementById('void_btn_id').innerHTML += `<input type="text" style = "display:none;" name="id" value = "${JSON.stringify(products_obj)}" id="">`;

			var quantity_obj = [];

			products_quantity.forEach(quantity => {
				quantity_obj.push(parseInt(quantity.innerText));
			});

			document.getElementById('void_btn_id').innerHTML += `<input type="text" style = "display:none;"name="product_quantity" value = "${JSON.stringify(quantity_obj)}" id="">`;
			// 
			document.getElementById('void_btn_id').innerHTML += '<button name="add_new_sale" class="btn btn-success my-1">  &nbsp; Process Order</button>';
			document.getElementById('order_id_input').value = profile_data.id;
		}


		// create processing form




	});
</script>