$(document).ready(function(){
	var loc = window.location.pathname;

	$('#nav').find('a').each(function() {
		$(this).toggleClass('active', $(this).attr('href') == loc);
	});
	$('#btn-login-user').click(function(){
		var email = $("#email-user").val();
		var pass = $("#password-user").val();
		
		if($.trim(email).length>0 && $.trim(pass).length>0){
			$('#login #error-email').text("");
			$("#login #error-password").text("");
			$.ajax({
				url:"modules/maincontent/xuly/process_login.php",
				method: "POST",
				data:{email: email, password: pass},
				cache: false,
				beforeSend:function(){
					$('#btn-login-user').text('Đang kết nối...');
				}, 
				success:function(data){
					if(data){
						alert("Đăng nhập thành công!"+data);
						$('#signup-user').hide();
						$('#login-user').hide();
						$('#logout-user').show();
						window.location="index.php";
					}else{
						$('#btn-login-user').val('Đăng nhập');
						$('#error-login').text('Đăng nhập lỗi!').css('color','red');
					}
				}
			});
		}else{
			if(email==""){
				$('#login #error-email').text("Lỗi email!").css("color","red");
			};
			if(pass==""){
				$("#login #error-password").text("Lỗi mật khẩu").css("color","red");
			}
			return false;
		}
	});

});

$(document).on('click','[id^="btn-buy-now-"]',function(e){
	e.preventDefault();
	if($(this).hasClass("disable")){
		return false;
	}//nếu tồn tại lớp disable
	$(document).find('[id^="btn-buy-now-"]').addClass("disable");
	
	var parent = $(this).parents('.thumbnail');
	var src = parent.find('img').attr('src');
	var cart = $(document).find("#cart-shop");
	var parTop = parent.offset().top;
	var parLeft = parent.offset().left;

	$('<img/>',{
		class: "img-product-fly",
		src: src
	}).appendTo('body').css({
		"top":parTop,
		"left":parseInt(parLeft) + parseInt(parent.width()) - 50
	});
	setTimeout(function(){
		$(document).find('.img-product-fly').css({
			'top': cart.offset().top,
			'left':cart.offset().left
		});

		setTimeout(function(){
			$(document).find('.img-product-fly').remove();
		}, 1000);
		$(document).find('[id^="btn-buy-now-"]').removeClass('disable');
	},500);
	var id_product =$(this).attr('id').substring(12);
	$.ajax({
		url: "modules/maincontent/xuly/cap_nhat_gio_hang.php",
		data:{id_product:id_product},
		method:"POST",
		success:function(data){
			if(data){
				
			}else{
				alert();
			}
			
			$('#count-item').text(data);
		}
	});
	
});

$(document).on('click','[id^="btn_delete_product_"]',function(){
	var id_product = $(this).attr('id').substring(19);
	$.ajax({
		url: "modules/maincontent/xuly/xoa_san_pham_gio_hang.php",
		data: {id_product: id_product},
		method: "POST",
		cache: false,
		success:function(data){
			$('#banggiohang').find('#row_'+id_product).remove();
		}
	});
});
$(document).on('click','[id^="btn_tang_sp_"]',function(){
	var id_product = $(this).attr('id').substring(12);
	$.ajax({
		url: "modules/maincontent/xuly/tang_so_luong.php",
		data: {id_product: id_product},
		method: "POST",
		success: function(){

			window.location='index.php?xem=giohang';
		}
	});
});
$(document).on('click','[id^="btn_giam_sp_"]',function(){
	var id_product = $(this).attr('id').substring(12);
	$.ajax({
		url: "modules/maincontent/xuly/giam_so_luong.php",
		data: {id_product: id_product},
		method: "POST",
		success: function(data){
			if(data){
				alert(data);
			}
			window.location='index.php?xem=giohang';
		}
	});
});

/*
$(document).on('click','[id^="btn-buy-now-"]',function(e){
	e.preventDefault();
	if($(this).hasClass("disable")){
		return false;
	};//nếu tồn tại lớp disable
	$(document).find('.btn-buy-now').addClass("disable");
	
	var parent = $(this).parents('.thumbnail');
	var src = parent.find('img').attr('src');
	var cart = $(document).find("#cart-shop");
	var parTop = parent.offset().top;
	var parLeft = parent.offset().left;

	$('<img/>',{
		class: "img-product-fly",
		src: src
	}).appendTo('body').css({
		"top":parTop,
		"left":parseInt(parLeft) + parseInt(parent.width()) - 50
	});
	setTimeout(function(){
		$(document).find('.img-product-fly').css({
			'top': cart.offset().top,
			'left':cart.offset().left
		});

		setTimeout(function(){
			$(document).find('.img-product-fly').remove();
		}, 1000);

		var citem = parseInt(cart.find('#count-item').data('count'));
		citem++;
		cart.find('#count-item').text(citem).data('count',citem);
		$(document).find('.btn-buy-now').removeClass('disable');
	},500);
	
});*/