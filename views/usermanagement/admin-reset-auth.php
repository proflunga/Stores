<?php
// two factor pins
if (isset($_POST['two_factor_pins'])) {
	require 'controllers/usermanagement/two-factor-reset.controller.php';
}
?>
<div class="toolbar d-flex flex-stack flex-wrap py-4 gap-2" id="kt_toolbar">
	<!--begin::Page title-->
	<div class="page-title d-flex flex-column align-items-start me-3 gap-1">
		<!--begin::Title-->
		<h1 class="d-flex text-dark fw-bolder m-0 fs-3">
			Authentication Pins Reset
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
		<?php require 'includes/admin_menu.php'; ?>
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

				<!--begin::Deactivate Account-->
				<form method="post">
					<div class="card">
						<!--begin::Card header-->
						<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_deactivate" aria-expanded="true" aria-controls="kt_account_deactivate">
							<div class="card-title m-0">
								<h3 class="fw-bolder m-0">Two Factor Authentication PINs Reset</h3>
							</div>
						</div>
						<!--end::Card header-->
						<!--begin::Content-->
						<div id="kt_account_settings_deactivate" class="collapse show">
							<!--begin::Form-->
							<form id="kt_account_deactivate_form" class="form">
								<!--begin::Card body-->
								<div class="card-body border-top p-9">
									<!--begin::Notice-->
									<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
										<!--begin::Icon-->
										<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg--><span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
												<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
												<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--end::Icon-->
										<!--begin::Wrapper-->
										<div class="d-flex flex-stack flex-grow-1">
											<!--begin::Content-->
											<div class="fw-bold">
												<h4 class="text-gray-900 fw-bolder">You Are Resetting Active Accounts PINs.</h4>
												<div class="fs-6 text-gray-700">For extra security, this requires you to confirm that you would like to reset all active user two factor authentication PINs.
												</div>
											</div>
											<!--end::Content-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Notice-->
									<!--begin::Form input row-->
									<div class="form-check form-check-solid fv-row">
										<input required name="deactivate" class="form-check-input" type="checkbox" value="" id="deactivate" />
										<label class="form-check-label fw-bold ps-2 fs-6" for="deactivate">I confirm two factor authentication PINs reset.</label>
									</div>
									<!--end::Form input row-->
								</div>
								<!--end::Card body-->
								<!--begin::Card footer-->
								<div class="card-footer d-flex justify-content-end py-6 px-9">
									<button id="kt_account_deactivate_account_submit" type="submit" name="two_factor_pins" value="two_factor_pins" class="btn btn-danger fw-bold">Reset Account PINs</button>
								</div>
								<!--end::Card footer-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Content-->
					</div>
				</form>
				<!--end::Deactivate Account-->
			</div>
			<!--end::Col-->
		</div>
		<!--end::Row-->
	</div>
	<!--end::Content-->
</div>
<!--end::Main-->
</div>
<!--end::Main-->