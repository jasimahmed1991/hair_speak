<?php
require('connection.inc.php');
require('functions.inc.php');
require('add_to_cart.inc.php');

$obj = new add_to_cart();
$totalProduct = $obj->totalProduct();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hair-speak</title>
    <link rel="shortcut icon" href="./assests/images/fav-icon.png" type="image/x-icon">
    <!-- custom css -->
    <link rel="stylesheet" href="./assests/css/style.css">
    <link rel="stylesheet" href="./assests/css/insidepage.css">
    <link rel="stylesheet" href="./assests/css/header.css">
    <link rel="stylesheet" href="./assests/css/custom.css">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <!-- owl -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <header class="site-header">
        <section class="Top-nav">
            <div class="container">
                <div class="top-nav">
                    <div class="brand">
                        <a href="index.php"><img src="./assests/images/logo.svg" alt=""></a>
                    </div>
                    <nav>
                        <!-- <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div> -->
                        <ul class="nav-links">
                            <li><a id="mainToggle" href="#!">Categories <i id="toggleIcon" class="fa-solid nav-icon fa-chevron-down"></i></a></li>
                            <li><a id="toggleNav" href="#!">Brands <i id="toggleIcontwo" class="fa-solid nav-icon fa-chevron-down"></i></a>
                            </li>
                            <li><a href="products.php">Products</a></li>
                            <li><a href="#!">Stores </a></li>
                        </ul>
                        <div class="search-form">
                            <form class="search-form" action="search.php" method="POST">
                                <input type="text" placeholder="What Are You Looking For? " name="search_for">
                                <button class="search-btn" type="submit" value="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div>
                            <ul class="nav-button">
                                <li><a class="login-btn" href="login.php"> Login </a></li>
                                <li><a class="favoriate-btn" href="wishlist.php"><i class="fa-solid fa-heart"></i></a></li>
                                <li><a class="cart-btn" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><span class="htc__qua"><?php echo $totalProduct ?></span></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </section>
        <section class="Main-nav" id="mainNav">
            <div class="container">
                <ul class="nav-ul">
                    <li class="nav-item"><a href="makeup.html">MAKEUP</a>
                        <div class="nav-drop-down">
                            <div class="nav-row">
                                <div class="nav-col">
                                    <ul>
                                        <h5 class="nav-head"> <a href="#">FACE</a></h5>
                                        <li><a href="#">Face Primer</a></li>
                                        <li><a href="#">Concealer</a></li>
                                        <li><a href="#">BB & CC Cream</a></li>
                                        <li><a href="#">Foundation</a></li>
                                        <li><a href="#">Compact</a></li>
                                        <li><a href="#">Blush</a></li>
                                        <li><a href="#">Bronzer</a></li>
                                        <li><a href="#">Setting Spray</a></li>
                                        <li><a href="#">Highlighters & Illuminators</a></li>
                                        <li><a href="#">Face Palettes And Sets</a></li>
                                        <li><a href="#">Make-Up Remover</a></li>
                                        <li><a href="#">Loose Powder</a></li>
                                    </ul>
                                </div>
                                <div class="nav-col">
                                    <ul>
                                        <h5 class="nav-head"> <a href="#">EYES</a></h5>
                                        <li><a href="#">Kajal</a></li>
                                        <li><a href="#">Eye Palettes & Sets</a></li>
                                        <li><a href="#">Eyeliner</a></li>
                                        <li><a href="#">Mascara</a></li>
                                        <li><a href="#">Eye Shadow</a></li>
                                        <li><a href="#">Eye Brow Enhancers</a></li>
                                    </ul>
                                </div>
                                <div class="nav-col">
                                    <ul>
                                        <h5 class="nav-head"> <a href="#">LIPS</a></h5>
                                        <li><a href="#">Lipstick</a></li>
                                        <li><a href="#">Lip Gloss</a></li>
                                        <li><a href="#">Lip Balm</a></li>
                                    </ul>
                                </div>
                                <div class="nav-col">
                                    <ul>
                                        <h5 class="nav-head"> <a href="#">NAILS</a></h5>
                                        <li><a href="#">Nail Polish</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item"><a href="#">SKINCARE</a>
                        <div class="nav-drop-down">
                            <div class="nav-row">
                                <div class="nav-col">
                                    <ul>
                                        <h5 class="nav-head"> <a href="#">CLEANSERS & EXFOLIATORS</a></h5>
                                        <li><a href="#">Face wash</a></li>
                                        <li><a href="#">Scrubs & Exfoliators</a></li>
                                        <li><a href="#">Make-Up Remover</a></li>
                                    </ul>
                                </div>
                                <div class="nav-col">
                                    <ul>
                                        <h5 class="nav-head"> <a href="#">MOISTURIZERS</a></h5>
                                        <li><a href="#">Face Moisturizers & Day Creams</a></li>
                                        <li><a href="#">Tinted Moisturizer</a></li>
                                        <li><a href="#">Night Creams</a></li>
                                        <li><a href="#">Anti-Aging</a></li>

                                        <br>
                                        <h5 class="nav-head"> <a href="#">EYE CARE</a></h5>
                                        <li><a href="#">Under Eye Cream & Serums</a></li>
                                        <li><a href="#">Serums</a></li>
                                        <br>
                                        <h5 class="nav-head"> <a href="#">LIP CARE</a></h5>

                                    </ul>
                                </div>
                                <div class="nav-col">
                                    <ul>
                                        <h5 class="nav-head"> <a href="#">MASKS & TREATMENT</a></h5>
                                        <li><a href="#">Serums & Boosters</a></li>
                                        <li><a href="#">Face Oils</a></li>
                                        <li><a href="#">Sheet Masks</a></li>
                                        <li><a href="#">Peels & Masks</a></li>
                                        <li><a href="#">Serums</a></li>
                                    </ul>
                                </div>
                                <div class="nav-col">
                                    <ul>
                                        <h5 class="nav-head"> <a href="#">BODY CARE</a></h5>
                                        <li><a href="#">Hand Cream & Foot Cream</a></li>

                                        <li><a href="#">Hand & Foot Masks</a></li>
                                        <li><a href="#">Body Loation</a></li>
                                        <li><a href="#">Massage Oils</a></li>
                                        <br>
                                        <h5 class="nav-head"> <a href="#">SUN CARE</a></h5>
                                        <li><a href="#">Face Sunscreen</a></li>
                                    </ul>
                                </div>
                                <div class="nav-col">
                                    <ul>
                                        <h5 class="nav-head"> <a href="#">TONERS & MISTS</a></h5>
                                        <li><a href="#">Toner</a></li>
                                        <li><a href="#">Face Mist</a></li>
                                    </ul>
                                </div>
                                <div class="nav-col">
                                    <ul>
                                        <h5 class="nav-head">SHOP BY CONCERN</h5>
                                        <li><a href="#">Dull, Uneven Skin</a></li>
                                        <li><a href="#">Pigmentation</a></li>
                                        <li><a href="#">Dark Circles</a></li>
                                        <li><a href="#">Dry Skin</a></li>
                                        <li><a href="#">Oily Skin</a></li>
                                        <li><a href="#">Sensitive Skin</a></li>
                                        <li><a href="#">Anti Acne</a></li>
                                        <li><a href="#">Anti Aging</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item"><a href="#">HAIRCARE</a>
                        <div class="nav-drop-down">
                            <div class="nav-row">
                                <div class="nav-col">
                                    <ul>
                                        <h5 class="nav-head"> <a href="#">SHAMPOOS & CONDITIONERS</a></h5>
                                        <li><a href="#">Shampoo</a></li>
                                        <li><a href="#">Conditioner</a></li>
                                        <li><a href="#">Dry Shampoo</a></li>
                                        <li><a href="#">Leave-In Conditioner</a></li>
                                    </ul>
                                </div>
                                <div class="nav-col">
                                    <ul>
                                        <h5 class="nav-head"> <a href="#">HAIR TREATMENT</a></h5>
                                        <li><a href="#">Hair Masks</a></li>
                                        <li><a href="#">Hair Serums</a></li>
                                        <li><a href="#">Hair Oil</a></li>
                                        <li><a href="#">Scalp Treatments</a></li>
                                    </ul>
                                </div>
                                <div class="nav-col">
                                    <ul>
                                        <h5 class="nav-head"> <a href="#">HAIR STYLING</a></h5>
                                        <li><a href="#">Hair Creams</a></li>
                                        <li><a href="#">Hair Spray</a></li>
                                        <li><a href="#">Heat Protection</a></li>
                                        <li><a href="#">Texturizer</a></li>
                                        <li><a href="#">Volumizer</a></li>
                                        <li><a href="#">Gels & Waxes</a></li>
                                    </ul>
                                </div>
                                <div class="nav-col">
                                    <ul>
                                        <h5 class="nav-head"> <a href="#">SHOP BY CONCERN</a></h5>
                                        <li><a href="#">Hairfall & Thinning</a></li>
                                        <li><a href="#">Dandruff</a></li>
                                        <li><a href="#">Dry & Frizzy Hair</a></li>
                                        <li><a href="#">Damaged Hair</a></li>
                                        <li><a href="#">Dull Hair</a></li>
                                        <li><a href="#">Dandruff</a></li>
                                        <li><a href="#">Dry & Frizzy Hair</a></li>
                                        <li><a href="#">Damaged Hair</a></li>
                                    </ul>
                                </div>
                                <div class="nav-col">
                                    <ul>
                                        <h5 class="nav-head"> <a href="#">BUDGET BEAUTY</a></h5>
                                        <li><a href="#">Combo Sets</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item"><a href="#">BATH &BODY</a>
                        <div class="nav-drop-down">
                            <div class="nav-row">
                                <div class="nav-col">
                                    <ul>
                                        <h5 class="nav-head"> <a href="#">BATH & SHOWER</a></h5>
                                        <li><a href="#">Body Wash & Shower Gel</a></li>
                                        <li><a href="#">Body Scrubs & Exfoliators</a></li>
                                        <li><a href="#">Body Lotions & Body Oils</a></li>
                                        <li><a href="#">Bath & Body Essentials</a></li>
                                    </ul>
                                </div>
                                <div class="nav-col">
                                    <ul>
                                        <h5 class="nav-head"> <a href="#">BUDGET BEAUTY</a></h5>
                                        <li><a href="#">Combo Sets</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item"><a href="#">FRAGRANCES</a>
                        <div class="nav-drop-down">
                            <div class="nav-row">
                                <div class="nav-col">
                                    <ul>
                                        <h5 class="nav-head"> <a href="#">WOMEN</a></h5>
                                        <li><a href="#">Eau De Toilette</a></li>
                                        <li><a href="#">Eau De Parfum</a></li>
                                    </ul>
                                </div>
                                <div class="nav-col">
                                    <ul>
                                        <h5 class="nav-head"> <a href="#">MEN</a></h5>
                                        <li><a href="#">Eau De Toilette</a></li>
                                        <li><a href="#">Eau De Parfum</a></li>
                                        <li><a href="#">Deodorants</a></li>
                                        <li><a href="#">Body Spray</a></li>
                                    </ul>
                                </div>
                                <div class="nav-col">
                                    <ul>
                                        <h5 class="nav-head"> <a href="#">UNISEX</a></h5>
                                        <li><a href="#">Body Spray</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item"><a href="#">MEN'S GROOMING</a>
                        <div class="nav-drop-down">
                            <div class="nav-row">
                                <div class="nav-col">
                                    <ul>
                                        <h5 class="nav-head"> <a href="#">BEARD CARE</a></h5>
                                        <li><a href="#">Beard Oil</a></li>
                                        <li><a href="#">Beard Serum</a></li>
                                        <li><a href="#">Beard/Moustache Care</a></li>
                                    </ul>
                                </div>
                                <div class="nav-col">
                                    <ul>
                                        <h5 class="nav-head"> <a href="#">SKIN CARE</a></h5>
                                        <li><a href="#">Face Wash</a></li>
                                        <li><a href="#">Moisturizers</a></li>
                                        <li><a href="#">Skincare</a></li>
                                    </ul>
                                </div>
                                <div class="nav-col">
                                    <ul>
                                        <h5 class="nav-head"> <a href="#">HAIR CARE</a></h5>
                                        <li><a href="#">Shampoo</a></li>
                                        <li><a href="#">Hair Care</a></li>
                                        <li><a href="#">Hair Styling</a></li>
                                        <li><a href="#">Hair Treatments</a></li>
                                    </ul>
                                </div>
                                <div class="nav-col">
                                    <ul>
                                        <h5 class="nav-head"> <a href="#">BODY CARE</a></h5>
                                        <li><a href="#">Bath/Shower Gels</a></li>
                                        <li><a href="#">Bath & Body Basics</a></li>
                                    </ul>
                                </div>
                                <div class="nav-col">
                                    <ul>
                                        <h5 class="nav-head"> <a href="#">SHOP BY CONCERN</a></h5>
                                        <li><a href="#">Hair Fall</a></li>
                                        <br>
                                        <h5 class="nav-head"> <a href="#">BUDGET BEAUTY</a></h5>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item"><a href="#">SALON SERVICES</a>
                        <div class="nav-drop-down">
                            <div class="nav-row">
                                <div class="nav-col">
                                    <ul>
                                        <h5 class="nav-head"> <a href="#">HAIR</a></h5>
                                        <li><a href="#">Haircut</a></li>
                                        <li><a href="#">Hair Wash</a></li>
                                        <li><a href="#">Hair Colour</a></li>
                                        <li><a href="#">Hair Treatment</a></li>
                                        <li><a href="#">Kerastase Ritual</a></li>
                                        <li><a href="#">Texture Service</a></li>
                                        <li><a href="#">Hair Styling</a></li>
                                    </ul>
                                </div>
                                <div class="nav-col">
                                    <ul>
                                        <h5 class="nav-head"> <a href="#">SKIN</a></h5>
                                        <li><a href="#">Threading</a></li>
                                        <li><a href="#">Waxing</a></li>
                                        <li><a href="#">Facial - Refresh</a></li>
                                        <li><a href="#">Facial - Regenerate</a></li>
                                        <li><a href="#">Facial - Relax</a></li>
                                        <li><a href="#">Masks - Refresh</a></li>
                                        <li><a href="#">Masks - Regenerate</a></li>
                                        <li><a href="#">Masks - Relax</a></li>
                                        <li><a href="#">Black Mask</a></li>
                                        <li><a href="#">Eye Care</a></li>
                                    </ul>
                                </div>
                                <div class="nav-col">
                                    <ul>
                                        <h5 class="nav-head"> <a href="#">MANI-PEDI</a></h5>
                                        <li><a href="#">Manicure - Classic</a></li>
                                        <li><a href="#">Manicure - Premium</a></li>
                                        <li><a href="#">Manicure - Signature</a></li>
                                        <li><a href="#">Manicure - Add-On</a></li>
                                        <li><a href="#">Pedicure - Classic</a></li>
                                        <li><a href="#">Pedicure - Premium</a></li>
                                        <li><a href="#">Pedicure - Signature</a></li>
                                        <li><a href="#">Nails</a></li>
                                        <li><a href="#">Reflexology</a></li>
                                    </ul>
                                </div>
                                <div class="nav-col">
                                    <ul>
                                        <h5 class="nav-head"> <a href="#">SPA</a></h5>
                                        <li><a href="#">Body Massage</a></li>
                                        <li><a href="#">Body Polish</a></li>
                                        <li><a href="#">Body Ritual</a></li>

                                    </ul>
                                </div>
                                <div class="nav-col">
                                    <ul>
                                        <h5 class="nav-head"> <a href="#">MAKE-UP</a></h5>
                                        <li><a href="#">Interview</a></li>
                                        <li><a href="#">Party</a></li>
                                        <li>Bride</li>
                                        <br>
                                        <h5 class="nav-head"> <a href="#">BEAUTY LAB</a></h5>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <!-- brands dropdown -->
        <div id="dropDown" class="dropdown brands-dropdown">
            <div class="drop-drown-row">
                <div class="brand-navs">
                    <form class="search-form" action="#">
                        <input type="text" placeholder="What Are You Looking For? " name="search" id="brandSearch">
                        <button class="search-btn" disabled><i class="fa fa-search"></i></button>
                    </form>
                    <div class="filter-links  text-center ">
                        <a class="filter-title active" id='All'>All Brands</a>
                        <a class="filter-title" id='Exlusive'>Exclusive</a>
                        <a class="filter-title" id='Topbrands'>Top Brand</a>
                        <a class="filter-title" id='Newin'>New In</a>
                    </div>
                </div>
                <div class="filter-search">
                    <div class=" filter-div active" id="All">
                        <div class="all-brands">
                            <h4>All Brands</h4>
                            <div class="brands-row" id="display" style="gap:1px">

                                <?php
                                $brands_sql = "select * from brand";
                                $res = mysqli_query($con, $brands_sql);
                                $rowcount = mysqli_num_rows($res) / 3;
                                $offset = 0;
                                $total_items_per_column = mysqli_fetch_assoc(mysqli_query($con, "select * from brand_column WHERE id  = 1"));
                                $limit =  $total_items_per_column["total_num"];
                                for ($i = 0; $i < $rowcount; $i++) {
                                ?>
                                    <div class="brands-col">
                                        <ul id="brands">
                                            <?php
                                            $brand_sql =  "select * from brand LIMIT $limit OFFSET $offset";
                                            $brand_res = mysqli_query($con, $brand_sql);
                                            while ($row = mysqli_fetch_assoc($brand_res)) { ?>
                                                <li><a href="brand_products.php?id=<?php echo $row['id'] ?>"><?php echo $row["brand"]; ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                <?php $offset = $offset + $limit;
                                }
                                ?>


                            </div>
                        </div>
                    </div>
                    <div class="filter-div" id="Exlusive">
                        <h4>Exclusive</h4>
                        <div class="brands-row">
                            <?php
                            $sql_exec = "select * from brand where exclusive = 1 AND status = 1  ";
                            $result_exec = mysqli_query($con, $sql_exec);
                            while ($row = mysqli_fetch_assoc($result_exec)) { ?>
                                <a href="brand_products.php?id=<?php echo $row['id'] ?>" class="brands">
                                    <img src="media/brand/<?php echo $row['image'] ?>" alt="">
                                </a>
                            <?php  } ?>
                        </div>
                    </div>
                    <div class="filter-div" id="Topbrands">
                        <h4>Top Brands</h4>
                        <div class="brands-row">

                        <?php
$sql_exec = "SELECT * FROM brand WHERE top = 1 AND status = 1 ORDER BY id DESC";
$result_exec = mysqli_query($con, $sql_exec);

while ($row = mysqli_fetch_assoc($result_exec)) {
    echo '<a href="brand_products.php?id=' . $row['id'] . '" class="brands">';
    echo '<img src="media/brand/' . $row['image'] . '" alt="">';
    echo '</a>';
}
?>
                        </div>
                    </div>
                    <div class="filter-div" id="Newin">
                        <h4>New In</h4>
                        <div class="brands-row">
                        <?php
$sql_exec = "SELECT * FROM brand WHERE new = 1 AND status = 1 ORDER BY id DESC";
$result_exec = mysqli_query($con, $sql_exec);

while ($row = mysqli_fetch_assoc($result_exec)) {
    echo '<a href="brand_products.php?id=' . $row['id'] . '" class="brands">';
    echo '<img src="media/brand/' . $row['image'] . '" alt="">';
    echo '</a>';
}
?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- mobile -->
        <section class="mobile-nav">
            <div class="mobile-row">
                <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
                <a href="index.php"><img class="mobile-logo" src="./assests/images/logo.svg" alt=""></a>
                <div class="mobile-links">
                    <a href="#!"><i class="fa-solid fa-heart"></i></a>
                    <a href="#!"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="sidenav-links">
                    <a href="#!"><i class="fa-solid fa-heart"></i></a>
                    <a href="#!"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="mobile-navbar">
                    <div class="mobile-btn">
                        <a href="login.html">Login</a>
                        <a href="registration.html">Register </a>
                    </div>
                    <nav>
                        <ul>
                            <h4 class="nav-head"><a href="#">Categories</a></h4>
                            <li><a href="#">Makeup</a></li>
                            <li><a href="#">Skincare</a></li>
                            <li><a href="#">Haircare</a></li>
                            <li><a href="#">Bath Body</a></li>
                            <li><a href="#">Fragrances</a></li>
                            <li><a href="#">Men's Grooming </a></li>
                            <li><a href="#">Salon Services</a></li>
                            <br>
                            <h4 class="nav-head"><a href="#">Brands</a></h4>
                            <li><a href="#">All Brands</a></li>
                            <li><a href="#">Exclusive</a></li>
                            <li><a href="#">Top Brands</a></li>
                            <li><a href="#">New In</a></li>
                            <br>
                            <h4 class="nav-head"><a href="products.php">Products</a></h4>
                            <br>
                            <h4 class="nav-head"><a href="#">Store</a></h4>

                        </ul>
                    </nav>
                </div>
            </div>
        </section>
    </header>