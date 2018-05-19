<?php
include_once('../../../config.php');
$id = $_POST['id'];
$tinh_trang = $_POST['tinh_trang'];
$sql = "UPDATE `chi_tiet_don_hang` SET `tinh_trang`='".$tinh_trang."' WHERE `id` = ".$id;
if(!mysqli_query($conn, $sql)){
	echo "Cập nhật thất bại!";
}
?>