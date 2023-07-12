<?php
require('top.php');
if (isset($_GET) && $_GET['id'] > 0) {
    $product_id = $_GET['id'];
    $brand_sql = "select * from product where id = $product_id";
    $products_result = mysqli_query($con, $brand_sql);
    $row = mysqli_fetch_assoc($products_result);
} else {
    header("Location: index.php");
}


?>

<!-- main -->
<main>
    <!-- breadcrumbs -->
    <div class="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="index.php">Home /</a></li>
                <li><a href="products.php">Products /</a></li>
                <li><a href="categories.php?id=<?php echo $row['categories_id'] ?>"><?php echo get_category_name($con, $row['categories_id']) ?> /</a></li>
                <li>Product</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumbs ends -->
    <section class="product-detail-sec">
        <div class="container">
            <div class="row">
                <div class="col-5 product-detail-img">
                    <div class="tumbnailtabs">
                        <div id="tumbnail-content">
                            <div id="tumbnail-images1" class="tumbmail-div">
                                <img class="img-fluid" src="<?php echo PRODUCT_IMAGE_SITE_PATH . $row['image'] ?>" alt="product">
                            </div>
                            <div id="tumbnail-images2" class="tumbmail-div">
                                <img class="img-fluid" src="<?php echo PRODUCT_IMAGE_SITE_PATH . $row['image'] ?>" alt="product">
                            </div>
                            <div id="tumbnail-images3" class="tumbmail-div">
                                <img class="img-fluid" src="<?php echo PRODUCT_IMAGE_SITE_PATH . $row['image'] ?>" alt="product">
                            </div>
                            <div id="tumbnail-images4" class="tumbmail-div">
                                <img class="img-fluid" src="<?php echo PRODUCT_IMAGE_SITE_PATH . $row['image'] ?>" alt="product">
                            </div>
                        </div>
                        <ul id="tumbnail-tabs-nav">
                            <li><a href="#tumbnail-images1"><img class="img-fluid" src="<?php echo PRODUCT_IMAGE_SITE_PATH . $row['image'] ?>" alt=""></a></li>
                            <li><a href="#tumbnail-images2"><img class="img-fluid" src="<?php echo PRODUCT_IMAGE_SITE_PATH . $row['image'] ?>" alt=""></a></a></li>
                            <li><a href="#tumbnail-images3"><img class="img-fluid" src="<?php echo PRODUCT_IMAGE_SITE_PATH . $row['image'] ?>" alt=""></a></a></li>
                            <li><a href="#tumbnail-images4"><img class="img-fluid" src="<?php echo PRODUCT_IMAGE_SITE_PATH . $row['image'] ?>" alt=""></a></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-9 product-detail-col">
                    <h2 class="product-name"><?php echo $row['name'] ?></h2>
                    <br>
                    <div class="rating">
                        <p>0 <i class="fa-solid fa-star"></i> | BE THE FIRST TO REVIEW</p>
                    </div>
                    <!-- <div class="rating">
                            <p>180<i class="fa-solid fa-star"></i>REVIEWS</p>
                        </div> -->
                    <br>
                    <div class="shades-button">
                        <h3>Select Shades</h3>
                        <button>25 Medium</button>
                        <button>30 Honey</button>
                        <button>35 Deep</button>
                        <button>35 Golden Caramel</button>
                        <button>40 Caramel</button>
                        <button>50 Cafe</button>
                    </div>
                    <br>
                    <div class="booking-btn">
                        <button class="wishlist" onclick="wishlist_manage('<?php echo $row['id'] ?>','add')"><i class="fa-solid fa-heart"></i> Wishlist</button>
                        
                        <button class="addcart" onclick="manage_cart('<?php echo $row['id'] ?>','add')"><i class="fa-solid fa-cart-shopping"></i> Add to Cart</button>
                    </div>
                    <div class="befenits">
                        <div class="befenits-col">
                            <img src="./assests/images/award-icon-01.svg" alt="icon">
                            <p>Genuine Products</p>
                        </div>
                        <div class="befenits-col">
                            <img src="./assests/images/truck-01.svg" alt="icon">
                            <p>Delivery In 2-3 Days</p>
                        </div>
                        <div class="befenits-col">
                            <img src="./assests/images/return-01.svg" alt="icon">
                            <p>Easy Returns</p>
                        </div>
                    </div>
                    <!-- <br> -->
                    <div class="check-availability">
                        <h3>Delivery & Services</h3>
                        <p>Check Delivery Options For Your Pincode</p>
                        <form action="#" class="check-avail">
                            <input type="text" placeholder="Enter Pincode" id="pincode">
                            <button id="Check" type="submit">CHECK</button>
                        </form>
                    </div>
                </div>
            </div>
            <br>
            <hr>
        </div>
    </section>
    <section class="about-product">
        <div class="container">
            <h3>About the Product</h3>
            <br>
            <div id="tab-container">

                <div class="tab-header">
                    <button class="tab-btn active" id="tab-1-btn">DESCRIPTION</button>
                    <button class="tab-btn" id="tab-2-btn">FEATURES & DETAILS</button>
                    <button class="tab-btn" id="tab-3-btn">BENEFITS</button>
                </div>
                <div class="tab-content">
                    <div class="tab active" id="tab-1">
                        <p><?php echo $row['description'] ?>
                        </p>
                    </div>
                    <div class="tab" id="tab-2">
                        <p> Gender : Female, Other, Finish : , Skin Tone: , Skin Concern: , Weight:</p>

                    </div>
                    <div class="tab" id="tab-3">
                        <p>Liquid Concealer For Flawless, Natural Coverage <br>
                            Helps Conceal Imperfections Like Redness, Dark Circles And Blemishes <br>
                            Wide Variety Of Skin Tones To Match Your Complexion <br>
                            Fragrance-Free And Oil-Free Concealer Is Non-Comedogenic <br>
                            Dermatologist And Ophthalmologist Tested</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about product ends
         -->
    <section class="rating-section">
        <div class="container rating-container">
            <h3>Review & Ratings</h3>
            <br>
            <div class="row">
                <div class="col-4">
                    <div class="write-review text-center">
                        <h4>BE THE FIRST TO REVIEW</h4>
                        <p>Write A Review & Earn Enrich points Worth 100</p>
                        <button class="write-review-btn">WRITE REVIEW</button>
                    </div>
                    <div class="rating-chart">
                        <h4><span>180</span> People Recommend This Product</h4>
                        <div class="rating-stars">
                            <div class="five-stars">
                                <div>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="bar">
                                    <div class="count-bar"></div>
                                </div>
                                <div class="count">
                                    <p>(80)</p>
                                </div>
                            </div>
                            <!-- -->
                            <div class="four-stars">
                                <div>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid four fa-star"></i>
                                </div>
                                <div class="bar">
                                    <div class="count-bar"></div>
                                </div>
                                <div class="count">
                                    <p>(49)</p>
                                </div>
                            </div>
                            <!-- -->
                            <div class="three-stars">
                                <div>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid three fa-star"></i>
                                    <i class="fa-solid three fa-star"></i>
                                </div>
                                <div class="bar">
                                    <div class="count-bar"></div>
                                </div>
                                <div class="count">
                                    <p>(30)</p>
                                </div>
                            </div>
                            <!-- -->
                            <div class="two-stars">
                                <div>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid two fa-star"></i>
                                    <i class="fa-solid two fa-star"></i>
                                    <i class="fa-solid two fa-star"></i>
                                </div>
                                <div class="bar">
                                    <div class="count-bar"></div>
                                </div>
                                <div class="count">
                                    <p>(12)</p>
                                </div>
                            </div>
                            <!-- -->
                            <div class="one-stars">
                                <div>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid one fa-star"></i>
                                    <i class="fa-solid one fa-star"></i>
                                    <i class="fa-solid one fa-star"></i>
                                    <i class="fa-solid one fa-star"></i>
                                </div>
                                <div class="bar">
                                    <div class="count-bar"></div>
                                </div>
                                <div class="count">
                                    <p>(4)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="customer-reviews">
                        <div class="customer-review-box">
                            <div class="star-box four-five-box">
                                5 <i class="fa-solid fa-star"></i>
                            </div>
                            <div>
                                <h4 class="customer-name">Arjun AA</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, mollitia! Lorem
                                    ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="customer-review-box">
                            <div class="star-box two-three-box">
                                3 <i class="fa-solid fa-star"></i>
                            </div>
                            <div>
                                <h4 class="customer-name">Arjun AA</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, mollitia! Lorem
                                    ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="customer-review-box">
                            <div class="star-box four-five-box">
                                5 <i class="fa-solid fa-star"></i>
                            </div>
                            <div>
                                <h4 class="customer-name">Arjun AA</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, mollitia! Lorem
                                    ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="customer-review-box">
                            <div class="star-box one-box">
                                1 <i class="fa-solid fa-star"></i>
                            </div>
                            <div>
                                <h4 class="customer-name">Arjun AA</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, mollitia! Lorem
                                    ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<!-- main ends -->
<?php require('footer.php') ?>