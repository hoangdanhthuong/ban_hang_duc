<?php 
include_once('../../../admin-manager/modules/config.php');
$sql = "INSERT INTO nhan_ma_giam( email, tinh_trang) VALUES ('".$_POST['email']."', '0')";
$sql_check = "SELECT * FROM nhan_ma_giam WHERE email = '".$_POST['email']."'";
if(mysqli_num_rows(mysqli_query($conn, $sql_check))==0){

	mysqli_query($conn, $sql);
	echo 'Đăng ký thành công!';	
}else{
	echo 'Email này đã đăng ký!';
}
?>