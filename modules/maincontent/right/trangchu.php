<style type="text/css">
.thumbnail img {
	height:180px;
	width:100%;

}
.thumbnail .caption{
	height: 100px;
	white-space: unset;
}
.thumbnail .ratings{
	height: 20px;
}
</style>
<?php 
$sql_new = "SELECT * FROM san_pham WHERE tinh_trang = 1 order by id_san_pham limit 8";
$resutl = mysqli_query($conn, $sql_new);
$sql_loai_lon = "SELECT * FROM phan_loai_lon WHERE tinh_trang = 1";
$result_loai_lon = mysqli_query($conn,$sql_loai_lon);
?>
<div class="container">
	<!-- title -->
	<div class="new-product">
		<div class="row">
			<div class="linkview">
				<p>Sản phẩm mới nhất</p>
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
	<!-- title -->
	<?php 
	while ($row_loai_lon = mysqli_fetch_assoc($result_loai_lon) ) {
		?>
		<div class="new-product">
			<div class="row">
				<div class="linkview">
					<p><?php echo $row_loai_lon['ten']?></p>
				</div>
			</div>
			<!-- List product -->
			<div class="content ">
				<div class="row">
					<?php 
					$sql_san_pham = "SELECT a.*, b.id as id_phan_loai_lon FROM san_pham a, phan_loai_lon b, phan_loai_nho c WHERE a.id_loai_sp = c.id and b.id =c.id_phan_loai_lon  AND a.tinh_trang = 1 AND b.id =".$row_loai_lon['id']."  order by id_san_pham limit 8";
					$result_san_pham = mysqli_query($conn, $sql_san_pham);
					if(mysqli_num_rows($result_san_pham)==0){
						echo "<h3>Hiện tại chưa có sản phẩm..</h3>";
					}else{
						
						while ($row = mysqli_fetch_assoc($result_san_pham)) {
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
		<?php
	}
	?>
	
	<!-- Modal -->
	<div class="modal fade" id="product_view" role="dialog">
		
	</div>
</div>
<script type="text/javascript" src="js/xem_nhanh.js"></script>