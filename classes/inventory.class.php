




<?php

class inventory extends data_object

{
    private $db_query_obj;
    private $global_transaction;
    private $user_id;
    private $data_object;
    private $date;


    public function __construct($user_id, $db_query_obj, $global_transaction, $data_object)
    {
        $this->db_query_obj = $db_query_obj;
        $this->user_id = $user_id;
        $this->data_object = $data_object;
        $this->global_transaction = $global_transaction;
        $this->date = date('Y-m-d H:i:s');
    }


    // view methods **********************************
    public function inv_list_products($table_id)
    {

        $table_data = ' 
        
              
            employee_data += `<td class="fs-7 text-black">
                <div class="d-flex align-items-center">
                   <div class="symbol symbol-50px">
                        <span class="symbol-label" style="background-image:url(assets/media/products/${value.product_image });"></span> 
                   </div>
                    
                
                    <div class="ms-5"> 
                        <p class="   fw-bolder" data-kt-ecommerce-product-filter="product_name">
                            ${value.product_name }
                        </p> 
                    </div>
                </div>
            </td>`;  
            
            employee_data += `<td class="text-end pe-0"> <span class="fw-bolder"> ${value.product_code }</span> </td>`;   
            
            employee_data += `<td class="text-end pe-0"> <span class="fw-bolder">${value.category_name } </span> </td>`;      
            
            if (!value . product_quantity) {
                employee_data += `<td class="text-end pe-0" data-order="44"> <span class="fw-boldest fs-5 ms-3  text-danger">${value.product_quantity }</span> </td>`;   
                  ;
            } else {
                employee_data += `<td class="text-end pe-0" data-order="44"> <span class="fw-boldest fs-5 ms-3  text-success">${value.product_quantity }</span> </td>`;   
                 ;
            }

            employee_data += `<td class="text-end pe-0"> <span class="fw-bolder text-dark">${value.product_price} </span> </td>`;         
            
            employee_data += `
                
                <td class="text-end "> 
                    <span class="text-hover-primary"><li class="fa fa-edit"></li><a href="inventory.php?action=edit_product&p_id=${value.id}" class="menu-link px-1"> Edit</a></span>


                    <span class="text-hover-primary"><li class="fa fa-edit"></li><a href="inventory.php?action=receive_products&p_id=${value.id}" class="menu-link px-1"> Receive </a></span>
                    <span class="text-hover-primary"><li class="fa fa-edit"></li><a href="inventory.php?action=variance_analysis&p_id=${value.id}" class="menu-link px-1"> Variance </a></span>
                    <span class="text-hover-primary"><li class="fa fa-edit"></li><a href="inventory.php?action=single_prod_stats&p_id=${value.id}" class="menu-link px-1"> Product Stats </a></span>
                    
                    <span class="text-hover-danger"><li class="fa fa-trash"></li><a href="inventory.php?action=delete_product&p_id=${value.id}" class="menu-link px-1"> Delete</a></span>
                                
                           
                                
                            
                                
                           
                                
                            
                                
                           
                    
                </td>
            `;  
        

      ';


        $sql = "SELECT categories.category_name, products.product_name, products.id ,products.product_code, products.product_price, products.product_quantity, products.product_image FROM `products` INNER JOIN categories ON categories.id = products.category_id;";

        $this->data_object->data_query($sql, $table_id, $table_data);
    }


