<!--begin::Toolbar-->
<div class="toolbar d-flex flex-stack flex-wrap py-4 gap-2" id="kt_toolbar">
	<!--begin::Page title-->
	<div class="page-title d-flex flex-column align-items-start me-3 gap-1">
		<!--begin::Title-->
		<h1 class="d-flex text-dark fw-bolder m-0 fs-3"><?php  echo $catalogue_header; ?></h1>
		<!--end::Title-->
		<!--begin::Breadcrumb-->
		<ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7">
			<!--begin::Item-->
			<li class="breadcrumb-item text-gray-600"> <a href="/metronic8/demo19/../demo19/index.html" class="text-gray-600 text-hover-primary">Home</a> </li>
			<!--end::Item-->
			<!--begin::Item-->
			<li class="breadcrumb-item text-gray-600">eCommerce</li>
			<!--end::Item-->
			<!--begin::Item-->
			<li class="breadcrumb-item text-gray-600">Catalog</li>
			<!--end::Item-->
            <!--begin::Item-->
			<li class="breadcrumb-item text-gray-600"><?php echo $section ?></li>
			<!--end::Item-->
            
			<!--begin::Item-->
			<li class="breadcrumb-item text-gray-500"><?php  echo $catalogue_header; ?></li>
			<!--end::Item-->
		</ul>
		<!--end::Breadcrumb-->
	</div>
	<!--end::Page title-->
	<!--begin::Actions-->
	<div class="d-flex align-items-center py-1">
		
		
		<!--begin::Button--><a href="#" onclick="history.back();" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app"> <i class="fa fa-arrow-left"></i> back</a>
		<!--end::Button-->
	</div>
	<!--end::Actions-->
</div>
<!--end::Toolbar-->