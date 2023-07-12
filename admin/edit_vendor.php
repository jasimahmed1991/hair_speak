<?php
require('top.inc.php');
if(isset($_GET['id']) && $_GET['id']!=''){
$id = $_GET['id'];
$sql = "select * from seller_info WHERE id = '$id'";
$res = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($res);

$name = $row['name'];
$email_id = $row['email_id'];
$mobile_number = $row['mobile_number'];
$pin = $row['pin'];
$city = $row['city'];"";
$state = $row['state'];
$bussines_details = $row['bussines_details'];
$company_name = $row['company_name'];
$bussines_phone_number = $row['bussines_phone_number'];
$gst_number = $row['gst_number'];
$address = $row['address'];
$bank_name = $row['bank_name'];
$acc_holder_name = $row['acc_holder_name'];
$account_number = $row['account_number'];
$ifsc_code = $row['ifsc_code'];

}

$msg = "";




if(isset($_POST['submit'])){
 $name = get_safe_value($con,$_POST['name']);
 $email_id = get_safe_value($con,$_POST['email_id']);
 
 $mobile_number = get_safe_value($con,$_POST['mobile_number']);
 $pin = get_safe_value($con,$_POST['pin']);
 $city = get_safe_value($con,$_POST['city']);
 $state = get_safe_value($con,$_POST['state']);
 $company_name = get_safe_value($con,$_POST['company_name']);
 $address = get_safe_value($con,$_POST['address']);
 $bussines_phone_number = get_safe_value($con,$_POST['bussines_phone_number']);
 $gst_number = get_safe_value($con,$_POST['gst_number']);
 $bank_name = get_safe_value($con,$_POST['bank_name']);
 $acc_holder_name = get_safe_value($con,$_POST['acc_holder_name']);
 $account_number = get_safe_value($con,$_POST['account_number']);
 $ifsc_code = get_safe_value($con,$_POST['ifsc_code']);

 $res = mysqli_query($con,"update seller_info set name ='$name',email_id ='$email_id',mobile_number ='$mobile_number',pin = '$pin',city = '$city',state = '$state',company_name = '$company_name',address = '$address',bussines_phone_number = '$bussines_phone_number',gst_number = '$gst_number', bank_name = '$bank_name',acc_holder_name = '$acc_holder_name' ,account_number = '$account_number',ifsc_code = '$ifsc_code' WHERE id = '$id' ");
 if($res){
 	success_message("Successfully updated Vendor Profile");
 }else{
 	error_message("Could not update Vendor Profile");
 }


 
 
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Seller</strong><small> Form / <a href="seller_info.php">Back to seller</a></small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							   
								
							
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Name</label>
									<input type="text" name="name" placeholder="Enter  name" class="form-control" required value="<?php echo $name?>">
								</div>
							
								<div class="form-group">
									<label for="categories" class=" form-control-label">Business Email-ID</label>
									<input type="email" name="email_id" readonly placeholder="Enter Business Email-ID" class="form-control" required value="<?php echo $email_id?>">
								</div>
								
								

    								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Mobile Number</label>
									<input type="text" name="mobile_number" placeholder="Mobile Number" class="form-control" required value="<?php echo $mobile_number?>">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Pin</label>
									<input type="text" name="pin" placeholder="Pin" class="form-control" required value="<?php echo $pin?>">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">City</label>
									<input type="text" name="city" placeholder="City" class="form-control" required value="<?php echo $city?>">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">State</label>
									<input type="text" name="state" placeholder="State" class="form-control" required value="<?php echo $state?>">
								</div>
								
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Company Name</label>
									<input type="text" name="company_name" placeholder="Company Name" class="form-control" required value="<?php echo $company_name?>">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Address</label>
									<input type="text" name="address" placeholder="Address" class="form-control" required value="<?php echo $address?>">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Bussines Phone Number</label>
									<input type="text" name="bussines_phone_number" placeholder="Bussines Phone Number" class="form-control" required value="<?php echo $bussines_phone_number?>">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">GST Number</label>
									<input type="text" name="gst_number" placeholder="GST Number" class="form-control" required value="<?php echo $gst_number?>">
								</div>

								<div class="form-group">
									<label for="categories" class=" form-control-label">Bank Name</label>
									<input type="text" name="bank_name" placeholder="Bank Name" class="form-control" required value="<?php echo $bank_name?>">
								</div>

								<div class="form-group">
									<label for="categories" class=" form-control-label">Account Holder Name</label>
									<input type="text" name="acc_holder_name" placeholder="Account Holder Name" class="form-control" required value="<?php echo $acc_holder_name?>">
								</div>

								<div class="form-group">
									<label for="categories" class=" form-control-label"> Account No </label>
									<input type="text" name="account_number" placeholder="Account No" class="form-control" required value="<?php echo $account_number?>">
								</div>

								<div class="form-group">
									<label for="categories" class=" form-control-label">IFSC Code</label>
									<input type="text" name="ifsc_code" placeholder="IFSC Code" class="form-control" required value="<?php echo $ifsc_code?>">
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