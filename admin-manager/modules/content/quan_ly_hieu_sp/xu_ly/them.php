<?php
include('error.php');
if($i!=1){
	$name = $_POST['name'];
	$thu_tu = $_POST['thu_tu'];
	$tinh_trang = $_POST['tinh_trang'];
	$sql = "INSERT INTO thuong_hieu (ten_thuong_hieu, thu_tu, tinh_trang) VALUES ('".$name."', '".$thu_tu."', '".$tinh_trang."')";
	if(!mysqli_query($conn, $sql)){
		echo 'Thêm bị lỗi';
	}
}
?>