    public function inv_list_categories($table_id)
    {

        $table_data = ' 
        
            employee_data += `<td class="   fs-7  ">${value.id}</td>`;  

              employee_data += `<td class="   fs-7  ">
                <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="inventory.php?action=edit_product&amp;p_id=30" class="symbol symbol-50px"> <span class="symbol-label" style="background-image:url(assets/media/categories/${value.image });"></span> </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                        <!--begin::Title-->
                        <p class="   fw-bolder" data-kt-ecommerce-product-filter="product_name">
                            ${value.category_name } 
                        </p> 
                    </div>
                </div>
             </td>`;

             

            employee_data += `<td class="text-gray-600   fs-7 fw-bold">${value.category_alias }</td>`;

            let styled_status = ``; 

            if(value.status == 1)
            {
                  styled_status = `<span class="badge badge-light-success">Published</span>`;
            }
            else if(value.status == 0)
            {                
                styled_status = `<span class="badge badge-light-danger">Inactive</span>`;
            }
            else
            {
                styled_status = `<span class="badge badge-light-warning">Published</span>`;
            }

            employee_data += `<td>${styled_status }</td>`;  

            employee_data += `<td class=" text-hover-primary fs-7  ">
       
            <li class="fa fa-edit"></li>  <a href="inventory.php?action=edit_category&cat_id=${value.id }"> Edit   </a> 
         

            </td>`; 

      ';

        //  employee_data += `<td><a href="inventory.php?action=edit_category&c_id=${value.id }">View Category</a></td>`; 

        $sql = 'SELECT categories.category_name, categories.id, categories.category_alias,categories.image, categories.status FROM categories  ';

        $this->data_object->data_query($sql, $table_id, $table_data);
    }

    public function fetch_graph_data_products()
    {
        $date = substr($this->date, 0, 7);

        $date_start = new DateTime($date);
        $date_start = $date_start->modify('-5 month');
        $date_start = $date_start->format('Y-m');

        $prod_data = '';
        $prod_cat = '';



        // **************
        //start range date calculator
        $start    = new DateTime("$date_start");
        $start->modify('first day of this month');
        $end      = new DateTime("$date");
        $end->modify('first day of next month');
        $interval = DateInterval::createFromDateString('1 month');
        $period   = new DatePeriod($start, $interval, $end);


        //diplasy all daates z
        foreach ($period as $dt) {
            $dt->format("Y-m");
            $year_ =   $dt->format('Y');
            $month_ =   $dt->format('m');
            $month_year = $year_ . '-' . $month_;

            $sql = "SELECT SUM(pos_sales_products.quantity) as sum_ FROM pos_sales_products INNER JOIN pos_sale on pos_sales_products.pos_sale_id = pos_sale.id WHERE pos_sale.date LIKE '$month_year%'";


            $result = $this->db_query_obj->sql_qury("$sql");

            if (!$result) {
                //error

            } else {
                //Inserted
                $row = mysqli_fetch_assoc($result);
                $item_sum = $row['sum_'];

                $month_name = $this->global_transaction->month_from_number($month_);
                $month_year = $month_name . ' - ' . $year_;

                if ($item_sum == null) {
                    $item_sum = 0;
                }

                if ($prod_data == '') {
                    $prod_data .= $item_sum;
                    $prod_cat .= "'$month_year'";
                } else {
                    $prod_data .= ',' . $item_sum;
                    $prod_cat .= ',' . "'$month_year'";
                }
            }
        }
        // **************











        echo "
            let prod_data = [$prod_data];
            let prod_categories = [$prod_cat];
        ";
    }


    public function fetch_graph_data_individual_products($prod_id)
    {
        $date = substr($this->date, 0, 7);

        $date_start = new DateTime($date);
        $date_start = $date_start->modify('-11 month');
        $date_start = $date_start->format('Y-m');

        $prod_data = '';
        $prod_cat = '';



        // **************
        //start range date calculator
        $start    = new DateTime("$date_start");
        $start->modify('first day of this month');
        $end      = new DateTime("$date");
        $end->modify('first day of next month');
        $interval = DateInterval::createFromDateString('1 month');
        $period   = new DatePeriod($start, $interval, $end);


        //diplasy all daates z
        foreach ($period as $dt) {
            $dt->format("Y-m");
            $year_ =   $dt->format('Y');
            $month_ =   $dt->format('m');
            $month_year = $year_ . '-' . $month_;

            $sql = "SELECT SUM(pos_sales_products.quantity) as sum_ FROM pos_sales_products INNER JOIN pos_sale on pos_sales_products.pos_sale_id = pos_sale.id WHERE pos_sale.date LIKE '$month_year%' and pos_sales_products.product_id = $prod_id";

            $result = $this->db_query_obj->sql_qury("$sql");

            if (!$result) {
                //error

            } else {
                //Inserted
                $row = mysqli_fetch_assoc($result);
                $item_sum = $row['sum_'];

                $month_name = $this->global_transaction->month_from_number($month_);
                $month_year = $month_name . ' - ' . $year_;

                if ($item_sum == null) {
                    $item_sum = 0;
                }

                if ($prod_data == '') {
                    $prod_data .= $item_sum;
                    $prod_cat .= "'$month_year'";
                } else {
                    $prod_data .= ',' . $item_sum;
                    $prod_cat .= ',' . "'$month_year'";
                }
            }
        }
        // **************











        echo "
            let prod_data = [$prod_data];
            let prod_categories = [$prod_cat];
        ";
    }




