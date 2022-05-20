<?php
// create user
if(isset($_POST['create_admin_user']))
{
    require 'controllers/usermanagement/add_new_user.controller.php';

}
?>
<div class="toolbar d-flex flex-stack flex-wrap py-4 gap-2" id="kt_toolbar">
	<!--begin::Page title-->
	<div class="page-title d-flex flex-column align-items-start me-3 gap-1">
		<!--begin::Title-->
		<h1 class="d-flex text-dark fw-bolder m-0 fs-3">  Create User     
							<!--begin::Separator-->
							<span class="h-20px border-gray-400 border-start mx-3"></span>
							<!--end::Separator-->
							<!--begin::Description-->
							<small class="text-gray-500 fs-7 fw-bold my-1"><?php require 'views/includes/print_fund_name.php'; ?></small>
							<!--end::Description--></h1>
		<!--end::Title-->
	</div>
	<!--end::Page title-->
	<!--begin::Actions-->
	<div class="d-flex align-items-center py-1">
		<!--begin::Daterange-->
		<!--end::Daterange-->
		<!--begin::Filter-->
		<!--end::Filter-->
<button  onclick="history.back()" class="btn me-2  btn-hover-rise  btn-sm btn-secondary" >Back</button> 
		<!--end::Button-->
	</div>
	<!--end::Actions-->
