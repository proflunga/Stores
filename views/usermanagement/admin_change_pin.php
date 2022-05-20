<?php
// controller for changing password
if (isset($_POST['password_reset'])) {
	require 'controllers/usermanagement/auth-reset.controller.php';
}
?>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Toolbar-->
	<div class="toolbar" id="kt_toolbar">
		<!--begin::Container-->
		<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
			<!--begin::Page title-->
			<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
				<!--begin::Title-->
				<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Change PIN
					<!--begin::Separator-->
					<span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
					<!--end::Separator-->
					<!--begin::Description-->
					<span class="text-muted fs-7 fw-bold mt-2">#XRS-45670</span>
					<!--end::Description-->
				</h1>
				<!--end::Title-->
			</div>
			<!--end::Page title-->
			<!--begin::Actions-->
			<div class="d-flex align-items-center gap-2 gap-lg-3">
				<!--begin::Filter menu-->
				<div class="m-0">
					<!--begin::Menu toggle-->
					<a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
						<!--begin::Svg Icon | path: icons/duotune/general/gen031.svg--><span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->Filter
					</a>
					<!--end::Menu toggle-->
					<!--begin::Menu 1-->
					<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_624f4b9f4ef0c">
						<!--begin::Header-->
						<div class="px-7 py-5">
							<div class="fs-5 text-dark fw-bolder">Filter Options</div>
						</div>
						<!--end::Header-->
						<!--begin::Menu separator-->
						<div class="separator border-gray-200"></div>
						<!--end::Menu separator-->
						<!--begin::Form-->
						<div class="px-7 py-5">
							<!--begin::Input group-->
							<div class="mb-10">
								<!--begin::Label-->
								<label class="form-label fw-bold">Status:</label>
								<!--end::Label-->
								<!--begin::Input-->
								<div>
									<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_624f4b9f4ef0c" data-allow-clear="true">
										<option></option>
										<option value="1">Approved</option>
										<option value="2">Pending</option>
										<option value="2">In Process</option>
										<option value="2">Rejected</option>
									</select>
								</div>
								<!--end::Input-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="mb-10">
								<!--begin::Label-->
								<label class="form-label fw-bold">Member Type:</label>
								<!--end::Label-->
								<!--begin::Options-->
								<div class="d-flex">
									<!--begin::Options-->
									<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
										<input class="form-check-input" type="checkbox" value="1" /> <span class="form-check-label">Author</span> </label>
									<!--end::Options-->
									<!--begin::Options-->
									<label class="form-check form-check-sm form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="2" checked="checked" /> <span class="form-check-label">Customer</span> </label>
									<!--end::Options-->
								</div>
								<!--end::Options-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="mb-10">
								<!--begin::Label-->
								<label class="form-label fw-bold">Notifications:</label>
								<!--end::Label-->
								<!--begin::Switch-->
								<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
									<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
									<label class="form-check-label">Enabled</label>
								</div>
								<!--end::Switch-->
							</div>
							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="d-flex justify-content-end">
								<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
								<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
							</div>
							<!--end::Actions-->
						</div>
						<!--end::Form-->
					</div>
					<!--end::Menu 1-->
				</div>
				<!--end::Filter menu-->
				<!--begin::Secondary button-->
				<!--end::Secondary button-->
				<!--begin::Primary button--><a href=".html" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
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
			<div class="row g-5 g-xl-8">
				<!--begin::Col-->
				<div class="col-xl-12">
					<?php require 'includes/admin-header.php'; ?>
				</div>
				<div class="col-xl-12">
					<!--begin::Deactivate Account-->
					<div class="card">
						<!--begin::Card header-->
						<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_deactivate" aria-expanded="true" aria-controls="kt_account_deactivate">
							<div class="card-title m-0">
								<h3 class="fw-bolder m-0"> Account Password Reset</h3>
							</div>
						</div>
						<!--end::Card header-->
						<!--begin::Content-->
						<div id="kt_account_settings_deactivate" class="collapse show">
							<!--begin::Form-->
							<form id="kt_account_deactivate_form" method="post" class="form">
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
												<h4 class="text-gray-900 fw-bolder"><?php echo $row_admin['last_name'] . ' ' . $row_admin['middle_name'] . ' ' . $row_admin['first_name']; ?> Pin Reset.</h4>
												<div class="fs-6 text-gray-700">For extra security, this requires you to confirm that you would like to reset <strong> <?php echo $row_admin['last_name'] . ' ' . $row_admin['middle_name'] . ' ' . $row_admin['first_name']; ?></strong> authantication pin. </div>
											</div>
											<!--end::Content-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Notice-->
									<!--begin::Form input row-->
									<div class="form-check form-check-solid fv-row">
										<div class="row mb-6">
											<!--begin::Label-->
											<label class="col-lg-4 col-form-label required fw-bold fs-6">Ticket Number</label>
											<!--end::Label-->
											<!--begin::Col-->
											<div class="col-lg-8">
												<!--begin::Row-->
												<div class="row">
													<!--begin::Col-->
													<div class="col-lg-6 fv-row fv-plugins-icon-container">
														<div class="row">
															<div class="col-3">
																<input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" readonly value="TN">
															</div>
															<div class="col-1 my-auto py-auto"> <span class="fw-bolder">-</span> </div>
															<div class="col-8">
																<input type="text" name="ticket" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0">
															</div>
														</div>
														<div class="fv-plugins-message-container invalid-feedback"></div>
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
											</div>
											<!--end::Col-->
										</div>
										<!--begin::Select-->
									</div>
									<div class="form-check form-check-solid fv-row">
										<!-- hidden use admin user_id -->
										<input required type="text" name="u_id" style="display: none;" value="<?php echo $_GET['u_id']; ?>" class="form-control mb-2 mb-md-0">
										<input required name="deactivate" class="form-check-input" type="checkbox" value="" id="deactivate" />
										<label class="form-check-label fw-bold ps-2 fs-6" for="deactivate">I confirm reset authentication pin.</label>
									</div>
									<!--end::Form input row-->
								</div>
								<!--end::Card body-->
								<!--begin::Card footer-->
								<div class="card-footer d-flex justify-content-end py-6 px-9">
									<button id="kt_account_deactivate_account_submit" type="submit" value="password_reset" name="password_reset" class="btn btn-danger fw-bold">Reset Account Password</button>
								</div>
								<!--end::Card footer-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Content-->
					</div>
					<!--end::Deactivate Account-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->

		</div>
		<!--end::Container-->
	</div>
	<!--end::Post-->
</div>