<?php


function page_validation($user_id, $db_query_obj, $page_id)
{
    $flag = 0;

    $sql = "SELECT system_modules.code FROM system_modules INNER JOIN user_permissions on user_permissions.system_modules = system_modules.id INNER JOIN user_group ON user_group.id = user_permissions.user_group_id INNER JOIN users_admin on users_admin.user_group = user_group.id WHERE users_admin.id = $user_id;";

    $result = $db_query_obj->sql_qury("$sql");

    if (!$result) {
        //error

    } else {
        //Inserted
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['code'] == $page_id) {
                $flag = 1;
            }
        }
    }


    if ($flag == 0) {

        echo '<script>window.location.href="error.html"</script>';
        exit();
    }
}
