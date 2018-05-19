$(document).ready(function(){
	$('#table_hoa_don').DataTable({
		'columnDefs':[
		{'searable':false,'orderable':false,'targets': 5},
		{'searable':false,'orderable':false,'targets': 6},
		{'searable':false,'orderable':false,'targets': 7},
			]
	});
	$("#cap_nhap_don").on('click', function(){
		var id = $(this).closest('tr').find('td:eq(0)').text();
		var trang_thai = $(this).closest('tr').find('#trang_thai_van_chuyen').val();
		$.ajax({
			url: "modules/content/hoa_don/xu_ly/don_hang.php",
			method: "post",
			data: {id: id, trang_thai:trang_thai},
			success: function(data){
				$('#table_chi_tiet').html(data);
			}
		});
	});
	$("#chi_tiet").on('click', function(){
		var id = $(this).closest('tr').find('td:eq(0)').text();
		var trang_thai = $(this).closest('tr').find('#trang_thai_van_chuyen').val();
		$.ajax({
			url: "modules/content/hoa_don/xu_ly/don_hang.php",
			method: "post",
			data: {id: id, trang_thai:trang_thai},
			success: function(data){
				$('#table_chi_tiet').html(data);
			}
		});
	});
	

});