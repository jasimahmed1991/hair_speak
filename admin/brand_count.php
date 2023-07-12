<?php
require('top.inc.php');




if(isset($_POST['submit'])){
	$total_num= (int)get_safe_value($con,$_POST['total_num']);
	if($total_num < 1 || $total_num > 5 ){
	    $msg  = "number should be between 1 and 5";
	}else{
	    mysqli_query($con,"update brand_column set total_num='$total_num' where id= 1");
	    $success  = "Successfully updated";
	}
    
}

$total_items_per_column = mysqli_fetch_assoc(mysqli_query($con,"select * from brand_column WHERE id  = 1"));
$number =  $total_items_per_column["total_num"];
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="card">
                        <div class="card-header"><strong>Brand Count</strong><small> Per Column</small></div>
                        <form method="post">
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="categories" class=" form-control-label">Enter the  number</label>
									<input type="number" name="total_num" placeholder="Enter the number" class="form-control" required" max_length = 1>
								</div>
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							   <div class="field_error"><?php echo $msg?></div>
							   <div class="field_success"><?php echo $success?></div>
							</div>
						</form>
                     </div>
                  </div>
                   <div class="col-lg-6">
                     <div class="card">
                        <div class="card-header"><strong>Brand Count</strong><small> Per Column</small></div>
                        <form method="post">
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="categories" class=" form-control-label">Total Count Per Column</label><span> : <b><?php echo  $number ?> </b> </span>
									</div>
							  
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