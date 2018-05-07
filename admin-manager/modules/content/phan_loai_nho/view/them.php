<?php
$sql = "SELECT * FROM phan_loai_lon";
$result = mysqli_query($conn,$sql);
?>
<!-- Modal -->
<div id="them_phan_loai_nho" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title text-center">Thêm phân loại nhỏ</h2>
      </div>
      <div class="modal-body">
       <form class="form-horizontal" action="" method="post">
        <fieldset>

          <!-- Name input-->
          <div class="form-group">
            <label class="col-md-3 control-label" for="input_tao_ten">Tên phân loại nhỏ</label>
            <div class="col-md-9">
              <input id="input_tao_ten" name="input_tao_ten" type="text" placeholder="Nhập tên phân loại nhỏ.." class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label" for="input_tao_id_1">Phân loại lớn</label>
            <div class="col-md-9">
              <select id="input_tao_id_1" class="form-control" name="input_tao_id_1">
                <?php
                  while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <option value="<?php echo $row['id']?>"><?php echo $row['ten']?></option>
                <?php
                  }
                ?>

              </select>
            </div>
            
          </div>
          <!-- Email input-->
          <div class="form-group">
            <label class="col-md-3 control-label" for="input_tao_thu_tu">Thứ tự</label>
            <div class="col-md-9">
              <input  name="input_tao_thu_tu" type="number" placeholder="Thứ tự.." class="form-control" id="input_tao_thu_tu" value="0">
            </div>
          </div>

          <!-- Message body -->
          <div class="form-group">
            <label class="col-md-3 control-label" for="tinh_trang">
              Tình trạng
            </label>
            <div class="col-md-9">
             <select id="input_tao_tinh_trang" name="tinh_trang" class="form-control">
              <option value="1">Kích hoạt</option>
              <option value="0">Không kích hoạt</option>
            </select>
          </div>

        </div>
        <p id="error_tao" class="col-md-offset-3"></p>
        <!-- Form actions -->
        <div class="form-group">
          <div class="col-md-12 text-center">
            <a href="javascript:void(0)" id="btn_them_phan_loai_nho" width = '100px' class="btn btn-primary btn-md col-md-2 col-md-offset-5" >Thêm</a>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
  </div>
</div>

</div>
</div>