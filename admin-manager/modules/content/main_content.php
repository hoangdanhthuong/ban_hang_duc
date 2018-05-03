<?php 
include("modules/navbar/nav_bar.php");
if(isset($_GET['quanly'])){
  $tam = $_GET['quanly'];
}else{
  $tam = '';
}
if($tam=='loai_sp'){
  include('modules/content/quan_ly_loai_sp/main.php');
}elseif($tam=='hieu_sp'){
  include('modules/content/quan_ly_hieu_sp/main.php');
}else{
  echo "hello world";
}
?>
