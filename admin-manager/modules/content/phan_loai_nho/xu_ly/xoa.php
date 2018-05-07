<?php
	include('../../../config.php');
	$id = $_POST['id'];
	$sql = "DELETE FROM phan_loai_nho WHERE id =".$id;
	mysqli_query($conn, $sql);
?>