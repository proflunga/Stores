<?php
// update of account information and main details of user
if (isset($_POST['admin_main_details'])  || isset($_POST['user_account_information'])) {
	require 'controllers/usermanagement/update-user-info.php';
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
				<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Admin Profile
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
					<div class=" card ">
						<div class="card-body py-3 mt-7">
							<div class="input-group mb-5">
								<h3>Personal Details</h3>
							</div>
							<form method="post">
								<div class="form-group row g-3">
									<div class="row ">
										<!-- hidden attributes -->

										<input type="text" style="display: none;" value="<?php echo $row_admin['client_id'] ?> " name="client_id">
										<input type="text" style="display: none;" value="<?php echo $_GET['u_id'] ?> " name="u_id">
										<!-- end of hidden attributes -->

										<div class="col-md-4 mb-10">
											<label class="form-label"> Title:</label>
											<?php
											$populate_select_obj->print_select_for_render('description', 'titles', ' name="title"  class="form-select rounded-start-0" data-control="select2" data-placeholder="Select an option"', 'Where 1',  $row_admin['title']);


											?>
										</div>
										<div class="col-md-4 mb-10">
											<label class="form-label"> First Name:</label>
											<input required type="text" value="<?php echo $row_admin['first_name'] ?>" name="first_name" class="form-control mb-2 mb-md-0">
										</div>
										<div class="col-md-4 mb-10">
											<label class="form-label"> Middle Name:</label>
											<input type="text" name="middle_name" value="<?php echo $row_admin['middle_name'] ?>" class="form-control mb-2 mb-md-0">
										</div>
										<div class="col-md-4 mb-10">
											<label class="form-label"> Last Name:</label>
											<input required type="text" name="last_name" value="<?php echo $row_admin['last_name'] ?>" class="form-control mb-2 mb-md-0">
										</div>
										<div class="col-md-4 mb-10">
											<label class="form-label"> Marital Status:</label>
											<?php
											$populate_select_obj->print_select_for_render('description', 'marital_status', ' name="marital_status" required  class="form-select rounded-start-0" data-control="select2" data-placeholder="Select an option"', 'Where 1',  $row_admin['marital_status'])

											?>
										</div>
										<div class="col-md-4 mb-10">
											<label class="form-label"> Gender:</label>
											<?php
											$populate_select_obj->print_select_for_render('description', 'gender', ' name="gender" required  class="form-select rounded-start-0" data-control="select2" data-placeholder="Select an option"', 'Where 1',  $row_admin['gender'])

											?>
										</div>
										<div class="col-md-4 mb-10">
											<label class="form-label"> Nationality:</label>
											<?php
											$populate_select_obj->print_select_for_render('name', 'countries', ' name="nationality" required  class="form-select rounded-start-0" data-control="select2" data-placeholder="Select an option"', 'Where 1',  $row_admin['nationality'])

											?>
										</div>
										<div class="col-md-4 mb-10">
											<label class="form-label"> Citizenship:</label>
											<?php
											$populate_select_obj->print_select_for_render('name', 'countries', ' name="citizenship" required   class="form-select rounded-start-0" data-control="select2" data-placeholder="Select an option"', 'Where 1', $row_admin['citizenship'])

											?>
										</div>
										<div class="col-md-4 mb-10">
											<label class="form-label"> D.O.B:</label>
											<input required type="date" value="<?php echo $row_admin['birth_date'] ?>" name="birth_date" class="form-control mb-2 mb-md-0">
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 mb-10">
											<label class="form-label"> Address Line 1:</label>
											<input required type="text" value="<?php echo $row_admin['address_line1'] ?>" name="address_line1" class="form-control mb-2 mb-md-0">
										</div>
										<div class="col-md-6 mb-10">
											<label class="form-label"> Address Line 2:</label>
											<input required type="text" value="<?php echo $row_admin['address_line2'] ?>" name="address_line2" class="form-control mb-2 mb-md-0">
										</div>
										<div class="col-md-6 mb-10">
											<label class="form-label"> City:</label>
											<?php
											$populate_select_obj->print_select_for_render('name', 'cities', ' name="city"  class="form-select rounded-start-0" data-control="select2" data-placeholder="Select an option"', 'Where 1',  $row_admin['city']);

											?>
										</div>
										<div class="col-md-6 mb-10">
											<label class="form-label"> Country:</label>
											<?php
											$populate_select_obj->print_select_for_render('name', 'countries', '  name="country"   class="form-select" data-control="select2"   data-placeholder="Select an option"', 'WHERE 1', $row_admin['country']);


											?>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4 mb-10">
											<label class="form-label"> Mobile Number:</label>
											<input required type="text" value="<?php echo $row_admin['mobile_number'] ?>" name="mobile_number" class="form-control mb-2 mb-md-0">
										</div>
										<div class="col-md-4 mb-10">
											<label class="form-label"> Telephone Number:</label>
											<input required type="text" value="<?php echo $row_admin['telephone_number'] ?>" name="telephone_number" class="form-control mb-2 mb-md-0">
										</div>
										<div class="col-md-4 mb-10">
											<label class="form-label"> National ID:</label>
											<input required type="text" value="<?php echo $row_admin['national_id'] ?>" name="national_id" class="form-control mb-2 mb-md-0">
										</div>
									</div>
									<div class="row">
										<div class="col-md-4 mb-10">
											<label class="form-label"> Drivers Licence:</label>
											<input type="text" value="<?php echo $row_admin['drivers_licence'] ?>" name="drivers_licence" class="form-control mb-2 mb-md-0">
										</div>
										<div class="col-md-4 mb-10">
											<label class="form-label"> Passport Number:</label>
											<input type="text" value="<?php echo $row_admin['passport_number'] ?>" name="passport_number" class="form-control mb-2 mb-md-0">
										</div>
										<div class="col-md-4 mb-10">
											<label class="form-label"> Email:</label>
											<input required type="email" value="<?php echo $row_admin['email_address'] ?>" name="email" class="form-control mb-2 mb-md-0">
										</div>
									</div>
								</div>
								<div class="d-flex justify-content-center">
									<button type="submit" name="admin_main_details" value="admin_main_details" class="btn btn-hover-scale btn-primary"> Update User</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->

		</div>
		<!--end::Container-->
	</div>
	<!--end::Post-->
</div>