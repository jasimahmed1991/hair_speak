<?php
require('top.inc.php');

if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='status'){
		$operation=get_safe_value($con,$_GET['operation']);
		$id=get_safe_value($con,$_GET['id']);
		if($operation=='active'){
			$status='1';
		}else{
			$status='0';
		}
		$update_status_sql="update brand set status='$status' where id='$id'";
		mysqli_query($con,$update_status_sql);
	}
	
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from brand where id='$id'";
		mysqli_query($con,$delete_sql);
	}
	
	if($type == 'exclusive'){
	    $operation=get_safe_value($con,$_GET['operation']);
		$id=get_safe_value($con,$_GET['id']);
		if($operation=='active'){
			$exclusive='1';
		}else{
			$exclusive='0';
		}
		$update_exclusive_sql="update brand set exclusive='$exclusive' where id='$id'";
		mysqli_query($con,$update_exclusive_sql);
	}
	
	if($type == 'top'){
	    $operation=get_safe_value($con,$_GET['operation']);
		$id=get_safe_value($con,$_GET['id']);
		if($operation=='active'){
			$top='1';
		}else{
			$top='0';
		}
		$update_top_sql="update brand set top='$top' where id='$id'";
		mysqli_query($con,$update_top_sql);
	}

	if($type == 'new'){
	    $operation=get_safe_value($con,$_GET['operation']);
		$id=get_safe_value($con,$_GET['id']);
		if($operation=='active'){
			$new='1';
		}else{
			$new='0';
		}
		$update_top_sql="update brand set new='$new' where id='$id'";
		mysqli_query($con,$update_top_sql);
	}
}

$sql="select * from brand order by brand asc";
$res=mysqli_query($con,$sql);
?>

<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Brand </h4>
				   <h4 class="box-link"><a href="manage_brand.php">Add Brand </a> </h4>
                   
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th>Brand Id</th>
							   <th>Brand</th> 
							   <th>Brand Image</th>
							   <th>Exclusive</th>
							   <th>top Brands</th>
							   <th>New Brands</th>
							   <th>Actions</th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
                            
							
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   
							   <td><?php echo $row['id']?></td>
							   <td><?php echo $row['brand']?></td>
							   <td><img src="<?php echo BRAND_IMAGE_SITE_PATH.$row['image']?>"/></td>
							   <td>
							   <?php
								if($row['exclusive']==1){ ?>
							   <input type="checkbox" checked data-toggle="toggle" data-onstyle="info" data-size="sm" data-id = "<?php echo $row['id'] ?>"  onchange="exclusive(this,'exclusive');">
							   <?php }else{?>
								<input type="checkbox" data-toggle="toggle" data-onstyle="info" data-size="sm" data-id = "<?php echo $row['id'] ?>"  onchange="exclusive(this,'exclusive');">
								<?php } ?>
								</td>
								
								<td> <?php
								if($row['top']==1){ ?>
							   <input type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-size="sm" data-id = "<?php echo $row['id'] ?>"  onchange="exclusive(this,'top');">
							   <?php }else{?>
								<input type="checkbox" data-toggle="toggle" data-onstyle="success" data-size="sm" data-id = "<?php echo $row['id'] ?>"  onchange="exclusive(this,'top');">
								<?php } ?></td>

								<td> <?php
								if($row['new']==1){ ?>
							   <input type="checkbox" checked data-toggle="toggle" data-onstyle="danger" data-size="sm" data-id = "<?php echo $row['id'] ?>"  onchange="exclusive(this,'new');">
							   <?php }else{?>
								<input type="checkbox" data-toggle="toggle" data-onstyle="danger" data-size="sm" data-id = "<?php echo $row['id'] ?>"  onchange="exclusive(this,'new');">
								<?php } ?></td>
							   
							   <td>
								<?php
								if($row['status']==1){
									echo "<span class='badge badge-complete'><a href='?type=status&operation=deactive&id=".$row['id']."'>Active</a></span>&nbsp;";
								}else{
									echo "<span class='badge badge-pending'><a href='?type=status&operation=active&id=".$row['id']."'>Deactive</a></span>&nbsp;";
								}
								echo "<span class='badge badge-edit'><a href='manage_brand.php?id=".$row['id']."'>Edit</a></span>&nbsp;";
								
								echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id']."'>Delete</a></span>";
								
								?>
							   </td>
							</tr>
							<?php } ?>
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>

<?php
require('footer.inc.php');
?>