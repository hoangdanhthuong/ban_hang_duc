<?php
$severname="localhost";
$username="root";
$password="";
$dbname="ban_hang_duc";
$conn= new mysqli($severname,$username,$password,$dbname);
if($conn->connect_error){
	die("Connection failed:".$conn->connect_error);
}
mysqli_set_charset($conn, 'UTF8');
?>