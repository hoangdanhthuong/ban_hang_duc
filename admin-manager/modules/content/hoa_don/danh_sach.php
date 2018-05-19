<?php
include("modules/config.php");
$sql = "SELECT a.*, b.ho_ten, b.dien_thoai FROM don_hang a, thanh_vien b WHERE a.ten_dang_nhap = b.ten_dang_nhap and a.tinh_trang <> 3";
$result = mysqli_query($conn,$sql);
?>
<hr>
<div class="row">
	
	<div class="col-md-6">
		<div class="row" style="background-color: #ff3399; color: white">
			<h4 class="text-center" >Danh sách hóa đơn</h4>
		</div>
		<div class="table-responsive">
			<table class="table dataTable table-hover table-bordered" id="table_hoa_don">
				<thead class="bg-primary">
					<tr class="text-center">
						<th  style="vertical-align: middle;" class="text-center col-md-1">ID</th>
						<th style="vertical-align: middle;" class="text-center">Mã sản phẩm</th>
						<th  style="vertical-align: middle;" class="text-center col-md-1" >Tên sản phẩm</th>
						<th style="vertical-align: middle;" class="text-center col-md-1" >Tổng tiền</th>
						<th  style="vertical-align: middle;" class="text-center col-md-1" >Số lượng</th>
						<th  style="vertical-align: middle;" class="text-center "  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Tình trạng &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       </th>
						<th  style="vertical-align: middle;" class="text-center col-md-1" >Cập nhật</th>
						<th  style="vertical-align: middle;" class="text-center col-md-1" >Chi tiết</th>
						
					</tr>
				</thead>
				<tbody class="text-center">
					<?php
					while($row = mysqli_fetch_assoc($result)){
						?>
						<tr id = "row_<?php echo $row['id']?>">
							<td ><?php echo $row['id']?></td>
							<td class="text-left"><?php echo $row['ho_ten']?></td>
							<td><?php echo $row['ten_dang_nhap']?></td>
							<td><?php echo $row['tongtien']?></td>
							<td><?php echo $row['tong_sp']?></td>
							<td colspan="col-md-2">
								<select class="form-control" id="trang_thai_van_chuyen" style ="white-space: nowrap;" >
									<?php 
										if($row['tinh_trang'] == 0){
											echo '<option value="0" selected>Đang chờ xử lý</option>
									<option value="1">Đang vận chuyển</option>
									<option value="2">Hàng trả lại</option>
									<option value="3">Giao hàng thành công</option>';
										}elseif($row['tinh_trang'] == 1){
											echo '<option value="0" >Đang chờ xử lý</option>
									<option value="1" selected>Đang vận chuyển</option>
									<option value="2">Hàng trả lại</option>
									<option value="3">Giao hàng thành công</option>';
								}elseif($row['tinh_trang'] == 2){
											echo '<option value="0" >Đang chờ xử lý</option>
									<option value="1" >Đang vận chuyển</option>
									<option value="2" selected>Hàng trả lại</option>
									<option value="3">Giao hàng thành công</option>';
								}elseif($row['tinh_trang'] == 3){
											echo '<option value="0" >Đang chờ xử lý</option>
									<option value="1" >Đang vận chuyển</option>
									<option value="2">Hàng trả lại</option>
									<option value="3" selected>Giao hàng thành công</option>';
								}
									?>
									
								</select>
							</td>
							<td><a href="javascript:void(0)" class="btn btn-primary" id="cap_nhap_don">Cập nhật</a></td>
							<td><a href="javascript:void(0)" class="btn btn-info" id="chi_tiet">Chi tiết</a></td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
	<div class="col-md-6" style="margin-right: -20px">
		<div class="row " style="background-color: #ff3399; color: white">
			<h4 class="text-center col-md-12" >Chi tiết đơn hàng</h4>
		</div>
		<div class="table-responsive">
			<table class="table dataTable table-hover table-bordered" id="table_chi_tiet">
			</table>
		</div>
	</div>
	
</div>