    public function change_category_status($var)
    {

        $cat_id = $_POST['cat_id'];
        $product_status = $_POST['status'];

        $sql = "UPDATE categories SET categories.status = $product_status WHERE categories.id = $cat_id";

        $result = $this->db_query_obj->sql_update_qury("$sql");

        if (!$result) {


            return  0;
        } else {
            return $result;
        }
    }

    public function change_prod_status($var)
    {

        $prod_id = $_POST['prod_id'];
        $product_status = $_POST['product_status'];

        $sql = "UPDATE products SET products.status_published = $product_status WHERE products.id = $prod_id";
        $result = $this->db_query_obj->sql_update_qury("$sql");

        if (!$result) {


            return  0;
        } else {
            return $result;
        }
    }


    public function remove_thumbnail($var)
    {

        $prod_id = $_POST['prod_id'];

        $sql = "SELECT products.id FROM products WHERE products.product_image = 'default.jpg' and products.id = $prod_id";
        $result = $this->db_query_obj->sql_qury("$sql");

        if (!$result) {
            $sql = "UPDATE products SET products.product_image = 'default.jpg' WHERE products.id = $prod_id";
            $result = $this->db_query_obj->sql_update_qury("$sql");

            return  $result;
        } else {
            return -1;
        }
    }

    public function remove_category_thumbnail($var)
    {

        $cat_id = $_POST['cat_id'];

        $sql = "SELECT categories.id FROM categories WHERE categories.image = 'default.jpg' and categories.id = $cat_id";
        $result = $this->db_query_obj->sql_qury("$sql");



        if (!$result) {
            $sql = "UPDATE categories SET categories.image = 'default.jpg' WHERE categories.id = $cat_id";
            $result = $this->db_query_obj->sql_update_qury("$sql");

            return  $result;
        } else {
            return -1;
        }
    }

    public function  upload_category_image($file, $cat_id)
    {

        if (empty(!$file)) {
            $errors = array();
            // $file_name = $file['name'];
            $file_size = $file['size'];
            $file_tmp = $file['tmp_name'];
            // $file_type=$file['type'];

            $explode_var = explode('.', $file['name']);
            $file_ext = strtolower(end($explode_var));

            $extensions = array("jpeg", "jpg", "png");

            if (in_array($file_ext, $extensions) === false) {
                //$errors[]="extension not allowed, please choose a JPEG or PNG file.";
                $return_result = -1;
            } elseif ($file_size > 2097152) {
                //$errors[]='File size must be excately 2 MB';
                $return_result = -2;
            } else {


                $product_image_name = $cat_id . '.' . $file_ext;
                move_uploaded_file($file_tmp, "assets/media/categories/" . $product_image_name);

                $sql = "UPDATE categories SET categories.image = '$product_image_name' WHERE categories.id = $cat_id";

                $result = $this->db_query_obj->sql_update_qury("$sql");


                if (!$result) {
                    return  0;
                } else {
                    return $result;
                }
            }
        }
    }

