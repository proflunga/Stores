 <?php

	// for autoloader 
	require 'includes/global/root_auto_class_loader.php';

	//Page Validations
	require 'includes/global/validation_page_persission.php';


	// Check for Sweet Alert Notification
	if (isset($_SESSION['sweet_alert_obj'])) {

		$title = $_SESSION['sweet_alert_obj']['title'];
		$msg = $_SESSION['sweet_alert_obj']['msg'];
		$icon = $_SESSION['sweet_alert_obj']['icon'];
		$btn_txt = $_SESSION['sweet_alert_obj']['btn_txt'];
		$btn_style = $_SESSION['sweet_alert_obj']['btn_style'];

		$transaction->sweet_alert("$title", "$msg", "$icon", "$btn_txt ", "$btn_style");

		unset($_SESSION['sweet_alert_obj']);
	}



	// if (!((isset($_SESSION['fund_id']) && isset($_SESSION['user_fund_id'])) && ($_SESSION['fund_id'] == $_SESSION['user_fund_id'])))
	if (!isset($_SESSION['login_validation'])) {
		echo '<script>window.location.href="auth.php"</script>';
	}


	?>

 <title>eStore Admin</title>
 <meta charset="utf-8" />
 <meta property="og:locale" content="en_US" />
 <link rel="shortcut icon" href="assets/media/logos/favcon.png" />
 <!--begin::Fonts-->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
 <!--end::Fonts-->
 <!--begin::Page Vendor Stylesheets(used by this page)-->
 <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
 <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
 <!--end::Page Vendor Stylesheets-->
 <!--begin::Global Stylesheets Bundle(used by all pages)-->
 <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
 <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
 <!--end::Global Stylesheets Bundle-->
 <script src="libraries/jquery/jquery.min.js"></script>