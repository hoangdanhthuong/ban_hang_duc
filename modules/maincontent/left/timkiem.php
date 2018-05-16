<?php
$tim_kiem= $_POST['tim_kiem'];
$sql = "SELECT a.*, b.ten as ten_loai FROM san_pham a, phan_loai_nho b WHERE a.id_loai_sp = b.id and (ten_san_pham LIKE '%".$tim_kiem."%' OR b.ten LIKE '%".$tim_kiem."%' OR tieu_de LIKE '%".$tim_kiem."%' OR ma_san_pham LIKE '%".$tim_kiem."%')";

$resutl = mysqli_query($conn, $sql);
?>
<div class="container">
	<!-- title -->
	<div class="new-product">
		<div class="row">
			<div class="linkview">
				<p>Kết quả tìm kiếm: <?php echo mysqli_num_rows($resutl)?></p>
			</div>
		</div>
		<!-- List product -->
		<div class="content ">
			<div class="row">
				<?php 

				if(mysqli_num_rows($resutl)==0){
					echo "<h3>Hiện tại chưa có sản phẩm..</h3>";
				}else{
					$target = "admin-manager/modules/content/quan_ly_san_pham/uploads/";
					while ($row = mysqli_fetch_assoc($resutl)) {
						?>
						<div class="col-md-3">
							<div class="thumbnail">
								<img src="<?php echo $target.$row['hinh_anh_tieu_de']?>" alt="<?php echo $target.$row['hinh_anh_tieu_de']?>" >
								<div class="caption">
									<div class="row" style="height: 50px">
										<h4 class="pull-right"><?php echo number_format($row['gia_ban'])."VNĐ"?></h4>
										<h4><a href="?xem=chitietsanpham&id=<?php echo $row['id_san_pham']?>"><?php echo $row['ten_san_pham']?></a></h4>	
									</div>

									<p><b>Mã sản phẩm </b><span style="text-transform: uppercase;"><?php echo $row['ma_san_pham']?></span></p>
								</div>
								<div class="ratings">
									<p>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										(15 reviews)
									</p>
								</div>
								<div class="space-ten"></div>
								<div class="btn-ground text-center">
									<a href="javascript:void(0)" class="btn btn-primary btn-buy-now-<?php echo $row['id_san_pham']?> " id="btn-buy-now-<?php echo $row['id_san_pham']?>"><span><i class="glyphicon glyphicon-shopping-cart"></i></span> Thêm vào giỏ</a>
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view"><span><i class="glyphicon glyphicon-search"></i></span> Xem nhanh</button>
								</div>
								<div class="space-ten"></div>
							</div>
						</div>
						<?php
					}
				}
				?>
				
			</div>
		</div>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="product_view" role="dialog">
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
</div>