    public function  upload_product_image($file, $prod_id)
    {
        if (empty(!$file)) {
            $rand_ = rand(1000, 9999);
            $errors = array();
            // $file_name = $file['name'];
            $file_size = $file['size'];
            $file_tmp = $file['tmp_name'];
            // $file_type=$file['type'];

            $explode_var = explode('.', $file['name']);
            $file_ext = strtolower(end($explode_var));

            $extensions = array("jpeg", "jpg", "png");

            if (in_array($file_ext, $extensions) === false) {
                //$errors[]="extension not allowed, please choose a JPEG or PNG file.";
                $return_result = -1;
            } elseif ($file_size > 2097152) {
                //$errors[]='File size must be excately 2 MB';
                $return_result = -2;
            } else {


                $product_image_name = $prod_id . '-' . $rand_ . '.' . $file_ext;
                move_uploaded_file($file_tmp, "assets/media/products/" . $product_image_name);

                $sql = "UPDATE products SET products.product_image = '$product_image_name' WHERE products.id = $prod_id";
                $result = $this->db_query_obj->sql_update_qury("$sql");


                if (!$result) {
                    return  0;
                } else {
                    return $result;
                }
            }
        }
    }



    public function update_thumbnail($var)
    {
        $return_result = -3;

        if (isset($_FILES['product_image'])) {

            $prod_id = $_POST['prod_id'];
            $file = $_FILES['product_image'];

            $return_result = $this->upload_product_image($file, $prod_id);
        }

        return $return_result;
    }


    public function update_cat_for_cat($var)
    {
        $category_id = $_POST['category_id'];
        $cat_id = $_POST['cat_id'];

        $sql = "UPDATE categories SET categories.parent_category = $category_id WHERE categories.id = $cat_id";
        $result = $this->db_query_obj->sql_update_qury("$sql");

        if (!$result) {
            return  0;
        } else {
            return $result;
        }
    }
    public function update_category($var)
    {
        $category_id = $_POST['category_id'];
        $prod_id = $_POST['prod_id'];

        $sql = "UPDATE products SET products.category_id = $category_id WHERE products.id = $prod_id";
        $result = $this->db_query_obj->sql_update_qury("$sql");

        if (!$result) {
            return  0;
        } else {
            return $result;
        }
    }



    public function  update_cat_gen_info($_var)
    {
        $category_name = $_POST['category_name'];
        $category_alias = $_POST['category_alias'];
        $category_description = $_POST['category_description'];

        $cat_id = $_POST['cat_id'];

        $sql = "UPDATE categories SET categories.category_name = '$category_name', categories.category_alias = '$category_alias', categories.category_description = '$category_description' WHERE categories.id = $cat_id";

        $result = $this->db_query_obj->sql_update_qury("$sql");

        if (!$result) {
            return  0;
        } else {
            return $result;
        }
    }



    public function  update_Product_general_info($_var)
    {
        $product_name = $_POST['product_name'];
        $product_code = $_POST['product_code'];
        $product_description = $_POST['product_description'];

        $prod_id = $_POST['prod_id'];

        $sql = "UPDATE products SET products.product_name = '$product_name', products.product_code = '$product_code', products.product_description = '$product_description' WHERE products.id = $prod_id";

        $result = $this->db_query_obj->sql_update_qury("$sql");

        if (!$result) {
            return  0;
        } else {
            return $result;
        }
    }

    public function  update_pricing($_var)
    {

        $product_price = $_POST['product_price'];
        $product_discount = $_POST['product_discount'];

        if (isset($_POST['tax_id'])) {
            $tax_id = $_POST['tax_id'];
        } else {
            $tax_id = 0;
        }


        $prod_id = $_POST['prod_id'];

        $sql = "UPDATE products SET products.product_price = '$product_price', products.product_discount = '$product_discount', products.tax_id = '$tax_id' WHERE products.id = $prod_id";

        $result = $this->db_query_obj->sql_update_qury("$sql");

        if (!$result) {
            return  0;
        } else {
            return $result;
        }
    }



