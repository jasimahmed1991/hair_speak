<?php
require('connection.inc.php');
require('functions.inc.php');

if(isset($_POST) && isset($_POST['type'])){
    $type = get_safe_value($con,$_POST['type']);
     $id=get_safe_value($con,$_POST['id']);
     $set_value = get_safe_value($con,$_POST['set_value']);
     echo $sql = "update brand set $type = '$set_value' where id='$id' ";
     $check_exclusive = mysqli_query($con,$sql);

}


?>