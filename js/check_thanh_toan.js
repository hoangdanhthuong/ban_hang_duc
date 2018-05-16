$(document).ready(function(){
	$('#btn_thanh_toan').on('click', function(){
		if($('#ho_ten').text()==''){
			alert('Bạn chưa đăng nhập! Mời đăng nhập hoặc đăng ký để thanh toán.');
			$('#btn_login').click();
		}else{
			window.location = "index.php?xem=thanhtoan";
		}
	});
});