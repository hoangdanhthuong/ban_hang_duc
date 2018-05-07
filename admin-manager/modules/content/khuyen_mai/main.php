<?php
if(isset($_GET['ac'])){
	$tempac = $_GET['ac'];
}else{
	$tempac = '';
}
if($tempac == "them"){
	include("modules/content/khuyen_mai/them.php");
}elseif($tempac == "sua"){
	include("modules/content/khuyen_mai/sua.php");
}else{
	include("modules/content/khuyen_mai/danh_sach.php");
}
?>
<script type="text/javascript" src="js/khuyen_mai.datatable.js"></script>