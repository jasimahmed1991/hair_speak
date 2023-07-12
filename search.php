<?php 
require('top.php');
$total_row = 0;
$search_for=mysqli_real_escape_string($con,$_POST['search_for']);
if($search_for!=''){
	$search_sql = "select * from product  where product.status=1  and (product.name like '%$search_for%' or product.description like '%$search_for%') order by product.id desc";
    $search_result = mysqli_query($con, $search_sql);
    $total_row = $search_result->num_rows;
    while ($search_row = mysqli_fetch_assoc($search_result)) {
        $search_arr[] = $search_row;
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
                <li>Search</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumbs ends -->
 

    <section class="products-sec">
        <div class="container">
            <div class="products-filter-top">
                <div class="title-col">
                    <h3 class="products-title">Search Results</h3>
                    <span class="product-count">(<?php echo $total_row ?>)</span>
                </div>
               
            </div>
        </div>
        <!-- ==================================== -->
        <div class="container">
            <div class="products-div ">
                

                <div class="products-col">
                    <div class="product-row">
                    <?php
if (empty($search_arr)) {
    echo "No entries found.";
} else {
    foreach ($search_arr as $list) {
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