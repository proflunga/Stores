 <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
 	<!--begin::Toolbar-->
 	<div class="toolbar" id="kt_toolbar">
 		<!--begin::Container-->
 		<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
 			<!--begin::Page title-->
 			<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
 				<!--begin::Title-->
 				<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">
 					Customer Details
 					<!--begin::Separator-->
 					<span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
 					<!--end::Separator-->
 					<!--begin::Description-->
 					<span class="text-muted fs-7 fw-bold mt-2">Home > Customer Details</span>
 					<!--end::Description-->
 				</h1>
 				<!--end::Title-->
 			</div>
 			<!--end::Page title-->
 			<!--begin::Actions-->
 			<div class="d-flex align-items-center gap-2 gap-lg-3">
 				<!--begin::Primary button-->
 				<a href="customers.php" class="btn btn-sm btn-secondary">
 					<li class="fa fa-users"></li>
 					&nbsp; All Customers
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
 			<div data-includeHTML="views/customers/includes/menu.html"></div>


 			<?php require 'views/customers/includes/menu.php'; ?>

 			<div class="row">
 				<div class="col-xl-3 mb-5 ">
 					<!--begin::Statistics Widget 5-->
 					<a href="#" class="card bg-danger hoverable card-xl-stretch mb-xl-8">
 						<!--begin::Body-->
 						<div class="card-body">
 							<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
 							<span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
 								<svg width="24" height="24" viewBox="0 0 24 24" fill="none">
 									<path opacity="0.3" d="M14 12V21H10V12C10 11.4 10.4 11 11 11H13C13.6 11 14 11.4 14 12ZM7 2H5C4.4 2 4 2.4 4 3V21H8V3C8 2.4 7.6 2 7 2Z" fill="white"></path>
 									<path d="M21 20H20V16C20 15.4 19.6 15 19 15H17C16.4 15 16 15.4 16 16V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z" fill="white"></path>
 								</svg>
 							</span>
 							<!--end::Svg Icon-->
 							<div class="text-white fw-bolder fs-2 mb-2 mt-5" id="total_sales_id">-</div>
 							<div class="fw-bold text-white">Total Sales</div>
 						</div>
 						<!--end::Body-->
 					</a>
 					<!--end::Statistics Widget 5-->
 				</div>
 				<div class="col-xl-3 mb-5">
 					<!--begin::Statistics Widget 5-->
 					<a href="#" class="card bg-primary hoverable card-xl-stretch mb-xl-8">
 						<!--begin::Body-->
 						<div class="card-body">
 							<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
 							<span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
 								<svg width="24" height="24" viewBox="0 0 24 24" fill="none">
 									<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="white"></path>
 									<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="white"></path>
 								</svg>
 							</span>
 							<!--end::Svg Icon-->
 							<div class="text-white fw-bolder fs-2 mb-2 mt-5" id="total_inquiries_id">-</div>
 							<div class="fw-bold text-white">Total inquires</div>
 						</div>
 						<!--end::Body-->
 					</a>
 					<!--end::Statistics Widget 5-->
 				</div>
 				<div class="col-xl-3 mb-5">
 					<!--begin::Statistics Widget 5-->
 					<a href="#" class="card bg-primary hoverable card-xl-stretch mb-xl-8">
 						<!--begin::Body-->
 						<div class="card-body">
 							<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
 							<span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
 								<svg width="24" height="24" viewBox="0 0 24 24" fill="none">
 									<path opacity="0.3" d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z" fill="white"></path>
 									<path d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z" fill="white"></path>
 									<path d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z" fill="white"></path>
 								</svg>
 							</span>
 							<!--end::Svg Icon-->
 							<div class="text-white fw-bolder fs-2 mb-2 mt-5" id="total_orders_id">-</div>
 							<div class="fw-bold text-white">Total Orders</div>
 						</div>
 						<!--end::Body-->
 					</a>
 					<!--end::Statistics Widget 5-->
 				</div>
 				<div class="col-xl-3 mb-5">
 					<!--begin::Statistics Widget 5-->
 					<a href="#" class="card bg-primary hoverable card-xl-stretch mb-xl-8">
 						<!--begin::Body-->
 						<div class="card-body">
 							<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
 							<span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
 								<svg width="24" height="24" viewBox="0 0 24 24" fill="none">
 									<path opacity="0.3" d="M10.9607 12.9128H18.8607C19.4607 12.9128 19.9607 13.4128 19.8607 14.0128C19.2607 19.0128 14.4607 22.7128 9.26068 21.7128C5.66068 21.0128 2.86071 18.2128 2.16071 14.6128C1.16071 9.31284 4.96069 4.61281 9.86069 4.01281C10.4607 3.91281 10.9607 4.41281 10.9607 5.01281V12.9128Z" fill="white"></path>
 									<path d="M12.9607 10.9128V3.01281C12.9607 2.41281 13.4607 1.91281 14.0607 2.01281C16.0607 2.21281 17.8607 3.11284 19.2607 4.61284C20.6607 6.01284 21.5607 7.91285 21.8607 9.81285C21.9607 10.4129 21.4607 10.9128 20.8607 10.9128H12.9607Z" fill="white"></path>
 								</svg>
 							</span>
 							<!--end::Svg Icon-->
 							<div class="text-white fw-bolder fs-2 mb-2 mt-5" id="total_site_visits_id">-</div>
 							<div class="fw-bold text-white">Web Visits Sales</div>
 						</div>
 						<!--end::Body-->
 					</a>
 					<!--end::Statistics Widget 5-->
 				</div>
 			</div>



 			<script>
 				//set   href links 
 				$(document).ready(function() {
 					//get url parameter (c_id) 

 					<?php
						if (isset($_GET['c_id'])) {
							$c_id = $_GET['c_id'];
						} else {
							$c_id = 0;
						}


						$customers_obj->fetch_total_sales($c_id, 'total_sales_obj');
						$customers_obj->fetch_total_inquiries($c_id, 'total_inquiries_obj');
						$customers_obj->fetch_total_orders($c_id, 'total_orders_obj');
						$customers_obj->fetch_total_site_visits($c_id, 'total_site_visits_obj');
						?>

 					let total_sales = 0;
 					if (total_sales_obj.total_sales == undefined) {
 						total_sales = 0.00;

 					} else {
 						total_sales = total_sales_obj.total_sales;
 					}

 					let tsv_obj = 0;
 					if (total_site_visits_obj.count == undefined) {
 						tsv_obj = 0.00;

 					} else {
 						tsv_obj = total_site_visits_obj.count;
 					}

 					document.getElementById('total_sales_id').innerHTML = '$' + total_sales;
 					document.getElementById('total_inquiries_id').innerHTML = total_inquiries_obj.count;
 					document.getElementById('total_orders_id').innerHTML = total_orders_obj.count;
 					document.getElementById('total_site_visits_id').innerHTML = tsv_obj;


 					document.getElementById('cl_overview').classList += ' active';


 				});
 			</script>