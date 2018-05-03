<?php
session_start();
include('../config.php');
	if(isset($_POST['email']) && isset($_POST['password'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM admin WHERE email='".$email."' and password = '".$password."'";
		$result = $conn->query($sql);
		if($result){
			if(mysqli_num_rows($result)>0){
				$_SESSION['admin_sport_shop']=mysqli_fetch_assoc($result)['email'];
				echo $_SESSION['admin_sport_shop'];
				
			}
			
		}else{
			echo 'Ca truy van bi sai';
		}
	}
?>