 <?php
    require 'controllers/notifications/notifications.controller.php';

    if (isset($_GET['noti_id'])) {
        $noti_id = $_GET['noti_id'];
    } else {
        $noti_id = 0;
    }
    $notifications_obj->mark_as_read($noti_id)


    ?>

 <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
     <!--begin::Toolbar-->
     <div class="toolbar" id="kt_toolbar">
         <!--begin::Container-->
         <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
             <!--begin::Page title-->
             <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                 <!--begin::Title-->
                 <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1"> Notification Message
                     <!--begin::Separator-->
                     <span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
                     <!--end::Separator-->
                     <!--begin::Description-->
                     <span class="text-muted fs-7   mt-2"> Home > Notifications > Message </span>
                     <!--end::Description-->
                 </h1>
                 <!--end::Title-->
             </div>
             <!--end::Page title-->
             <!--begin::Actions-->
             <div class="d-flex align-items-center gap-2 gap-lg-3">

                 <a href="dashboard.php?action=notifications" class="btn btn-light btn-sm">
                     <li class="fa fa-arrow-left"></li>&nbsp; Notifications
                 </a>
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

                 <div class="card">
                     <div class="card-header">

                         <div class="d-flex justify-content-between row my-7">

                             <div>
                                 <label class="form-label fs-2 mb-7" id="noti_title"> </label>
                             </div>
                             <div>
                                 <label class="form-label "><span class="badge badge-secondary" id="noti_date"></span> </label>
                             </div>
                         </div>
                     </div>
                     <div class="card-body" id="noti_body">

                         <label class="form-label fs-6" id="noti_msg"> </label>
                     </div>


                 </div>
                 <div class="mt-7">
                     <form action="#" method="post">
                         <input type="hidden" name="noti_id_" value="" id="noti_id_id">

                         <input class="btn btn-danger btn-sm" name="delete_notification" type="submit" value="Delete">


                     </form>
                 </div>





             </div>
             <!--end::Modals-->
         </div>
         <!--end::Container-->
     </div>
     <!--end::Post-->
 </div>






 <script>
     $(document).ready(function() {
         <?php
            if (isset($_GET['noti_id'])) {
                $noti_id = $_GET['noti_id'];
            } else {
                $noti_id = 0;
            }
            $notifications_obj->noti_data($noti_id)
            ?>

         <?php

            $global_transaction->company_data();
            ?>

         document.getElementById('noti_id_id').value = noti_data.id;
         document.getElementById('noti_title').innerHTML = noti_data.title;
         document.getElementById('noti_date').innerHTML = noti_data.date;;
         document.getElementById('noti_msg').innerHTML = noti_data.msg;
     });
 </script>