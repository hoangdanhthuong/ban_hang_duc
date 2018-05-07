<?php
include('error.php');
if($i==0){
	$thu_tu = $_POST['thu_tu'];
	$tinh_trang = $_POST['tinh_trang'];
	$sql = "UPDATE thuong_hieu SET ten_thuong_hieu='".$name."',thu_tu='".$thu_tu."',tinh_trang='".$tinh_trang."' WHERE id_thuong_hieu=".$id;
	if(!mysqli_query($conn, $sql)){
		echo 'Sửa bị lỗi';
	}
}
?>