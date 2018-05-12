<?php
include('../../../config.php');
$id = $_POST['id'];
$sql_check_delete = "SELECT * FROM phan_loai_nho WHERE id_phan_loai_lon=".$id;
if(mysqli_num_rows(mysqli_query($conn, $sql_check_delete))==0){

	$sql = "DELETE FROM phan_loai_lon WHERE id =".$id;
	mysqli_query($conn, $sql);	
}else{
	echo "Phân loại lớn đang chứa phân loại nhỏ";
}
?>