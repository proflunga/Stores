<?php




if (isset($_POST['submit'])) {
	// generate email

	$user_email =  $_POST['email'];
	$res = $transaction->generate_password_reset_ticket($user_email);

	if (!$res) {
		$request_error = 1;
	} else {
		$request_sent = 1;
	}




	// *****************************

}
?>

<div class="d-flex flex-column flex-root">
	<!--begin::Authentication - Sign-in -->
	<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(/metronic8/demo2/assets/media/illustrations/sigma-1/14.png">
		<!--begin::Content-->
		<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
			<!--begin::Wrapper-->
			<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">


				<form method="post" action="">
					<!--begin::Heading-->
					<div class="text-center mb-10">
						<!--begin::Title-->
						<h1 class="text-dark mb-3">Forgot Password?</h1>
						<!--end::Title-->
					</div>
					<!--begin::Heading-->
					<!--begin::Action-->
					<div class="">
						<?php if (isset($request_sent)) {

							echo '
                                <div class="alert alert-success d-flex align-items-center p-5 mb-10">
													<!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
													<span class="svg-icon svg-icon-2hx svg-icon-success me-4">
													<svg  width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"></rect>
															<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black"></rect>
															<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black"></rect>
														</svg>
													</span>
													<!--end::Svg Icon-->
													<div class="d-flex flex-column">
														<h4 class="mb-1 text-success">Password Request Sent!</h4>
														<span>A ticket was generated and sent to <b>' . $user_email . '</b></span>
													</div>
												</div>
                                
                                ';;
						} ?>
					</div>
					<!--end::Action-->
					<!--begin::Action-->
					<div class="">
						<?php if (isset($request_error)) {

							echo '
                                <div class="alert alert-danger d-flex align-items-center p-5 mb-10">
													<!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
													<span class="svg-icon svg-icon-2hx svg-icon-danger me-4">
													<svg  width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"></rect>
															<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black"></rect>
															<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black"></rect>
														</svg>
													</span>
													<!--end::Svg Icon-->
													<div class="d-flex flex-column">
														<h4 class="mb-1 text-danger">Password Request Error!</h4>
														<span>A ticket was not generated for email: <br>  (<b>' . $user_email . ')</b></span>
													</div>
												</div>
                                
                                ';;
						} ?>
					</div>
					<!--end::Action-->

					<!--begin::Input group-->
					<div class="mb-10 fv-row fv-plugins-icon-container" data-kt-password-meter="true">
						<!--begin::Wrapper-->
						<div class="mb-1 text-center">
							<!--begin::Label-->
							<label class="form-label fw-bolder text-dark fs-6 ">Email</label>
							<!--end::Label-->
							<!--begin::Input wrapper-->
							<div class="position-relative mb-3">
								<input required name="email" class="form-control form-control-lg form-control-solid" type="email" placeholder="" name="password" autocomplete="off">

							</div>
							<!--end::Input wrapper-->

						</div>
						<!--end::Wrapper-->
						<!--begin::Hint-->
						<div class="text-muted text-center">Make sure you provide the email linked to your account</div>
						<!--end::Hint-->
						<div class="fv-plugins-message-container invalid-feedback"></div>
					</div>
					<!--end::Input group=-->

					<!--end::Input group=-->
					<!--begin::Action-->
					<div class="text-center">

						<a href="auth.php" id="kt_sing_in_two_steps_submit" class="btn btn-active-danger">
							<li class="fa fa-arrow-left"></li> &nbsp Cancel
						</a>

						<button type="submit" name="submit" id="kt_new_password_submit" class="btn btn-lg btn-primary fw-bolder">
							Send Request
						</button>
					</div>
					<!--end::Action-->
					<div></div>
				</form>



			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Content-->
		<!--begin::Footer-->
		<!--end::Footer-->
	</div>
	<!--end::Authentication - Sign-in-->
</div>