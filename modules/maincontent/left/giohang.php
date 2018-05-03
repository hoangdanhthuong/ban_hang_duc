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
						foreach ($_SESSION as $key => $value) {
							if(substr($key, 0,9)=='gio_hang_'){


								?>
								<tr id="row_<?php echo substr($key,9);?>">
									<td><?php echo substr($key,9);?></td>
									<td><img src="" alt="hinhanh" height="50px" width="100px"></td>
									<td>Tên sản phẩm</td> 
									<td class="text-center">
										<a href="javascript:void(0)"  id="btn_giam_sp_<?php echo substr($key,9);?>">
											<i class="glyphicon glyphicon-minus"></i>
										</a>
										<span style="border: 1px solid black; text-align: center;font-weight: bold; font-size: 16px; padding: 5px "  id="soluongsanpham"><?php echo $value;?></span>
										<a href="javascript:void(0)" id="btn_tang_sp_<?php echo substr($key,9);?>">
											<i class="glyphicon glyphicon-plus"></i>
										</a>
									</td>
									<td>Đơn giá</td>
									<td>Thành tiền</td>
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
							<button type="button" class="btn btn-default btn-sm btn-block">
								Cập nhật giỏ hàng
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="panel-footer">
				<div class="row text-center">
					<div class="col-xs-9">
						<h4 class="text-right">Tổng <strong>$50.00</strong></h4>
					</div>
					<div class="col-xs-3">
						<button type="button" class="btn btn-success btn-block">
							Thanh toán
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>