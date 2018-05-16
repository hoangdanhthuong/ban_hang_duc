$(document).ready(function(){
	$('#table_san_pham').DataTable({
		'columnDefs':[
		{'searable':false,'orderable':false,'targets': 8},
		{'searable':false,'orderable':false,'targets': 9},
			]
	});
});