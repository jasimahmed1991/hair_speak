<?php
require('top.inc.php');
$project_name='';
$image='';
$msg='';
$image_required='required';
if(isset($_GET['id']) && $_GET['id']!=''){
	$id=get_safe_value($con,$_GET['id']);
	$res=mysqli_query($con,"select * from project_ideas where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$project_name=$row['project_name'];
	}else{
	    
	?>
        <script type="text/javascript">;
                window.location.href = 'project_ideas.php';
            </script>

        <?php
	}
}

if(isset($_POST['submit'])){
	$project_name=get_safe_value($con,$_POST['project_name']);
     $project_content=get_safe_value($con,$_POST['project_content']);
	$res=mysqli_query($con,"select * from project_ideas where project_name='$project_name'");
	$check=mysqli_num_rows($res);
	if($check>0){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$getData=mysqli_fetch_assoc($res);
			if($id==$getData['id']){
			
			}else{
				$msg="Project already exist";
			}
		}else{
			$msg="Project already exist";
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
			mysqli_query($con,"update project_ideas set project_name='project_name' where id='$id'");
		}else{
		    $image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'],PRODUCT_IMAGE_SERVER_PATH.$image);
			mysqli_query($con,"insert into project_ideas(project_name,project_content,image,status) values('$project_name','$project_content','$image','1')");
		}
		?>
        <script type="text/javascript">;
                window.location.href = 'project_ideas.php';
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
                        <div class="card-header"><strong>DIY</strong><small> Project Form</small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="categories" class=" form-control-label">DIY Project Name</label>
									<input type="text" name="project_name" placeholder="Enter Project name" class="form-control" required value="<?php echo $project_name?>">
								</div>
								<div class="form-group">
									<label for="categories" class=" form-control-label">Upload Project Cover Image</label>
									<input type="file" name="image" class="form-control" <?php echo  $image_required?>>
								</div>
								
								 <div class="form-group">
									<label for="categories" class=" form-control-label">DIY Project </label>
									<textarea name="project_content" class="form-control"></textarea>
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
         <script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
         <script>
                        CKEDITOR.replace( 'project_content' );
                </script>

         
<?php
require('footer.inc.php');
?>