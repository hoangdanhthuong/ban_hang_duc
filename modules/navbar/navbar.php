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
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Quần áo<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Page 1-1</a></li>
							<li><a href="#">Page 1-2</a></li>
							<li><a href="#">Page 1-3</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Giày <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Page 1-1</a></li>
							<li><a href="#">Page 1-2</a></li>
							<li><a href="#">Page 1-3</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Dụng cụ <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Page 1-1</a></li>
							<li><a href="#">Page 1-2</a></li>
							<li><a href="#">Page 1-3</a></li>
						</ul>
					</li>
					<li><a href="">Liên hệ</a></li>
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