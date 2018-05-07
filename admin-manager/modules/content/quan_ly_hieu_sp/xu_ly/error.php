<?php
include("../../../config.php");
$i = 0;
if(isset($_POST['check'])){
	if($_POST['check']==0){
		$name = $_POST['name'];
		if($name == ''){
			echo 'Tên không được để trống.';
			$i=1;
		}else{
			$sql = "select *from thuong_hieu where ten_thuong_hieu = '".$name."'";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				$i=1;
				echo "Đã tồn tại.";
			}	
		}
		
	}
	if($_POST['check']==1){
		$id = $_POST['id'];
		$name = $_POST['name'];
		if($name == ''){
			echo 'Tên không được để trống.';
			$i=1;
		}else{
			$sql = "select *from thuong_hieu where ten_thuong_hieu = '".$name."'";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				$row = mysqli_fetch_assoc($result);
				if($row['id_thuong_hieu']==$id){
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