<?php
if(isset($_GET['ac'])){
	$tempac = $_GET['ac'];
}else{
	$tempac = '';
}
if($tempac == "them"){
	include("modules/content/tin_tuc/them.php");
}elseif($tempac == "sua"){
	include("modules/content/tin_tuc/sua.php");
}else{
	include("modules/content/tin_tuc/danh_sach.php");
}
?>
<script type="text/javascript" src="js/tin_tuc.datatable.js"></script>