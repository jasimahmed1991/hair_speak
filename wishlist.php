<?php

require('top.php');
if(!isset($_SESSION['USER_LOGIN'])){
	?>
	<script>
	window.location.href='login.php';
	</script>
	<?php
}
$uid=$_SESSION['USER_ID'];
$res=mysqli_query($con,"select product.name,product.image,product.price,product.mrp,product.id as pid,wishlist.id from product,wishlist where wishlist.product_id=product.id and wishlist.user_id='$uid'");


?>
    <!-- main -->
    <main>
        <!-- breadcrumbs -->
        <div class="breadcrumb">
            <div class="container">
                <ul>
                    <li><a href="index.php">Home /</a></li>
                    <li><a href="products.php">Products /</a></li>
                    <li>WishList</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumbs ends -->
        <section class="wishlist-sec">
            <div class="container whishlist-container">
                <div class="wishlisttabs">
                    <ul id="wishlist-tabs-nav">
                        <li><a href="#wtab1">Products</a></li>
                        <li><a href="#wtab2">Services</a></li>
                    </ul>
                    
                    <div id="wishlist-tabs-content">
                        <div id="wtab1" class="wtab-content">
                            <div class="wishlist-products-row" id="wishProducts">

                            <?php
										while($row=mysqli_fetch_assoc($res)){
										?>
                                <div class="wishlist-product">
                                    <a href="#">
                                        <img class="img-fluid" src="<?php echo PRODUCT_IMAGE_SITE_PATH . $row['image'] ?>" alt="">
                                        <div class="title">
                                            <div class="ratings">
                                                <h4>5<i class="fa-solid fa-star"></i></h4> | <span>527</span>
                                            </div>
                                            <h3><?php echo $row['name']; ?></h3>
                                            <span class="price">Rs.<?php echo $row['price']; ?></span>
                                        </div>
                                    </a>
                                    <div class="movetobag-btn">
                                    <a href="javascript:void(0)" onclick="manage_cart('<?php echo $row['pid']?>','add')">Move To bag</a>
                                    </div>
                                    <button id="cancelBtn">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                </div>
                                <?php } ?>
                               
                            </div>
                        </div>
                        <div id="wtab2" class="wtab-content">
                            <div class="wishlist-service-row">
                                <div class="wishlist-service">
                                    <a href="#">
                                        <img class="img-fluid" src="./assests/images/services/hair-care.jpg" alt="#">
                                        <div class="wishlist-service-title">
                                            <div class="ratings">
                                                <h4>5<i class="fa-solid fa-star"></i></h4> | <span>527</span>
                                            </div>
                                            <h3>By Graduate/Master Stylist</h3>
                                            <span class="price">Rs.500</span>
                                        </div>
                                        <a class="procced-btn" href="#">PROCEED</a>
                                    </a>
                                </div>
                                <div class="wishlist-service">
                                    <a href="#">
                                        <img class="img-fluid" src="./assests/images/services/hands-feet.jpg" alt="#">
                                        <div class="wishlist-service-title">
                                            <div class="ratings">
                                                <h4>5<i class="fa-solid fa-star"></i></h4> | <span>527</span>
                                            </div>
                                            <h3>Nail Polish</h3>
                                            <span class="price">Rs.500</span>
                                        </div>
                                    </a>
                                    <a class="procced-btn" href="#">PROCEED</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- END tabs-content -->
                </div>
            </div>
        </section>

        <!-- about product ends -->
    </main>
    <!-- main ends -->
  <?php require('footer.php'); ?>