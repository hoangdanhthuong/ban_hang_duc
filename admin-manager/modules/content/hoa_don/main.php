<?php
if(isset($_GET['ac'])){
	$tempac = $_GET['ac'];
}else{
	$tempac = '';
}
if($tempac == "them"){
	include("modules/content/hoa_don/them.php");
}elseif($tempac == "sua"){
	include("modules/content/hoa_don/sua.php");
}else{
	include("modules/content/hoa_don/danh_sach.php");
}
?>
<script type="text/javascript" src="js/hoa_don.datatable.js"></script>