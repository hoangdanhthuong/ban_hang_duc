$(document).on('click', '#btn_login_admin', function(){
	var email = $('#email_login_admin').val().trim();
	var password = $('#password_login_admin').val().trim();
	$('#email_login_admin').text('');
	$('#error_password_admin').text('');
	$('#error_login').text('');
	if(email.length>6&&password.length>4){
		$.ajax({
			url: 'modules/xuly/process_login.php',
			method: 'POST',
			data: {email: email, password: password},
			beforeSend: function(){
				$('#btn_login_admin').text('Đang xử lý...');
			},
			success:function(data){
				if(data){
					alert('Đăng nhập thành công! ' + data);
					$('body').css('background-color','white');
					window.location = 'index.php';
					$('#btn_login_admin').text('Đăng nhập');
				}else{
					return false;
				}

			}
		});

	}else{
		if(email.length<=6){
			$('#error_email_admin').text('Email bị lỗi!').css('color','red');
		}
		if(password.length<=4){
			$('#error_password_admin').text('Mật khẩu bị lỗi!').css('color','red');
		}else{
			$('#error_login').text('Lỗi đăng nhập!').css('color','red');
		}
		return false;
	}
});
$('#password_login_admin').keypress(function(e){
	var key = e.which;
	if(key==13){
		$('#btn_login_admin').click();
	}
});
$(document).ready(function () {
	$('.nav li a').click(function(e) {
		
		window.location=$(this).attr('href');
		$('.nav li.active').removeClass('active');

		var $parent = $(this).parent();

		$parent.addClass('active');

	});
});