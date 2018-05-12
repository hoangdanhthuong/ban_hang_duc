<?php
include('../../config.php');
$ma_sp = $_POST['ma_sp'];
$ten_sp = $_POST['ten_sp'];
$tieu_de = $_POST['tieu_de'];
$gia_de_xuat = $_POST['gia_de_xuat'];
$gia_ban = $_POST['gia_ban'];
$noi_dung = $_POST['noi_dung'];
$thu_tu = $_POST['thu_tu'];
$so_luong = $_POST['so_luong'];
$tinh_trang = $_POST['tinh_trang'];
$loai_sp = $_POST['loai_sp'];
$thuong_hieu = $_POST['thuong_hieu'];

$sql_check = "SELECT * FROM san_pham WHERE ma_san_pham = '".$ma_sp."'";

if(isset($_POST['them'])){
	
	if(check_input($conn, $sql_check)){
		$hinh_anh = save_file('hinh_anh');
		$hinh_anh_sp = save_files('hinh_anh_sp');
		$sql = "INSERT INTO san_pham( ma_san_pham, ten_san_pham, tieu_de,  chi_tiet_san_pham, hinh_anh_tieu_de, hinh_anh_sp, gia_de_xuat, gia_ban, so_luong, thu_tu, tinh_trang, id_loai_sp, id_hieu_sp) VALUES ('".$ma_sp."','".$ten_sp."','".$tieu_de."', '".$noi_dung."','".$hinh_anh."','".$hinh_anh_sp."','".$gia_de_xuat."','".$gia_ban."','".$so_luong."','".$thu_tu."','".$tinh_trang."', '".$loai_sp."', '".$thuong_hieu."')";
		if(!mysqli_query($conn, $sql)){
			header("location: ../../../index.php?quanly=sanpham&ac=them&error=1");
		}else{
			header("location: ../../../index.php?quanly=sanpham");
		}
	}else{
		header("location: ../../../index.php?quanly=sanpham&ac=them&error=2");
	}
	
}elseif(isset($_POST['sua'])){
	$id = $_GET['id'];
	$hinh_anh = save_file('hinh_anh');
	$hinh_anh_sp = save_files('hinh_anh_sp');
	if($hinh_anh == '' && $hinh_anh_sp == ''){
		$sql = "UPDATE san_pham SET ma_san_pham='".$ma_sp."',ten_san_pham='".$ten_sp."',tieu_de='".$tieu_de."',chi_tiet_san_pham='".$noi_dung."',gia_de_xuat='".$gia_de_xuat."',gia_ban='".$gia_ban."',so_luong='".$so_luong."',id_loai_sp='".$loai_sp."',id_hieu_sp='".$thuong_hieu."',thu_tu='".$thu_tu."',tinh_trang='".$tinh_trang."' WHERE id_san_pham=".$id;
	}elseif($hinh_anh == '' && $hinh_anh_sp!=''){
		$sql = "UPDATE san_pham SET ma_san_pham='".$ma_sp."',ten_san_pham='".$ten_sp."',tieu_de='".$tieu_de."',chi_tiet_san_pham='".$noi_dung."',hinh_anh_sp='".$hinh_anh_sp."',gia_de_xuat='".$gia_de_xuat."',gia_ban='".$gia_ban."',so_luong='".$so_luong."',id_loai_sp='".$loai_sp."',id_hieu_sp='".$thuong_hieu."',thu_tu='".$thu_tu."',tinh_trang='".$tinh_trang."' WHERE id_san_pham=".$id;
	}elseif($hinh_anh_sp == '' && $hinh_anh !=''){
		$sql = "UPDATE san_pham SET ma_san_pham='".$ma_sp."',ten_san_pham='".$ten_sp."',tieu_de='".$tieu_de."',chi_tiet_san_pham='".$noi_dung."',hinh_anh_tieu_de='".$hinh_anh."',gia_de_xuat='".$gia_de_xuat."',gia_ban='".$gia_ban."',so_luong='".$so_luong."',id_loai_sp='".$loai_sp."',id_hieu_sp='".$thuong_hieu."',thu_tu='".$thu_tu."',tinh_trang='".$tinh_trang."' WHERE id_san_pham=".$id;
	}else{
		$sql = "UPDATE san_pham SET ma_san_pham='".$ma_sp."',ten_san_pham='".$ten_sp."',tieu_de='".$tieu_de."',chi_tiet_san_pham='".$noi_dung."',hinh_anh_tieu_de='".$hinh_anh."',hinh_anh_sp='".$hinh_anh_sp."',gia_de_xuat='".$gia_de_xuat."',gia_ban='".$gia_ban."',so_luong='".$so_luong."',id_loai_sp='".$loai_sp."',id_hieu_sp='".$thuong_hieu."',thu_tu='".$thu_tu."',tinh_trang='".$tinh_trang."' WHERE id_san_pham=".$id;
	}

	if(check_input($conn, $sql_check, $id)){
		if(!mysqli_query($conn, $sql)){
			header("location: ../../../index.php?quanly=sanpham&ac=sua&id=".$id."&error=1");
		}else{
			header("location: ../../../index.php?quanly=sanpham");
		}
	}else{
		header("location: ../../../index.php?quanly=sanpham&ac=sua&id=".$id."&error=2");
	}
	
}else{
	$id = $_GET['id'];
	$sql = "DELETE FROM san_pham WHERE id_san_pham =".$id;
	if(mysqli_query($conn, $sql)){
		header("location: ../../../index.php?quanly=sanpham");
	}
}
function check_input($conn, $sql, $id = -1){
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)==0){
		return true;
	}else{
		if($id >= 0){
			$row = mysqli_fetch_assoc($result);
			if($id == $row['id_san_pham']){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
}
function save_file($input,$i=-1){
	//file image
	if($i<0){
		if(!empty($_FILES[$input]["name"])){
			$target_file = $_FILES[$input]["name"]; 
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			$hinh_anh = date("Y-m-d").rand(1000000,10000000).'.'.$imageFileType;
			while(file_exists('uploads/'.$hinh_anh)) {
				$hinh_anh = date("Y-m-d").rand(1000000,10000000).'.'.$imageFileType;
			}
			move_uploaded_file($_FILES[$input]['tmp_name'], "uploads/".$hinh_anh);
			return $hinh_anh;
		}else{
			return '';
		}
	}else{
		if(!empty($_FILES[$input]["name"][$i])){
			$target_file = $_FILES[$input]["name"][$i]; 
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			$hinh_anh = date("Y-m-d").rand(1000000,10000000).'.'.$imageFileType;
			while(file_exists('uploads/'.$hinh_anh)) {
				$hinh_anh = date("Y-m-d").rand(1000000,10000000).'.'.$imageFileType;
			}
			move_uploaded_file($_FILES[$input]['tmp_name'][$i], "uploads/".$hinh_anh);
			return $hinh_anh;
		}else{
			return '';
		}
	}
	
//end file
}
function save_files($input){
	if(!empty($input)){
		$countfiles = count($_FILES[$input]['name']);
		for($i = 0; $i < $countfiles; $i++){
			$i==0?  $file_names = save_file($input, $i): $file_names =  $file_names.":".save_file($input, $i);
		}
		return $file_names;
	}else{
		return '';
	}
}


?>