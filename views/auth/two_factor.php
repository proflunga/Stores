<?php

if (!isset($_SESSION['user_email'])) {
	$page_redirect->redirect_page("auth.php");
}


$email = $_SESSION['user_email'];
$email = substr($email, 0, 1) . $transaction->trim_string_from_specific_char($email, '@');

if (isset($_POST['submit'])) {

	$two_factor_pin = $_POST["vp1"] . $_POST["vp2"] . $_POST["vp3"] . $_POST["vp4"] . $_POST["vp5"];
	$user_id = $_SESSION["user_id"];

	$sql = "SELECT users_admin.id  FROM users_admin WHERE users_admin.two_factor_pin = '$two_factor_pin' AND users_admin.id = '$user_id';";


	$result = $db_query_obj->sql_qury("$sql");

	if (!$result) {

		$error_log_title = 'Verification failed! ';
		$error_log_msg = 'The security code you have entered is incorrect.';
	} else {

		$page_redirect->redirect_page('dashboard.php');
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



				<form class="form w-100 mb-10" novalidate="novalidate" id="kt_sing_in_two_steps_form" method="POST" action="">

					<!--begin::Heading-->
					<div class="text-center mb-10">
						<a href="index.php" class="mb-12">
							<img alt="Logo" src="assets/media/logos/logo-alt.png" class="h-40px">
						</a>
						<!--begin::Title-->
						<h1 class="text-dark mb-3 mt-10">Two Step Verification </h1>
						<!--end::Title-->
						<!--begin::Sub-title-->
						<div class="text-muted fw-bold fs-5 mb-5">Provide a 6 digit pin</div>
						<!--end::Sub-title-->
						<!--begin::Mobile no-->
						<div class="fw-bolder text-dark fs-3"><?php echo $email; ?></div>
						<!--end::Mobile no-->
					</div>
					<!--end::Heading-->
					<!--begin::Section-->
					<div class="mb-10 px-md-6">
						<!--begin::Label-->
						<div class="fw-bolder text-start text-dark fs-6 mb-1 ms-1 mb-5 d-flex flex-center ">Type your 5 digit security code</div>
						<!--end::Label-->
						<!--begin::Input group-->
						<div class="d-flex flex-wrap flex-stack">
							<input type="text" maxlength="1" disabled class="form-control form-control-solid h-50px w-60px fs-2qx text-center  mx-1 my-2" value="P" inputmode="text">
							<h3 class="fw-bolder  ">-</h3>
							<input id="vp1" name="vp1" type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" class="form-control form-control-solid h-50px w-50px fs-2qx text-center  border-hover mx-1 my-2" value="" inputmode="text">
							<input id="vp2" name="vp2" type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" class="form-control form-control-solid h-50px w-50px fs-2qx text-center  border-hover mx-1 my-2" value="" inputmode="text">
							<input id="vp3" name="vp3" type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" class="form-control form-control-solid h-50px w-50px fs-2qx text-center  border-hover mx-1 my-2" value="" inputmode="text">
							<input id="vp4" name="vp4" type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" class="form-control form-control-solid h-50px w-50px fs-2qx text-center  border-hover mx-1 my-2" value="" inputmode="text">
							<input id="vp5" name="vp5" type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" class="form-control form-control-solid h-50px w-50px fs-2qx text-center  border-hover mx-1 my-2" value="" inputmode="text">
						</div>
						<!--begin::Input group-->


					</div>
					<!--end::Section-->
					<!--begin::Submit-->

					<div class="d-flex flex-center ">
						<?php if (isset($error_log_title) and isset($error_log_msg)) {

							echo

							'
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
														<h4 class="mb-1 text-danger">' . $error_log_title . '</h4>
														<span>' . $error_log_msg . '</span>
													</div>
												</div>
											';
						} ?>
					</div>



					<div class="d-flex flex-center ">


						<a href="auth.php" id="kt_sing_in_two_steps_submit" class="btn btn-active-danger">
							<li class="fa fa-arrow-left"></li> &nbsp Cancel
						</a>

						<button hidden id="twofactor_auth_verify" name="submit" type="submit" id="kt_sing_in_two_steps_submit" class="btn btn-lg btn-primary  btn-hover-scale fw-bolder ms-10">
							<span class="indicator-label">Verify</span>
							<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
						</button>





					</div>
					<!--end::Submit-->

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
<script>
	// document.getElementById("vp1").addEventListener("input",
	//  function(){ 

	//     alert ("Hello World!");

	//     if (e.which == 13) {
	//        e.preventDefault();
	//        var nextInput = inputs.get(inputs.index(document.activeElement) + 1);
	//        if (nextInput) {
	//           nextInput.focus();
	//        }
	//     }
	// });

	document.getElementById("vp1").focus();

	document.getElementById("vp1").addEventListener("input",
		function() {


			document.getElementById("vp2").focus();

		});

	document.getElementById("vp2").addEventListener("input",
		function() {


			document.getElementById("vp3").focus();

		});

	document.getElementById("vp3").addEventListener("input",
		function() {


			document.getElementById("vp4").focus();

		});

	document.getElementById("vp4").addEventListener("input",
		function() {


			document.getElementById("vp5").focus();

		});

	document.getElementById("vp5").addEventListener("input",
		function() {


			document.getElementById("twofactor_auth_verify").click();

		});


	// document.getElementById("cc").addEventListener("input",
	//  function(){ 

	//     alert ("Hello World!");



	// });
</script>