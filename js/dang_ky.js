$("#form_dang_ky").submit(function(e) {
	var url = "modules/maincontent/xuly/dang_ky.php";
	var form = $("#form_dang_ky");
	$.post( url, form.serialize(), function(res){
                if(res){
                	alert(res);
                }else{
                	alert('Đăng ký thành công! Mời bạn đăng nhập.');
                	$('#close_signup').click();
                	$('#username_login').val($('#ten_dang_nhap').val());
                	$('#btn_login').click();
                }
            });
    e.preventDefault(); // avoid to execute the actual submit of the form.
});