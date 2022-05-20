<div class="toolbar d-flex flex-stack flex-wrap py-4 gap-2" id="kt_toolbar">
	<!--begin::Page title-->
	<div class="page-title d-flex flex-column align-items-start me-3 gap-1">
		<!--begin::Title-->
		<h1 class="d-flex text-dark fw-bolder m-0 fs-3">
          Change Pin 
         <!--begin::Separator-->
         <span class="h-20px border-gray-400 border-start mx-3"></span>
         <!--end::Separator-->
         <!--begin::Description-->
         <small class="text-gray-500 fs-7 fw-bold my-1"><?php require 'views/includes/print_fund_name.php'; ?></small>
         <!--end::Description-->
      </h1>
		<!--end::Title-->
	</div>
	<!--end::Page title-->
	<!--begin::Actions-->
	<div class="d-flex align-items-center py-1">
		<!--begin::Daterange-->
		<!--end::Daterange-->
		<!--begin::Filter-->
		<!--end::Filter-->
		<!--begin::Button-->
		<?php require 'includes/admin_menu.php' ; ?>
			<!--end::Button-->
	</div>
	<!--end::Actions-->
</div>
<!--begin::Main-->
<div class="d-flex flex-row flex-column-fluid align-items-stretch">
	<!--begin::Content-->
	<div class="content flex-row-fluid" id="kt_content">
		<!--begin::Row-->
		<div class="row g-5 g-xl-8">
			<!--begin::Col-->
			<div class="col-xl-12">
				<?php require 'includes/admin-header.php' ; ?>
			</div>
			
		</div>
		<!--end::Row-->
	</div>
	<!--end::Content-->
</div>
<!--end::Main-->
</div>
<!--end::Main-->