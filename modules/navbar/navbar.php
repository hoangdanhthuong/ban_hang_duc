<?php 
ob_start();
include("admin-manager/modules/config.php");
$sql = "SELECT * FROM phan_loai_lon WHERE tinh_trang = 1 order by thu_tu";
$result = mysqli_query($conn, $sql);
?>

<div class="row nav-content">
	<nav class="navbar navbar-inverse " data-spy="affix" data-offset-top="197">
		<div class="container-fluid ">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand" href="index.php" style="color:white">Trang chủ</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<?php
					while($row = mysqli_fetch_array($result)){
						?>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $row['ten']?><span class="caret"></span></a>
							<ul class="dropdown-menu">
								<?php
								$sql_1 = "SELECT * FROM phan_loai_nho WHERE id_phan_loai_lon = ".$row['id']." and tinh_trang = 1 order by thu_tu desc";

								$result_1 = mysqli_query($conn, $sql_1);
								while($row_1 = mysqli_fetch_assoc($result_1)){
									echo '<li><a href="index.php?xem=loaisp&id='.$row_1['id'].'">'.$row_1['ten'].'</a></li>';
								}
								?>

							</ul>
						</li>
						<?php
					}
					?>
					
					<li><a href="index.php?xem=gioithieu">Giới thiệu</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li ><a href="?xem=giohang" id="cart-shop"><span class="badge" id="count-item" >
						<?php if(isset($_SESSION['tong_sp_gio_hang'])){
							echo $_SESSION['tong_sp_gio_hang'];
						}else{
							echo 0;
						}?>

					</span><i class="glyphicon glyphicon-shopping-cart"></i></a></li>
					<?php
					if(!isset($_SESSION['username_sport'])){
						?>
						<li id="signup-user">
							<?php include("modules/navbar/signup.php");?>

						</li>
						<li id="login-user">
							<?php include("modules/navbar/login.php");?>
						</li>
						<?php
					}else{
						?>
						<li id="logout-user">
							<a href="modules/navbar/logout.php" ><span class="glyphicon glyphicon-log-out"></span> Đăng xuất</a>
						</li>
						<?php
					}
					?>
				</ul>

			</div>
		</div>
	</nav>
</div>