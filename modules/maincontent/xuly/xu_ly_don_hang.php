<?php
session_start();
include_once('../../../admin-manager/modules/config.php');
$dia_chi = $_POST['dia_chi'];
$ten_dang_nhap = $_SESSION['username_sport']['ten_dang_nhap'];
$so_luong = $_POST['so_luong'];
$tong_tien = $_POST['tong_tien'];

$sql_don_hang = "INSERT INTO don_hang( ten_dang_nhap, tongtien, dia_chi, tong_sp, tinh_trang) VALUES ('".$ten_dang_nhap."','".$tong_tien."','".$dia_chi."','".$so_luong."','0')";
mysqli_query($conn, $sql_don_hang);
$sql_id = "SELECT MAX(id) as id FROM don_hang WHERE 1";
$row =  mysqli_fetch_assoc(mysqli_query($conn, $sql_id));
foreach ($_SESSION as $key => $value) {
	if(substr($key, 0,9)=='gio_hang_'){
		$sql_sp = "SELECT * FROM san_pham WHERE id_san_pham = ".substr($key, 9);
		$row_sp = mysqli_fetch_assoc(mysqli_query($conn, $sql_sp));

		$so_luong_moi = $row_sp['so_luong'] - $value;
		$sql_update_san_pham = "UPDATE san_pham SET so_luong =".$so_luong_moi." WHERE id_san_pham = ".substr($key, 9);
		mysqli_query($conn, $sql_update_san_pham);
		//them chi tiet
		$sql = "INSERT INTO chi_tiet_don_hang(id_don_hang, id_san_pham, so_luong, don_gia, thanh_tien, tinh_trang) VALUES ('".$row['id']."', '".substr($key, 9)."', '".$value."', '".$row_sp['gia_ban']."', '".($value*$row_sp['gia_ban'])."', '0')";

		mysqli_query($conn, $sql);
		unset($_SESSION[$key]);
	}
}
unset( $_SESSION['tong_sp_gio_hang']);
echo "Tạo đơn hàng thành công. 15 phút nữa có nhân viên gọi điện và xác nhận đơn hàng. Cảm ơn bạn!";
?>