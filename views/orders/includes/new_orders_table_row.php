<!--begin::Table row-->
<tr>
	<!--begin::Checkbox-->
	<td>
		<div class="form-check form-check-sm form-check-custom form-check-solid">
			<input class="form-check-input" type="checkbox" value="1" />
		</div>
	</td>
	<!--end::Checkbox-->
	<!--begin::Order ID=-->
	<td data-kt-ecommerce-order-filter="order_id"> <a href="/metronic8/demo19/../demo19/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder"><?php echo $row_new_orders['id']; ?></a> </td>
	<!--end::Order ID=-->
	<!--begin::Customer=-->
	<td>
		<div class="d-flex align-items-center">
			<!--begin:: Avatar -->
			<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
				<a href="/metronic8/demo19/../demo19/apps/user-management/users/view.html">
					<div class="symbol-label"> <img src="/metronic8/demo19/assets/media/avatars/300-13.jpg" alt="John Miller" class="w-100" /> </div>
				</a>
			</div>
			<!--end::Avatar-->
			<div class="ms-5">
				<!--begin::Title--><a href="/metronic8/demo19/../demo19/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder"><?php echo $customername; ?></a>
				<!--end::Title-->
			</div>
		</div>
	</td>
	<!--end::Customer=-->
	<!--begin::Status=-->
	<td class="text-end pe-0" data-order="Expired">
		<!--begin::Badges-->
		<div class="badge badge-light-warning">Pending</div>
		<!--end::Badges-->
	</td>
	<!--end::Status=-->
	<!--begin::Total=-->
	<td class="text-end pe-0"> <span class="fw-bolder">$<?php echo $row_new_orders['total']; ?></span> </td>
	<!--end::Total=-->
	<!--begin::Date Added=-->
	<td class="text-end" data-order="2022-03-27"> <span class="fw-bolder"><?php echo $row_new_orders['date']; ?></span> </td>
	<!--end::Date Added=-->
	<!--begin::Action=-->
	<td class="text-end"> <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
			<span class="svg-icon svg-icon-5 m-0">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none">
					<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</a>
		<!--begin::Menu-->
		<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
			<!--begin::Menu item-->
			<div class="menu-item px-3"> <a href="Orders.php?action=order_details&o_id=<?php echo $row_new_orders['id']; ?>" class="menu-link px-3">View</a> </div>
			<!--end::Menu item-->
			<!--begin::Menu item-->
			<div class="menu-item px-3"> <a href="#" onclick="archieve_order(<?php echo $row_new_orders['id']; ?> );" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Archieve</a> </div>
			<!--end::Menu item-->
		</div>
		<!--end::Menu-->
	</td>
	<!--end::Action=-->
</tr>
<!--end::Table row-->