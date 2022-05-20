<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<?php
	$section = "Active Accounts";
	require 'includes/page_header.php';

	?>
	<!--begin::Post-->
	<div class="post d-flex flex-column-fluid" id="kt_post">
		<!--begin::Container-->
		<div id="kt_content_container" class="container-xxl">
			<!--begin::Row-->
			<div class="row g-5 g-xl-8">
				<!--begin::Col-->
				<div class="col-xl-12">
					<!--begin::Mixed Widget 12-->
					<div class="card card-docs mb-2">
						<!--begin::Card Body-->
						<div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">
							<!--begin::Section-->
							<div class="py-0">
								<!--begin::Heading-->
								<h4 class="anchor fw-bolder mb-5" id="buttons">

									<span class="badge badge-success me-10 mb-10">Active Accounts</span>
								</h4>
								<!--end::Heading-->
								<!--begin::Block-->
								<!--end::Block-->
								<!--begin::Block-->
								<div class="py-5">
									<!--begin::Card-->
									<div class="card card-p-0 card-flush">
										<!--begin::Card header-->
										<div class="card-header align-items-center py-5 gap-2 gap-md-5">
											<!--begin::Card title-->
											<div class="card-title">
												<!--begin::Search-->
												<div class="d-flex align-items-center position-relative my-1">
													<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg--><span class="svg-icon svg-icon-1 position-absolute ms-4">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
															<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
														</svg>
													</span>
													<!--end::Svg Icon-->
													<input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search invoices">
												</div>
												<!--end::Search-->
												<!--end::Export buttons-->
											</div>
											<!--end::Card title-->
											<!--begin::Card toolbar-->
											<!--end::Card toolbar-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body">
											<!--begin::Table-->
											<div id="kt_datatable_example_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
												<div class="table-responsive">
													<table class="table align-middle border rounded table-row-dashed fs-6 g-5 dataTable no-footer" id="kt_datatable_example_1">
														<thead>
															<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase">
																<th tabindex="0" aria-controls="kt_datatable_example_1" rowspan="1" colspan="1"> #id</th>
																<th tabindex="0" aria-controls="kt_datatable_example_1" rowspan="1" colspan="1">Username </th>
																<th tabindex="0" aria-controls="kt_datatable_example_1" rowspan="1" colspan="1">Full Name </th>
																<th tabindex="0" aria-controls="kt_datatable_example_1" rowspan="1" colspan="1">Access Level </th>
																<th tabindex="0" aria-controls="kt_datatable_example_1" rowspan="1" colspan="1"> No. of priviledges</th>
																<th tabindex="0" aria-controls="kt_datatable_example_1" rowspan="1" colspan="1"> Action</th>
															</tr>
														</thead>
														<tbody class="fw-bold text-gray-600">
															<?php
															$sql = "SELECT users_admin.id, users_admin.username, CONCAT( individuals.first_name,' ', individuals.middle_name, ' ', individuals.last_name) as full_name
                                          FROM users_admin INNER JOIN individuals ON users_admin.client_id = individuals.id  WHERE users_admin.account_status = 1 AND users_admin.new_account_flag = 0;";





															$result = $db_query_obj->sql_qury("$sql");

															if (!$result) {
																//error

															} else {
																//Inserted
																while ($row = mysqli_fetch_assoc($result)) {
																	$user_id = $row['id'];
																	$username = $row['username'];
																	$full_name = $row['full_name'];
																	$legal_access_level = "Not Yet Defined";

																	$user_priviledges = "Not Yet Defined";

																	// if(!$priviledges){
																	//    $user_priviledges = 0;
																	// }else{
																	//    $user_priviledges = mysqli_fetch_assoc($priviledges)['user_privi'];
																	// }


																	echo '
                                          		<tr>
                                                                                                            
                                          		<td>' . $user_id . '</td> 
                                          		<td>' . $username . '</td>  
                                          		<td>' . $full_name . '</td>  
                                          		<td>' . $legal_access_level . '</td>  
                                          		<td>' . $user_priviledges . '</td>  
                                          		<td>
                                                <a href="usermanagement.php?action=admin_profile_dash&u_id=' . $user_id . '" class="btn  btn-sm btn-active-light-success"><i class="fa fa-eye fs-4 me-2"></i>View Profile</a>
                                               
                                                </td>  

                                               
                                          	 </tr>
                                          		';
																}
															}





															?>
														</tbody>
													</table>
												</div>
												<div class="row">
													<div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
														<div class="dataTables_length" id="kt_datatable_example_1_length">
															<label>
																<select name="kt_datatable_example_1_length" aria-controls="kt_datatable_example_1" class="form-select form-select-sm form-select-solid">
																	<option value="10">10</option>
																	<option value="25">25</option>
																	<option value="50">50</option>
																	<option value="100">100</option>
																</select>
															</label>
														</div>
													</div>
													<div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
														<div class="dataTables_paginate paging_simple_numbers" id="kt_datatable_example_1_paginate">
															<ul class="pagination">
																<li class="paginate_button page-item previous disabled" id="kt_datatable_example_1_previous"><a href="#" aria-controls="kt_datatable_example_1" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li>
																<li class="paginate_button page-item active"><a href="#" aria-controls="kt_datatable_example_1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
																<li class="paginate_button page-item next disabled" id="kt_datatable_example_1_next"><a href="#" aria-controls="kt_datatable_example_1" data-dt-idx="2" tabindex="0" class="page-link"><i class="next"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<!--end::Table-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Block-->
								<!--begin::Code-->
								<div class="py-5">
									<!--begin::Highlight-->
									<!--end::Highlight-->
								</div>
								<!--end::Code-->
							</div>
							<!--end::Section-->
						</div>
						<!--end::Card Body-->
					</div>
					<!--end::Mixed Widget 12-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->

		</div>
		<!--end::Container-->
	</div>
	<!--end::Post-->
</div>