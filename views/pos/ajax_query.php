 

<?php

require '../../includes/global/controller_auto_class_loader.php';


if (isset($_POST['query_product_liq'])) {

    echo  '  <div class="col-4">';
    echo  '<label class="form-label  fs-8 fw-bolder">Product Brand</label>';
    echo $populate_select_obj->print_select_without_id_desc('description', 'product_brands', ' name="prod_brands" id="prod_brands_id"   data-control="select2"  class="form-select   form-select-sm"   data-placeholder="Select an option" ', "");
    echo '  </div>';


    echo  '  <div class="col-4">';
    echo  ' <label class="form-label  fs-8 fw-bolder">Product Flavours</label>';
    echo $populate_select_obj->print_select_without_id_desc('description', 'product_flavours', ' name="prod_flavours" id="prod_flavours_id"   data-control="select2"  class="form-select  form-select-sm "  data-placeholder="Select an option"', "");
    echo '  </div>';


    echo  '  <div class="col-4">';
    echo  ' <label class="form-label  fs-8 fw-bolder">Product Strength</label>';
    echo $populate_select_obj->print_select_without_id_desc('description', 'product_strength', ' name="prod_strength" id="prod_strength_id"   data-control="select2"  class="form-select  form-select-sm "  data-placeholder="Select an option"', "");
    echo '  </div>';
}

if (isset($_POST['query_product_dev'])) {

    echo  '  <div class="col-4">';
    echo  '<label class="form-label  fs-8 fw-bolder">Product Brand</label>';
    echo $populate_select_obj->print_select_without_id_desc('description', 'product_brands_devices', ' name="prod_brands" id="prod_brands_id"   data-control="select2"  class="form-select  form-select-sm "  data-placeholder="Select an option"', "");
    echo '  </div>';


    echo  '  <div class="col-4">';
    echo  ' <label class="form-label  fs-8 fw-bolder">  Colour</label>';
    echo $populate_select_obj->print_select_without_id_desc('description', 'product_colour', ' name="prod_colour" id="prod_flavours_id"   data-control="select2"  class="form-select  form-select-sm "  data-placeholder="Select an option"', "");
    echo '  </div>';


    echo  '  <div class="col-4">';
    echo  ' <label class="form-label  fs-8 fw-bolder">  Model</label>';
    echo $populate_select_obj->print_select_without_id_desc('description', 'product_model', ' name="prod_model" id="prod_strength_id"  data-control="select2"   class="form-select  form-select-sm "  data-placeholder="Select an option"', "");
    echo '  </div>';
}

if (isset($_POST['query_product_acc'])) {

    echo '<p>Not Available</p>';
}
