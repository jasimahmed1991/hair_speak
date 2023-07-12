<?php require('top.php');
$cat_res = mysqli_query($con, "select * from categories where status=1 ");
$cat_arr = array();
while ($row = mysqli_fetch_assoc($cat_res)) {
    $cat_arr[] = $row;
}

?>

<!-- shop by categories -->
<section class="insidesec category-sec">
    <div class="container">
        <div class="categories-row" data-aos="fade-up" data-aos-duration="3000">
            <div class="heading text-center">
                <h2>SHOP BY CATEGORIES</h2>
            </div>

            <?php
            foreach ($cat_arr as $list) {
            ?>
                <a href="categories.php?id=<?php echo $list['id'] ?> " class="categorys">
                    <img class="img-fluid" src="media/category/<?php echo $list['image'] ?>" alt="">
                    <h4><?php echo $list['categories'] ?></h4>
                </a>
            <?php
            }
            ?>

        </div>
    </div>
</section>
<!-- category-sec ends -->
<!-- stores sec -->
<section class="insidesec stores-sec">
    <div class="container">
        <div class="row overflow-hidden">
            <div class="heading text-center">
                <h2>STORES IN FOCUS</h2>
            </div>
            <div class="col-6">
                <div class="stores" data-aos="fade-right" data-aos-duration="2000">
                    <a href="#!">
                        <img class="img-fluid" src="./assests/images/anti-pollution-img.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="col-6">
                <div class="stores" data-aos="fade-left" data-aos-duration="2000">
                    <a href="#!">
                        <img class="img-fluid" src="./assests/images/peri-store-img.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- stores sec ends -->
<!-- top-offers-hair -->
<section class="insidesec hair-offers-sec">
    <div class="container">
        <div class="product-row" data-aos="fade-up" data-aos-duration="2000">
            <div class="heading text-center">
                <h2>TOP OFFERS IN HAIR</h2>
            </div>
            <div class="product-box1">
                <img class="img-fluid" src="./assests/images/offers/hair/1.jpg" alt="">
                <a class="offer-tittle" href="#">
                    <div>
                        <h4>TOP RATED FORMULAS</h4>
                        <p>For Dull Frizzy Hair </p>
                    </div>
                    <img src="./assests/images/SVG/service-arrow.svg" alt="">
                </a>
            </div>
            <div class="product-box1">
                <img class="img-fluid" src="./assests/images/offers/hair/2.jpg" alt="">
                <a class="offer-tittle" href="#">
                    <div>
                        <h4>FORMULAS THAT STOP</h4>
                        <p>Hairfall & Thinning</p>
                    </div>
                    <img src="./assests/images/SVG/service-arrow.svg" alt="">
                </a>
            </div>
            <div class="product-box1">
                <img class="img-fluid" src="./assests/images/offers/hair/3.jpg" alt="">
                <a class="offer-tittle" href="#">
                    <div>
                        <h4>SELLING FAST</h4>
                        <p>Top Rated Picks From Kerastase</p>
                    </div>
                    <img src="./assests/images/SVG/service-arrow.svg" alt="">
                </a>
            </div>
            <div class="view-button">
                <center>
                    <a href="#">View All</a>
                </center>
            </div>
        </div>
    </div>
</section>
<!-- ends -->
<!-- top-offers-skin -->
<section class="insidesec skin-offers-sec">
    <div class="container">
        <div class="product-row" data-aos="fade-up" data-aos-duration="2000">
            <div class="heading text-center">
                <h2>TOP OFFERS IN SKIN</h2>
            </div>
            <div class="product-box1">
                <img class="img-fluid" src="./assests/images/offers/skin/1.jpg" alt="">
                <a class="offer-tittle" href="#">
                    <div>
                        <h4>SKINCARE COMBO SETS</h4>
                        <p>For Every Concern</p>
                    </div>
                    <img src="./assests/images/SVG/service-arrow.svg" alt="">
                </a>
            </div>
            <div class="product-box1">
                <img class="img-fluid" src="./assests/images/offers/skin/2.jpg" alt="">
                <a class="offer-tittle" href="#">
                    <div>
                        <h4>SKIN LOVING SHEET MASKS</h4>
                        <p>Under Rs.200</p>
                    </div>
                    <img src="./assests/images/SVG/service-arrow.svg" alt="">
                </a>
            </div>
            <div class="product-box1">
                <img class="img-fluid" src="./assests/images/offers/skin/3.jpg" alt="">
                <a class="offer-tittle" href="#">
                    <div>
                        <h4>SELLING FAST</h4>
                        <p>Top Rated Picks From Kerastase</p>
                    </div>
                    <img src="./assests/images/SVG/service-arrow.svg" alt="">
                </a>
            </div>
            <div class="view-button">
                <center>
                    <a href="#">View All</a>
                </center>
            </div>
        </div>
    </div>