</div>
<!--end::Toolbar-->
<!--begin::Main-->
<div class="d-flex flex-row flex-column-fluid align-items-stretch">
	<!--begin::Content-->
	<div class="content flex-row-fluid" id="kt_content">
		<!--begin::Row-->
		<div class="row g-5 g-xl-8">
			<!--begin::Col-->
			<div class="col-xl-12">
				<!--begin::Mixed Widget 12-->
				<!-- create new user form -->
				<div class="card">
					<div class="card-body">
						<form  class="m-auto p-4" method="post">
							<div class="form-group">
								<div data-repeater-list="kt_docs_repeater_basic">
									<div data-repeater-item="">
									<h5>Personal Details</h5>
									<div class="mb-12"> </div>
											
										<div class="form-group row g-3">
											<div class="row ">
												
												<div class="col-md-4 mb-10">
													<label class="form-label"> Title:</label>
													<?php        
                                                            $populate_select_obj -> print_select('titles', ' name="title"  class="form-select rounded-start-0" data-control="select2" data-placeholder="Select an option"' , 'Where 1')
                                                            
                                                            ?>
												</div>
												<div class="col-md-4 mb-10">
													<label class="form-label"> First Name:</label>
													<input required type="text" name="first_name" class="form-control mb-2 mb-md-0"> </div>
												<div class="col-md-4 mb-10">
													<label class="form-label"> Middle Name:</label>
													<input type="text" name="middle_name" class="form-control mb-2 mb-md-0"> </div>
												<div class="col-md-4 mb-10">
													<label class="form-label"> Last Name:</label>
													<input required type="text" name="last_name" class="form-control mb-2 mb-md-0"> </div>
												<div class="col-md-4 mb-10">
													<label class="form-label"> Marital Status:</label>
													<?php        
                                                   $populate_select_obj -> print_select('marital_status', ' name="marital_status" required  class="form-select rounded-start-0" data-control="select2" data-placeholder="Select an option"' , 'Where 1')
                                                   
                                                   ?>
												</div>
												<div class="col-md-4 mb-10">
													<label class="form-label"> Gender:</label>
													<?php        
                                                      $populate_select_obj -> print_select('gender', ' name="gender" required  class="form-select rounded-start-0" data-control="select2" data-placeholder="Select an option"' , 'Where 1')
                                                      
                                                      ?>
												</div>
												<div class="col-md-4 mb-10">
													<label class="form-label"> Nationality:</label>
													<?php        
                                                $populate_select_obj -> print_select_without_id_desc('name','countries', ' name="nationality" required  class="form-select rounded-start-0" data-control="select2" data-placeholder="Select an option"' , 'Where 1')
                                                
                                                ?>
												</div>
												<div class="col-md-4 mb-10">
													<label class="form-label"> Citizenship:</label>
													<?php        
                                                $populate_select_obj -> print_select_without_id_desc('name','countries', ' name="citizenship" required   class="form-select rounded-start-0" data-control="select2" data-placeholder="Select an option"' , 'Where 1')
                                                
                                                ?>
												</div>
												<div class="col-md-4 mb-10">
													<label class="form-label"> D.O.B:</label>
													<input required  type="date" name="birth_date" class="form-control mb-2 mb-md-0"> </div>
											</div>
											<div class="row">
												<div class="col-md-6 mb-10">
													<label class="form-label"> Address Line 1:</label>
													<input required  type="text" name="address_line1" class="form-control mb-2 mb-md-0"> </div>
												<div class="col-md-6 mb-10">
													<label class="form-label"> Address Line 2:</label>
													<input required  type="text" name="address_line2" class="form-control mb-2 mb-md-0"> </div>
												<div class="col-md-6 mb-10">
													<label class="form-label"> City:</label>
													<?php        
                                             $populate_select_obj -> print_select_without_id_desc('name','cities', ' name="city"  class="form-select rounded-start-0" data-control="select2" data-placeholder="Select an option"' , 'Where 1')
                                             
                                             ?>
												</div>
												<div class="col-md-6 mb-10">
													<label class="form-label"> Country:</label>
													<?php        
                                             $populate_select_obj -> print_select_without_id_desc('name','countries', ' name="country" required  class="form-select rounded-start-0" data-control="select2" data-placeholder="Select an option"' , 'Where 1')
                                             
                                             ?>
												</div>
											</div>
											<div class="row">
												<div class="col-md-4 mb-10">
													<label class="form-label"> Mobile Number:</label>
													<input required  type="text" name="mobile_number" class="form-control mb-2 mb-md-0"> </div>
												<div class="col-md-4 mb-10">
													<label class="form-label"> Telephone Number:</label>
													<input required  type="text" name="telephone_number" class="form-control mb-2 mb-md-0"> </div>
													<div class="col-md-4 mb-10">
													<label class="form-label"> National ID:</label>
													<input required  type="text" name="national_id" class="form-control mb-2 mb-md-0"> </div>
											</div>
											<div class="row">
												<div class="col-md-4 mb-10">
													<label class="form-label"> Drivers Licence:</label>
													<input    type="text" name="drivers_licence" class="form-control mb-2 mb-md-0"> </div>
												<div class="col-md-4 mb-10">
													<label class="form-label"> Passport Number:</label>
													<input  type="text" name="passport_number" class="form-control mb-2 mb-md-0"> </div>
												
											</div>

											<!-- Account Details -->
											<hr>
											<h5> Account Details</h5>
												<div class="mb-12"> </div>
								
												<!-- =========================================================================== -->
											<div class="row">
												<div class="col-md-4 col-12 mb-10">
												<label class="form-label"> User Group</label>
														<?php        
														$populate_select_obj -> print_select_without_id_desc('description','user_group', ' name="user_group"  class="form-select rounded-start-0" data-control="select2" data-placeholder="Select an option"' , 'Where 1')
														
														?>
													</div>
 
												<div class="col-md-4 col-12 mb-10">
												<label class="form-label"> User Access Level</label>
														<?php        
														$populate_select_obj -> print_select_without_id_desc('description','user_access_levels', ' name="access_level_id"  class="form-select rounded-start-0" data-control="select2" data-placeholder="Select an option"' , 'Where 1')
														
														?>
													</div>
													<div class="col-md-4 col-12 mb-10">
														<label class="form-label"> User Branches:</label>
														<?php        
														$populate_select_obj -> print_select_without_id_desc('description','user_branches', 'required name="user_branches"  class="form-select rounded-start-0" data-control="select2" data-placeholder="Select an option"' , 'Where 1')
														
														?>
													</div>
													<div class="col-md-4 mb-10">
													<label class="form-label"> Username :</label>
													<input required type="text" name="username" class="form-control mb-2 mb-md-0">  
												</div>
												
												<div class="col-md-4 mb-10">
													<label class="form-label"> Email:</label>
													<input  required type="email" name="email" class="form-control mb-2 mb-md-0"> </div>
												
											</div>
 

											
										
											<div class="d-flex justify-content-center">
												<button type="submit" name="create_admin_user" value="create_admin_user" class="btn btn-hover-scale btn-primary"> Register User</button>
											</div>
										</div>
										<!--end::Row-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Main-->
							</div>
						</form>
					</div>
				</div>
				<!--end::Mixed Widget 12-->
			</div>
			<!--end::Col-->
		</div>
		<!--end::Row-->
	</div>
	<!--end::Content-->
</div>
<!--end::Main-->