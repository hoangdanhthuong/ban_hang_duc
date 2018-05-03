<?php
session_start();
if(isset($_POST['id_product'])){
	$id = $_POST['id_product'];
	$_SESSION['tong_sp_gio_hang'] -= $_SESSION['gio_hang_'.$id];
	unset($_SESSION['gio_hang_'.$id]);	
		echo $id;
}
?>