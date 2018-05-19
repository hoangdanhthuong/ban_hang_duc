$(document).ready(function(){
	$('[id^=btn_xem_nhanh_]').on('click', function(){
		var id = $(this).attr('id').substring(14);
		$.ajax({
			url: "modules/maincontent/xuly/xem_nhanh.php",
			method: "POST",
			data:{id:id},
			success: function(data){
				$('#product_view').html(data);
			}
		})
	});
});