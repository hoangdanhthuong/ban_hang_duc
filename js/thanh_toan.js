$(document).ready(function(){
	$('#btn_dia_chi').on('click', function(){
		$('#form_dia_chi').show();
	});
	$("#cap_nhat_dia_chi").on('click', function(){
		$("#dia_chi_giao_hang").text($('#dia_chi').val());
		$('#form_dia_chi').hide();
		var dia_chi = $('#dia_chi').val();
		$.ajax({
			url: "modules/maincontent/xuly/cap_nhat_dia_chi.php",
			method: "POST",
			data:{dia_chi:dia_chi},
			success:function(data){
				alert(data);
			}
		})
	});
	$('#btn_thanh_toan').on('click',function(){
		var sum_so_luong = $('[id^="so_luong_"]').attr('id');
		sum_so_luong =sum_so_luong.substring(9);
		// alert(sum_so_luong.substring(9));
		var sum_tien  = $('[id^="tong_tien_"]').attr('id');
			sum_tien = sum_tien.substring(10);
		var dia_chi = $('#dia_chi_giao_hang').text();
		$.ajax({
			url: "modules/maincontent/xuly/xu_ly_don_hang.php",
			method:"POST",
			data: {so_luong: sum_so_luong, tong_tien:sum_tien, dia_chi:dia_chi},
			success: function(data){
				alert(data);
				window.location = "index.php";
			}

		})
	});
});