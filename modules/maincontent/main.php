<?php
if(isset($_GET['xem'])){
	$tam = $_GET['xem'];
}else{
	$tam = '';
}

if($tam == 'chitietsanpham'){
	include('modules/maincontent/right/chitietsanpham.php');
}elseif($tam=='giohang'){
	include("modules/maincontent/left/giohang.php");
}else{
	include('modules/maincontent/slide.php');
	include('modules/maincontent/right/trangchu.php');	
}
?>