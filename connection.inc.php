<?php
session_start();
// ####################for server ################

// $con=mysqli_connect("localhost","dlwhosti_hair_speak","dlwhosti_hair_speak","dlwhosti_hair_speak");
// define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/demo/hair_speak/');
// define('SITE_PATH','https://dlwhosting.com/demo/hair_speak/');

// define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
// define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');

// //for category
// define('CATEGORY_IMAGE_SERVER_PATH',SERVER_PATH.'media/category/');
// define('CATEGORY_IMAGE_SITE_PATH',SITE_PATH.'media/category/');




//##########for local host#################
$con=mysqli_connect("localhost","root","","hair_speak");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/hair_speak/');
define('SITE_PATH','http://localhost/demo_hair_speak/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');

//for category
define('CATEGORY_IMAGE_SERVER_PATH',SERVER_PATH.'media/category/');
define('CATEGORY_IMAGE_SITE_PATH',SITE_PATH.'media/category/');
//##########for local host#################

?>