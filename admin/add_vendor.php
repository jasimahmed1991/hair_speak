<?php
require('top.inc.php');

if(isset($_POST['submit'])){

	
	$meterial_category = $_POST['meterial_category'];
	 $vendor = $_POST['vendor'];
	 $contact_person = $_POST['contact_person'];
	 $products = $_POST['products'];

	 $sql = "insert into vendor_list(meterial_category,vendor,contact_person,products) values('$meterial_category','$vendor','$contact_person','$products') ";
	 $res = mysqli_query($con,$sql);
	 ?>
        <script type="text/javascript">;
                window.location.href = 'vendor_list.php';
            </script>

        <?php

    
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Seller</strong><small> Form</small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							   
								
							
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Material Category	</label>
									<input type="text" name="meterial_category" placeholder="Material Category	" class="form-control" required>
								</div>
							
								<div class="form-group">
									<label for="categories" class=" form-control-label">Vendor Name</label>
									<input type="text" name="vendor" placeholder="Vendor" class="form-control" required>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Contact Person</label>
									<input type="text" name="contact_person" placeholder="Contact Person" class="form-control" required>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Products</label>
									<input type="text" name="products" placeholder="Products" class="form-control" required>
								</div>
								
								
								
								
							  <input type="submit" name="submit" value="submit" class="btn btn-primary" >
							   
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
		 
         
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