<?php
session_start();
$con=mysqli_connect("localhost","root","","hair_speak");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/demo_hair_speak/');
define('SITE_PATH','http://localhost/demo_hair_speak/');


define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');
//for category
define('CATEGORY_IMAGE_SERVER_PATH',SERVER_PATH.'media/category/');
define('CATEGORY_IMAGE_SITE_PATH',SITE_PATH.'media/category/');
//for sub category images
define('SUB_CATEGORY_IMAGE_SERVER_PATH',SERVER_PATH.'media/sub_category/');
define('SUB_CATEGORY_IMAGE_SITE_PATH',SITE_PATH.'media/sub_category/');
//for brand images
define('BRAND_IMAGE_SERVER_PATH',SERVER_PATH.'media/brand/');
define('BRAND_IMAGE_SITE_PATH',SITE_PATH.'media/brand/');
//for banner
define('BANNER_SERVER_PATH', SERVER_PATH . 'media/banner/');
define('BANNER_SITE_PATH', SITE_PATH . 'media/banner/');
?>