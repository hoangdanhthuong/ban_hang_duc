<?php 
include("modules/navbar/nav_bar.php");
if(isset($_GET['quanly'])){
  $tam = $_GET['quanly'];
}else{
  $tam = '';
}
if($tam=='phanloailon'){
  include('modules/content/phan_loai_lon/main.php');
}elseif($tam=='khuyenmai'){
  include('modules/content/khuyen_mai/main.php');
}elseif($tam=='sanpham'){
  include('modules/content/quan_ly_san_pham/main.php');
}elseif($tam=='phanloainho'){
  include('modules/content/phan_loai_nho/main.php');
}elseif($tam=='hieu_sp'){
  include('modules/content/quan_ly_hieu_sp/main.php');
}else{
  include("modules/content/dashboard.php");
}
?>
