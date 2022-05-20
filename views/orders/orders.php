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
					<span class="text-muted fs-7 fw-bold mt-2">Home > Orders </span>
					<!--end::Description-->
				</h1>
				<!--end::Title-->
			</div>
			<!--end::Page title-->

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


				<div class="row">
					<div class="col-xl-3">
						<!--begin::Statistics Widget 5-->
						<a href="orders.php?action=pending_orders" class="card bg-primary hoverable card-xl-stretch mb-5 mb-xl-8">
							<!--begin::Body-->
							<div class="card-body">
								<!--begin::Svg Icon | path: icons/duotune/graphs/gra005.svg-->
								<span class="svg-icon svg-icon-white svg-icon-3x ms-n1  pulse pulse-white">
									<span id="pulse_1"></span>
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none">

										<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="white"></path>
										<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black"></path>
									</svg>
									<span id="pending_counter" class="position-absolute top-200 start-200 translate-middle  badge badge-circle badge-light ">0</span>

								</span>
								<!--end::Svg Icon-->
								<div class="text-white fw-bolder fs-2 mb-2 mt-5">Pending</div>
								<div class="fw-bold text-white">View Pending Orders</div>
							</div>
							<!--end::Body-->
						</a>
						<!--end::Statistics Widget 5-->
					</div>
					<!--end::Row-->
					<div class="col-xl-3">
						<!--begin::Statistics Widget 5-->
						<a href="Orders.php?action=processed_orders" class="card bg-primary hoverable card-xl-stretch mb-5 mb-xl-8">
							<!--begin::Body-->
							<div class="card-body">
								<!--begin::Svg Icon | path: icons/duotune/graphs/gra005.svg-->
								<span class="svg-icon svg-icon-white svg-icon-3x ms-n1">

									<span id="pulse_2"></span>
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="white"></path>
										<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black"></path>
									</svg>
								</span>
								<!--end::Svg Icon-->
								<div class="text-white fw-bolder fs-2 mb-2 mt-5"> Processed </div>
								<div class="fw-bold text-white">View Processed Orders</div>
							</div>
							<!--end::Body-->
						</a>
						<!--end::Statistics Widget 5-->
					</div>
					<!--end::Row-->
					<div class="col-xl-3">
						<!--begin::Statistics Widget 5-->
						<a href="Orders.php?action=archieved_orders" class="card bg-primary hoverable card-xl-stretch mb-5 mb-xl-8">
							<!--begin::Body-->
							<div class="card-body">
								<!--begin::Svg Icon | path: icons/duotune/graphs/gra005.svg-->
								<span class="svg-icon svg-icon-white svg-icon-3x ms-n1">

									<span id="pulse_3"></span>
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="white"></path>
										<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black"></path>
									</svg>
								</span>
								<!--end::Svg Icon-->
								<div class="text-white fw-bolder fs-2 mb-2 mt-5"> Archived</div>
								<div class="fw-bold text-white">View Archived Orders</div>
							</div>
							<!--end::Body-->
						</a>
						<!--end::Statistics Widget 5-->
					</div>


				</div>
			</div>
			<!--end::Modals-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Post-->
</div>




<script>
	<?php
	$orders_obj->fetch_pending_orders_count()
	?>

	//set   href links 
	$(document).ready(function() {

		//thumnail
		document.getElementById('pending_counter').innerHTML = data.count_;

		if (data.count_ > 0) {
			document.getElementById('pulse_1').innerHTML = '<span class="pulse-ring border-5"></span>';
		}


	});
</script>