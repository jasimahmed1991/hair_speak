<?php
require('connection.inc.php');
require('functions.inc.php');

    $sql = "select * from brand WHERE status = 1 ORDER by brand ASC";
    $result = mysqli_query($con,$sql);
    $all_brands = array();
    while($row = mysqli_fetch_assoc($result)){
        $all_brands[] = $row;
    }
     echo json_encode($all_brands);

?>