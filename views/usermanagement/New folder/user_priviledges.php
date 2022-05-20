<?php
if (!isset($_GET['u_id'])) {
	echo '<script> window.location.href = "usermanagement.php"; </script>';
}
// update user priviledges
if (isset($_POST['user_priviledges'])) {
	require 'controllers/usermanagement/update_user_priviledges.php';
}
$u_id = $_GET['u_id'];
// get data from the database
$user_priviledge_data = $transaction->get_priviledge_data_check_box_attributes($u_id);
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
		<?php require 'includes/admin_menu.php'; ?>
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
				<?php require 'includes/admin-header.php'; ?>
				<form method="POST">
					<div id="kt_content">
						<!--begin::Row-->
						<div class="row g-5 g-xl-8">
							<!--begin::Col-->
							<div class="col-xl-12">
								<!--begin::Mixed Widget 12-->
								<div class="card card-docs mb-5"> </div>
							</div>
						</div>
						<!--begin::Row-->
						<div class="row g-5 g-xl-8">
							<!--begin::Col-->
							<div class="col-xl-12">
								<!--***********************************************************************-->
								<div class="card card-docs mb-5">
									<div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">
										<h4>Fund Rules</h4>
										<hr />
										<div class="form-check form-check-custom form-check-solid" class="ps-5">
											<div class="col-xl-12">
												<div class="row">
													<div class="col-md-3 mb-10">
														<input class="form-check-input" <?php echo $user_priviledge_data['fund_details'] ?> type="checkbox" name="fund_details" />
														<label class="form-check-label" for="flexCheckDefault"> Fund Details </label>
													</div>
													<div class="col-md-3 mb-10">
														<input <?php echo $user_priviledge_data['membership_rules'] ?> class="form-check-input" type="checkbox" name="membership_rules" />
														<label class="form-check-label" for="flexCheckDefault"> Membership Rules </label>
													</div>
													<div class="col-md-3 mb-10">
														<input class="form-check-input" type="checkbox" name="contribution_rules" <?php echo $user_priviledge_data['contribution_rules'] ?> />
														<label class="form-check-label" for="flexCheckDefault"> Contribution Rules </label>
													</div>
													<div class="col-md-3 mb-10">
														<input class="form-check-input" type="checkbox" name="claim_rules" <?php echo $user_priviledge_data['claim_rules'] ?> />
														<label class="form-check-label" for="flexCheckDefault"> Claim Rules </label>
													</div>
													<div class="col-md-3 mb-10">
														<input class="form-check-input" type="checkbox" name="dependent_types" <?php echo $user_priviledge_data['dependent_types'] ?> />
														<label class="form-check-label" for="flexCheckDefault"> Dependent Types </label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--***********************************************************************-->
								<div class="card card-docs mb-5">
									<div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">
										<h4>Employers</h4>
										<hr />
										<div class="form-check form-check-custom form-check-solid">
											<div class="row">
												<div class="col-md-3 mb-10">
													<input class="form-check-input" type="checkbox" name="directors" <?php echo $user_priviledge_data['directors'] ?> />
													<label class="form-check-label" for="flexCheckDefault"> Directors </label>
												</div>
												<div class="col-md-3 mb-10">
													<input class="form-check-input" type="checkbox" name="contribution_history" <?php echo $user_priviledge_data['contribution_history'] ?> />
													<label class="form-check-label" for="flexCheckDefault"> Contribution History </label>
												</div>
												<div class="col-md-3 mb-10">
													<input class="form-check-input" type="checkbox" name="contribution_upload" <?php echo $user_priviledge_data['contribution_upload'] ?> />
													<label class="form-check-label" for="flexCheckDefault"> Contribution Upload </label>
												</div>
												<div class="col-md-3 mb-10">
													<input class="form-check-input" type="checkbox" name="employess" <?php echo $user_priviledge_data['employess'] ?> />
													<label class="form-check-label" for="flexCheckDefault"> Employees </label>
												</div>
												<div class="col-md-3 mb-10">
													<input class="form-check-input" type="checkbox" name="invoices" <?php echo $user_priviledge_data['invoices'] ?> />
													<label class="form-check-label" for="flexCheckDefault"> Invoices </label>
												</div>
												<div class="col-md-3 mb-10">
													<input class="form-check-input" type="checkbox" name="payments_history" <?php echo $user_priviledge_data['payments_history'] ?> />
													<label class="form-check-label" for="flexCheckDefault"> Payments History </label>
												</div>
												<div class="col-md-3 mb-10">
													<input class="form-check-input" type="checkbox" name="process_payment" <?php echo $user_priviledge_data['process_payment'] ?> />
													<label class="form-check-label" for="flexCheckDefault"> Process Payment </label>
												</div>
												<div class="col-md-3 mb-10">
													<input class="form-check-input" type="checkbox" name="register_employee" <?php echo $user_priviledge_data['register_employee'] ?> />
													<label class="form-check-label" for="flexCheckDefault"> Register Employee </label>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--***********************************************************************-->
								<div class="card card-docs mb-5">
									<div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">
										<h4>Membership</h4>
										<hr />
										<div class="form-check form-check-custom form-check-solid" class="ps-5">
											<div class="col-xl-12">
												<div class="row">
													<div class="col-md-3 mb-10">
														<!-- user id of the user selected -->
														<input type="number" name="u_id" style="display: none;" value="<?php echo $_GET['u_id'] ?>">
														<!-- /// end of u_id -->
														<input class="form-check-input" type="checkbox" name="membership_detail" <?php echo $user_priviledge_data['membership_detail'] ?> />
														<label class="form-check-label" for="flexCheckDefault"> Membership Details </label>
													</div>
													<div class="col-md-3 mb-10">
														<input class="form-check-input" type="checkbox" name="employment_details" <?php echo $user_priviledge_data['employment_details'] ?> />
														<label class="form-check-label" for="flexCheckDefault"> Employment Details </label>
													</div>
													<div class="col-md-3 mb-10">
														<input class="form-check-input" type="checkbox" name="contribution_table" <?php echo $user_priviledge_data['contribution_table'] ?> />
														<label class="form-check-label" for="flexCheckDefault"> Contribution Table </label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--***********************************************************************-->
								<!--begin::Col-->
								<!--begin::Mixed Widget 12-->
								<div class="card card-docs mb-5">
									<div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">
										<h4>Claims</h4>
										<hr />
										<div class="form-check form-check-custom form-check-solid" class="ps-5">
											<div class="col-xl-12">
												<div class="row">
													<h5>All Claims</h5>
													<div class="col-md-3 mb-10">
														<input class="form-check-input" type="checkbox" name="logged_claims" <?php echo $user_priviledge_data['logged_claims'] ?> />
														<label class="form-check-label" for="flexCheckDefault"> Logged Claims </label>
													</div>
													<div class="col-md-3 mb-10">
														<input class="form-check-input" <?php echo $user_priviledge_data['registered_claims'] ?> type="checkbox" name="registered_claims" />
														<label class="form-check-label" for="flexCheckDefault"> Registered Claims </label>
													</div>
													<div class="col-md-3 mb-10">
														<input class="form-check-input" <?php echo $user_priviledge_data['checked_claims'] ?> type="checkbox" name="checked_claims" />
														<label class="form-check-label" for="flexCheckDefault"> Checked Claims </label>
													</div>
													<div class="col-md-3 mb-10">
														<input class="form-check-input" type="checkbox" name="authorised_claims" <?php echo $user_priviledge_data['authorised_claims'] ?> />
														<label class="form-check-label" for="flexCheckDefault"> Authorised Claims </label>
													</div>
													<div class="col-md-3 mb-10">
														<input class="form-check-input" type="checkbox" name="rejected_claims" <?php echo $user_priviledge_data['rejected_claims'] ?> />
														<label class="form-check-label" for="flexCheckDefault"> Rejected Claims </label>
													</div>
												</div>
											</div>
										</div>
										<br></br>
										<h4>Individual Claims</h4>
										<div class="form-check form-check-custom form-check-solid" class="ps-5">
											<div class="col-xl-12">
												<div class="row">
													<div class="col-md-3 mb-10">
														<input class="form-check-input" type="checkbox" name="log_a_claim" <?php echo $user_priviledge_data['log_a_claim'] ?> />
														<label class="form-check-label" for="flexCheckDefault"> Log a Claim </label>
													</div>
													<div class="col-md-3 mb-10">
														<input class="form-check-input" type="checkbox" name="logged_claims" <?php echo $user_priviledge_data['logged_claims'] ?> />
														<label class="form-check-label" for="flexCheckDefault"> Logged Claims </label>
													</div>
													<div class="col-md-3 mb-10">
														<input class="form-check-input" type="checkbox" name="registered_claims" <?php echo $user_priviledge_data['registered_claims'] ?> />
														<label class="form-check-label" for="flexCheckDefault"> Registered Claims </label>
													</div>
													<div class="col-md-3 mb-10">
														<input class="form-check-input" type="checkbox" name="checked_claims" <?php echo $user_priviledge_data['checked_claims'] ?> />
														<label class="form-check-label" for="flexCheckDefault"> Checked Claims </label>
													</div>
													<div class="col-md-3 mb-10">
														<input class="form-check-input" type="checkbox" name="authorised_claims" <?php echo $user_priviledge_data['authorised_claims'] ?> />
														<label class="form-check-label" for="flexCheckDefault"> Authorised Claims </label>
													</div>
													<div class="col-md-3 mb-10">
														<input class="form-check-input" type="checkbox" name="benefit_report" <?php echo $user_priviledge_data['benefit_report'] ?> />
														<label class="form-check-label" for="flexCheckDefault"> Benefit Report </label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--***********************************************************************-->
						<div class="row g-5 g-xl-8">
							<!--begin::Col-->
							<div class="col-xl-12">
								<!--begin::Mixed Widget 12-->
								<div class="card card-docs mb-5">
									<div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">
										<h4>Accounting</h4>
										<hr />
										<div class="form-check form-check-custom form-check-solid" class="ps-5">
											<div class="col-xl-12">
												<div class="row">
													<div class="col-md-3 mb-10">
														<input class="form-check-input" type="checkbox" name="run_billing" <?php echo $user_priviledge_data['run_billing'] ?> />
														<label class="form-check-label" for="flexCheckDefault"> Run Billing </label>
													</div>
													<div class="col-md-3 mb-10">
														<input class="form-check-input" type="checkbox" name="reconciliation" <?php echo $user_priviledge_data['reconciliation'] ?> />
														<label class="form-check-label" for="flexCheckDefault"> Reconciliation </label>
													</div>
													<div class="col-md-3 mb-10">
														<input class="form-check-input" type="checkbox" name="billing_history" <?php echo $user_priviledge_data['billing_history'] ?> />
														<label class="form-check-label" for="flexCheckDefault"> Billing History </label>
													</div>
													<div class="col-md-3 mb-10">
														<input class="form-check-input" type="checkbox" name="billing_report" <?php echo $user_priviledge_data['billing_report'] ?> />
														<label class="form-check-label" for="flexCheckDefault"> Billing Report </label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--***********************************************************************-->
								<!--begin::Col-->
								<!--begin::Mixed Widget 12-->
								<div class="card card-docs mb-5">
									<div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">
										<h4>Payroll</h4>
										<hr />
										<div class="form-check form-check-custom form-check-solid" class="ps-5">
											<div class="col-xl-12">
												<div class="row">
													<div class="col-md-3 mb-10">
														<input class="form-check-input" type="checkbox" name="fund_details" <?php echo $user_priviledge_data['select_scheme'] ?> />
														<label class="form-check-label" for="flexCheckDefault"> Select Scheme </label>
													</div>
													<div class="col-md-3 mb-10">
														<input class="form-check-input" type="checkbox" name="create_fund" <?php echo $user_priviledge_data['create_fund'] ?> />
														<label class="form-check-label" for="flexCheckDefault"> Create Fund </label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--***********************************************************************-->
								<div class="card card-docs mb-5">
									<div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">
										<h4>Global Config</h4>
										<hr />
										<div class="form-check form-check-custom form-check-solid">
											<div class="row">
												<div class="col-md-3 mb-10">
													<input class="form-check-input" type="checkbox" name="banks" <?php echo $user_priviledge_data['banks'] ?> />
													<label class="form-check-label" for="flexCheckDefault"> Banks </label>
												</div>
												<div class="col-md-3 mb-10">
													<input class="form-check-input" type="checkbox" name="bank_account_types" <?php echo $user_priviledge_data['bank_account_types'] ?> />
													<label class="form-check-label" for="flexCheckDefault"> Bank Account Types </label>
												</div>
												<div class="col-md-3 mb-10">
													<input class="form-check-input" type="checkbox" name="bank_branches" <?php echo $user_priviledge_data['bank_branches'] ?> />
													<label class="form-check-label" for="flexCheckDefault"> Bank Branches </label>
												</div>
												<div class="col-md-3 mb-10">
													<input class="form-check-input" name="business_classes" <?php echo $user_priviledge_data['business_classes'] ?> type="checkbox" />
													<label class="form-check-label" for="flexCheckDefault"> Business Classes </label>
												</div>
												<div class="col-md-3 mb-10">
													<input class="form-check-input" name="cities" <?php echo $user_priviledge_data['cities'] ?> type="checkbox" />
													<label class="form-check-label" for="flexCheckDefault"> Cities </label>
												</div>
												<div class="col-md-3 mb-10">
													<input class="form-check-input" type="checkbox" name="claim_types" <?php echo $user_priviledge_data['claim_types'] ?> />
													<label class="form-check-label" for="flexCheckDefault"> Claim Types </label>
												</div>
												<div class="col-md-3 mb-10">
													<input class="form-check-input" type="checkbox" name="client_types" <?php echo $user_priviledge_data['client_types'] ?> />
													<label class="form-check-label" for="flexCheckDefault"> Client Types </label>
												</div>
												<div class="col-md-3 mb-10">
													<input class="form-check-input" type="checkbox" name="communication_type" <?php echo $user_priviledge_data['communication_type'] ?> />
													<label class="form-check-label" for="flexCheckDefault"> Communication Type </label>
												</div>
												<div class="col-md-3 mb-10">
													<input class="form-check-input" type="checkbox" name="company_type" <?php echo $user_priviledge_data['company_type'] ?> />
													<label class="form-check-label" for="flexCheckDefault"> Company Type </label>
												</div>
												<div class="col-md-3 mb-10">
													<input class="form-check-input" type="checkbox" name="countries" <?php echo $user_priviledge_data['countries'] ?> />
													<label class="form-check-label" for="flexCheckDefault"> Country </label>
												</div>
												<div class="col-md-3 mb-10">
													<input class="form-check-input" type="checkbox" name="dependent_type" <?php echo $user_priviledge_data['dependent_type'] ?> />
													<label class="form-check-label" for="flexCheckDefault"> Dependent Type </label>
												</div>
												<div class="col-md-3 mb-10">
													<input class="form-check-input" type="checkbox" name="director_types" <?php echo $user_priviledge_data['director_types'] ?> />
													<label class="form-check-label" for="flexCheckDefault"> Director Type </label>
												</div>
												<div class="col-md-3 mb-10">
													<input class="form-check-input" type="checkbox" name="financial_year" <?php echo $user_priviledge_data['financial_year'] ?> />
													<label class="form-check-label" for="flexCheckDefault"> Financial Year </label>
												</div>
												<div class="col-md-3 mb-10">
													<input class="form-check-input" type="checkbox" name="fund_branches" <?php echo $user_priviledge_data['fund_branches'] ?> />
													<label class="form-check-label" for="flexCheckDefault"> Fund Branches </label>
												</div>
												<div class="col-md-3 mb-10">
													<input class="form-check-input" type="checkbox" name="gender" <?php echo $user_priviledge_data['gender'] ?> />
													<label class="form-check-label" for="flexCheckDefault"> Gender </label>
												</div>
												<div class="col-md-3 mb-10">
													<input class="form-check-input" type="checkbox" name="industry_code" <?php echo $user_priviledge_data['industry_code'] ?> />
													<label class="form-check-label" for="flexCheckDefault"> Industry Code </label>
												</div>
												<div class="col-md-3 mb-10">
													<input class="form-check-input" type="checkbox" name="marital-status" <?php echo $user_priviledge_data['marital-status'] ?> />
													<label class="form-check-label" for="flexCheckDefault"> Marital Status </label>
												</div>
												<div class="col-md-3 mb-10">
													<input class="form-check-input" type="checkbox" name="occupation" <?php echo $user_priviledge_data['occupation'] ?> />
													<label class="form-check-label" for="flexCheckDefault"> Occupation </label>
												</div>
												<div class="col-md-3 mb-10">
													<input class="form-check-input" type="checkbox" name="months" <?php echo $user_priviledge_data['months'] ?> />
													<label class="form-check-label" for="flexCheckDefault"> Months </label>
												</div>
												<div class="col-md-3 mb-10">
													<input class="form-check-input" type="checkbox" name="relationship_type" <?php echo $user_priviledge_data['relationship_type'] ?> />
													<label class="form-check-label" for="flexCheckDefault"> Relationship Type </label>
												</div>
												<div class="col-md-3 mb-10">
													<input class="form-check-input" type="checkbox" name="region" <?php echo $user_priviledge_data['region'] ?> />
													<label class="form-check-label" for="flexCheckDefault"> Regions </label>
												</div>
												<div class="col-md-3 mb-10">
													<input class="form-check-input" type="checkbox" name="scheme_type" <?php echo $user_priviledge_data['scheme_type'] ?> />
													<label class="form-check-label" for="flexCheckDefault"> Scheme Types </label>
												</div>
												<div class="col-md-3 mb-10">
													<input class="form-check-input" type="checkbox" name="tax_tables" <?php echo $user_priviledge_data['tax_tables'] ?> />
													<label class="form-check-label" for="flexCheckDefault"> Tax Tables </label>
												</div>
												<div class="col-md-3 mb-10">
													<input class="form-check-input" type="checkbox" name="tittle" <?php echo $user_priviledge_data['tittle'] ?> />
													<label class="form-check-label" for="flexCheckDefault"> Titles </label>
												</div>
												<div class="col-md-3 mb-10">
													<input class="form-check-input" type="checkbox" name="user_branches" <?php echo $user_priviledge_data['user_branches'] ?> />
													<label class="form-check-label" for="flexCheckDefault"> User Branches </label>
												</div>
												<div class="col-md-3 mb-10">
													<input class="form-check-input" type="checkbox" name="user_groups" <?php echo $user_priviledge_data['user_groups'] ?> />
													<label class="form-check-label" for="flexCheckDefault"> User groups </label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--***********************************************************************-->
						<div class="row g-5 g-xl-8">
							<!--begin::Col-->
							<div class="col-xl-12">
								<!--begin::Mixed Widget 12-->
								<div class="card card-docs mb-5">
									<div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">
										<h4>User Management</h4>
										<hr />
										<div class="form-check form-check-custom form-check-solid" class="ps-5">
											<div class="col-xl-12">
												<div class="row">
													<h5>Portal Users</h5>
													<div class="col-md-3 mb-10">
														<input class="form-check-input" type="checkbox" <?php echo $user_priviledge_data['admin_new_accounts'] ?> name="admin_new_accounts" />
														<label class="form-check-label" for="flexCheckDefault"> New Accounts </label>
													</div>
													<div class="col-md-3 mb-10">
														<input class="form-check-input" type="checkbox" <?php echo $user_priviledge_data['admin_active_account'] ?> name="admin_active_account" />
														<label class="form-check-label" for="flexCheckDefault"> Active Accounts </label>
													</div>
													<div class="col-md-3 mb-10">
														<input class="form-check-input" type="checkbox" <?php echo $user_priviledge_data['admin_deactivate_account'] ?> name="admin_deactivate_account" />
														<label class="form-check-label" for="flexCheckDefault"> Deactivated Accounts </label>
													</div>
												</div>
												<br></br>
												<h4>Admin Users</h4>
												<div class="form-check form-check-custom form-check-solid" class="ps-5">
													<div class="col-xl-12">
														<div class="row">
															<div class="col-md-3 mb-10">
																<input class="form-check-input" type="checkbox" name="portal_new_account" <?php echo $user_priviledge_data['portal_new_account'] ?> />
																<label class="form-check-label" for="flexCheckDefault"> New Accounts </label>
															</div>
															<div class="col-md-3 mb-10">
																<input class="form-check-input" type="checkbox" name="portal_active_account" <?php echo $user_priviledge_data['portal_active_account'] ?> />
																<label class="form-check-label" for="flexCheckDefault"> Active Accounts </label>
															</div>
															<div class="col-md-3 mb-10">
																<input class="form-check-input" type="checkbox" name="portal_deactivate_account" <?php echo $user_priviledge_data['portal_deactivate_account'] ?> />
																<label class="form-check-label" for="flexCheckDefault"> Deactivated Accounts </label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--end::Mixed Widget 12-->
						<button type="submit" name="user_priviledges" value="user_priviledges" class="btn btn-hover-scale btn-primary">
							<li class="fa fa-pen"></li> Update Priviledges
						</button>
					</div>
				</form>
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