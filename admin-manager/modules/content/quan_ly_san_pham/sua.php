<?php
include("modules/config.php");
$id = $_GET['id'];
$sql = "SELECT * FROM khuyen_mai WHERE id = ".$id;
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<div class="container-fluid bg-success ">
	<div class="row bg-primary">
		<h2 class="text-center" >Sửa khuyến mại</h2>
	</div>
	<div class="container">
		<div class="col-sm-8 col-sm-offset-2" style="margin-top: 50px;">
			<form class="form-horizontal" action="modules/content/khuyen_mai/xu_ly.php" method="post" enctype="multipart/form-data">
				<input type="text" name="id" hidden value="<?php echo $id?>">
				<div class="form-group">
					<label class="control-label col-sm-2" for="tieu_de">Tiêu đề</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="tieu_de" placeholder="Nhập tiêu đề.." name="tieu_de" required value="<?php echo $row['tieu_de']?>">
					</div>
				</div>
				<div class="form-group">        
					<label class="control-label col-sm-2" for="tieu_de">Nội dung</label>
					<div class=" col-sm-10">
						<textarea name="noi_dung" class="form-control" required><?php echo $row['noi_dung']?>
						</textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Hình ảnh</label>
					<div class="col-sm-10">
						<input type="file" id = "hinh_anh" name="hinh_anh" accept="image/*" required>
					</div>
					<div class="row">
						<img src="<?php echo 'modules/content/khuyen_mai/uploads/'.$row['hinh_anh']?>" id="view_hinh_anh" alt="Red dot" width="100px" height="100px" class="col-sm-offset-2" >
					</div>
				</div>

				<div class="form-group"> 
					<label class="control-label col-sm-2" for="start_date">Thời gian bắt đầu</label>
					<div class="col-sm-4">
						<input type="date" name="start_date"  class="form-control" placeholder="" id="start_date" value="<?php echo $row['thoi_gian_bat_dau']?>">
					</div>
				</div>
				<div class="form-group"> 
					<label class="control-label col-sm-2" for="end_date">Thời gian kết thúc</label>
					<div class="col-sm-4">
						<input type="date" name="end_date"  class="form-control" placeholder="" id="end_date" value="<?php echo $row['thoi_gian_ket_thuc']?>">
					</div>
				</div>
				<div class="form-group"> 
					<label class="control-label col-sm-2" for="thu_tu">Thứ tự</label>
					<div class="col-sm-4">
						<input type="number" name="thu_tu" min="0" value="0" class="form-control" placeholder="" id="thu_tu" value="<?php echo $row['thu_tu']?>">
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-sm-2" for="tinh_trang">Tình trạng</label>
					<div class="col-sm-4">
						<select name="tinh_trang" class="form-control" value="<?php echo $row['tinh_trang']?>">
							<option value="1">Kích hoạt</option>
							<option value="0">Không kích hoạt</option>
						</select>
					</div>
				</div>
				<p class="col-sm-offset-2"><?php
				if(isset($_GET['error'])){
					echo "Lỗi thêm khuyến mại";
				}
				?></p>
				<div class="form-group">        
					<div class="col-sm-offset-2 col-sm-10">
						<button  class="btn btn-primary" name="sua" >Sửa</button>
					</div>
				</div>
			</form>
		</div>

	</div>
</div>