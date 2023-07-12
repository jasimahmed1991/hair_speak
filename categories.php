<?php
require('top.php');
$default_selected = "";
$price_high_selected="";
$price_low_selected="";
$new_selected="";
$old_selected="";
$sort_order="";
if(isset($_GET['sort'])){
	$sort=mysqli_real_escape_string($con,$_GET['sort']);
	if($sort=="price_high"){
		$sort_order=" order by product.price desc ";
		$price_high_selected="selected";	
	}elseif($sort=="price_low"){
		$sort_order=" order by product.price asc ";
		$price_low_selected="selected";
	}elseif($sort=="new"){
		$sort_order=" order by product.id desc ";
		$new_selected="selected";
	}elseif($sort=="old"){
		$sort_order=" order by product.id asc ";
		$old_selected="selected";
	}else{
        $sort_order="";
		$default_selected="selected";
    }

}

$cat_id = $_GET['id'];
if($cat_id>0){
	$products_sql = "select * from product where categories_id = $cat_id $sort_order ";
$products_result = mysqli_query($con, $products_sql);
while ($product_row = mysqli_fetch_assoc($products_result)) {
    $product_arr[] = $product_row;
}
}else{
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
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
                <li>Makeup</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumbs ends -->
    <!-- products-banner -->
    <section class="makeup-banner">
        <div class="container">
            <img class="img-fluid" src="./assests/images/makeup-banner.png" alt="">
        </div>
    </section>
    <!-- banner ends -->

    <section class="products-sec">
        <div class="container">
            <div class="products-filter-top">
                <div class="title-col">
                    <h3 class="products-title">MAKEUP</h3>
                    <span class="product-count">(447 ITEMS)</span>
                </div>
                <form id="price-filter">
                    <label>Sort By:</label>
                    <select name="filter" id="Filter" onchange="sort_product_drop('<?php echo $cat_id?>','<?php echo SITE_PATH?>')" >
                        <option value="" class="filter-option" <?php echo $default_selected?>>  Default sorting</option>
                        <option value="price_low" class="filter-option" <?php echo $price_low_selected?>>Sort by price low to hight</option>
                        <option value="price_high" class="filter-option" <?php echo $price_high_selected?>>Sort by price high to low</option>
                        <option value="new" class="filter-option" <?php echo $new_selected?>>Sort by new first</option>
                        <option value="old" class="filter-option" <?php echo $old_selected?>>Sort by old first</option>
                    </select>
                </form>
            </div>
        </div>
        <!-- ==================================== -->
        <div class="container">
            <div class="products-div ">
                <div class="filter-nav">
                    <div class="filter-nav-tittle">
                        <h4>FILTERS</h4>
                        <button>Clear All</button>
                    </div>
                    <div class="filter-accordion">
                        <div class="accordion-item">
                            <!-- 1 -->
                            <div class="accordion-div">
                                <button class="filter-accordion-title rotate-icon" href="#!">PRICE <i id="FilterIcon" class="fa-solid fa-chevron-down"></i></button>
                                <div class="filter-accordion-content">
                                    <input type="checkbox" name="filters" onclick="uncheckOthers(this)" id="Rate">
                                    Rs.100 - Rs.300 <br>
                                    <input type="checkbox" name="filters" onclick="uncheckOthers(this)" id="Rate">
                                    Rs.300 - Rs.800 <br>
                                    <input type="checkbox" name="filters" onclick="uncheckOthers(this)" id="Rate">
                                    Rs.800 - Rs.1200 <br>
                                    <input type="checkbox" name="filters" onclick="uncheckOthers(this)" id="Rate">
                                    Rs.1200 - Rs.1800 <br>
                                </div>
                            </div>
                            <!-- 2 -->
                            <div class="accordion-div">
                                <button class="filter-accordion-title rotate-icon" href="#!">COLOR <i id="FilterIcon" class="fa-solid fa-chevron-down"></i></button>
                                <div class="filter-accordion-content">
                                    <input type="checkbox" name="filters" onclick="uncheckOthers(this)" id="Colour">
                                    Nude Dust CP10 <br>
                                    <input type="checkbox" name="filters" onclick="uncheckOthers(this)" id="Colour">
                                    140 Golden Beige <br>
                                    <input type="checkbox" name="filters" onclick="uncheckOthers(this)" id="Colour">
                                    260 Golden Sunscreen <br>
                                    <input type="checkbox" name="filters" onclick="uncheckOthers(this)" id="Colour">
                                    Black <br>
                                    <input type="checkbox" name="filters" onclick="uncheckOthers(this)" id="Colour">
                                    Natural <br>
                                    <input type="checkbox" name="filters" onclick="uncheckOthers(this)" id="Colour">
                                    Porcelain <br>
                                    <input type="checkbox" name="filters" onclick="uncheckOthers(this)" id="Colour">
                                    Warm Beige <br>
                                    <input type="checkbox" name="filters" onclick="uncheckOthers(this)" id="Colour">
                                    107 Cool Brunette <br>
                                    <input type="checkbox" name="filters" onclick="uncheckOthers(this)" id="Colour">
                                    125 Natural Rose <br>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="products-col">
                    <div class="product-row">
                    <?php
if (empty($product_arr)) {
    echo "No entries found.";
} else {
    foreach ($product_arr as $list) {
        ?>
        <div class="product-box2">
            <a href="product.php?id=<?php echo $list['id'] ?>">
                <img class="img-fluid" src="<?php echo PRODUCT_IMAGE_SITE_PATH . $list['image'] ?>" alt="">
                <div class="product-title">
                    <div class="shade">
                        <p>BE THE FIRST TO REVIEW</p>
                        <div class="shade-icon">
                            <img src="./assests/images/SVG/shade-icon-01.svg" alt="">
                            <span>7 shades</span>
                        </div>
                    </div>
                    <h4><?php echo $list['name']; ?></h4>
                    <p class="p-rate">&#8377; <?php echo $list['price'] ?></p>
                </div>
            </a>
            <button class="select-shades">SELECT SHADES <i class="fa-solid fa-magnifying-glass-plus"></i></button>
        </div>
        <?php
    }
}
?>
                    </div>
                </div>

            </div>
        </div>

    </section>
</main>
<!-- main ends -->
<?php require('footer.php'); ?>