<?php

if (!isset($_SESSION['user_email'])) {
	$page_redirect->redirect_page("auth.php");
}



if (isset($_POST['submit'])) {


	$user_id = $_SESSION["user_id"];
	$new_password = $_POST["password"];
	$confirm_password = $_POST["confirm_password"];


	if (empty($new_password) or   empty($confirm_password)) {
		$error_log = 'Fields should not be empty';
	} elseif ($new_password != $confirm_password) {
		$error_log = 'Your password do not match';
	} elseif (strlen($new_password) < 8  or  strlen($confirm_password) < 8) {
		$error_log = 'Your password should be more than 8 characters  ';
	} elseif ($new_password == $confirm_password) {

		$result = $transaction->reset_user_admin($user_id, $new_password);



		if (!$result) {

			$error_log = 'Update Error try again (Make sure your new password is   different   from the existing password)';
		} else {




			$page_redirect->redirect_page('auth.php?action=two_factor');
		}
	} else {
		$error_log = 'Error Try again';
	}
}
?>

<div class="d-flex flex-column flex-root">
	<!--begin::Authentication - Sign-in -->
	<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(/metronic8/demo2/assets/media/illustrations/sigma-1/14.png">
		<!--begin::Content-->
		<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
			<!--begin::Wrapper-->
			<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">


				<form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" id="kt_new_password_form" method="post" action="">

					<input type="hidden" name="user_id" value="<?php $_SESSION['user_id'] ?>">
					<!--begin::Heading-->
					<div class="text-center mb-10">
						<!--begin::Title-->
						<h1 class="text-dark mb-3">Setup New Password</h1>
						<!--end::Title-->
					</div>
					<!--begin::Heading-->
					<!--begin::Input group-->
					<div class="mb-10 fv-row fv-plugins-icon-container" data-kt-password-meter="true">
						<!--begin::Wrapper-->
						<div class="mb-1">
							<!--begin::Label-->
							<label class="form-label fw-bolder text-dark fs-6">Password</label>
							<!--end::Label-->
							<!--begin::Input wrapper-->
							<div class="position-relative mb-3">
								<input name="password" class="form-control form-control-lg form-control-solid" type="password" placeholder="" autocomplete="off">
								<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
									<i class="fa fa-eye-slash fs-2"></i>
									<i class="fa fa-eye fs-2 d-none"></i>
								</span>
							</div>
							<!--end::Input wrapper-->
							<!--begin::Meter-->
							<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
								<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
								<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
								<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
								<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px "></div>
							</div>
							<!--end::Meter-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Hint-->
						<div class="text-muted">Use 8 or more characters </div>
						<!--end::Hint-->
						<div class="fv-plugins-message-container invalid-feedback"></div>
					</div>
					<!--end::Input group=-->
					<!--begin::Input group=-->
					<div class="fv-row mb-10 fv-plugins-icon-container">
						<label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
						<input name="confirm_password" class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="confirm-password" autocomplete="off">


						<label class="text-danger"><?php if (isset($error_log)) {
														echo $error_log;
													} ?> </label>
						<div class="fv-plugins-message-container invalid-feedback"></div>
					</div>
					<!--end::Input group=-->

					<!--begin::Action-->
					<div class="text-center">


						<a href="auth.php" id="kt_sing_in_two_steps_submit" class="btn btn-active-danger">
							<li class="fa fa-arrow-left"></li> &nbsp Cancel
						</a>


						<button type="submit" name="submit" id="kt_new_password_submit" class="btn btn-lg btn-primary fw-bolder">
							Reset Password

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