
<?php


if (isset($_POST['add_customer'])) {

    //get varibales from the form
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $nationality = $_POST['nationality'];
    $DOB = $_POST['birth_date'];
    $AddresslLine1 = $_POST['address_line1'];
    $AddresslLine2 = $_POST['address_line2'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $MobileNumber = $_POST['mobile_number'];
    $company_name = $_POST['company_name'];
    $national_id = $_POST['national_id'];
    $email = $_POST['email'];



    $results = $customers_obj->add_customer_details($company_name, $first_name, $last_name, $nationality, $national_id, $DOB, $gender, $AddresslLine1, $AddresslLine2, $city, $country, $email, $MobileNumber);

    if ($results == -1) {
        $_SESSION['sweet_alert_obj'] = array('title' => 'Error', 'msg' => 'There is an existing customer with the same national ID Number', 'icon' => 'error', 'btn_txt' => 'Ok', 'btn_style' => 'btn btn-primary',);
        echo '<script>history.back()</script>';
    } elseif ($results == -2) {

        $_SESSION['sweet_alert_obj'] = array('title' => 'Error', 'msg' => 'There is an existing customer with the same Email', 'icon' => 'error', 'btn_txt' => 'Ok', 'btn_style' => 'btn btn-primary',);
        echo '<script>history.back()</script>';
    } elseif (!$results) {
        $_SESSION['sweet_alert_obj'] = array('title' => 'Error', 'msg' => 'Error occured adding customer', 'icon' => 'error', 'btn_txt' => 'Ok', 'btn_style' => 'btn btn-primary',);
        echo '<script>history.back()</script>';
    } else {
        $_SESSION['sweet_alert_obj'] = array('title' => 'Successful', 'msg' => 'Successfully added new customer', 'icon' => 'success', 'btn_txt' => 'Ok', 'btn_style' => 'btn btn-primary',);

        $page_redirect->redirect_page("customers.php?action=cutomer_details&c_id=$results");
    }
}





?>