</section>
<!-- ends -->
<!-- top-offers-beauty -->
<section class="insidesec beauty-sec">
    <div class="container">
        <div class="product-row" data-aos="fade-up" data-aos-duration="2000">
            <div class="heading text-center">
                <h2>BEST OF BEAUTY</h2>
            </div>
            <div class="product-box1">
                <img class="img-fluid" src="./assests/images/best-beauty/1.jpg" alt="">
                <a class="offer-tittle" href="#">
                    <div>
                        <h4>VITAMIN E INFUSED SKIN <br>
                            SAVIORS</h4>
                    </div>
                    <img src="./assests/images/SVG/service-arrow.svg" alt="">
                </a>
            </div>
            <div class="product-box1">
                <img class="img-fluid" src="./assests/images/best-beauty/2.jpg" alt="">
                <a class="offer-tittle" href="#">
                    <div>
                        <h4>DEWY, BABY SOFT SKIN
                            <br> ESSENTIALS
                        </h4>

                    </div>
                    <img src="./assests/images/SVG/service-arrow.svg" alt="">
                </a>
            </div>
            <div class="product-box1">
                <img class="img-fluid" src="./assests/images/best-beauty/3.jpg" alt="">
                <a class="offer-tittle" href="#">
                    <div>
                        <h4>SLICKED BACK HAIR GELS <br>
                            YOU NEED RN</h4>
                    </div>
                    <img src="./assests/images/SVG/service-arrow.svg" alt="">
                </a>
            </div>
            <div class="view-button">
                <center>
                    <a href="#">View All</a>
                </center>
            </div>
        </div>
    </div>
</section>
<!-- beauty-sec-ends -->
<!-- salon-home-sec -->
<section class="insidesec salon-home-sec">
    <div class="container">
        <div class="product-row" data-aos="fade-up" data-aos-duration="2000">
            <div class="heading text-center">
                <h2>BRING THE SALON HOME</h2>
            </div>
            <div class="product-box1">
                <img class="img-fluid" src="./assests/images/saloon-home/1.jpg" alt="">
                <a class="offer-tittle" href="#">
                    <div>
                        <h4>DIY FACIAL KITS</h4>
                        <p>Diy Facial Kits</p>
                    </div>
                    <img src="./assests/images/SVG/service-arrow.svg" alt="">
                </a>
            </div>
            <div class="product-box1">
                <img class="img-fluid" src="./assests/images/saloon-home/2.jpg" alt="">
                <a class="offer-tittle" href="#">
                    <div>
                        <h4>NO MAKEUP</h4>
                        <p>Makeup Essentials</p>
                    </div>
                    <img src="./assests/images/SVG/service-arrow.svg" alt="">
                </a>
            </div>
            <div class="product-box1">
                <img class="img-fluid" src="./assests/images/saloon-home/3.jpg" alt="">
                <a class="offer-tittle" href="#">
                    <div>
                        <h4>PAMPERING, RESTORING</h4>
                        <p>Hair Masks</p>
                    </div>
                    <img src="./assests/images/SVG/service-arrow.svg" alt="">
                </a>
            </div>
            <div class="view-button">
                <center>
                    <a href="#">View All</a>
                </center>
            </div>
        </div>
    </div>
