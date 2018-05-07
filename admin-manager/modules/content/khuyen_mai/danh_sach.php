<?php
include("modules/config.php");
$sql = "select *from khuyen_mai";
$result = mysqli_query($conn,$sql);
?>
<div class="container-fluid bg-success ">
	<div class="row bg-primary">
		<h2 class="text-center" >Danh sách khuyến mại</h2>
	</div>
	<div class="container">
		<div class="row">
			<h3><a href="index.php?quanly=khuyenmai&ac=them"  class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>Thêm</a></h3>
		</div>
		<div class="row">
			<table class="table dataTable table-hover table-bordered" id="table_khuyen_mai">
				<thead class="bg-primary">
					<tr class="text-center">
						<th rowspan="2" style="vertical-align: middle;" class="text-center col-md-1">ID</th>
						<th rowspan="2" style="vertical-align: middle;" class="text-center">Tiêu đề</th>
						<th rowspan="2" style="vertical-align: middle;" class="text-center col-md-1" >Bắt đầu</th>
						<th rowspan="2" style="vertical-align: middle;" class="text-center col-md-1" >Kết thúc</th>
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
							<td class="text-left"><?php echo $row['tieu_de']?></td>
							<td><?php echo $row['thoi_gian_bat_dau']?></td>
							<td><?php echo $row['thoi_gian_ket_thuc']?></td>
							<td><?php echo $row['thu_tu']?></td>
							<td><?php echo $row['tinh_trang']?></td>
							<td><a href="index.php?quanly=khuyenmai&ac=sua&id=<?php echo $row['id']?>" class="btn_them" ><i class="glyphicon glyphicon-edit"></i></a></td>
							<td><a href="modules/content/khuyen_mai/xu_ly.php?id=<?php echo $row['id']?>" class="btn_xoa"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
	
</div>