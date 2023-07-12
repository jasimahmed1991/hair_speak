<?php
require('top.inc.php');
if(isset($_GET['id']) && $_GET['id']!=''){
$id=get_safe_value($con,$_GET['id']);    
$sql="select * from project_ideas where id = '$id' order by project_name asc";
$res=mysqli_query($con,$sql);
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>DIY</strong><small> Project </small></div>
                        <?php 
						
							while($row=mysqli_fetch_assoc($res)){?>
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="categories" class=" form-control-label">DIY Project Name: <?php echo $row['project_name']?> </label>
								</div>
								<div class="form-group">
									<img  src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['image']?>" width="200" height="200"/>
									<h4>Project Cover Image</h4>
								</div>
								<div class="form-group">
									
								<h2><?php echo $row['project_content']?></h2>
								</div>
								
								 
							  
							</div>
								</tr>
							<?php } ?>
					
                     </div>
                  </div>
               </div>
            </div>
         </div>
        

         
<?php
require('footer.inc.php');
?>