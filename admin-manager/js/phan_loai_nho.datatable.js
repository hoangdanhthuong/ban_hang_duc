$(document).ready(function(){
	$('#table_phan_loai_nho').DataTable({
		'columnDefs':[
		{'searable':false,'orderable':false,'targets': 5},
		{'searable':false,'orderable':false,'targets': 6},
			]
	});
})
$(document).on('click', '#btn_them_phan_loai_nho', function(){
	var name = $.trim($('#input_tao_ten').val());
	var thu_tu = $.trim($('#input_tao_thu_tu').val());
	var id = $.trim($('#input_tao_id_1').val());
	var tinh_trang = $('#input_tao_tinh_trang').val();
	$.ajax({
		url: 'modules/content/phan_loai_nho/xu_ly/them.php',
		method: 'POST',
		cache: false,
		data: {name:name, thu_tu:thu_tu, tinh_trang:tinh_trang, id:id, check:'0'},
		beforeSend: function(){
			$(this).text("Đang xử lý..");
		},
		success: function(data){
			if(data){
				$('#error_tao').text(data).css('color','red');
			}else{
				$('#error_tao').text('');
				window.location = "index.php?quanly=phanloainho";

			}
		}
	});
});
$(document).on('click','.btn_sua', function(){
	$('#id').val($(this).closest('tr').find('td:eq(0)').text());
	$('#input_sua_ten').val($(this).closest('tr').find('td:eq(1)').text());
	$('#input_sua_id_1').val($(this).closest('tr').find('td:eq(2)').attr('id'));
	$('#input_sua_thu_tu').val($(this).closest('tr').find('td:eq(3)').text());
	$('#input_sua_tinh_trang').val($(this).closest('tr').find('td:eq(4)').text());
});
$(document).on('click', '#btn_sua', function(){
	var id_1 = $('#id').val();
	var name = $.trim($('#input_sua_ten').val());
	var id = $.trim($('#input_sua_id_1').val()); 
	var thu_tu = $.trim($('#input_sua_thu_tu').val());
	var tinh_trang = $('#input_sua_tinh_trang').val();
	$.ajax({
		url: "modules/content/phan_loai_nho/xu_ly/sua.php",
		method: "POST",
		cache: false,
		data: {id: id, name:name, id_1:id_1, thu_tu: thu_tu,tinh_trang: tinh_trang, check: '1'},
		beforeSend: function(){
			$(this).text('Đang xử lý..');
		},
		success: function(data){
			if(data){
				$('#error_sua').text(data).css('color','red');
			}else{
				window.location = "index.php?quanly=phanloainho";
			}
		}
	});
});
$(document).on('click',".btn_xoa", function(){
	if(confirm("Bạn có chắc chắn xóa.")){
		var id = $(this).closest("tr").find("td:eq(0)").text();
		$.ajax({
			url: "modules/content/phan_loai_nho/xu_ly/xoa.php",
			method: "POST",
			cache: false,
			data: {id:id},
			success: function(data){
				if(data){
					alert(data);	
				}else{
					$('#table_phan_loai_nho').find("#row_"+id).remove();
				}
				
			}
		});
	}
	
})
