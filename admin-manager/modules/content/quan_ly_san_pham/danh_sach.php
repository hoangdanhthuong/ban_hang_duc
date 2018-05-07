<?php
include("modules/config.php");
$sql = "SELECT id_san_pham, ma_san_pham, ten_san_pham, chi_tiet_san_pham, hinh_anh_tieu_de, hinh_anh_sp, gia_de_xuat, gia_ban, so_luong, thu_tu, tinh_trang FROM san_pham order by thu_tu ";
$result = mysqli_query($conn,$sql);
?>
<div class="container-fluid bg-success ">
	<div class="row bg-primary">
		<h2 class="text-center" >Danh sách sản phẩm</h2>
	</div>
	<div class="container">
		<div class="row">
			<h3><a href="index.php?quanly=sanpham&ac=them"  class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>Thêm</a></h3>
		</div>
		<div class="row">
			<table class="table dataTable table-hover table-bordered" id="table_san_pham">
				<thead class="bg-primary">
					<tr class="text-center">
						<th rowspan="2" style="vertical-align: middle;" class="text-center col-md-1">ID</th>
						<th rowspan="2" style="vertical-align: middle;" class="text-center">Mã SP</th>
						<th rowspan="2" style="vertical-align: middle;" class="text-center col-md-1" >Tên sản phẩm</th>
						<th rowspan="2" style="vertical-align: middle;" class="text-center col-md-1" >Giá đề xuất</th>
						<th rowspan="2" style="vertical-align: middle;" class="text-center col-md-1" >Giá bán</th>
						<th rowspan="2" style="vertical-align: middle;" class="text-center col-md-1" >Số lượng</th>
						<th rowspan="2" style="vertical-align: middle;" class="text-center col-md-1" >Thứ tự</th>
						<th rowspan="2" style="vertical-align: middle;" class="text-center col-md-1" >Tình trạng</th>
						<th colspan="2" class="text-center">Quản lý</th>
					</tr>
					<tr>
						<th class="col-md-1">Sửa</th>
						<th class="col-md-1">Xóa</th>
					</tr>
				</thead>
				<tbody class="text-center">
					<?php
					while($row = mysqli_fetch_assoc($result)){
						?>
						<tr id = "row_<?php echo $row['id']?>">
							<td ><?php echo $row['id']?></td>
							<td class="text-left"><?php echo $row['ma_san_pham']?></td>
							<td><?php echo $row['ten_san_pham']?></td>
							<td><?php echo $row['gia_de_xuat']?></td>
							<td><?php echo $row['gia_ban']?></td>
							<td><?php echo $row['so_luong']?></td>
							<td><?php echo $row['thu_tu']?></td>
							<td><?php echo $row['tinh_trang']?></td>
							<td><a href="index.php?quanly=sanpham&ac=sua&id=<?php echo $row['id']?>" class="btn_them" ><i class="glyphicon glyphicon-edit"></i></a></td>
							<td><a href="modules/content/quan_ly_san_pham/xu_ly.php?id=<?php echo $row['id']?>" class="btn_xoa"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
	
</div>