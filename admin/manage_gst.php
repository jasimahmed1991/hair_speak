<?php
require('top.inc.php');
$gst='';
$msg='';
if(isset($_GET['id']) && $_GET['id']!=''){
	$id=get_safe_value($con,$_GET['id']);
	$res=mysqli_query($con,"select * from gst where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$gst=$row['gst'];
	}else{
		?>

		<script type="text/javascript">;
                window.location.href = 'gst.php';
            </script>
		<?php
	}
}

if(isset($_POST['submit'])){
	$gst=get_safe_value($con,$_POST['gst']);
	$res=mysqli_query($con,"select * from gst where gst='$gst'");
	$check=mysqli_num_rows($res);
	if($check>0){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$getData=mysqli_fetch_assoc($res);
			if($id==$getData['id']){
			
			}else{
				$msg="GST Slab already exist";
			}
		}else{
			$msg="GST Slab already exist";
		}
	}
	
	if($msg==''){
		if(isset($_GET['id']) && $_GET['id']!=''){
			mysqli_query($con,"update categories set gst='$gst' where id='$id'");
		}else{
			mysqli_query($con,"insert into gst(gst,status) values('$gst','1')");
		}?>

		<script type="text/javascript">;
                window.location.href = 'gst.php';
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
                        <div class="card-header"><strong>GST %</strong><small> Form</small></div>
                        <form method="post">
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="categories" class=" form-control-label">GST (%)</label>
									<input type="number" name="gst" placeholder="Enter GST % Number " class="form-control" required value="<?php echo $gst?>">
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
         
<?php
require('footer.inc.php');
?>