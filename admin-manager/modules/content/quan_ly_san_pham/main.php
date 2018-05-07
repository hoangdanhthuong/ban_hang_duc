<?php
if(isset($_GET['ac'])){
	$tempac = $_GET['ac'];
}else{
	$tempac = '';
}
if($tempac == "them"){
	include("modules/content/quan_ly_san_pham/them.php");
}elseif($tempac == "sua"){
	include("modules/content/quan_ly_san_pham/sua.php");
}else{
	include("modules/content/quan_ly_san_pham/danh_sach.php");
}
?>
<script type="text/javascript" src="js/san_pham.datatable.js"></script>