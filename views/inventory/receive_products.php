<?php

require 'controllers/inventory/products.receive_products.controller.php';

?>

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Toolbar-->
						<div class="toolbar" id="kt_toolbar">
							<!--begin::Container-->
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<!--begin::Page title-->
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<!--begin::Title-->
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Receive Products 
									<!--begin::Separator-->
									<span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
									<!--end::Separator-->
									<!--begin::Description-->
									<span class="text-muted fs-7 fw-bold mt-2">Home > Receive Products</span>
									<!--end::Description--></h1>
									<!--end::Title-->
								</div>
								<!--end::Page title-->
								<!--begin::Actions-->
								<div class="d-flex align-items-center gap-2 gap-lg-3">
									    <!-- include menu ******************* -->
										<script> 
											$(function(){
												$("#div_include").load("views/inventory/includes/menu.receive.html"); 
											});
										</script>    
										<div id="div_include">        
										</div>    
										<!-- end include menu ******************* -->
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
							 
							<!-- ed of page header -->
<div class="d-flex flex-row flex-column-fluid align-items-stretch">
	<!--begin::Content-->
	<div class="content flex-row-fluid" id="kt_content">
		<!--begin::Row-->
		<div class="row g-5 g-xl-8">
			
			<!-- show some of product details here -->
			<!--begin::Col-->
			<form action="" method="POST">
				<input type="hidden" value="" name="prod_id" id="prod_id_id">
				<div class="col-xl-12">
					<!--begin::General options-->
					<div class="card card-flush py-4">
						<!--begin::Card header-->
						<div class="card-header">
							<div class="card-title">
								<h2>Product Details</h2> </div>
						</div>
						<!--end::Card header-->
						<!--begin::Card body-->
						<div class="card-body pt-0">
							<!--begin::Input group-->
							<div class="mb-10 row">
								<div class="col-md-6 col-lg-6 col-12">
									<!--begin::Label-->
									<label class="required form-label">Product Name</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input type="text" id="prod_name_id" name="product_name" class="form-control mb-2" placeholder="Product name" style="background: #e4e6ef;" readonly value="" />
									<!--end::Input-->
									<!--begin::Description-->
									<div class="text-muted fs-7 d-none">A product name is required and recommended to be unique.</div>
									<!--end::Description-->
								</div>
								<div class="col-md-6 col-lg-6 col-12 lg-my-0 md-my-0 sm-my-3 ">
									<!--begin::Label-->
									<label class="required form-label">Product Code</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input type="text" id="prod_code_id" readonly style="background: #e4e6ef;" name="product_code" class="form-control mb-2" placeholder="Product code" value="" />
									<!--end::Input-->
									<!--begin::Description-->
									<div class="text-muted fs-7 d-none">A product code is required and recommended to be unique.</div>
									<!--end::Description-->
								</div>
								<!-- quantity input -->
								<div class="col-md-6 col-lg-6 col-12 lg-my-0 md-my-0 my-3">
									<!--begin::Label-->
									<label class="required form-label"> Quantity</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input id="prod_quantity_id" type="number" readonly style="background: #e4e6ef;" required name="product_qty" class="form-control mb-2" placeholder="Product Quaantity" value="" />
									<!--end::Input-->
									<!--begin::Description-->
									<div class="text-muted fs-7 d-none">Initial product quantity.</div>
									<!--end::Description-->
								</div>

								



								<div class="col-md-6 col-lg-6 col-12 lg-my-0 md-my-0 my-3">
									<label class="fs-6 form-label fw-bolder text-dark">Add Quantity</label>
									<input type="number" class="form-control form-control form-control-solid" name="product_quantity">
							 </div>
							<!--end::Input group-->
							</div>
							<!--end::Input group-->
							
						</div>
						<!--end::Card header-->
					</div>
					<!--end::General options-->
				</div>
				<!--end::Col-->
				<!-- hidden input of product id -->
				<input type="number" style="display:none;" value="<?php echo $_GET['p_id'] ?>" class="form-control form-control form-control-solid" name="product_name">
							<!-- end of hidden input -->
				<div class="mb-1">
					<!--begin::Action-->
					<div class="d-flex align-items-center justify-content-center mt-5">
								<button type="submit" name="recieve_product"  class="btn  btn-hover-scale btn-primary"> Receive Product</button>
							</div>
							<!--end::Action-->
				</div>
			</form>
		</div>
		<!--end::Row-->
	</div>
	<!--end::Content-->
</div>
								<!--end::Modals-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>



					<script>

// thumbnail JS	********************
	// A $( document ).ready() block.
	$( document ).ready(function() {
		//get url parameter (c_id)
		const queryString = window.location.search; 
		const urlParams = new URLSearchParams(queryString);

		const p_id = urlParams.get('p_id');
		
		<?php  
			if(isset($_GET['p_id'])){$prod_id = $_GET['p_id'];}else{$prod_id =0;}		
			$inventory_obj -> product_data_recieve($prod_id) 
		?>

 

		//general info		
		document.getElementById('prod_id_id').value = p_id ;
		document.getElementById('prod_name_id').placeholder = profile_data.product_name ;
		document.getElementById('prod_code_id').placeholder = profile_data.product_code ;
		document.getElementById('prod_quantity_id').placeholder = profile_data.product_quantity ; 

		
	});	

</script>