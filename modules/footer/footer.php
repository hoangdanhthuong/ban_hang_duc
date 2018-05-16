<footer class="container-fluid text-center">
	<p>HORSE SHOP hỗ trợ online</p>  
	<form class="form-inline" id="form_giam_gia">Nhận giảm giá:
		<input type="email" class="form-control" size="50" placeholder="Email Address" required name="email">
		<button type="submit" class="btn btn-danger">Đăng ký</button>
	</form>
</footer>
<script type="text/javascript">
	$(document).ready(function(){
		$('#form_giam_gia').submit(function(e){
			var form = $('#form_giam_gia');
			var url = "modules/maincontent/xuly/dang_ky_giam_gia.php";
			$.post(url, form.serialize(), function(data){
				if(data){
					alert(data);	
				}
				window.location = 'index.php';
			});
			e.preventDefault();
		});
	});
</script>