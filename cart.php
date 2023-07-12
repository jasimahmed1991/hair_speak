<?php
require('top.php');
?>
<!-- main -->
<main>
    <!-- breadcrumbs -->
    <div class="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="index.php">Home /</a></li>
                <li><a href="products.php">Products /</a></li>
                <li>Cart</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumbs ends -->
    <section class="cart-section">
        <div class="container cart-container">
            <div class="table-responsive">
                <table class="cart-table">
                    <tr>
                        <th>PRODUCTS</th>
                        <th>NAME OF PRODUCTS</th>
                        <th>PRICE</th>
                        <th>QUANTITY</th>
                        <th>TOTAL</th>
                        <th>REMOVE</th>
                    </tr>
                    <?php
                    if (isset($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $key => $val) {
                            $productArr = get_product($con, '', '', $key);
                            $pname = $productArr[0]['name'];
                            $mrp = $productArr[0]['mrp'];
                            $price = $productArr[0]['price'];
                            $image = $productArr[0]['image'];
                            $qty = $val['qty'];
                    ?>
                            <tr>
                                <td><img src="<?php echo PRODUCT_IMAGE_SITE_PATH . $image ?>" alt="product">
                                </td>
                                <td><?php echo $pname ?> : 25 Medium</td>
                                <td>Rs - <?php echo $price ?></td>
                                <td><input type="number" min="1" class="quantity-input" name="" value="<?php echo $qty ?>" id="<?php echo $key ?>qty"> <br>
                                    <button class="update-btn" onclick="manage_cart('<?php echo $key ?>','update')">Update</button>
                                </td>
                                <td>Rs - <?php echo (int)$qty * (int)$price ?></td>
                                <td><button onclick="manage_cart('<?php echo $key ?>','remove')"><i class="fa-solid fa-trash"></i></button></td>
                            </tr>
                    <?php }
                    } ?>
                </table>

            </div>
            <div class="cart-btns">
                <button type="button">CONTINUE SHOOPING</button>
                <a href="checkout.php" class="btn-1">CHECK OUT</a>
            </div>
        </div>
    </section>


</main>
<!-- main ends -->
<?php
require('footer.php');
?>