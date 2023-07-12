<?php
require('top.php');
if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) {
?>
    <script>
        window.location.href = 'index.php';
    </script>
    <?php
}
$cart_total = 0;

if (isset($_POST['submit'])) {
    $address = get_safe_value($con, $_POST['address']);
    $city = get_safe_value($con, $_POST['city']);
    $pincode = get_safe_value($con, $_POST['pincode']);
    $payment_type = get_safe_value($con, $_POST['payment_type']);
    $user_id = $_SESSION['USER_ID'];
    foreach ($_SESSION['cart'] as $key => $val) {
        $productArr = get_product($con, '', '', $key);
        $price = $productArr[0]['price'];
        $qty = $val['qty'];
        $cart_total = $cart_total + ($price * $qty);
    }
    $total_price = $cart_total;
    $payment_status = 'pending';
    if ($payment_type == 'cod') {
        $payment_status = 'success';
    }
    $order_status = '1';
    $added_on = date('Y-m-d h:i:s');

    $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);


    mysqli_query($con, "insert into `order`(user_id,address,city,pincode,payment_type,payment_status,order_status,added_on,total_price,txnid) values('$user_id','$address','$city','$pincode','$payment_type','$payment_status','$order_status','$added_on','$total_price','$txnid')");

    $order_id = mysqli_insert_id($con);

    foreach ($_SESSION['cart'] as $key => $val) {
        $productArr = get_product($con, '', '', $key);
        $price = $productArr[0]['price'];
        $qty = $val['qty'];

        mysqli_query($con, "insert into `order_detail`(order_id,product_id,qty,price) values('$order_id','$key','$qty','$price')");
    }

    unset($_SESSION['cart']);

    if ($payment_type == 'payu') {

        echo "online";
    } else {

    ?>
        <script>
            window.location.href = 'thank_you.php';
        </script>
<?php
    }
}

?>
<!-- main -->
<main>
    <!-- breadcrumbs -->
    <div class="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="index.html">Home /</a></li>
                <li><a href="products.html">Products /</a></li>
                <li>Check Out</li>
            </ul>
        </div>
    </div>
    <br>
    <!-- breadcrumbs ends -->
    <!-- check out -->
    <section class="checkout-sec">
        <div class="container">
            <div class="checkout-row">
                <div class="checkout-address-col">
                    <form action="" method="post">
                        <div class="accordion-div">
                            <button class="accordian-btn"> <i class="fa-solid fa-plus accordion-icon"></i> ADDRESS INFORMATION
                            </button>
                            <div class="checkout-address accordion-col" id="accordion1">

                                <div class="row">
                                    <div class="form-group col-12">
                                        <input type="text" class="form-control" placeholder="Enter Address" name="address">
                                    </div>
                                    <div class="form-group col-6">
                                        <input type="text" class="form-control" name="city" placeholder="City" required>
                                    </div>
                                    <div class="form-group col-6">
                                        <input type="text" name="pincode" class="form-control" placeholder="pincode" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="accordion-div">
                            <button class="accordian-btn" id="accordion2"><i class="fa fa-plus"></i> PAYMENT INFORMATION</button>
                            <div class="payment-types accordion-col">

                                <div class="row">
                                    <div class="form-group col-12">
                                        <input type="radio" name="paymenttype" id="" value="COD">
                                        <label for="payment">Cash On Delivery</label>
                                        <!-- ===================================== -->
                                        <input type="radio" name="paymenttype" id="" value="online">
                                        <label for="payment">Online</label>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <br>
                        <input type="submit" class="btn-1" name="submit" />
                    </form>
                </div>
                <div class="order-summary-col">
                    <h4>YOUR ORDER</h4>
                    <?php
                    $cart_total = 0;
                    foreach ($_SESSION['cart'] as $key => $val) {
                        $productArr = get_product($con, '', '', $key);
                        $pname = $productArr[0]['name'];
                        $mrp = $productArr[0]['mrp'];
                        $price = $productArr[0]['price'];
                        $image = $productArr[0]['image'];
                        $qty = $val['qty'];
                        $cart_total = $cart_total + ($price * $qty);
                    ?>
                        <div class="order-col">
                            <div>
                                <img class="img-fluid" src="<?php echo PRODUCT_IMAGE_SITE_PATH . $image ?>" alt="">
                            </div>
                            <div>
                                <h5><?php echo $pname ?></h5>
                                <span>* <?php echo $qty ?></span>
                                <p><?php echo $price * $qty ?> </p>
                            </div>
                            <button class="remove-item" onclick="manage_cart('<?php echo $key ?>','remove')"><i class="fa-solid fa-trash"></i></button>
                        </div>
                    <?php } ?>
                    <br>
                    <div class="total-col">
                        <h4>ORDER TOTAL</h4>
                        <span><b><?php echo $cart_total ?></b></span>
                    </div>
                    <div class="apply-code">
                        <form action="">
                            <input type="text" class="apply-code">
                            <button type="submit" class="submit btn-1">APPLY COUPAN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- main ends -->
<?php
require('footer.php');
?>