<?php
include("modules/config.php");
$sql = "select *from tin_tuc";
$result = mysqli_query($conn,$sql);
?>
<div class="container-fluid bg-success ">
	<div class="row bg-primary">
		<h2 class="text-center" >Danh sách tin</h2>
	</div>
	<div class="container">
		<div class="row">
			<h3><a href="index.php?quanly=tintuc&ac=them"  class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>Thêm</a></h3>
		</div>
		<div class="row">
			<table class="table dataTable table-hover table-bordered" id="table_tin_tuc">
				<thead class="bg-primary">
					<tr class="text-center">
						<th rowspan="2" style="vertical-align: middle;" class="text-center col-md-1">ID</th>
						<th rowspan="2" style="vertical-align: middle;" class="text-center">Tiêu đề</th>
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
						<tr id = "row_<?php echo $row['id_tin_tuc']?>">
							<td ><?php echo $row['id_tin_tuc']?></td>
							<td class="text-left"><?php echo $row['tieu_de']?></td>
							<td>
								<?php
								if($row['tinh_trang']==1){
									echo 'Kích hoạt';
								}else{
									echo 'Không kích hoạt';
								}
								 
								 ?>
									
								</td>
							<td><a href="index.php?quanly=tintuc&ac=sua&id=<?php echo $row['id_tin_tuc']?>" class="btn_them" ><i class="glyphicon glyphicon-edit"></i></a></td>
							<td><a href="modules/content/tin_tuc/xu_ly.php?id=<?php echo $row['id_tin_tuc']?>" class="btn_xoa"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
	
</div>