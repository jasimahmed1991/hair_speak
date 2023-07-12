<?php
require('top.inc.php');
$categories_id='';
$name='';
$mrp='';
$price='';
$gst=0;
$gst_price='';
$qty='';
$min_qty='';
$image='';
$short_desc	='';
$description	='';
$meta_title	='';
$meta_desc	='';
$meta_keyword='';
$best_seller='';
$sub_categories_id='';
$product_question='';
$product_answer='';

$msg='';
$image_required='required';
if(isset($_GET['id']) && $_GET['id']!=''){
	$image_required='';
	$id=get_safe_value($con,$_GET['id']);
	$res=mysqli_query($con,"select * from product where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$categories_id=$row['categories_id'];
		$sub_categories_id=$row['sub_categories_id'];
		$brand_id=$row['brand_id'];
		$name=$row['name'];
		$mrp=$row['mrp'];
		$price=$row['price'] - $row['gst_price'];
		$qty=$row['qty'];
		$min_qty=$row['min_qty'];
		$gst=$row['gst'];
		$short_desc=$row['short_desc'];
		$description=$row['description'];
		$meta_title=$row['meta_title'];
		$meta_desc=$row['meta_desc'];
		$meta_keyword=$row['meta_keyword'];
		$best_seller=$row['best_seller'];
		$product_question=$row['product_question'];
		$product_answer=$row['product_answer'];
	}else{
		?>
        <script type="text/javascript">;
                window.location.href = 'product.php';
            </script>

        <?php
	}
}

