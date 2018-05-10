<div class="container-fluid bg-success ">
	<div class="row bg-primary">
		<h2 class="text-center" >Thêm sản phẩm</h2>
	</div>
	<div class="container">
		<div class="col-sm-8 col-sm-offset-2" style="margin-top: 50px;">
			<form class="form-horizontal" action="modules/content/khuyen_mai/xu_ly.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label class="control-label col-sm-2" for="ma_sp">Mã sản phẩm</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="ma_sp" placeholder="Nhập mã sản phẩm.." name="ma_sp" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="ten_sp">Tên sản phẩm:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="ten_sp" placeholder="Nhập tên sảnp phẩm.." name="ten_sp" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="tieu_de">Tiêu đề</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="tieu_de" placeholder="Nhập tiêu đề.." name="tieu_de" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="gia_de_xuat">Giá đề xuất:</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="gia_de_xuat" placeholder="Nhập giá đề xuất.." name="gia_de_xuat" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="gia_ban">Giá bán</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="gia_ban" placeholder="Nhập giá bán.." name="gia_ban" required>
					</div>
				</div>
				<div class="form-group">        
					<label class="control-label col-sm-2" for="noi_dung">Chi tiết:</label>
					<div class=" col-sm-10">
						<textarea name="noi_dung" class="form-control"  id = "noi_dung"required>
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
					<label class="control-label col-sm-2">Hình ảnh sản phẩm</label>
					<div class="col-sm-10">
						<input type="file" id = "hinh_anh_sp" name="hinh_anh_sp[]" multiple="multiple"  accept="image/*" required>
					</div>
					<div class="row">
						<img src="" id="view_hinh_anh" alt="Red dot" width="100px" height="100px" class="col-sm-offset-2" >
					</div>
				</div>
				<div class="form-group"> 
					<label class="control-label col-sm-2" for="thu_tu">Thứ tự</label>
					<div class="col-sm-4">
						<input type="number" name="thu_tu" min="0" value="0" class="form-control" placeholder="" id="thu_tu">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="thuong_hieu">Thương hiệu</label>
					<div class="col-sm-4">
						<select name="thuong_hieu" class="form-control">
							<option value="1">Kích hoạt</option>
							<option value="0">Không kích hoạt</option>
						</select>
					</div>
				</di>
				<div class="form-group ">
					<label class="control-label col-sm-2" for="loai_sp">Loại sản phẩm</label>
					<div class="col-sm-4">
						<select name="loai_sp" class="form-control">
							<option value="1">Kích hoạt</option>
							<option value="0">Không kích hoạt</option>
						</select>
					</div>
				</div>
				<div class="form-group ">
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
					echo "Lỗi thêm sản phẩm";
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