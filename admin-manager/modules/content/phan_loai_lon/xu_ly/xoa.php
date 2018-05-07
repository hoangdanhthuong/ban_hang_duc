<?php
	include('../../../config.php');
	$id = $_POST['id'];
	$sql = "DELETE FROM phan_loai_lon WHERE id =".$id;
	mysqli_query($conn, $sql);
?>