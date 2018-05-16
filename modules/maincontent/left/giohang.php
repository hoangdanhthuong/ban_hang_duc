<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-info">
			<div class="panel-heading">
				<div class="panel-title">
					<div class="row">
						<div class="col-xs-10">
							<h5><span class="glyphicon glyphicon-shopping-cart"></span> Giỏ hàng</h5>
						</div>
						<div class="col-xs-2">
							<a href="index.php" type="button" class="btn btn-primary btn-sm btn-block">
								<span class="glyphicon glyphicon-share-alt"></span> Tiếp tục mua hàng
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="panel-body">
				<table class="table table-bordered table-hover" id="banggiohang">
					<thead class="bg-primary">
						<tr >
							<th class="text-center" width="5%">Mã SP</th>
							<th class="text-center" width="10%">Hình ảnh</th>
							<th class="text-center" width="35%">Tên sản phẩm</th>
							<th class="text-center" width="15%">Số lượng</th>
							<th class="text-center" width="10%">Đơn giá</th>
							<th class="text-center" width="15%">Thành tiền</th>
							<th class="text-center" width="10%">Quản lý</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$target = "admin-manager/modules/content/quan_ly_san_pham/uploads/";
						$sum =0;
						foreach ($_SESSION as $key => $value) {
							if(substr($key, 0,9)=='gio_hang_'){
								
								$sql = "SELECT * FROM san_pham WHERE id_san_pham = ".substr($key, 9);
								$row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
								$thanh_tien=$row['gia_ban']*$value;
								$sum += $thanh_tien;
								?>
								<tr id="row_<?php echo substr($key,9);?>">
									<td class="col-md-2"><?php echo $row['ma_san_pham']?></td>
									<td><img src="<?php echo $target.$row['hinh_anh_tieu_de']?>" alt="hinhanh" height="50px" width="100px"></td>
									<td><?php echo $row['ten_san_pham']?></td> 
									<td class="text-center">
										<a href="javascript:void(0)"  id="btn_giam_sp_<?php echo substr($key,9);?>">
											<i class="glyphicon glyphicon-minus"></i>
										</a>
										<span style="border: 1px solid black; text-align: center;font-weight: bold; font-size: 16px; padding: 5px "  id="soluongsanpham"><?php echo $value;?></span>
										<a href="javascript:void(0)" id="btn_tang_sp_<?php echo substr($key,9);?>">
											<i class="glyphicon glyphicon-plus"></i>
										</a>
									</td>
									<td class="text-center"><b><?php echo number_format($row['gia_ban']).' VND'?></b></td>
									<td class="text-center" ><b><?php echo number_format($thanh_tien).' VND'?></b></td>
									<td class="text-center"><a href="javascript:void(0)"  id="btn_delete_product_<?php echo substr($key,9);?>"><i class="glyphicon glyphicon-trash "></i></a></td>
								</tr>
								<?php
							}
						}
						?>
					</tbody>
				</table>
				<div class="row">
					<div class="text-center">
						<div class="col-xs-9">
							<h6 class="text-right">Thêm sản phẩm?</h6>
						</div>
						<div class="col-xs-3">
							<a href="index.php" class="btn btn-default btn-sm btn-block">
								Cập nhật giỏ hàng
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="panel-footer">
				<div class="row text-center">
					<div class="col-xs-9">
						<h4 class="text-right" >Tổng <strong id="tong_don"><?php echo number_format($sum)?></strong></h4>
					</div>
					<?php
					if($sum > 0){
						?>
						<div class="col-xs-3" >
							<button type="button" class="btn btn-success btn-block" id="btn_thanh_toan">
								Thanh toán
							</button>
						</div>
						<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<script type="text/javascript" src="js/check_thanh_toan.js"></script>