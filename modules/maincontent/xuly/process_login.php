<?php
session_start();
include("../../../admin-manager/modules/config.php");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['email']) && isset($_POST['password'])){
	$email = $_POST['email'];
	$password = $_POST["password"];
	$sql = "select *from admin where email='".$email."' and password = '".$password."'";
	$result = $conn->query($sql);
	if(!$result){
		echo "Cau truy van bi sai";
	}else{
		if(mysqli_num_rows($result)>0){
			$row = mysqli_fetch_assoc($result);
			$_SESSION['username_sport']=$row['email'];
			echo $_SESSION["username_sport"];
		}
	}
	
}
?>