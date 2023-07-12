<?php
require('top.inc.php');
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Dashboard </h4>
				   <?php if(!$con){
    echo "false";
} ?>
				</div>
			</div>
		  </div>
	   </div>
	</div>
</div>
<?php
require('footer.inc.php');
?>