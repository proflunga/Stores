
<?php

if (isset($_POST['admin_main_details']) and isset($_POST['u_id'])) {

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
    $email = $_POST['email'];

    //  individual id of the userf
    $user_id = $_POST['client_id'];



    //update individual information

    $management_obj->update_individual($user_id, $title, $first_name, $middle_name, $last_name, $marital_status, $nationality, $citizenship, $AddresslLine1, $AddresslLine2, $city, $country, $MobileNumber, $telephone, $email, $drivers_licence, $passport);


    // succcessfully updated the information
    $management_obj->sweet_alert("Update User Details", "Successfully Updated User Main information", 'success', 'Ok', 'btn btn-primary');
} else if (isset($_POST['user_account_information']) and isset($_POST['u_id'])) {
    $user_id = $_POST['u_id'];
    $user_group = $_POST['user_group'];
    $access_level_id = $_POST['access_level_id'];
    // user account details
    $username = $_POST['username'];
    $email = $_POST['email'];


    // update user information
    $result = $management_obj->update_users($user_id, $username, $email,   $user_group, $access_level_id);
    if (!$result) {
        // successfully update information
        $management_obj->sweet_alert("Failed", "Update Failed Try again later", 'error', 'Ok', 'btn btn-primary');
    } else {
        // successfully update information
        $management_obj->sweet_alert("Success", " User Account information Updated", 'success', 'Ok', 'btn btn-primary');
    }
}





?>