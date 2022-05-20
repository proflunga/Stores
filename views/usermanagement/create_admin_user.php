<?php include 'controllers/usermanagement/add_new_user.controller.php'; ?>
<!--end::Main-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Toolbar-->
	<div class="toolbar" id="kt_toolbar">
		<!--begin::Container-->
		<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
			<!--begin::Page title-->
			<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
				<!--begin::Title-->
				<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1"> Cerate User
 					<!--begin::Separator-->
 					<span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
 					<!--end::Separator-->
 					<!--begin::Description-->
 					<span class="text-muted fs-7 fw-bold mt-2">Home > Users > Cerate User </span>
 					<!--end::Description-->
 				</h1>
				<!--end::Title-->
			</div>
			<!--end::Page title-->
			<!--begin::Actions-->
			<div class="d-flex align-items-center gap-2 gap-lg-3">
				<a href="usermanagement.php" class="btn btn-sm  btn-light">
					<li class="fa fa-home"></li> Main </a>
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
			<div class="content flex-row-fluid" id="kt_content">
				<form action="#" enctype="multipart/form-data" method="post">
					<div class="row g-5 g-xl-8">
						<!--begin::Col-->
						<div class="col-xl-12">
							<!--begin::Mixed Widget 12-->
							<!-- create new user form -->
							<div class="card mt-7">
								<div class="card-body">
									<div class="row ">
										<h5> Personal Details</h5>
										<div class="mb-12"> </div>
										<div class="col-md-4 mb-10">
											<label class="form-label"> First Name:</label>
											<input required type="text" name="first_name" class="form-control mb-2 mb-md-0"> </div>
										<div class="col-md-4 mb-10">
											<label class="form-label"> Last Name:</label>
											<input required type="text" name="last_name" class="form-control mb-2 mb-md-0"> </div>
										<div class="col-md-4 mb-10">
											<label class="form-label"> ID Number:</label>
											<input required type="text" name="nat_id" class="form-control mb-2 mb-md-0"> </div>
									</div>
								</div>
							</div>
							<div class="card mt-7">
								<div class="card-body">
									<div class="row">
										<h5> Contact Details</h5>
										<div class="mb-12"> </div>
										<div class="col-md-4 mb-10">
											<label class="form-label"> Mobile Number:</label>
											<input required type="text" name="mobile_number" class="form-control mb-2 mb-md-0"> </div>
										<div class="col-md-4 mb-10">
											<label class="form-label"> User Email:</label>
											<input required type="text" name="email" class="form-control mb-2 mb-md-0"> </div>
									</div>
								</div>
							</div>
							<div class="card mt-7">
								<div class="card-body">
									<div class="row">
										<!-- Account Details -->
										<h5> Account Details</h5>
										<div class="mb-12"> </div>
										<div class="col-md-4 col-12 mb-10">
											<label class="form-label"> User Group</label>
											<?php
											$populate_select_obj->print_select_without_id_desc('description', 'user_group', ' name="user_group"  class="form-select rounded-start-0" data-control="select2" data-placeholder="Select an option"', 'Where 1')

											?>
										</div>
										<div class="col-md-4 col-12 mb-10">
											<label class="form-label"> User Access Level</label>
											<?php
											$populate_select_obj->print_select_without_id_desc('description', 'user_access_levels', ' name="access_level_id"  class="form-select rounded-start-0" data-control="select2" data-placeholder="Select an option"', 'Where 1')

											?>
										</div>
										<div class="col-md-4 mb-10">
											<label class="form-label"> Username :</label>
											<input required type="text" name="username" class="form-control mb-2 mb-md-0"> </div>
										<div class="col-md-4 mb-10">
											<label class="form-label"> Password:</label>
											<input required type="password" name="user_password" class="form-control mb-2 mb-md-0"> </div>
									</div>
								</div>
							</div>
							<div class="row  mt-7">
								<div class="d-flex justify-content-start">
									<button type="submit" name="create_admin_user" value="create_admin_user" class="btn btn-hover-scale btn-primary"> Register User</button>
								</div>
							</div>
						</div>
						<!--end::Col-->
					</div>
				</form>
			</div>
			<!--end::Modals-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Post-->
</div>