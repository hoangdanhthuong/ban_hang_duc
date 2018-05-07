
<!-- Modal -->
<div id="them_thuong_hieu" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title text-center">Thêm thương hiệu sản phẩm</h2>
      </div>
      <div class="modal-body">
       <form class="form-horizontal" action="" method="post">
        <fieldset>

          <!-- Name input-->
          <div class="form-group">
            <label class="col-md-3 control-label" for="input_tao_ten">Tên thương hiệu</label>
            <div class="col-md-9">
              <input id="input_tao_ten" name="input_tao_ten" type="text" placeholder="Nhập tên thương hiệu.." class="form-control">
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
            <a href="javascript:void(0)" id="btn_them_hieu_sp" width = '100px' class="btn btn-primary btn-md col-md-2 col-md-offset-5" >Thêm</a>
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