<tr>
	<!--begin::Product-->
	<td>
        <!-- hidden input order_product_id -->
        <input type="number" name="id[]" style="display: none;" value="<?php echo $row['id']  ?>">
        <!-- end of hidden input -->
		<div class="d-flex align-items-center">
			<!--begin::Thumbnail-->
			<a href="/metronic8/demo19/../demo19/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px"> <span class="symbol-label" style="background-image:url(uploads/products-images/<?php echo $row['product_image']  ?>);"></span> </a>
			<!--end::Thumbnail-->
			<!--begin::Title-->
			<div class="ms-5"> <span class="fw-bolder text-gray-600 text-hover-primary"><?php echo $row['product_name']  ?> </span>
				<!-- <div class="fs-7 text-muted">Delivery Date: 04/04/2022</div> -->
			</div>
			<!--end::Title-->
		</div>
	</td>
	<!--end::Product-->
	<!--begin::SKU-->
	<td class="text-end"><?php echo $row['product_code']  ?></td>
	<!--end::SKU-->
	<!--begin::Quantity-->
	<td class="text-end"><?php echo $row['quantity']  ?></td>
	<!--end::Quantity-->
	<!--begin::S Quantity-->
	<td class="text-end ">
		<input name="product_quantity[]" type="number" class="form-control form-control-solid h-50px w-100px my-2 m-auto" value=""> </td>
	<!--end::S Quantity-->
	<!--begin::Price-->
	<td class="text-end">$<?php echo $row['price'];  ?></td>
	<!--end::Price-->
	<!--begin::Total-->
	<td class="text-end">$<?php
    $subtotal = $subtotal + ($row['quantity'] * $row['price']);
    // concatinate tax
    $tax_amount = $tax_amount + (($row['quantity'] * $row['price']) * 0.01);
     echo round($row['quantity'] * $row['price'], 2);   ?></td>
	<!--end::Total-->
</tr>