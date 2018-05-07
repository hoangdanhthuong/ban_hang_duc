<?php
include('error.php');
if($i==0){
	$sql = "UPDATE phan_loai_lon SET ten='".$name."',thu_tu='".$thu_tu."',tinh_trang='".$tinh_trang."' WHERE id=".$id;
	if(!mysqli_query($conn, $sql)){
		echo 'Sửa bị lỗi';
	}
}
?>