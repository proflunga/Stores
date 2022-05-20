<div class="card">
	<!--begin::Card header-->
	<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_deactivate" aria-expanded="true" aria-controls="kt_account_deactivate">
		<div class="card-title m-0">
			<h3 class="fw-bolder m-0"> Approve Account</h3>
		</div>
	</div>
	<!--end::Card header-->
	<!--begin::Content-->
	<div id="kt_account_settings_deactivate" class="collapse show">
		<!--begin::Form-->
		<form id="kt_account_deactivate_form" method="POST" class="form">
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
							<h4 class="text-gray-900 fw-bolder">Approve <?php echo $row_admin['last_name'] . ' ' . $row_admin['middle_name'] . ' ' . $row_admin['first_name']; ?> Account.</h4>
							<div class="fs-6 text-gray-700">For extra security, this requires you to confirm that you would like to approve <strong> <?php echo $row_admin['last_name'] . ' ' . $row_admin['middle_name'] . ' ' . $row_admin['first_name']; ?></strong> account. </div>
						</div>
						<!--end::Content-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Notice-->
				<div class="form-check form-check-solid fv-row">
					<!-- hidden id -->
					<input required type="number" name="u_id" value="<?php echo $_GET['u_id']; ?>" style="display: none;">
					<!-- end of hidden if os user -->
					<input required name="deactivate" class="form-check-input" type="checkbox" value="" id="deactivate" />
					<label class="form-check-label fw-bold ps-2 fs-6" for="deactivate">I confirm to approve account.</label>
				</div>
				<!--end::Form input row-->
			</div>
			<!--end::Card body-->
			<!--begin::Card footer-->
			<div class="card-footer d-flex justify-content-end py-6 px-9">
				<button id="kt_account_deactivate_account_submit" type="submit" name="approve_new_user" value="approve_new_user" class="btn btn-primary fw-bold">Approve Account</button>
			</div>
			<!--end::Card footer-->
		</form>
		<!--end::Form-->
	</div>
	<!--end::Content-->
</div>