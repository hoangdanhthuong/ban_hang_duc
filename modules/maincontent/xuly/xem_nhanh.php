<?php
include_once("../../../admin-manager/modules/config.php");
$id = $_POST['id'];
$sql = "SELECT * FROM san_pham WHERE id_san_pham = ".$id;
$row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
$target = "admin-manager/modules/content/quan_ly_san_pham/uploads/";
?>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
			<h3 class="modal-title"><?php echo $row['ten_san_pham']?></h3>
		</div>
		<div class="modal-body">
			<div class="row">
				<div class="col-md-6 product_img">
					<img src="<?php echo $target.$row['hinh_anh_tieu_de']?>" class="img-responsive">
				</div>
				<div class="col-md-6 product_content">
					<h4>Mã sản phẩm: <span><?php echo $row['ma_san_pham']?></span></h4>
					<div class="rating">
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						(10 reviews)
					</div>
					<div style="height: 200px; position: relative;">

						<p><?php echo $row['tieu_de']?></p>

					</div>
					<h3 class="cost"><span class="glyphicon glyphicon-vnd"></span> <?php echo number_format($row['gia_ban']).' VNĐ'?> <small class="pre-cost"><span class="glyphicon glyphicon-vnd"></span><?php echo number_format($row['gia_de_xuat']).' VNĐ'?> </small></h3>

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