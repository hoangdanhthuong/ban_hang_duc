<?php
include('../../config.php');
$tieu_de = $_POST['tieu_de'];
//file image
$target_file = $_FILES['hinh_anh']["name"]; 
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$file_image = rand(1000000,5000000).'.'.$imageFileType;
while(file_exists($file_image)) {
	$file_image = rand(1000000,5000000).'.'.$imageFileType;
}
move_uploaded_file($_FILES['hinh_anh']['tmp_name'], "uploads/".$file_image );
//end file
$noi_dung = $_POST['noi_dung'];
$thu_tu = $_POST['thu_tu'];
$tinh_trang = $_POST['tinh_trang'];
$start_date = date_create( $_POST['start_date']);
$start_date = date_format($start_date, 'Y-m-d');
$end_date = date_create( $_POST['end_date']);
$end_date = date_format($end_date, 'Y-m-d');
if(isset($_POST['them'])){
	$sql = "INSERT INTO khuyen_mai(tieu_de, noi_dung, hinh_anh, thu_tu, thoi_gian_bat_dau, thoi_gian_ket_thuc, tinh_trang) VALUES ('".$tieu_de."', '".$noi_dung."','".$file_image."','".$thu_tu."','".$start_date."','".$end_date."', '".$tinh_trang."')";
	if(!mysqli_query($conn, $sql)){
		header("location: ../../../index.php?quanly=khuyenmai&ac=them&error=1");
	}else{
		header("location: ../../../index.php?quanly=khuyenmai");
	}
}elseif(isset($_POST['sua'])){
	$id = $_POST['id'];
	$sql = "UPDATE khuyen_mai SET tieu_de='".$tieu_de."',noi_dung='".$noi_dung."',hinh_anh='".$file_image."', thu_tu ='".$thu_tu."',thoi_gian_bat_dau='".$start_date."',thoi_gian_ket_thuc='".$end_date."',tinh_trang='".$tinh_trang."' WHERE id=".$id;
	if(!mysqli_query($conn, $sql)){
		header("location: ../../../index.php?quanly=khuyenmai&ac=sua&error=1");
	}else{
		header("location: ../../../index.php?quanly=khuyenmai");
	}
}else{
	$id = $_GET['id'];
	$sql = "DELETE FROM khuyen_mai WHERE id =".$id;
	if(mysqli_query($conn, $sql)){
		header("location: ../../../index.php?quanly=khuyenmai");
	}
}
?>
