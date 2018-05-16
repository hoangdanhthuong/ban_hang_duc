<?php
include('../../config.php');
$tieu_de = $_POST['tieu_de'];
//file image
if($_FILES['hinh_anh']["name"]!=''){
	$target_file = $_FILES['hinh_anh']["name"]; 
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$file_image = rand(1000000,5000000).'.'.$imageFileType;
while(file_exists($file_image)) {
	$file_image = rand(1000000,5000000).'.'.$imageFileType;
}
move_uploaded_file($_FILES['hinh_anh']['tmp_name'], "uploads/".$file_image );
}else{
	$file_image ='';
}

//end file
$noi_dung = $_POST['noi_dung'];
$tinh_trang = $_POST['tinh_trang'];
if(isset($_POST['them'])){
	$sql = "INSERT INTO tin_tuc(tieu_de, noi_dung, hinh_anh, tinh_trang) VALUES ('".$tieu_de."', '".$noi_dung."','".$file_image."', '".$tinh_trang."')";
	if(!mysqli_query($conn, $sql)){
		header("location: ../../../index.php?quanly=tintuc&ac=them&error=1");
	}else{
		header("location: ../../../index.php?quanly=tintuc");
	}
}elseif(isset($_POST['sua'])){
	$id = $_POST['id'];
	if($file_image == ''){
		$sql = "UPDATE tin_tuc SET tieu_de='".$tieu_de."',noi_dung='".$noi_dung."', tinh_trang='".$tinh_trang."' WHERE id_tin_tuc=".$id;
	}else{
		$sql = "UPDATE tin_tuc SET tieu_de='".$tieu_de."',noi_dung='".$noi_dung."',hinh_anh='".$file_image."', tinh_trang='".$tinh_trang."' WHERE id_tin_tuc=".$id;
	}
	
	if(!mysqli_query($conn, $sql)){
		header("location: ../../../index.php?quanly=tintuc&ac=sua&error=1");
	}else{
		header("location: ../../../index.php?quanly=tintuc");
	}
}else{
	$id = $_GET['id'];
	$sql = "DELETE FROM tin_tuc WHERE id =".$id;
	if(mysqli_query($conn, $sql)){
		header("location: ../../../index.php?quanly=tintuc");
	}
}
?>
