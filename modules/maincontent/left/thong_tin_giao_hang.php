<?php 
$sql_user = "SELECT * FROM thanh_vien WHERE ten_dang_nhap = '".$_SESSION['username_sport']['ten_dang_nhap']."'";
$row_user = mysqli_fetch_assoc(mysqli_query($conn, $sql_user));
?>

<div class="container">
	<div class="title-header">
		<div class="tieu_de">
			<a href="index.php">Trang chủ</a> > <a href="index.php?xem=giohang">Thanh toán</a>
		</div>
	</div>
	<div class="container-fluid">
		<table class="table table-bordered" id="">
			<tr>
				<td class="col-md-2"><b>Họ tên: </b></td>
				<td><?php echo $row_user['ho_ten']?></td>
				<td><b>Điện thoại:</b></td>
				<td><?php echo $row_user['dien_thoai']?></td>
			</tr>
			<tr>
				<td><b>Email:</b></td>
				<td colspan="3"><?php echo $row_user['email']?></td>
			</tr>
			<tr>
				<td><b>Địa chỉ giao hàng:</b></td>
				<td colspan="3" id="dia_chi_giao_hang"><?php echo $row_user['dia_chi']?></td>
			</tr>
			<tr>
				<td colspan="4">Sai địa chỉ?<a href="javascript:void(0)" class="pull" id="btn_dia_chi"> Nhập lại địa chỉ vào đây.</a></td>
			</tr>
			<tr hidden id="form_dia_chi">
				<td><label class="label-control">Nhập địa chỉ giao hàng:</label></td>
				<td colspan="2">
					<textarea name="dia_chi" placeholder="Nhập địa chỉ giao hàng cụ thể.." id="dia_chi" class="form-control" rows="2" required></textarea>
				</td>
				<td><button id="cap_nhat_dia_chi" class="btn btn-primary">Cập nhật</button></td>
			</tr>
			
		</table>
	</div>
	<div class="panel panel-info">

		<div class="panel-body">
			<table class="table table-bordered table-hover" id="banggiohang">
				<thead class="bg-primary">
					<tr >
						<th class="text-center" width="5%">Mã SP</th>
						<th class="text-center" width="10%">Hình ảnh</th>
						<th class="text-center" width="30%">Tên sản phẩm</th>
						<th class="text-center" width="15%">Số lượng</th>
						<th class="text-center" width="10%">Đơn giá</th>
						<th class="text-center" width="15%">Thành tiền</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$target = "admin-manager/modules/content/quan_ly_san_pham/uploads/";
					$sum =0;
					$sum_soluong = 0;
					foreach ($_SESSION as $key => $value) {
						if(substr($key, 0,9)=='gio_hang_'){

							$sql = "SELECT * FROM san_pham WHERE id_san_pham = ".substr($key, 9);
							$row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
							$thanh_tien=$row['gia_ban']*$value;
							$sum += $thanh_tien;
								$sum_soluong += $value;
							?>
							<tr id="row_<?php echo substr($key,9);?>">
								<td class="col-md-2"><?php echo $row['ma_san_pham']?></td>
								<td><img src="<?php echo $target.$row['hinh_anh_tieu_de']?>" alt="hinhanh" height="50px" width="100px"></td>
								<td><?php echo $row['ten_san_pham']?></td> 
								<td class="text-center">
									
									<span style="border: 1px solid black; text-align: center;font-weight: bold; font-size: 16px; padding: 5px "  id="soluongsanpham"><?php echo $value;?></span>
									
								</td>
								<td class="text-center"><b><?php echo number_format($row['gia_ban']).' VND'?></b></td>
								<td class="text-center"><b><?php echo number_format($thanh_tien).' VND'?></b></td>
							</tr>
							<?php
						}
					}
					?>
				</tbody>
			</table>
			
		</div>
		<div class="panel-footer">
			<div class="row text-center">
				<div class="col-xs-9">
					<h4 class="text-right" id="so_luong_<?php echo $sum_soluong?>">Tổng <strong id="tong_tien_<?php echo $sum?>"><?php echo number_format($sum)?></strong></h4>
				</div>
				<?php
					if($sum > 0){
				?>
				<div class="col-xs-3">
					<button type="button" class="btn btn-success btn-block" id="btn_thanh_toan">
						Thanh toán
					</button>
				</div>
				<?php
				}
				?>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="js/thanh_toan.js"></script>