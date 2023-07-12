<?php
function pr($arr){
	echo '<pre>';
	print_r($arr);
}

function prx($arr){
	echo '<pre>';
	print_r($arr);
	die();
}

function get_safe_value($con,$str){
	if($str!=''){
		$str=trim($str);
		return mysqli_real_escape_string($con,$str);
	}
}

function success_message($message){
     echo '<script type="text/javascript">';
                  echo 'setTimeout(function () { swal({
                  title: "Success!",
                  text: "'.$message.'",
                  icon: "success",
                  button: "Okay!",
                });';
                  echo '}, 1000);</script>';
}

function error_message($message){
     echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal({
  title: "Failed!",
  text: "'.$message.'",
  icon: "error",
  button: "Okay!",
});';
  echo '}, 1000);</script>';
}

?>