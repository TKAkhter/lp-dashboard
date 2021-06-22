<?php
	session_start();
	$con=mysqli_connect("localhost","root","","lp-admin");
	define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/php/lp-admin/');
	define('SITE_PATH','http://127.0.0.1/php/lp-admin/');
	define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'img/product/');
	define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'img/product/');
