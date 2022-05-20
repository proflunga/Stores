 <?php
   if (!isset($_GET['u_id'])) {
      echo '<script>window.location.href="usermanagement.php?action=admin_users"</script>';
   }









   $m_id = $_GET['u_id'];

   $sql_header = "SELECT individuals.*, users_admin.*, individuals.id as client_id FROM individuals INNER JOIN users_admin ON users_admin.client_id = individuals.id WHERE users_admin.id =  $m_id";



   $results_header = $db_query_obj->sql_qury($sql_header);


   if (!$results_header) {
      // employer not found\
      echo '<script>window.location.href="usermanagement.php?action=admin_users"</script>';
   }
   $row_admin  = mysqli_fetch_assoc($results_header);

   // set active page
   $active_page = $_GET['action'];

   ?>
 <div class="card  ">
    <div class="card-body pt-9 pb-0">
       <!--begin::Details-->
       <div class="d-flex flex-wrap flex-sm-nowrap mb-6">
          <!--begin::Image-->
          <!--end::Image-->
          <!--begin::Wrapper-->
          <div class="flex-grow-1">
             <!--begin::Head-->
             <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                <!--begin::Details-->
                <div class="d-flex flex-column">
                   <!--begin::Status-->
                   <div class="d-flex align-items-center  ">
                      <a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bolder me-3"><?php echo  $row_admin['first_name'] . ' ' . $row_admin['middle_name'] . ' ' . $row_admin['last_name']; ?> </a>
                   </div>
                   <!--end::Status-->
                   <!--begin::Description-->
                   <div class="d-flex flex-wrap fw-bold   fs-5 text-gray-400">
                      <?php
                        $badge_colour = "badge-primary";
                        $badge_msg = "New Account";
                        if ($row_admin['account_status'] == 0) {
                        }


                        if ($row_admin['account_status'] == 0 and $row_admin['new_account_flag'] == 1) {
                           // new account


                        } else if ($row_admin['account_status'] == 0) {
                           $badge_colour = "badge-danger";
                           $badge_msg = "Deactived Account";
                        } else {
                           //  activated account
                           $badge_colour = "badge-success";
                           $badge_msg = "Activated Account";
                        }
                        ?>


                      <span class="badge <?php echo $badge_colour; ?>"><?php echo   $badge_msg; ?></span>
                   </div>
                   <!--end::Description-->
                </div>
                <!--end::Details-->
                <!--begin::Actions-->
                <div class="d-flex ">
                   <!--begin::Menu-->
                   <div class="me-0">
                      <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                         <i class="fa fa-bars fs-3"></i>
                      </button>
                      <!--begin::Menu 3-->
                      <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                         <!--begin::Heading-->
                         <div class="menu-item px-3">
                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">MENU</div>
                         </div>
                         <!--end::Heading-->
                         <!--begin::Menu item-->
                         <div class="menu-item px-3">
                            <a href="usermanagement.php?action=admin_profile&<?php echo 'u_id=' . $_GET['u_id'] ?>" class="menu-link px-3 me-2  btn-hover-rise  btn-sm "> Personal Details</a>
                         </div>
                         <!--end::Menu item-->
                         <!--begin::Menu item-->
                         <div class="menu-item px-3">
                            <a href="usermanagement.php?action=user_priviledges&<?php echo 'u_id=' . $_GET['u_id'] ?>" class="menu-link px-3 me-2  btn-hover-rise  btn-sm "> User Previledges</a>
                         </div>
                         <!--end::Menu item-->
                         <!--begin::Menu item-->
                         <div class="menu-item px-3">
                            <a href="usermanagement.php?action=admin_acc_details&<?php echo 'u_id=' . $_GET['u_id'] ?>" class="menu-link px-3 me-2  btn-hover-rise  btn-sm "> Account Details</a>
                         </div>
                         <div class="menu-item px-3">
                            <a href="usermanagement.php?action=admin_change_pin&<?php echo 'u_id=' . $_GET['u_id'] ?>" class="menu-link px-3 me-2  btn-hover-rise  btn-sm "> Change Pin</a>
                         </div>
                         <!--end::Menu item-->

                         <!--end::Menu item-->
                         <!--begin::Menu item-->
                         <div class="menu-item px-3">
                            <a href="usermanagement.php?action=admin_acc_status&<?php echo 'u_id=' . $_GET['u_id'] ?>" class="menu-link px-3 me-2  btn-hover-rise  btn-sm "> Account Status</a>
                         </div>

                         <!--end::Menu item-->
                      </div>
                      <!--end::Menu 3-->
                   </div>
                   <!--end::Menu-->
                </div>
                <!--end::Actions-->
             </div>
             <!--end::Head-->
          </div>
          <!--end::Wrapper-->
       </div>
       <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
          <!--begin::Nav item-->
          <li class="nav-item mt-2">
             <div class="menu-item px-3">
                <a href="usermanagement.php?action=admin_profile&<?php echo 'u_id=' . $_GET['u_id'] ?>" class="nav-link text-active-primary ms-0 me-10 py-5 <?php if ($active_page == 'admin_profile') echo 'active';  ?> "> Personal Details</a>
             </div>
          </li>
          <!--end::Nav item-->
          <!--begin::Nav item-->
          <li class="nav-item mt-2">
             <a href="usermanagement.php?action=user_priviledges&<?php echo 'u_id=' . $_GET['u_id'] ?>" class=" nav-link text-active-primary ms-0 me-10 py-5 <?php if ($active_page == 'user_priviledges') echo 'active';  ?> "> User Previledges</a>
          </li>
          <!--end::Nav item-->
          <!--begin::Nav item-->
          <li class="nav-item mt-2">
             <a href="usermanagement.php?action=admin_acc_details&<?php echo 'u_id=' . $_GET['u_id'] ?>" class=" nav-link text-active-primary ms-0 me-10 py-5 <?php if ($active_page == 'admin_acc_details') echo 'active';  ?> "> Account Details</a>
          </li>
          <!--end::Nav item-->
          <!--begin::Nav item-->
          <li class="nav-item mt-2">
             <a href="usermanagement.php?action=admin_change_pin&<?php echo 'u_id=' . $_GET['u_id'] ?>" class=" nav-link text-active-primary ms-0 me-10 py-5 <?php if ($active_page == 'admin_change_pin') echo 'active';  ?> "> Change Pin</a>
          </li>
          <li class="nav-item mt-2">
             <a href="usermanagement.php?action=admin_acc_status&<?php echo 'u_id=' . $_GET['u_id'] ?>" class=" nav-link text-active-primary ms-0 me-10 py-5 <?php if ($active_page == 'admin_acc_status') echo 'active';  ?>"> Account Status</a>
          </li>
          <!--end::Nav item-->
          <!--begin::Nav item-->


          <!--end::Nav item-->

       </ul>
    </div>
 </div>