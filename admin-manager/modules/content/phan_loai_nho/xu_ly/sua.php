<?php
include('error.php');
if($i==0 && isset($_POST['id_1'])){
	$sql = "UPDATE phan_loai_nho SET id_phan_loai_lon=".$id.",ten='".$name."', thu_tu = '".$thu_tu."', tinh_trang = '".$tinh_trang."' WHERE id =".$id_1;
	if(!mysqli_query($conn, $sql)){
		echo 'Sửa bị lỗi';
	}
}
?>