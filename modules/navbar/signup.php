


<a  data-toggle="modal" data-toggle="modal" data-target="#register"><span class="glyphicon glyphicon-user" id="btn_signup"></span> Đăng ký</a>

<!-- Modal -->
<div class="modal fade" id="register" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<!-- Modal -->
			<div class="modal-header text-center">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<div class="panel-heading">
					<h3 class="panel-title">Đăng ký thông tin</h3>
				</div>
			</div>
			<div class="modal-body">
				<div class="panel-body">
					<form role="form"  id="form_dang_ky" enctype="multipart/form-data" >
						<hr class="colorgraph">
						<div class="row form-group">
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="ten_dang_nhap" id="ten_dang_nhap" class="form-control input-lg" placeholder="Tên đăng nhập.." tabindex="1" required>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="number" name="dien_thoai" id="dien_thoai" class="form-control input-lg" required placeholder="Nhập số điện thoại.." tabindex="2" >
								</div>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="password" name="mat_khau" id="mat_khau" class="form-control input-lg" required placeholder="Nhập mật khẩu.." tabindex="5">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" required name="ho_ten" id="ho_ten" class="form-control input-lg" placeholder="Nhập họ tên.." tabindex="5">
								</div>
							</div>
						</div>
						<p id="error-confirm-password"></p>
						<div class="row form-group">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<input type="email" name="email" id="email" class="form-control input-lg" required placeholder="Nhập địa chỉ email.." tabindex="6">
								</div>
							</div>
						</div>
						<div class=" row ">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<textarea type="text" name="dia_chi" id="dia_chi" class="form-control input-lg" required placeholder="Nhập địa chỉ.." tabindex="3" rows="3"></textarea>
							</div>
							
						</div>
						<hr class="colorgraph">
						<div class="row form-group">
							<div class="col-xs-12 col-md-6 col-md-offset-3"><input type="submit" value="Đăng ký" name="dang_ky" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
						</div>
					</form>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal" id="close_signup">Đóng</button>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<script type="text/javascript" src="js/dang_ky.js"></script>