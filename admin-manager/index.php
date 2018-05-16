<!DOCTYPE html>
<html lang="en">
<head>
	<title> Quản trị bán hàng</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>
<body>
	<div class="wrapper">
		<div class="container-fluid">
			<?php
			include('modules/config.php');
			include('modules/xu_ly_dang_nhap.php');
			?>
		</div>
	</div>
	<script type="text/javascript" src="js/myscript.js"></script>
	<script type="text/javascript" src="js/xuly.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="js/tinymce/js/tinymce/jquery.tinymce.min.js"></script>
	<script type="text/javascript" src="js/tinymce/js/tinymce/tinymce.min.js"></script>
	<script>tinymce.init({ selector:'textarea' });</script>
</body>
</html>
