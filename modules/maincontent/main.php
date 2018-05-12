<?php
if(isset($_GET['xem'])){
	$tam = $_GET['xem'];
}else{
	$tam = '';
}
$target = "admin-manager/modules/content/quan_ly_san_pham/uploads/";
if($tam == 'chitietsanpham'){
	include('modules/maincontent/right/chitietsanpham.php');
}elseif($tam=='giohang'){
	include("modules/maincontent/left/giohang.php");
}else{
	include('modules/maincontent/slide.php');
	include('modules/maincontent/right/trangchu.php');	
}
?>