<?php
if (isset($_GET['u_id'])) {
	$m_id = $_GET['u_id'];
}

$sql_header = "SELECT individuals.* FROM individuals INNER JOIN users_admin ON users_admin.client_id = individuals.id WHERE users_admin.id =  $m_id";



$results_header = $db_query_obj->sql_qury($sql_header);


if (!$results_header) {
	// employer not found\
	echo '<script>window.location.href="usermanagement.php?action=admin_users"</script>';
} else {
	echo '<script> alert(342); alert(' . $sql_header . '); </script>';
}
$row_header = mysqli_fetch_assoc($results_header);
?>

<div class="card mb-10">
	<div class="card-body pt-9 pb-0">
		<!--begin::Details-->
		<div class="d-flex flex-wrap flex-sm-nowrap mb-6">
			<!--begin::Image-->
			<div class="d-flex flex-center flex-shrink-0 bg-light rounded w-100px h-100px w-lg-150px h-lg-150px me-7 mb-4">
				<img class="mw-50px mw-lg-150px" src="assets/media/avatars/<?php echo $row_header['profile_image']; ?>" alt="image">
			</div>
			<!--end::Image-->
			<!--begin::Wrapper-->
			<div class="flex-grow-1">
				<!--begin::Head-->
				<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
					<!--begin::Details-->
					<div class="d-flex flex-column">
						<!--begin::Status-->
						<div class="d-flex align-items-center mb-1">
							<a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bolder me-3"><?php echo $row_header['first_name'] . ' ' . substr($row_header['middle_name'], 0, 1) . ' ' . $row_header['last_name']; ?> </a>
						</div>

						<!--end::Status-->
						<!--begin::Description-->
						<div class="d-flex flex-wrap fw-bold mb-4 fs-5 text-gray-400"><span class="badge badge-primary"><?php echo   'SSN: ' . $row_header["ssn"]; ?></span></div>
						<!--end::Description-->
					</div>
					<!--end::Details-->
					<!--begin::Actions-->
					<div class="d-flex mb-4">

						<!--begin::Menu-->
						<div class="me-0">
							<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
								<i class="fa fa-bars fs-3"></i>
							</button>
							<!--begin::Menu 3-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true" style="">
								<!--begin::Heading-->


							</div>
							<!--end::Menu 3-->
						</div>
						<!--end::Menu-->
					</div>
					<!--end::Actions-->
				</div>
				<!--end::Head-->
				<!--begin::Info-->
				<div class="d-flex flex-wrap justify-content-start">
					<!--begin::Stats-->
					<div class="d-flex flex-wrap">
						<!--begin::Stat-->
						<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
							<!--begin::Number-->
							<div class="d-flex align-items-center">
								<div class="fs-4 fw-bolder">29 Jan, 2022</div>
							</div>
							<!--end::Number-->
							<!--begin::Label-->
							<div class="fw-bold fs-6 text-gray-400">Date Joined</div>
							<!--end::Label-->
						</div>
						<!--end::Stat-->
					</div>
					<!--end::Stats-->

				</div>
				<!--end::Info-->
			</div>
			<!--end::Wrapper-->
		</div>

	</div>
</div>