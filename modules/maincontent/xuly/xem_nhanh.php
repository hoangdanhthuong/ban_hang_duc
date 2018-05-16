<?php
include_once("../../../admin-manager/modules/config.php");

?>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
			<h3 class="modal-title">Quần đẹp tuyệt vời</h3>
		</div>
		<div class="modal-body">
			<div class="row">
				<div class="col-md-6 product_img">
					<img src="images/quan_ao/1-1.jpg" class="img-responsive">
				</div>
				<div class="col-md-6 product_content">
					<h4>Mã sản phẩm: <span>51526</span></h4>
					<div class="rating">
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						(10 reviews)
					</div>
					<div style="height: 200px; position: relative;">

						<p>Áo tuyệt đẹp</p>
					</div>
					<h3 class="cost"><span class="glyphicon glyphicon-vnd"></span> <?php echo number_format(800000).' VNĐ'?> <small class="pre-cost"><span class="glyphicon glyphicon-vnd"></span><?php echo number_format(900000).' VNĐ'?> </small></h3>

					<div class="space-ten"></div>
					<div class="btn-ground">
						<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span> Thêm vào giỏ</button>
						<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-heart"></span> Yêu thích</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>