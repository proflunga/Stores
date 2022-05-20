<div class="toolbar d-flex flex-stack flex-wrap py-4 gap-2" id="kt_toolbar">
	<!--begin::Page title-->
	<div class="page-title d-flex flex-column align-items-start me-3 gap-1">
		<!--begin::Title-->
		<h1 class="d-flex text-dark fw-bolder m-0 fs-3">Admin Users
			<!--begin::Separator-->
			<span class="h-20px border-gray-400 border-start mx-3"></span>
			<!--end::Separator-->
			<!--begin::Description-->
			<small class="text-gray-500 fs-7 fw-bold my-1"> </small>
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
		<?php require 'includes/admin_menu.php';  ?>
		<!--end::Button-->
	</div>
	<!--end::Actions-->
</div>
<!--end::Toolbar-->
<!--begin::Main-->
<!--begin::Main-->
<div class="d-flex flex-row flex-column-fluid align-items-stretch">
	<!--begin::Content-->
	<div class="content flex-row-fluid" id="kt_content">
		<!--begin::Row-->
		<div class="row g-5 g-xl-8">
			<!-- PHP for NEW ACCOUNTS -->
			<?php
			$sql2 = " SELECT COUNT(users_admin.id) as count  FROM users_admin WHERE  new_account_flag = 1 ";


			$result2 = $db_query_obj->sql_qury("$sql2");
			$row2 = mysqli_fetch_assoc($result2);
			$new_users = $row2['count'];


			?>
			<div class="col-xl-3">
				<!--NEW ACCOUNTS-->
				<a href="usermanagement.php?action=admin_new_accounts" class="card bg-dark btn-hover-rise  hoverable card-xl-stretch mb-5 mb-xl-8">
					<!--begin::Body-->
					<div class="card-body">
						<!--begin::Svg Icon | path: icons/duotune/graphs/gra007.svg-->
						<span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
							<li style="font-size:20px;" class=" fa text-white heading fa-users"></li>
						</span>
						<!--end::Svg Icon-->
						<div class="text-white fw-bolder fs-2 mb-2 mt-5"><?php echo $new_users ?> Users</div>
						<div class="fw-bold text-white"> New Admin Accounts</div>
					</div>
					<!--end::Body-->
				</a>
				<!--end::Statistics Widget 5-->
			</div>

			<!-- Active Accounts card -->
			<?php
			$sql2 = " SELECT COUNT(users_admin.id) as count  FROM users_admin WHERE users_admin.account_status = 1 and new_account_flag = 0";
			$result2 = $db_query_obj->sql_qury("$sql2");
			$row2 = mysqli_fetch_assoc($result2);
			$activate_users = $row2['count'];


			?>
			<div class="col-xl-3">
				<!--begin::Statistics Widget 5-->
				<a href="usermanagement.php?action=admin_active_accounts" class="card bg-success btn-hover-rise hoverable card-xl-stretch mb-5 mb-xl-8">
					<!--begin::Body-->
					<div class="card-body">
						<!--begin::Svg Icon | path: icons/duotune/graphs/gra007.svg-->
						<span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
							<li style="font-size:20px;" class=" fa text-white heading fa-users"></li>
						</span>
						<!--end::Svg Icon-->
						<div class="text-white fw-bolder fs-2 mb-2 mt-5"> <?php echo $activate_users; ?> Users</div>
						<div class="fw-bold text-white"> Activated Admin Accounts</div>
					</div>
					<!--end::Body-->
				</a>
				<!--end::Statistics Widget 5-->
			</div>

			<!-- END OF active accounts -->

			<!-- Deactivated accounts -->
			<?php
			$sql2 = " SELECT COUNT(users_admin.id) as count  FROM users_admin WHERE users_admin.account_status = 0 and new_account_flag = 0";

			$result2 = $db_query_obj->sql_qury("$sql2");
			$row2 = mysqli_fetch_assoc($result2);
			$deactivated_cc = $row2['count'];

			?>
			<div class="col-xl-3">
				<!--begin::Statistics Widget 5-->
				<a href="usermanagement.php?action=admin_disabled_account" class="card bg-danger btn-hover-rise hoverable card-xl-stretch mb-5 mb-xl-8">
					<!--begin::Body-->
					<div class="card-body">
						<!--begin::Svg Icon | path: icons/duotune/graphs/gra007.svg-->
						<span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
							<li style="font-size:20px;" class=" fa text-white heading fa-users"></li>
						</span>
						<!--end::Svg Icon-->
						<div class="text-white fw-bolder fs-2 mb-2 mt-5"><?php echo $deactivated_cc; ?> Users</div>
						<div class="fw-bold text-white"> Deactivated Admin Accounts</div>
					</div>
					<!--end::Body-->
				</a>
				<!--end::Statistics Widget 5-->
			</div>

			<!-- end of deactivate accounts -->


		</div>
		<!--end::Mixed Widget 12-->
	</div>
	<!--end::Col-->
</div>
<!--end::Row-->