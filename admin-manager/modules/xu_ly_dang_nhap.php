<?php
session_start();
if(isset($_SESSION['admin_sport_shop'])){
	include('modules/content/main_content.php');
}else{
	include('modules/login.php');
}
?>