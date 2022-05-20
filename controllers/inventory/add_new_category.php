<?php



if (isset($_POST['add_new_category']) and isset($_POST['category_name']) and isset($_POST['status'])) {

    //Rerquired Vars ***************


    $category_name = $_POST['category_name'];
    $status = $_POST['status'];

    // Optional **************
    $parent_category = 0;
    if (isset($_POST['category_id'])) {
        $parent_category = $_POST['category_id'];
    }
    $category_alias = '';
    if (isset($_POST['category_alias'])) {
        $category_alias = $_POST['category_alias'];
    }

    $category_description = '';
    if (isset($_POST['category_description'])) {
        $category_description = $_POST['category_description'];
    }

    $file = '';
    if (isset($_FILES['image'])) {
        $file = $_FILES['image'];
    }



    $result = $inventory_obj->add_new_category($category_name, $category_description, $category_alias, $parent_category, $file);

 
    if ($result) {
        // successfully added new category
        $transaction->sweet_alert('Success!',  'Successfully added new category', 'success', 'Ok', 'btn btn-primary');
    } else {
        $transaction->sweet_alert('Error!',  'Error adding new category', 'error', 'Ok', 'btn btn-primary');
        // echo "Error on insert into category";
    }
}
