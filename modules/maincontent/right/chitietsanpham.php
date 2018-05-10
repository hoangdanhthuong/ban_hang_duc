
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
							<div class="tab-pane active" id="pic-1"><img src="images/giay_the_thao/1-2.jpg" /></div>
							<div class="tab-pane" id="pic-2"><img src="images/giay_the_thao/1-1.jpg" /></div>
							<div class="tab-pane" id="pic-3"><img src="images/giay_the_thao/1-3.jpg" /></div>
							<div class="tab-pane" id="pic-4"><img src="images/giay_the_thao/1-4.jpg" /></div>
							<div class="tab-pane" id="pic-5"><img src="images/giay_the_thao/2-1.jpg" /></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
							<li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="images/giay_the_thao/1-2.jpg" /></a></li>
							<li><a data-target="#pic-2" data-toggle="tab"><img src="images/giay_the_thao/1-1.jpg" /></a></li>
							<li><a data-target="#pic-3" data-toggle="tab"><img src="images/giay_the_thao/1-3.jpg" /></a></li>
							<li><a data-target="#pic-4" data-toggle="tab"><img src="images/giay_the_thao/1-4.jpg" /></a></li>
							<li><a data-target="#pic-5" data-toggle="tab"><img src="images/giay_the_thao/2-1.jpg" /></a></li>
						</ul>

					</div>
					<div class="details col-md-6">
						<h3 class="product-title">Giày thể thao BH-052</h3>
						<div class="rating">
							<div class="stars">
								<i class="glyphicon glyphicon-star"></i>
								<i class="glyphicon glyphicon-star"></i>
								<i class="glyphicon glyphicon-star"></i>
								<i class="glyphicon glyphicon-star"></i>
							</div>
							<span class="review-no">41 đánh giá</span>
						</div>
						<p class="product-description">Sản phẩm đi êm ái. Thoải mái chống hôi chân. Thích hợp cho đá bóng</p>
						<h4 class="price">Giá bán: <span><?php echo number_format(588000)." VNĐ"?></span></h4>
						<h4 class="price">Giá bán TT: <span><del><?php echo number_format(720000)." VNĐ"?></del></span></h4>
						<p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
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
					<div class="panel-heading">Panel Heading</div>
					<div class="panel-body">Panel Content</div>
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