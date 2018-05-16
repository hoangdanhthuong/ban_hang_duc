
<?php 
include('admin-manager/modules/config.php');
$sql = "SELECT * FROM khuyen_mai where tinh_trang = '1' order by thu_tu desc";
$result = mysqli_query($conn, $sql);
?>
<div class="slider-content">
	<div class="row">
		<div class="col-md-9">
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="1500">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<?php
					$i=1;
					while($i<=mysqli_num_rows($result)){
						echo '<li data-target="#myCarousel" data-slide-to="'.$i.'"></li>';
						$i++;
					}
					$row = mysqli_fetch_assoc($result);
					?>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="admin-manager/modules/content/khuyen_mai/uploads/<?php echo $row['hinh_anh']?>" alt="New York" >
						<div class="carousel-caption">
							<h3><?php echo $row['tieu_de']?></h3>
						</div>      
					</div>
					<?php 
					while($row = mysqli_fetch_assoc($result)){
						?>

						<div class="item">
							<img src="admin-manager/modules/content/khuyen_mai/uploads/<?php echo $row['hinh_anh']?>" alt="New York" >
							<div class="carousel-caption">
								<h3><?php echo $row['tieu_de']?></h3>
							</div>      
						</div>
						<?php
					}
					?>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<!-- san pham ban chay -->
		<div class="col-md-3 list-news">
			<div class="title-news" style="margin-bottom: 10px">
				<p>Tin tức</p>
			</div>

			<?php
			$target = 'admin-manager/modules/content/tin_tuc/uploads/';
			$sql_tin = "SELECT * FROM tin_tuc WHERE tinh_trang = 1 LIMIT 2";
			$result =mysqli_query($conn, $sql_tin);
			while ($row_tin = mysqli_fetch_assoc($result)) {
				?>
				<div class="item">
					<div class="">
						<a href="index.php?xem=tintuc&id=<?php echo $row_tin['id_tin_tuc']?>">
							<img src="<?php echo $target.$row_tin['hinh_anh']?>" alt="Lights" style="width:100%">
							<div class="caption" style="height: 50px">
								<p><?php echo $row_tin['tieu_de']?></p>
							</div>
						</a>
					</div>
				</div>
				<?php
			}
			?>


			

			
		</div>

	</div>
</div>