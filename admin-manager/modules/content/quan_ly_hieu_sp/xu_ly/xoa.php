<?php
	include('../../../config.php');
	$id = $_POST['id'];
	$sql = "DELETE FROM thuong_hieu WHERE id_thuong_hieu =".$id;
	mysqli_query($conn, $sql);
?>