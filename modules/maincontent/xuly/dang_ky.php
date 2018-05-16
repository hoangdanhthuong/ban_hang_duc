<?php
include_once("../../../admin-manager/modules/config.php");
$dien_thoai = $_POST['dien_thoai'];
$mat_khau = $_POST['mat_khau'];
$ho_ten = $_POST['ho_ten'];
$email = $_POST['email'];
$dia_chi = $_POST['dia_chi'];
$ten_dang_nhap = $_POST['ten_dang_nhap'];

$sql_check = "SELECT * FROM thanh_vien WHERE ten_dang_nhap = '".$ten_dang_nhap."' OR email = '".$email."'";
if(check_input($conn, $sql_check)){
	$sql = "INSERT INTO thanh_vien(ten_dang_nhap, mat_khau, ho_ten, dia_chi, dien_thoai, email) VALUES ('".$ten_dang_nhap."','".$mat_khau."','".$ho_ten."','".$dia_chi."','".$dien_thoai."','".$email."')";
	if(!mysqli_query($conn, $sql)){
		echo "Đăng ký bị lỗi";
	}
}else{
	echo "Đăng ký không thành công!Tên đăng nhập hoặc mật khẩu đã tồn tại!";
}
function check_input($conn, $sql){
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)==0){
		return true;
	}
	return false;
}
?>