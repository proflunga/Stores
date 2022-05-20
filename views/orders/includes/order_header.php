<!-- Handle search for orders -->
<?php if (isset($_POST['search_order'])) {
	require "controllers/orders/search_order.php";
} ?>

<!--begin::Toolbar-->
<div class="toolbar" id="kt_toolbar">
	<!--begin::Container-->
	<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
		<!--begin::Page title-->

		<div class="d-flex align-items-center gap-2 gap-lg-3">

			<!--begin::Primary button-->
			<a href="Orders.php?action=pending_orders" class="btn btn-sm btn-primary">Pending </a>
			<!--end::Primary button-->
			<!--begin::Primary button-->
			<a href="Orders.php?action=processed_orders" class="btn btn-sm btn-primary ">Processed </a>
			<!--end::Primary button-->
			<!--begin::Primary button-->
			<a href="Orders.php?action=archieved_orders" class="btn btn-sm btn-primary">Archieved</a>
			<!--end::Primary button-->
			<form action="" method="post">
				<div class="row">
					<div class="col-10">

						<input type="text" class="form-control" name="order_id" placeholder="Order Number">
					</div>

					<div class="col-2">

						<div class="row">
							<button class="btn btn-light-primary " name="search_order">
								<li class="fa fa-search"></li>
							</button>
						</div>

					</div>
				</div>
			</form>

		</div>
		<!--end::Actions-->
	</div>
	<!--end::Container-->
</div>
<!--end::Toolbar-->