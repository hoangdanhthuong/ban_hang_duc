<?php
include("../../../config.php");
$i = 0;
$id = $_POST['id'];
$name = $_POST['name'];
$thu_tu = $_POST['thu_tu'];
$tinh_trang = $_POST['tinh_trang'];
if(isset($_POST['check'])){
	if($_POST['check']==0){
		if($name == ''){
			echo 'Tên không được để trống.';
			$i=1;
		}else{
			$sql = "select *from phan_loai_nho where ten = '".$name."'";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				$i=1;
				echo "Đã tồn tại.";
			}	
		}
		
	}
	if($_POST['check']==1){
		$id_1 = $_POST['id_1'];
		if($name == ''){
			echo 'Tên không được để trống.';
			$i=1;
		}else{
			$sql = "select *from phan_loai_nho where ten = '".$name."'";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				$row = mysqli_fetch_assoc($result);
				if($row['id']==$id_1){
					$i=0;
				}else{
					$i=1;
					echo "Đã tồn tại.";	
				}
				
			}	
		}
	}
}
?>