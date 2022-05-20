<!--begin::Table row-->
<tr>
    <!--begin::Checkbox-->
    <td>
        <div class="form-check form-check-sm form-check-custom form-check-solid">
            <input class="form-check-input" type="checkbox" value="1" />
        </div>
    </td>
    <!--end::Checkbox-->
    <!--begin::Category=-->
    <td>
        <div class="d-flex">
            <!--begin::Thumbnail-->
            <a href="inventory.php?action=edit_category&cat=<?php echo $row['category_alias'] ?>" class="symbol symbol-50px"> <span class="symbol-label" style="background-image:url(uploads/category-images/<?php echo $row['image']; ?>);"></span> </a>
            <!--end::Thumbnail-->
            <div class="ms-5">
                <!--begin::Title--><a href="inventory.php?action=edit_category&cat=<?php echo $row['category_alias'] ?>" class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1" data-kt-ecommerce-category-filter="category_name"><?php echo $row['category_name']; ?> </a>
                <!--end::Title-->
                <!--begin::Description-->
                <div class="text-muted fs-7 fw-bolder"><?php echo $row['category_description']; ?> .</div>
                <!--end::Description-->
            </div>
        </div>
    </td>
    <!--end::Category=-->
    <!--begin::Type=-->
    <td>
        <!-- hannlde category statuses -->
        <?php
        // default values
        $badge = "danger";
        $status_text = "Inactive";

        if ($row['status'] == 1) {
            $badge = "success";
            $status_text = "Published";
        }
        ?>
        <!--begin::Badges-->
        <div class="badge badge-light-<?php echo $badge ?>"><?php echo $status_text ?></div>
        <!--end::Badges-->
    </td>
    <!--end::Type=-->

    <!--begin::Action=-->
    <td class="text-end"> <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
            <span class="svg-icon svg-icon-5 m-0">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
                </svg>
            </span>
            <!--end::Svg Icon-->
        </a>
        <!--begin::Menu-->
        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
            <!--begin::Menu item-->
            <div class="menu-item px-3"> <a href="inventory.php?action=edit_category&cat=<?php echo $row['category_alias'] ?>" class="menu-link px-3">Edit</a> </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <!-- <div class="menu-item px-3"> <a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a> </div> -->
            <!--end::Menu item-->
        </div>
        <!--end::Menu-->
    </td>
    <!--end::Action=-->
</tr>
<!--end::Table row-->