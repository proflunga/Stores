<!--begin::Table row-->
<tr>
	<!--begin::Checkbox-->

	<!--begin::Category=-->
	<td>
		<div class="d-flex align-items-center">
			<!--begin::Thumbnail-->
			<a href="inventory.php?action=edit_product&amp;p_id=1" class="symbol symbol-50px"> <span class="symbol-label" style="background-image:url(assets/media/products/<?php echo $row['product_image'] ?>);"></span> </a>
			<!--end::Thumbnail-->
			<div class="ms-5">
				<!--begin::Title-->
				<a href="inventory.php?action=edit_product&amp;p_id=1" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">
					<?php echo $row['product_name'] ?> </a>
				<!--end::Title-->
			</div>
		</div>
	</td>
	<!--end::Category=-->
	<!--begin::SKU=-->
	<td class=""> <span class="fw-bolder"><?php echo $row['product_code'] ?></span> </td>
	<!--end::SKU=-->
	<!--begin::Qty=-->
	<td class="" data-order="44"> <span class="fw-bolder ms-3"><?php echo $row['product_quantity'] ?></span> </td>
	<!--end::Qty=-->
	<!--begin::Price=-->
	<form action="#" method="post">
		<td class=""> <span class="fw-bolder text-dark">$ <?php echo $row['product_price'] ?></span> </td>
		<!--end::Price=-->

		<td>
			<input required type="number" class="form-control" name="quantity" value="1" min="0">
		</td>
		<!--begin::Action=-->
		<td class="text-end">


			<input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">

			<button name="add_to_cart" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
				<li class="fa fa-plus"></li> Add to Cart
			</button>

		</td>
		<!--end::Action=-->
	</form>
</tr>
<!--end::Table row-->