<?php
$sql_loai = "SELECT * FROM phan_loai_nho WHERE tinh_trang = 1";
$result_loai = mysqli_query($conn, $sql_loai);
$sql_hieu = "SELECT * FROM thuong_hieu WHERE tinh_trang";
$result_hieu = mysqli_query($conn, $sql_hieu);
$id= $_GET['id'];
$sql = "SELECT * FROM san_pham WHERE id_san_pham = ".$id;
$row_san_pham= mysqli_fetch_assoc(mysqli_query($conn, $sql));
$target_name = "modules/content/quan_ly_san_pham/uploads/";
?>
<div class="container-fluid bg-success ">
	<div class="row bg-primary">
		<h2 class="text-center" >Thêm sản phẩm</h2>
	</div>
	<div class="container">
		<div class="col-sm-8 col-sm-offset-2" style="margin-top: 50px;">
			<form class="form-horizontal" action="modules/content/quan_ly_san_pham/xu_ly.php?id=<?php echo $id?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label class="control-label col-sm-2" for="ma_sp">Mã sản phẩm</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="ma_sp" placeholder="Nhập mã sản phẩm.." name="ma_sp" value="<?php echo $row_san_pham['ma_san_pham']?>" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="ten_sp">Tên sản phẩm:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="ten_sp" placeholder="Nhập tên sảnp phẩm.." name="ten_sp" required value="<?php echo $row_san_pham['ten_san_pham']?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="tieu_de">Tiêu đề</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="tieu_de" placeholder="Nhập tiêu đề.." name="tieu_de" required value="<?php echo $row_san_pham['tieu_de']?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="gia_de_xuat">Giá đề xuất:</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="gia_de_xuat" placeholder="Nhập giá đề xuất.." name="gia_de_xuat" required value="<?php echo $row_san_pham['gia_de_xuat']?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="gia_ban">Giá bán</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="gia_ban" placeholder="Nhập giá bán.." name="gia_ban" required value="<?php echo $row_san_pham['gia_ban']?>">
					</div>
				</div>
				<div class="form-group">        
					<label class="control-label col-sm-2" for="noi_dung">Chi tiết:</label>
					<div class=" col-sm-10">
						<textarea name="noi_dung" class="form-control" rows="10"  id = "noi_dung"required><?php echo $row_san_pham['chi_tiet_san_pham']?>
					</textarea>
				</div>
			</div>
			<div class="form-group"> 
				<label class="control-label col-sm-2" for="so_luong">Số lượng</label>
				<div class="col-sm-4">
					<input type="number" name="so_luong" min="1" value="1" class="form-control" placeholder="" id="so_luong" value="<?php echo $row_san_pham['so_luong']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Hình ảnh</label>
				<div class="col-sm-10">
					<input type="file" id = "hinh_anh" name="hinh_anh" accept="image/*">
				</div>
				<div class="row">
					<img src="<?php echo $target_name.$row_san_pham['hinh_anh_tieu_de']?>" id="view_hinh_anh" alt="Red dot" width="100px" height="100px" class="col-sm-offset-2" >
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Hình ảnh sản phẩm</label>
				<div class="col-sm-10">
					<input type="file" id = "hinh_anh_sp" name="hinh_anh_sp[]" multiple  accept="image/*" >
				</div>
				<div class="row">
					<img src="<?php  echo $target_name.explode(':', $row_san_pham['hinh_anh_tieu_de'])[0]?>" id="view_hinh_anh1" alt="Red dot" width="100px" height="100px" class="col-sm-offset-2" >
				</div>
			</div>
			<div class="form-group"> 
				<label class="control-label col-sm-2" for="thu_tu">Thứ tự</label>
				<div class="col-sm-4">
					<input type="number" name="thu_tu" min="0" value="0" class="form-control" placeholder="" id="thu_tu" value="<?php echo $row_san_pham['thu_tu']?>">
				</div>
			</div>
			<div class="form-group"> 
				<label class="control-label col-sm-2" for="kich_thuoc">Kích thước</label>
				<div class="col-sm-4">
					<input type="text" name="kich_thuoc" value="<?php echo $row_san_pham['kich_thuoc']?>" class="form-control" placeholder="" id="kich_thuoc">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="thuong_hieu">Thương hiệu</label>
				<div class="col-sm-4">
					<select name="thuong_hieu" class="form-control col-sm-4" id="thuong_hieu">
						<?php
						while($row_loai = mysqli_fetch_assoc($result_hieu)){
							if($row_loai['id_thuong_hieu'] == $row_san_pham['id_hieu_sp']){
								echo '<option selected value="'.$row_loai['id_thuong_hieu'].'">'.$row_loai['ten_thuong_hieu'].'</option>';	
							}else{
								echo '<option value="'.$row_loai['id_thuong_hieu'].'">'.$row_loai['ten_thuong_hieu'].'</option>';
							}

						}
						?>

					</select>
				</div>
			</div>
			<div class="form-group ">
				<label class="control-label col-sm-2" for="loai_sp">Loại sản phẩm</label>
				<div class="col-sm-4">
					<select name="loai_sp" class="form-control" id="loai_sp">
						<?php
						while($row_loai = mysqli_fetch_assoc($result_loai)){
							if($row_san_pham['id_hieu_sp']==$row_loai['id']){
								echo '<option selected value="'.$row_loai['id'].'">'.$row_loai['ten'].'</option>';
							}else{
								echo '<option value="'.$row_loai['id'].'">'.$row_loai['ten'].'</option>';
							}
							
						}
						?>
					</select>
				</div>
			</div>
			<div class="form-group ">
				<label class="control-label col-sm-2" for="tinh_trang">Tình trạng</label>
				<div class="col-sm-4">
					<select name="tinh_trang" class="form-control" id="tinh_trang">
						<?php
						if($row_san_pham['tinh_trang']==1){
							echo '<option value="1" selected>Kích hoạt</option>
							<option value="0">Không kích hoạt</option>';
						}else{
							echo '<option value="1">Kích hoạt</option>
							<option value="0" selected>Không kích hoạt</option>';
						}
						?>
						
					</select>
				</div>
			</div>
			<p class="col-sm-offset-2" style="color: red"><?php
			if(isset($_GET['error'])){
				echo "Lỗi sửa sản phẩm";
			}
			?></p>
			<div class="form-group">        
				<div class="col-sm-offset-2 col-sm-10">
					<button  class="btn btn-primary col-sm-4" type="submit" name="sua" >Sửa</button>
				</div>
			</div>
		</form>
	</div>

</div>
</div>