if(isset($_POST['submit'])){
	$categories_id=get_safe_value($con,$_POST['categories_id']);
	$sub_categories_id=get_safe_value($con,$_POST['sub_categories_id']);
	$brand_id=get_safe_value($con,$_POST['brand_id']);
	$name=get_safe_value($con,$_POST['name']);
	$mrp=get_safe_value($con,$_POST['mrp']);
	$price=get_safe_value($con,$_POST['price']);
	$gst=get_safe_value($con,$_POST['gst']);
	$gst_price = ($price * $gst)/100 ;
	$price = $price + $gst_price ;

	$qty=get_safe_value($con,$_POST['qty']);
	$min_qty=get_safe_value($con,$_POST['min_qty']);
	$short_desc=get_safe_value($con,$_POST['short_desc']);
	$description=get_safe_value($con,$_POST['description']);
	$meta_title=get_safe_value($con,$_POST['meta_title']);
	$meta_desc=get_safe_value($con,$_POST['meta_desc']);
	$meta_keyword=get_safe_value($con,$_POST['meta_keyword']);
	$best_seller=get_safe_value($con,$_POST['best_seller']);
	$product_question=get_safe_value($con,$_POST['product_question']);
	$product_answer=get_safe_value($con,$_POST['product_answer']);
	
	$res=mysqli_query($con,"select * from product where name='$name'");
	$check=mysqli_num_rows($res);
	if($check>0){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$getData=mysqli_fetch_assoc($res);
			if($id==$getData['id']){
			
			}else{
				$msg="";
			}
		}else{
			$msg="";
		}
	}
	
	if(isset($_GET['id']) && $_GET['id']==0){
		if($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg'){
			$msg="Please select only png,jpg and jpeg image formate";
		}
	}else{
		if($_FILES['image']['type']!=''){
				if($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg'){
				$msg="Please select only png,jpg and jpeg image formate";
			}
		}
	}
	
	if($msg==''){
		if(isset($_GET['id']) && $_GET['id']!=''){
			if($_FILES['image']['name']!=''){
				$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
				move_uploaded_file($_FILES['image']['tmp_name'],PRODUCT_IMAGE_SERVER_PATH.$image);
				$update_sql="update product set categories_id='$categories_id',name='$name',mrp='$mrp',price='$price',qty='$qty',min_qty = '$min_qty' ,short_desc='$short_desc',description='$description',meta_title='$meta_title',meta_desc='$meta_desc',meta_keyword='$meta_keyword',image='$image',best_seller='$best_seller',sub_categories_id='$sub_categories_id',gst='$gst',gst_price='$gst_price',product_question='$product_question',product_answer='$product_answer' where id='$id'";
			}else{
				$update_sql="update product set categories_id='$categories_id',name='$name',mrp='$mrp',price='$price',qty='$qty',min_qty = '$min_qty', short_desc='$short_desc',description='$description',meta_title='$meta_title',meta_desc='$meta_desc',meta_keyword='$meta_keyword',best_seller='$best_seller',sub_categories_id='$sub_categories_id',gst='$gst',gst_price='$gst_price',product_question='$product_question',product_answer='$product_answer' where id='$id'";
			}
			mysqli_query($con,$update_sql);
		}else{
			$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'],PRODUCT_IMAGE_SERVER_PATH.$image);
			mysqli_query($con,"insert into product(categories_id,name,mrp,price,qty,short_desc,description,meta_title,meta_desc,meta_keyword,status,image,best_seller,sub_categories_id,gst,gst_price,min_qty,product_question,product_answer,brand_id) values('$categories_id','$name','$mrp','$price','$qty','$short_desc','$description','$meta_title','$meta_desc','$meta_keyword',1,'$image','$best_seller','$sub_categories_id','$gst','$gst_price','$min_qty','$product_question','$product_answer','$brand_id')");
		}
		?>
        <script type="text/javascript">;
                window.location.href = 'product.php';
            </script>

        <?php
	}
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Product</strong><small> Form</small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="categories" class=" form-control-label">Categories</label>
									<select class="form-control" name="categories_id" id="categories_id" onchange="get_sub_cat('')" required>
										<option>Select Category</option>
										<?php
										$res=mysqli_query($con,"select id,categories from categories order by categories asc");
										while($row=mysqli_fetch_assoc($res)){
											if($row['id']==$categories_id){
												echo "<option selected value=".$row['id'].">".$row['categories']."</option>";
											}else{
												echo "<option value=".$row['id'].">".$row['categories']."</option>";
											}
											
										}
										?>
									</select>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Sub Categories</label>
									<select class="form-control" name="sub_categories_id" id="sub_categories_id">
										<option>Select Sub Category</option>
									</select>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Brand</label>
									<select class="form-control" name="brand_id" id=""  required>
										<option>Select Brand</option>
										<?php
										$res=mysqli_query($con,"select id,brand from brand order by brand asc");
										while($row=mysqli_fetch_assoc($res)){
											if($row['id']==$id){
												echo "<option selected value=".$row['id'].">".$row['brand']."</option>";
											}else{
												echo "<option value=".$row['id'].">".$row['brand']."</option>";
											}
											
										}
										?>
									</select>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Product Name</label>
									<input type="text" name="name" placeholder="Enter product name" class="form-control" required value="<?php echo $name?>">
								</div>
								<div class="form-group">
									<label for="categories" class=" form-control-label">Best Seller</label>
									<select class="form-control" name="best_seller" required>
										<option value=''>Select</option>
										<?php
										if($best_seller==1){
											echo '<option value="1" selected>Yes</option>
												<option value="0">No</option>';
										}elseif($best_seller==0){
											echo '<option value="1">Yes</option>
												<option value="0" selected>No</option>';
										}else{
											echo '<option value="1">Yes</option>
												<option value="0">No</option>';
										}
										?>
									</select>
								</div>

								<div class="form-group">
									<label for="categories" class=" form-control-label">GST %</label>
									<select class="form-control" name="gst" required>
										<option value="0" selected>Select GST %</option>
										<?php
										$res=mysqli_query($con,"select * from gst order by gst asc");
										while($row=mysqli_fetch_assoc($res)){
											if($row['gst']==$gst){
												echo "<option selected value=".$row['gst'].">".$row['gst']."</option>";
											}else{
												echo "<option value=".$row['gst'].">".$row['gst']."</option>";
											}
											
										}
										?>
									</select>
								</div>

								<div class="form-group">
									<label for="categories" class=" form-control-label">MRP</label>
									<input type="number" name="mrp" placeholder="Enter product mrp" class="form-control" required value="<?php echo $mrp?>">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Price</label>
									<input type="number" name="price" placeholder="Enter product price" class="form-control" required value="<?php echo $price?>">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Qty</label>
									<input type="number" name="qty" placeholder="Enter qty" class="form-control" required value="<?php echo $qty?>">
								</div>

								<div class="form-group">
									<label for="categories" class=" form-control-label">Minimum Qty</label>
									<input type="number" name="min_qty" placeholder="Enter qty Minimum quantity" class="form-control" required value="<?php echo $min_qty?>">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Image</label>
									<input type="file" name="image" class="form-control" <?php echo  $image_required?>>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Short Description</label>
									<textarea name="short_desc" placeholder="Enter product short description" class="form-control" required><?php echo $short_desc?></textarea>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Description</label>
									<textarea name="description" placeholder="Enter product description" class="form-control" required><?php echo $description?></textarea>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Meta Title</label>
									<textarea name="meta_title" placeholder="Enter product meta title" class="form-control"><?php echo $meta_title?></textarea>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Meta Description</label>
									<textarea name="meta_desc" placeholder="Enter product meta description" class="form-control"><?php echo $meta_desc?></textarea>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Meta Keyword</label>
									<textarea name="meta_keyword" placeholder="Enter product meta keyword" class="form-control"><?php echo $meta_keyword?></textarea>
								</div>
								<div class="form-group">
									<label for="categories" class=" form-control-label">Product Question</label>
									<textarea name="product_question" placeholder="Enter product question" class="form-control"><?php echo $product_question?></textarea>
								</div>

								<div class="form-group">
									<label for="categories" class=" form-control-label">Product Answer</label>
									<textarea name="product_answer" placeholder="Enter product answer" class="form-control"><?php echo $product_answer?></textarea>
								</div>
								
								
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							   <div class="field_error"><?php echo $msg?></div>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
		 
		 <script>
			function get_sub_cat(sub_cat_id){
				var categories_id=jQuery('#categories_id').val();
				jQuery.ajax({
					url:'get_sub_cat.php',
					type:'post',
					data:'categories_id='+categories_id+'&sub_cat_id='+sub_cat_id,
					success:function(result){
						jQuery('#sub_categories_id').html(result);
					}
				});
			}
		 </script>
         
<?php
require('footer.inc.php');
?>
<script>
<?php
if(isset($_GET['id'])){
?>
get_sub_cat('<?php echo $sub_categories_id?>');
<?php } ?>
</script>