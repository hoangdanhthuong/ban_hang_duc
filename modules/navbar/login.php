
<a data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a>
<!-- Modal -->
<div class="modal fade" id="login" role="dialog">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<div class="panel-heading">
					<h3 class="panel-title text-center">Đăng nhập</h3>
				</div>
			</div>
			<div class="modal-body">
				<div class="panel-body">
					<form role="form">
						<fieldset>
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input class="form-control" placeholder="E-mail" name="email" type="email" autofocus id="email-user" required="required">
							</div>
							<p id="error-email"></p>
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input class="form-control" placeholder="Password" name="password" type="password" value="" id="password-user" required="required">
							</div>
							<p id="error-password"></p>
							<!-- Change this to a button or input when using this as a form -->
							<p id="error-login"></p>
							
							<div class="form-group">
								<button type="button" class="btn btn-success btn-block" id="btn-login-user">Đăng nhập</button>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>