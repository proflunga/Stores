<?php 
 // update of account information and main details of user
 if(isset($_POST['admin_main_details'])  || isset($_POST['user_account_information']) )
 {
	 require 'controllers/usermanagement/update-user-info.php';
 
 }
?>
<div class="toolbar d-flex flex-stack flex-wrap py-4 gap-2" id="kt_toolbar">
	<!--begin::Page title-->
	<div class="page-title d-flex flex-column align-items-start me-3 gap-1">
		<!--begin::Title-->
		<h1 class="d-flex text-dark fw-bolder m-0 fs-3">
         Admin Profile 
         <!--begin::Separator-->
         <span class="h-20px border-gray-400 border-start mx-3"></span>
         <!--end::Separator-->
         <!--begin::Description-->
         <small class="text-gray-500 fs-7 fw-bold my-1"><?php require 'views/includes/print_fund_name.php'; ?></small>
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
		<?php require 'includes/admin_menu.php' ; ?>
			<!--end::Button-->
	</div>
	<!--end::Actions-->
</div>
<!--begin::Main-->
<div class="d-flex flex-row flex-column-fluid align-items-stretch">
	<!--begin::Content-->
	<div class="content flex-row-fluid" id="kt_content">
		<!--begin::Row-->
		<div class="row g-5 g-xl-8">
			<!--begin::Col-->
			<div class="col-xl-12">
				<?php require 'includes/admin-header.php' ; ?>
			</div>
			<div class="col-xl-12">
				<div class=" card ">
					<div class="card-body py-3 mt-7">
						<div class="input-group mb-5">
							<h3>Account Details</h3> </div>
						<form  method="post">
							<div class="form-group row g-3">
								<div class="row">
									<!-- form hidden attributes -->
									<input type="text" style="display: none;" value = "<?php echo $_GET['u_id'] ?> " name="u_id">
									<!-- end of form hidden attributes -->
									<div class="col-md-4 col-12 mb-10">
										<label class="form-label"> User Group</label>
										<?php  
											$populate_select_obj ->print_select_for_render('description', 'user_group', '  name="user_group"   class="form-select" data-control="select2"   data-placeholder="Select an option"','WHERE 1', $row_admin['user_group'] );
														
										?>
									</div>
									<div class="col-md-4 col-12 mb-10">
										<label class="form-label"> User Access Level</label>
										<?php   
										$populate_select_obj ->print_select_for_render('description', 'user_access_levels', '  name="access_level_id"   class="form-select" data-control="select2"   data-placeholder="Select an option"','WHERE 1', $row_admin['access_level_id'] );     
										?>
									</div>
									<div class="col-md-4 col-12 mb-10">
										<label class="form-label"> User Branches:</label>
										<?php
										$populate_select_obj ->print_select_for_render('description', 'user_branches', '  name="user_branches"   class="form-select" data-control="select2"   data-placeholder="Select an option"','WHERE 1', $row_admin['branch'] ); 
										?>
									</div>
									<div class="col-md-4 mb-10">
										<label class="form-label"> Username :</label>
										<input required type="text"  value="<?php echo $row_admin['username'] ?>" name="username" class="form-control mb-2 mb-md-0"> </div>
									<div class="col-md-4 mb-10">
										<label class="form-label"> Email:</label>
										<input required type="email"  value="<?php echo $row_admin['user_email'] ?>" name="email" class="form-control mb-2 mb-md-0"> </div>
								</div>
							</div>

							<!-- submit button -->
							<div class="d-flex justify-content-center">
                                <button type="submit" name="user_account_information" value="user_account_information" class="btn btn-hover-scale btn-primary"> Update User</button>
                            </div>
						</form>
					</div>
				</div>
			</div>
			<!--end::Col-->
		</div>
		<!--end::Row-->
	</div>
	<!--end::Content-->
</div>
<!--end::Main-->
</div>
<!--end::Main-->