$("#form_dang_ky").submit(function(e) {
	var url = "modules/maincontent/dang_ky.php";
	var ho_ten = $('#ho_ten').val();
	var dien_thoai = $('#dien_thoai').val();
	var mat_khau = $('#mat_khau').val();
	var email = $('#email').val();
	var dia_chi = $('#dia_chi').val();
	var ten_dang_nhap = $('#ten_dang_nhap').val();
	$.ajax({
		type: "POST",
		url: url,
           data:{ho_ten:ho_ten, dien_thoai:dien_thoai, mat_khau:mat_khau, email:email, dia_chi:dia_chi, ten_dang_nhap:ten_dang_nhap}, // serializes the form's elements.
           success: function(data)
           {
               alert(data); // show response from the php script.
           }
       });

    e.preventDefault(); // avoid to execute the actual submit of the form.
});