    public function add_new_product($cat_id, $product_name, $product_description, $product_price, $product_discount, $product_code, $product_quantity,   $status_published, $file)
    {
        $r_result = 0;
        $sql = "SELECT products.id FROM products WHERE products.product_code = '$product_code';";
        $result = $this->db_query_obj->sql_qury("$sql");



        if ($result) {

            $r_result = -2;
        } else {
            $user_id = $this->user_id;



            $sql = "INSERT INTO `products`(`id`, `category_id`,`product_name`, `product_description`,   `product_price`,   `product_discount`,  `product_code`, `product_quantity`,    `user_id`, `status_published` ) VALUES ( NULL,'$cat_id', '$product_name', '$product_description' ,$product_price ,$product_discount,'$product_code' ,$product_quantity, $user_id ,$status_published)";




            $result_last_insert = $this->db_query_obj->sql_insert_qury("$sql");
            if (!$result_last_insert) {
                //error
                $r_result = 0;
            } else {
                $this->upload_product_image($file, $result_last_insert);
                $r_result =  $result_last_insert;
            }
        }




        return  $r_result;
    }


    public function category_data($cat_id)
    {
        $sql = "SELECT categories.id, categories.category_name, categories.category_description, categories.category_alias, categories.parent_category, categories.image, categories.status FROM categories WHERE categories.id = $cat_id;";


        $this->data_object->query_single_object($sql);
    }
    public function product_data($prod_id)
    {
        $sql = "SELECT products.category_id, products.product_name, products.product_description, products.product_image, products.product_price, products.product_discount, products.tax_id, products.product_code, products.product_quantity, products.status_published FROM products WHERE products.id = $prod_id;";

        $this->data_object->query_single_object($sql);
    }

    public function product_data_recieve($prod_id)
    {
        $sql = "SELECT  products.id,   products.product_name,    products.product_code, products.product_quantity  FROM products WHERE products.id = $prod_id;";

        $this->data_object->query_single_object($sql);
    }

    public function product_data_delete($prod_id)
    {
        $sql = "SELECT  products.id, products.product_name,    products.product_code  FROM products WHERE products.id = $prod_id;";

        $this->data_object->query_single_object($sql);
    }



    public function  delete_product($prod_id)
    {
        $sql = "DELETE FROM products  WHERE products.id = $prod_id";
        $result = $this->db_query_obj->sql_delete_qury("$sql");
        return $result;
    }


    public function  variance_update($_var)
    {
        $product_quantity = $_POST['product_quantity'];
        $prod_id = $_POST['prod_id'];



        $sql = "UPDATE products SET products.product_quantity = '$product_quantity'  WHERE products.id = $prod_id";

        $result = $this->db_query_obj->sql_update_qury("$sql");

        if (!$result) {
            return  0;
        } else {
            return $result;
        }
    }



    public function  recieve_product($_var)
    {
        $product_quantity = $_POST['product_quantity'];
        $prod_id = $_POST['prod_id'];

        $sql = "SELECT products.product_quantity FROM products WHERE products.id = $prod_id ";
        $result = $this->db_query_obj->sql_qury("$sql");



        if (!$result) {
            //error
            return 0;
        } else {
            //Inserted
            $row = mysqli_fetch_assoc($result);
            $existing_quantity = $row['product_quantity'];

            $updated_quantity = $existing_quantity + $product_quantity;

            $sql = "UPDATE products SET products.product_quantity = '$updated_quantity'  WHERE products.id = $prod_id";

            $result = $this->db_query_obj->sql_update_qury("$sql");

            if (!$result) {
                return  0;
            } else {
                return $result;
            }
        }
    }

    // add new category
    public function add_new_category($category_name, $category_description, $category_alias, $parent_category = 0, $file)
    {
        $user_id = $this->user_id;

        if ($parent_category == 0) {
            $sql = "INSERT INTO `categories`(`category_name`, `category_description`, `category_alias`, `user_id`) VALUES ('$category_name', '$category_description', '$category_alias', '$user_id')";
        } else {
            $sql = "INSERT INTO `categories`(`category_name`, `category_description`, `category_alias`, `parent_category`, `user_id`) VALUES ('$category_name', '$category_description', '$category_alias', '$parent_category', '$user_id')";
        }



        $result = $this->db_query_obj->sql_insert_qury("$sql");


        if (!$result) {
            //error
            return 0;
        } else {

            $this->upload_category_image($file, $result);
            return $result;
        }
    }
}


?>


