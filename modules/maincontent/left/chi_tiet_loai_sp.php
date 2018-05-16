<?php
$id = $_GET['id'];
$sql_loai = "SELECT * FROM phan_loai_nho WHERE id = ".$id;
$row_loai = mysqli_fetch_assoc(mysqli_query($conn, $sql_loai));
$sql = "SELECT * FROM san_pham WHERE id_loai_sp = ".$id;
$resutl = mysqli_query($conn, $sql);
?>
<div class="container">
	<!-- title -->
	<div class="new-product">
		<div class="row">
			<div class="linkview">
				<p><?php echo $row_loai['ten'];?></p>
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
									<button type="button" class="btn btn-primary" id="btn_xem_nhanh_<?php echo $row['id_san_pham']?>" data-toggle="modal" data-target="#product_view"><span><i class="glyphicon glyphicon-search"></i></span> Xem nhanh</button>
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
	
</div>
<script type="text/javascript" src="js/xem_nhanh.js"></script>