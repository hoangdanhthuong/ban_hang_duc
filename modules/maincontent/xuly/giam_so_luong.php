<?php
session_start();
if(isset($_POST['id_product'])){
	$id = $_POST['id_product'];
	if($_SESSION['gio_hang_'.$id] == 1){
		echo "Bạn nên xóa sản phẩm khỏi giỏ hàng";
	}else{
		$_SESSION['gio_hang_'.$id] -=1;
		$_SESSION['tong_sp_gio_hang']-=1;
	}
	
}
?>