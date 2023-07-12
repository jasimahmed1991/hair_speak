<?php
require('top.inc.php');
if(isset($_GET['id']) && $_GET['id']!=''){
$id=get_safe_value($con,$_GET['id']);    
$sql="select * from cons_tips where id = '$id' order by cons_name asc";
$res=mysqli_query($con,$sql);
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Construction</strong><small> Tips And Ideas </small></div>
                        <?php 
						
							while($row=mysqli_fetch_assoc($res)){?>
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="categories" class=" form-control-label">Construction Idea Name: <?php echo $row['cons_name']?> </label>
								</div>
								<div class="form-group">
									<img  src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['image']?>" width="200" height="200"/>
									<h4>Construction Tips Cover Image</h4>
								</div>
								<div class="form-group">
									
								<h2><?php echo $row['cons_content']?></h2>
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