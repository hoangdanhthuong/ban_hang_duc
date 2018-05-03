
<a  data-toggle="modal" data-toggle="modal" data-target="#register"><span class="glyphicon glyphicon-user"></span> Đăng ký</a>

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
					<form role="form">
						<hr class="colorgraph">
						<div class="row form-group">
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="username" id="username-signup" class="form-control input-lg" placeholder="Tên đăng nhập.." tabindex="1">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="phone_number" id="phone_number" class="form-control input-lg" placeholder="Nhập số điện thoại.." tabindex="2">
								</div>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="password" name="password" id="password-signup" class="form-control input-lg" placeholder="Nhập mật khẩu.." tabindex="5">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Nhập lại mật khẩu.." tabindex="6">
								</div>
							</div>
						</div>
						<p id="error-confirm-password"></p>
						<div class="row form-group">
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="text" id="full_name" class="form-control input-lg" placeholder="Nhập họ tên.." tabindex="5">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="mail" id="email" class="form-control input-lg" placeholder="Nhập địa chỉ.." tabindex="6">
								</div>
							</div>
						</div>
						<div class=" row ">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<input type="text" name="address" id="address" class="form-control input-lg" placeholder="Nhập email.." tabindex="3">
							</div>
							
						</div>
						
						
						<hr class="colorgraph">
						<div class="row form-group">
							<div class="col-xs-12 col-md-6 col-md-offset-3"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
						</div>
					</form>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>