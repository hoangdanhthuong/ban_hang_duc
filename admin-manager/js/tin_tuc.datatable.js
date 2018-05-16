$(document).ready(function(){
	$('#table_tin_tuc').DataTable({
		'columnDefs':[
		{'searable':false,'orderable':false,'targets': 6},
		{'searable':false,'orderable':false,'targets': 7},
			]
	});
});
function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function(e) {
			$('#view_hinh_anh').attr('src', e.target.result);
		}

		reader.readAsDataURL(input.files[0]);
	}
}

$("#hinh_anh").change(function() {
	readURL(this);
});