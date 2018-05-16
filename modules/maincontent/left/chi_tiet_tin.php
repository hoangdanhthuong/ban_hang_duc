<?php
$id = $_GET['id'];
$sql ="SELECT * FROM tin_tuc WHERE id_tin_tuc = ".$id;
$row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
$target = "admin-manager/modules/content/tin_tuc/uploads/";
?>
<div class="container">

	<div class="panel-group">
		<div class="panel panel-default">
			<div class="panel-heading"><a href="index.php">Trang chủ</a> > <a href="index.php?xem=tintuc">Tin Tức</a></div>
			<p style="padding-left: 10px"><b>Ngày đăng:</b><?php echo $row['thoi_gian_dang']?></p>
			<hr>
			<div class="panel-body">
				<div class="container-fluid bg-info">
					<h4><?php echo $row['tieu_de']?></h4>
					<hr>
					<p><?php echo $row['noi_dung']?></p>
					<p class="text-center"><img src="<?php echo $target.$row['hinh_anh']?>" width="75%" ></p>
				</div>

			</div>
		</div>
	</div>
</div>