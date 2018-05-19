<?php
include_once('../../../config.php');
$id = $_POST['id'];
$tinh_trang = $_POST['trang_thai'];
$sql = "SELECT a.*, b.ten_san_pham, b.ma_san_pham FROM chi_tiet_don_hang a, san_pham b  WHERE a.id_san_pham = b.id_san_pham and id_don_hang = ".$id;
$result = mysqli_query($conn, $sql);
$sql_update = "UPDATE don_hang SET tinh_trang='".$tinh_trang."' WHERE id = ".$id;
mysqli_query($conn, $sql_update);
?>
<thead class="bg-primary">
	<tr class="text-center">
		<th  style="vertical-align: middle;" class="text-center col-md-1">ID</th>
		<th style="vertical-align: middle;" class="text-center">Họ tên</th>
		<th  style="vertical-align: middle;" class="text-center col-md-1" >Tên đăng nhập</th>
		<th style="vertical-align: middle;" class="text-center col-md-1" >Tổng tiền</th>
		<th  style="vertical-align: middle;" class="text-center col-md-1" >Số lượng</th>
		<th  style="vertical-align: middle;" class="text-center col-md-4" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Tình trạng &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    </th>
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
			<td><?php echo $row['so_luong']?></td>
			<td><?php echo $row['don_gia']?></td>
			<td colspan="col-md-2" style="white-space: nowrap;">
				<select class="form-control trang_thai_chi_tiet"  name="tinh_trang">
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
		</tr>
		<?php
	}
	?>
</tbody>
<script type="text/javascript">
	$('.trang_thai_chi_tiet').on('change',function(){
		 var id = $(this).closest('tr').find('td:eq(0)').text();
		 var tinh_trang = $(this).val();
		 $.ajax({
		 	url: "modules/content/hoa_don/xu_ly/chi_tiet_hoa_don.php",
		 	type: "POST",
		 	data: {id:id, tinh_trang:tinh_trang},
		 	success: function(data){
		 		if(data){
		 			alert(data);
		 		}
		 	}
		 })
	});
</script>