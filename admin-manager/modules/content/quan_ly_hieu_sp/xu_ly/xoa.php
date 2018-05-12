<?php
include('../../../config.php');
$id = $_POST['id'];
if(check_delete($conn, $id)){

	$sql = "DELETE FROM thuong_hieu WHERE id_thuong_hieu =".$id;
	mysqli_query($conn, $sql);	
}else{
	echo "Thương hiệu đang chứa sản phẩm.";
}
function check_delete($conn, $id){
	$sql = "select *from san_pham where id_hieu_sp = ".$id;
	mysqli_num_rows(mysqli_query($conn, $sql))>0?false:true;
}
?>