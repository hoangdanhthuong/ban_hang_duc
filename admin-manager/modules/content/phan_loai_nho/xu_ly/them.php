<?php
include('error.php');
if($i!=1){
	$sql = "INSERT INTO phan_loai_nho( id_phan_loai_lon, ten, thu_tu, tinh_trang) VALUES ('".$id."','".$name."', '".$thu_tu."', '".$tinh_trang."')";
	if(!mysqli_query($conn, $sql)){
		echo 'Thêm bị lỗi';
	}
}
?>