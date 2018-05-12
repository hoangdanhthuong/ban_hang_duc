<?php 
$id = $_GET['id'];
$sql = "SELECT * FROM san_pham WHERE id_san_pham = ".$id;
$row = mysqli_fetch_assoc(mysqli_query($conn,$sql));
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
				<div class="wrapper row">
					<div class="preview col-md-6">

						<div class="preview-pic tab-content">
							<?php 
							$image = array();
							$image = explode(':',$row['hinh_anh_sp']);
							?>
							<div class="tab-pane active" id="pic-1"><img style="position: relative;height: 400px" src="<?php echo $target.$row['hinh_anh_tieu_de'];?>" /></div>
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
							<span class="size" data-toggle="tooltip" title="small">s</span>
							<span class="size" data-toggle="tooltip" title="medium">m</span>
							<span class="size" data-toggle="tooltip" title="large">l</span>
							<span class="size" data-toggle="tooltip" title="xtra large">xl</span>
						</h5>
						<h5 class="colors">Màu:
							<span class="color orange" data-toggle="tooltip" title="Not In store"></span>
							<span class="color green"></span>
							<span class="color blue"></span>
						</h5>
						<div class="action">
							<button class="btn btn-info btn-lg" type="button">Thêm vào giỏ</button>
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
						<div class="well well-sm">
							<p>Người dùng: Nội dung bình luận</p>
						</div>
					</div>
					<form class="form-group">
						<textarea placeholder="Nhập nội dung bình luận.."></textarea>
						<button class="btn btn-info ">Gửi</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-2"></div>
</div>
<?php include("modules/maincontent/right/slidesanpham.php");?>