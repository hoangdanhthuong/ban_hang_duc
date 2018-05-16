<?php
session_start();
include("../../../admin-manager/modules/config.php");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
$ten_dang_nhap = $_POST['username_login'];
$password = $_POST["password"];
$sql = "SELECT * FROM thanh_vien WHERE ten_dang_nhap = '".$ten_dang_nhap."' AND mat_khau = '".$password."'";
$result = $conn->query($sql);
if(!$result){
	echo "Đăng nhập không thành công! Tên đăng nhập hoặc mật khẩu không đúng.";
}else{
	if(mysqli_num_rows($result)>0){
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username_sport']['ten_dang_nhap']=$row['ten_dang_nhap'];
		$_SESSION['username_sport']['ho_ten']=$row['ho_ten'];
		echo $_SESSION["username_sport"]['ho_ten'];
	}
}

?>