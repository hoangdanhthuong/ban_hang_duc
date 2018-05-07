<?php
include("modules/config.php");
$sql = "SELECT a.*, b.ten as ten_phan_loai_lon FROM phan_loai_nho a , phan_loai_lon b WHERE a.id_phan_loai_lon = b.id";
$result = mysqli_query($conn,$sql);
?>
<div class="container-fluid bg-success ">
	<div class="row bg-primary">
		<h2 class="text-center" >Danh sách phân loại nhỏ</h2>
	</div>
	<div class="container">

		<div class="row">
			<h3><a href="" id="" data-toggle ='modal' data-target='#them_phan_loai_nho' class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>Thêm</a></h3>
		</div>
		<div class="row">
			<table class="table dataTable table-hover table-bordered" id="table_phan_loai_nho">
				<thead class="bg-primary">
					<tr class="text-center">
						<th rowspan="2" style="vertical-align: middle;" class="text-center col-md-1">ID</th>
						<th rowspan="2" style="vertical-align: middle;" class="text-center">Tên phân loại nhỏ</th>
						<th rowspan="2" style="vertical-align: middle;" class="text-center">Tên phân loại lớn</th>
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
							<td class="text-left"><?php echo $row['ten']?></td>
							<td class="text-left" id="<?php echo $row['id_phan_loai_lon']?>"><?php echo $row['ten_phan_loai_lon']?></td>
							<td><?php echo $row['thu_tu']?></td>
							<td><?php echo $row['tinh_trang']?></td>
							<td><a href="" class="btn_sua" data-toggle = "modal" data-target = "#sua_phan_loai_nho"><i class="glyphicon glyphicon-edit"></i></a></td>
							<td><a href="" class="btn_xoa"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
	
</div>