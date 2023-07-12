<?php
require('connection.inc.php');
require('functions.inc.php');

if(isset($_POST['brandName'])){
    $brand = $_POST['brandName'];
    $sql = "SELECT * FROM brand WHERE brand LIKE '$brand%'; ";
    $result_brand = mysqli_query($con,$sql);
    $num_rows =  mysqli_num_rows($result_brand);
    $brand_arr=array();
    $result = array();
    if($num_rows){
        while($row = mysqli_fetch_assoc($result_brand)){
            //echo "<ul class='brands-row'><li id='brands'><a href='brand_products.php?id=".$row['id']." '>".$row['brand']."</a></li></ul>";
            $brand_arr[] = $row;
        }
        $result["msg"] = "success";
        $result["data"] = $brand_arr;
        echo json_encode($result);
    }else{
        $result["msg"] = "no data found";
        echo json_encode($result);
        
    }
    
}
?>