</section>
<!-- home saloon ends -->
<!-- editor's picks -->
<section class="insidesec editors-picks-sec">
    <div class="container">
        <div class="product-row" data-aos="fade-up" data-aos-duration="2000">
            <div class="heading text-center">
                <h2>EDITOR'S PICKS</h2>
            </div>
            <div class="product-box1">
                <img class="img-fluid" src="./assests/images/editors-pick/1.jpg" alt="">
                <a class="offer-tittle" href="#">
                    <div>
                        <h4>ALL HAIL, RETRO LIPS ARE <br>
                            BACK</h4>

                    </div>
                    <img src="./assests/images/SVG/service-arrow.svg" alt="">
                </a>
            </div>
            <div class="product-box1">
                <img class="img-fluid" src="./assests/images/editors-pick/2.jpg" alt="">
                <a class="offer-tittle" href="#">
                    <div>
                        <h4>BLUSH DRAPPING FOR <br>
                            A SCULPTED GLOW</h4>
                    </div>
                    <img src="./assests/images/SVG/service-arrow.svg" alt="">
                </a>
            </div>
            <div class="product-box1">
                <img class="img-fluid" src="./assests/images/editors-pick/3.jpg" alt="">
                <a class="offer-tittle" href="#">
                    <div>
                        <h4>LUXURIOUS SKIN PAMPER <br>
                            BODY OILS</h4>
                    </div>
                    <img src="./assests/images/SVG/service-arrow.svg" alt="">
                </a>
            </div>
            <div class="view-button">
                <center>
                    <a href="#">View All</a>
                </center>
            </div>
        </div>
    </div>
</section>
<!-- editor's pick ends -->
<!-- brands -->
<section class="insidesec brands-sec">
    <div class="container">
        <div class="product-row" data-aos="fade-up" data-aos-duration="2000">
            <a href="#!" class="brand">
                <img class="img-fluid" src="./assests/images/brands/born-ethical.png" alt="">
            </a>
            <!--  -->
            <a href="#!" class="brand">
                <img class="img-fluid" src="./assests/images/brands/coach.png" alt="">
            </a>
            <a href="#!" class="brand">
                <img class="img-fluid" src="./assests/images/brands/dyson.png" alt="">
            </a>
            <a href="#!" class="brand">
                <img class="img-fluid" src="./assests/images/brands/kama.png" alt="">
            </a>
            <a href="#!" class="brand">
                <img class="img-fluid" src="./assests/images/brands/kenneth.png" alt="">
            </a>
            <a href="#!" class="brand">
                <img class="img-fluid" src="./assests/images/brands/kerastase.png" alt="">
            </a>
            <a href="#!" class="brand">
                <img class="img-fluid" src="./assests/images/brands/loreal.png" alt="">
            </a>
            <a href="#!" class="brand">
                <img class="img-fluid" src="./assests/images/brands/milani.png" alt="">
            </a>
            <a href="#!" class="brand">
                <img class="img-fluid" src="./assests/images/brands/nyx.png" alt="">
            </a>
            <a href="#!" class="brand">
                <img class="img-fluid" src="./assests/images/brands/remy.png" alt="">
            </a>
            <a href="#!" class="brand">
                <img class="img-fluid" src="./assests/images/brands/thalgo.png" alt="">
            </a>
            <a href="#!" class="brand">
                <img class="img-fluid" src="./assests/images/brands/milani.png" alt="">
            </a>
        </div>
    </div>
</section>
<!-- brands ends -->
<!-- benefits  -->
<section class="sec10 benefits-sec">
    <div class="benefits-row">
        <div class="benefits">
            <img src="./assests/images/truck-01.svg" alt="">
            <h4>FREE SHIPPING</h4>
            <p>Above Rs.70</p>
        </div>
        <div class="benefits">
            <img src="./assests/images/award-icon-01.svg" alt="">
            <h4>100% GENIUNE</h4>
            <p>Products</p>
        </div>
        <div class="benefits">
            <img src="./assests/images/price-tag-01.svg" alt="">
            <h4>PROFFESIONAL CARE</h4>
            <p>& Beauty Brands</p>
        </div>
        <div class="benefits">
            <img src="./assests/images/beauty-01.svg" alt="">
            <h4>350+ BEAUTY</h4>
            <p>Services @80+ Salons </p>
        </div>
        <div class="benefits">
            <img src="./assests/images/reward-icon-01.svg" alt="">
            <h4>EARN REWARD POINTS</h4>
            <p>With Every Purchase</p>
        </div>
    </div>
</section>
<!-- benefits ends -->
</main>
<!-- main ends -->
<?php require('footer.php'); ?>