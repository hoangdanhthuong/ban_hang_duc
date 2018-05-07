<div class="row bg-primary ">
  <nav class="navbar navbar-inverse content_navbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand"  href="index.php">Trang chủ</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Quản lý loại
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="index.php?quanly=phanloailon">Phân loại lớn</a></li>
                <li><a href="index.php?quanly=phanloainho">Phân loại nhỏ</a></li>
              </ul>
            </a>
          </li>
          <li><a href="index.php?quanly=hieu_sp">Thương hiệu</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Quản lý sản phẩm
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="index.php?quanly=sanpham">Sản phẩm</a></li>
                <li><a href="index.php?quanly=baivietsanpham">Bài viết</a></li>
              </ul>
            </a>
          </li>
          <li><a href="#">Tin tức</a></li>
          <li><a href="index.php?quanly=khuyenmai">Khuyến mại</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Thống kê
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Sản phẩm</a></li>
                <li><a href="#">Đơn hàng</a></li>
                <li><a href="#">Doanh thu</a></li>
              </ul>
            </a>
          </li>

        </ul>
        <form class="navbar-form navbar-left" action="/action_page.php">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Nhập từ khóa.." name="search">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search"></i>
              </button>
            </div>
          </div>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="modules/xuly/process_logout.php" id="btn_logout_admin"><span class="glyphicon glyphicon-log-out"></span> Đăng xuất</a></li>
        </ul>
      </div>
    </div>
  </nav>  
</div>
