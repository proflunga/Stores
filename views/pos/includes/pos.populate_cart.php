<tr>

    <?php
    $item_description  = $prod_name . ' (' . $prod_quantity . ' x $' . $prod_price . ')';
    $line_total_ = $prod_quantity * $prod_price;

    ?>
    <td><?php echo $item_description; ?></td>

    <td class="fw-bolder"><?php echo '$' . $line_total_; ?></td>

    <td class="px-5 text-hover-primary">
        <a href="pos.php?pos_c_id=
                <?php if (isset($prod_cart_id)) {
                    echo $prod_cart_id;
                } ?>">
            <li class="fa fa-minus text-danger"></li>
        </a>
    </td>
</tr>