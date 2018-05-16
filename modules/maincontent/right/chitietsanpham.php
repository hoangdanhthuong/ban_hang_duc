<?php 
$id = $_GET['id'];
$sql = "SELECT * FROM san_pham WHERE id_san_pham = ".$id;
$row = mysqli_fetch_assoc(mysqli_query($conn,$sql));
$sql_binh_luan = "SELECT a.*, b.ho_ten FROM binh_luan a, thanh_vien b WHERE a.ten_dang_nhap = b.ten_dang_nhap AND id_san_pham=".$id;
$result_binh_luan = mysqli_query($conn, $sql_binh_luan);
if(isset($_POST['gui'])){
	$noi_dung = $_POST['noi_dung'];
	$ten_dang_nhap = $_SESSION['username_sport']['ten_dang_nhap'];
	$sql_new_binh_luan = "INSERT INTO binh_luan(noi_dung, id_san_pham, ten_dang_nhap) VALUES ('".$noi_dung."', '".$id."','".$ten_dang_nhap."')";
	mysqli_query($conn,$sql_new_binh_luan);
	header("location: index.php?xem=chitietsanpham&id=".$id);
}
	?>
	<div class="row">

		<div class="details-product col-md-10 col-md-offset-1">
			<div class="row">
				<div class="tieude bg-primary ">
					<h3 class="text-center">Chi tiết sản phẩm</h3>
				</div>
			</div>
			<div class="card row">
				<div class="container-fliud">
					<div class="wrapper row thumbnail">
						<div class="preview col-md-6 ">

							<div class="preview-pic tab-content">
								<?php 
								$image = array();
								$image = explode(':',$row['hinh_anh_sp']);
								?>
								<div class="tab-pane active " id="pic-1"><img style="position: relative;height: 400px" src="<?php echo $target.$row['hinh_anh_tieu_de'];?>" /></div>
								<?php
								for ($i = 0; $i < count($image); $i++){
									echo '<div class="tab-pane" id="pic-'.($i + 2).'"><img style="position: relative;height: 400px" src="'.$target.$image[$i].'" /></div>';
								}
								?>
							</div>
							<ul class="preview-thumbnail nav nav-tabs" >
								<li class="active" ><a data-target="#pic-1" data-toggle="tab"><img style="position: relative;height: 75px" src="<?php echo $target.$row['hinh_anh_tieu_de'];?>" /></a></li>
								<?php
								for ($i = 0; $i < count($image); $i++){
									echo '<li ><a data-target="#pic-'.($i + 2).'" data-toggle="tab" ><img style="position: relative;height: 75px" src="'.$target.$image[$i].'" /></a></li>';
								}
								?>
							</ul>

						</div>
						<div class="details col-md-6">
							<h3 class="product-title"><?php echo $row['ten_san_pham'] ?></h3>
							<div class="rating">
								<div class="stars">
									<i class="glyphicon glyphicon-star"></i>
									<i class="glyphicon glyphicon-star"></i>
									<i class="glyphicon glyphicon-star"></i>
									<i class="glyphicon glyphicon-star"></i>
								</div>
								<span class="review-no">41 đánh giá</span>
							</div>
							<p class="product-description"><?php echo $row['tieu_de'] ?></p>
							<h4 class="price">Giá bán: <span><?php echo number_format($row['gia_ban'])." VNĐ"?></span></h4>
							<h4 class="price">Giá bán TT: <span><del><?php echo number_format($row['gia_de_xuat'])." VNĐ"?></del></span></h4>
							<p class="vote"><strong>91%</strong> người dùng đánh giá <strong>(87 votes)</strong></p>
							<h5 class="sizes">Kích thước:
								<?php 
								$sizes = explode(' ', $row['kich_thuoc'] );
								foreach ($sizes as $key => $value) {
									echo '
									<label class="radio-inline">
									<input type="radio" value="'.$value.'" name="size" id="size"><b>'.$value.'</b>
									</label>';
								}
								?>
							</h5>
							<div class="action" style="margin-top: 20px">
								<a href="javascript:void(0)" class="btn btn-primary btn-lg btn-buy-now-<?php echo $row['id_san_pham']?> " id="btn-buy-now-<?php echo $row['id_san_pham']?>"><span><i class="glyphicon glyphicon-shopping-cart"></i></span> Thêm vào giỏ</a>
								<button class="btn btn-danger btn-lg" type="button"><i class="glyphicon glyphicon-heart"></i></button>
							</div>
						</div>
					</div>

				</div>

			</div>
			<div class="row">
				<div class="container col-md-12">
					<div class="tieudebaiviet bg-info">
						<h3>Bài viết đánh giá</h3>
					</div>

					<div class="panel panel-default">
						<div class="panel-body"><?php echo $row['chi_tiet_san_pham']?></div>
					</div>
				</div>
			</div>
			<div class="binhluan row">
				<div class="container col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="tieude">
								<h4>Bình luận</h4>
							</div>
						</div>
						<div class="panel-body">
							<?php 
							if(mysqli_num_rows($result_binh_luan)==0){
								echo '<p>Chưa có bình luận nào..</p>';
							}else{
								while ($row_binh_luan = mysqli_fetch_assoc($result_binh_luan)) {
								
								
								?>
								<div class="well well-sm">
									<p><b><?php echo $row_binh_luan['ho_ten']?>:</b> <?php echo $row_binh_luan['noi_dung']?></p>
								</div>
								<?php
								}
							}
							?>
						</div>
						<?php 
						if(isset($_SESSION['username_sport'])){
							?>
							<form class="form-group" method="post" action="">
								<textarea placeholder="Nhập nội dung bình luận.." name="noi_dung"></textarea>
								<button class="btn btn-info " type="submit" name="gui">Gửi</button>
							</form>
							<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
	<?php include("modules/maincontent/right/slidesanpham.php");?>