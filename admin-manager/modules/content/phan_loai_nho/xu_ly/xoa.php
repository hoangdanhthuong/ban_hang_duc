<?php
include('../../../config.php');
$id = $_POST['id'];
if(check_delete($conn, $id)){
	$sql = "DELETE FROM phan_loai_nho WHERE id =".$id;
	mysqli_query($conn, $sql);
}else{
	echo "Phân loại nhỏ đang chứa sản phẩm.";
}
function check_delete($conn, $id){
	$sql = "select *from san_pham where id_loai_sp = ".$id;
	mysqli_num_rows(mysqli_query($conn, $sql))>0?false:true;
}
?>