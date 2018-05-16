<?php 
include("../../../admin-manager/modules/config.php");
session_start();
$dia_chi = $_POST['dia_chi'];
$username = $_SESSION['username_sport']['ten_dang_nhap'];
$sql = "UPDATE thanh_vien SET dia_chi='".$dia_chi."' WHERE ten_dang_nhap = '".$username."'";
echo $username = $_SESSION['username_sport']['ten_dang_nhap'];;
	if(!mysqli_query($conn, $sql)){
		echo "Tạo địa chỉ mới bị lỗi.";
	}
?>