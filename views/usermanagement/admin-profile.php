
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
							<h3>Personal Details</h3> </div>
						<form method="post">
							<div class="form-group row g-3">
								<div class="row ">
                                    <!-- hidden attributes -->
                                
                                <input type="text" style="display: none;" value = "<?php echo $row_admin['client_id'] ?> " name="client_id">
                                <input type="text" style="display: none;" value = "<?php echo $_GET['u_id'] ?> " name="u_id">
                                    <!-- end of hidden attributes -->

									<div class="col-md-4 mb-10">
										<label class="form-label"> Title:</label>
										<?php        
								$populate_select_obj -> print_select_for_render('description','titles', ' name="title"  class="form-select rounded-start-0" data-control="select2" data-placeholder="Select an option"' , 'Where 1',  $row_admin['title']);

                                                            
                                                            ?>
									</div>
									<div class="col-md-4 mb-10">
										<label class="form-label"> First Name:</label>
										<input required type="text" value="<?php echo $row_admin['first_name'] ?>" name="first_name" class="form-control mb-2 mb-md-0"> </div>
									<div class="col-md-4 mb-10">
										<label class="form-label"> Middle Name:</label>
										<input type="text" name="middle_name" value="<?php echo $row_admin['middle_name'] ?>"  class="form-control mb-2 mb-md-0"> </div>
									<div class="col-md-4 mb-10">
										<label class="form-label"> Last Name:</label>
										<input required type="text" name="last_name" value="<?php echo $row_admin['last_name'] ?>"  class="form-control mb-2 mb-md-0"> </div>
									<div class="col-md-4 mb-10">
										<label class="form-label"> Marital Status:</label>
										<?php        
                                                   $populate_select_obj -> print_select_for_render('description','marital_status', ' name="marital_status" required  class="form-select rounded-start-0" data-control="select2" data-placeholder="Select an option"' , 'Where 1',  $row_admin['marital_status'])
                                                   
                                                   ?>
									</div>
									<div class="col-md-4 mb-10">
										<label class="form-label"> Gender:</label>
										<?php        
                                                      $populate_select_obj -> print_select_for_render('description','gender', ' name="gender" required  class="form-select rounded-start-0" data-control="select2" data-placeholder="Select an option"' , 'Where 1',  $row_admin['gender'])
                                                      
                                                      ?>
									</div>
									<div class="col-md-4 mb-10">
										<label class="form-label"> Nationality:</label>
										<?php        
                                                $populate_select_obj -> print_select_for_render('name','countries', ' name="nationality" required  class="form-select rounded-start-0" data-control="select2" data-placeholder="Select an option"' , 'Where 1',  $row_admin['nationality'])
                                                
                                                ?>
									</div>
									<div class="col-md-4 mb-10">
										<label class="form-label"> Citizenship:</label>
										<?php        
                                                $populate_select_obj -> print_select_for_render('name','countries', ' name="citizenship" required   class="form-select rounded-start-0" data-control="select2" data-placeholder="Select an option"' , 'Where 1', $row_admin['citizenship'])
                                                
                                                ?>
									</div>
									<div class="col-md-4 mb-10">
										<label class="form-label"> D.O.B:</label>
										<input required type="date" value="<?php echo $row_admin['birth_date'] ?>"  name="birth_date" class="form-control mb-2 mb-md-0"> </div>
								</div>
								<div class="row">
									<div class="col-md-6 mb-10">
										<label class="form-label"> Address Line 1:</label>
										<input required type="text" value="<?php echo $row_admin['address_line1'] ?>"  name="address_line1" class="form-control mb-2 mb-md-0"> </div>
									<div class="col-md-6 mb-10">
										<label class="form-label"> Address Line 2:</label>
										<input required type="text" value="<?php echo $row_admin['address_line2'] ?>"  name="address_line2" class="form-control mb-2 mb-md-0"> </div>
									<div class="col-md-6 mb-10">
										<label class="form-label"> City:</label>
										<?php        
                                             $populate_select_obj -> print_select_for_render('name','cities', ' name="city"  class="form-select rounded-start-0" data-control="select2" data-placeholder="Select an option"' , 'Where 1',  $row_admin['city'] );
                                             
                                             ?>
									</div>
									<div class="col-md-6 mb-10">
										<label class="form-label"> Country:</label>
										<?php   
										$populate_select_obj ->print_select_for_render('name', 'countries', '  name="country"   class="form-select" data-control="select2"   data-placeholder="Select an option"','WHERE 1', $row_admin['country'] );

                                             
                                             ?>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 mb-10">
										<label class="form-label"> Mobile Number:</label>
										<input required type="text" value="<?php echo $row_admin['mobile_number'] ?>"  name="mobile_number" class="form-control mb-2 mb-md-0"> </div>
									<div class="col-md-4 mb-10">
										<label class="form-label"> Telephone Number:</label>
										<input required type="text" value="<?php echo $row_admin['telephone_number'] ?>"  name="telephone_number" class="form-control mb-2 mb-md-0"> </div>
									<div class="col-md-4 mb-10">
										<label class="form-label"> National ID:</label>
										<input required type="text" value="<?php echo $row_admin['national_id'] ?>"  name="national_id" class="form-control mb-2 mb-md-0"> </div>
								</div>
								<div class="row">
									<div class="col-md-4 mb-10">
										<label class="form-label"> Drivers Licence:</label>
										<input type="text" value="<?php echo $row_admin['drivers_licence'] ?>"  name="drivers_licence" class="form-control mb-2 mb-md-0"> </div>
									<div class="col-md-4 mb-10">
										<label class="form-label"> Passport Number:</label>
										<input type="text" value="<?php echo $row_admin['passport_number'] ?>"  name="passport_number" class="form-control mb-2 mb-md-0"> </div>
                                        <div class="col-md-4 mb-10">
										<label class="form-label"> Email:</label>
										<input required type="email" value="<?php echo $row_admin['email_address'] ?>" name="email" class="form-control mb-2 mb-md-0"> </div>
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
	<!--end::Content-->
</div>
<!--end::Main-->
</div>
<!--end::Main-->