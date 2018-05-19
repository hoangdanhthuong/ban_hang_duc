<div class="container-fluid bg-success ">
	<div class="row bg-primary">
		<h2 class="text-center" >Thêm khuyến mại</h2>
	</div>
	<div class="container">
		<div class="col-sm-8 col-sm-offset-2" style="margin-top: 50px;">
			<form class="form-horizontal" action="modules/content/khuyen_mai/xu_ly.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label class="control-label col-sm-2" for="tieu_de">Tiêu đề</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="tieu_de" placeholder="Nhập tiêu đề.." name="tieu_de" required>
					</div>
				</div>
				<div class="form-group">        
					<label class="control-label col-sm-2" for="tieu_de">Nội dung</label>
					<div class=" col-sm-10">
						<textarea name="noi_dung" class="form-control" required>
						</textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Hình ảnh</label>
					<div class="col-sm-10">
						<input type="file" id = "hinh_anh" name="hinh_anh" accept="image/*" required>
					</div>
					<div class="row">
						<img src="" id="view_hinh_anh" alt="Red dot" width="100px" height="100px" class="col-sm-offset-2" >
					</div>
				</div>

				<div class="form-group"> 
					<label class="control-label col-sm-2" for="start_date">Thời gian bắt đầu</label>
					<div class="col-sm-4">
						<input type="date" name="start_date" min="0" class="form-control" placeholder="" id="start_date">
					</div>
				</div>
				<div class="form-group"> 
					<label class="control-label col-sm-2" for="end_date">Thời gian kết thúc</label>
					<div class="col-sm-4">
						<input type="date" name="end_date" min="0" class="form-control" placeholder="" id="end_date">
					</div>
				</div>
				<div class="form-group"> 
					<label class="control-label col-sm-2" for="thu_tu">Thứ tự</label>
					<div class="col-sm-4">
						<input type="number" name="thu_tu" min="0" value="0" class="form-control" placeholder="" id="thu_tu">
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-sm-2" for="tinh_trang">Tình trạng</label>
					<div class="col-sm-4">
						<select name="tinh_trang" class="form-control">
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
						<button  class="btn btn-primary" name="them" value="them">Thêm</button>
					</div>
				</div>
			</form>
		</div>

	</div>
</div>