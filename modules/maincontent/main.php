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
}elseif($tam=='loaisp'){
	include("modules/maincontent/left/chi_tiet_loai_sp.php");
}elseif($tam=='thanhtoan'){
	include("modules/maincontent/left/thong_tin_giao_hang.php");
}elseif($tam=='timkiem'){
	include("modules/maincontent/left/timkiem.php");
}elseif($tam=='gioithieu'){
	include("modules/maincontent/left/gioi_thieu.php");
}elseif($tam=='tintuc'){
	include("modules/maincontent/left/chi_tiet_tin.php");
}else{
	include('modules/maincontent/slide.php');
	include('modules/maincontent/right/trangchu.php');	
}
?>