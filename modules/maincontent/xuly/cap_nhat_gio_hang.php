<?php
session_start();
if(isset($_POST['id_product'])){
	$id = $_POST['id_product'];
	$_SESSION['tong_sp_gio_hang']=0;
	if(isset($_SESSION['gio_hang_'.$id])){

		$_SESSION['gio_hang_'.$id] +=1;
	}
	else{
		$_SESSION['gio_hang_'.$id] = 1 ;
	}
	foreach ($_SESSION as $key => $name) {
		if(substr($key, 0,9)=='gio_hang_'){
			$_SESSION['tong_sp_gio_hang']+=$_SESSION[$key];
		}
		
	}
	echo $_SESSION['tong_sp_gio_hang'];
	
}
?>