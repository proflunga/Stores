
<?php


if (isset($_POST['create_admin_user'])) {

    //get varibales from the form
    $title = $_POST['title'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $marital_status = $_POST['marital_status'];
    $gender = $_POST['gender'];
    $nationality = $_POST['nationality'];
    $citizenship = $_POST['citizenship'];
    $DOB = $_POST['birth_date'];
    $AddresslLine1 = $_POST['address_line1'];
    $AddresslLine2 = $_POST['address_line2'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $MobileNumber = $_POST['mobile_number'];
    $telephone = $_POST['telephone_number'];
    $drivers_licence = $_POST['drivers_licence'];
    $passport = $_POST['passport_number'];
    $national_id = $_POST['national_id'];
    $user_group = $_POST['user_group'];
    $access_level_id = $_POST['access_level_id'];




    // user account details
    $username = $_POST['username'];
    $email = $_POST['email'];
    $user_branches = $_POST['user_branches'];

    $individuals_id;










    //check if a person already exists


    if (isset($_POST['national_id'])) {
        if ($transaction->existance_finder('individuals', 'id', 'national_id', $national_id)) {

            $individuals_id = $transaction->existance_finder('individuals', 'id', 'national_id', $national_id);
            goto register_user;
        } else {
        }
    }

    // validate drivers license

    if (isset($_POST['drivers_licence']) and $drivers_licence != "") {
        if ($transaction->existance_finder('individuals', 'id', 'drivers_licence', $drivers_licence)) {

            $individuals_id = $transaction->existance_finder('individuals', 'id', 'drivers_licence', $drivers_licence);
            goto register_user;
        } else {
        }
    }

    // validate passport

    if (isset($_POST['passport_number']) and $passport != "") {
        if ($transaction->existance_finder('individuals', 'id', 'passport_number', $passport)) {

            $individuals_id = $transaction->existance_finder('individuals', 'id', 'passport_number', $passport);
            goto register_user;
        } else {
        }
    }

    //register indivu=iduals
    //call function from transaction
    $ssn = $transaction->generate_ssn_algorithm();

    $individuals_id = $transaction->register_individual($ssn, $national_id, $title, $first_name, $middle_name, $last_name, $marital_status, $gender, $nationality, $citizenship, $DOB, $AddresslLine1, $AddresslLine2, $city, $country, $MobileNumber, $telephone, $email, $drivers_licence, $passport, 0, 0);

    //    insert into individuals status table
    $table = "individuals_status";
    $column = "individuals_id";
    $notes =  "Register Individual";

    $status = 1;
    $status_results = $transaction->_status_table($individuals_id, $table, $column, $notes, $status);
    if (!$status_results) {
        // error insert into individual table
        // echo '<script> alert("Error inserting into individual status"); window.location.href = "../../usermanagement.php?action=create_admin_user"; </script>';
        // exit();
        $transaction->sweet_alert("Error!", "Error occured registering new admin", 'danger', 'Ok', 'btn btn-primary');
    }



    register_user:
    $results = $transaction->register_user($username, $email, $user_branches, $individuals_id, $access_level_id, $user_group);

    if (!$results) {
        // error echo 
        //    echo '<script> alert("Error inserting into admin table"); window.location.href = "../../usermanagement.php?action=create_admin_user"; </script>';
        //    exit();
        $transaction->sweet_alert("Error!", "Error occured registering new admin", 'danger', 'Ok', 'btn btn-primary');
    }

    $transaction->send_auth_to_admin($results);


    // insert insert into user_priviledges
    $user_previledge_results = $transaction->set_user_previledges($results);
    //error
    if (!$user_previledge_results) {
        $transaction->sweet_alert("Error!", "Error occured registering new admin", 'danger', 'Ok', 'btn btn-primary');
        // echo '<script> alert("Error inserting into previledges"); window.location.href = "../../usermanagement.php?action=create_admin_user"; </script>';
        // exit();

    }


    // insert into admin status
    $table_admin = "users_admin_status";
    $column_admin = "users_admin_id";
    $notes_admin =  "Register Admin";
    $admin_status = 1;
    $admin_id = $results;

    $status = 1;
    $admin_status_results = $transaction->_status_table($admin_id, $table_admin, $column_admin, $notes_admin, $admin_status);
    if (!$admin_status_results) {

        $transaction->sweet_alert("Error!", "Error occured registering new admin", 'danger', 'Ok', 'btn btn-primary');

        // echo '<script> alert("Error inserting into admin status"); window.location.href = "../../usermanagement.php?action=create_admin_user"; </script>';
        // exit();
    }


    // echo '<script> alert("Successfully registered new admin"); window.location.href = "../../usermanagement.php?action=admin_new_accounts"; </script>';
    //     exit();

    $transaction->sweet_alert("Successful!", "Successfully registered new admin", 'success', 'Ok', 'btn btn-primary');
}





?>