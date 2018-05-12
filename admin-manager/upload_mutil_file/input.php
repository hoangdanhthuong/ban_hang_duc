<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	if (isset($_POST['them'])) {
		$countfile = count($_FILES['file']['name']);
		echo $countfile;
	}
	?>
	<form action="input.php" method="POST" enctype='multipart/form-data'>
		<input type="file" name="file[]" id="hinhanh" multiple="multiple" accept="image/*">
		<input type="submit" name="them" value="Them" >
	</form>
</body>
</html>