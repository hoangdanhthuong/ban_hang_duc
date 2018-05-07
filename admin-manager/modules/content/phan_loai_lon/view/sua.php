
<!-- Modal -->
<div id="sua_phan_loai_lon" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title text-center">Sửa thương phân loại lớn</h2>
      </div>
      <div class="modal-body">
       <form class="form-horizontal" action="" method="post">
        <fieldset>
          <input type="text" name="id" id="id" hidden>
          <!-- Name input-->
          <div class="form-group">
            <label class="col-md-3 control-label" for="input_sua_ten">Tên phân loại lớn</label>
            <div class="col-md-9">
              <input id="input_sua_ten" name="input_sua_ten" type="text" placeholder="Nhập tên phân loại lớn.." class="form-control">
            </div>
          </div>

          <!-- Email input-->
          <div class="form-group">
            <label class="col-md-3 control-label" for="input_sua_thu_tu">Thứ tự</label>
            <div class="col-md-9">
              <input  name="input_sua_thu_tu" type="number" placeholder="Thứ tự.." class="form-control" id="input_sua_thu_tu" value="0">
            </div>
          </div>

          <!-- Message body -->
          <div class="form-group">
            <label class="col-md-3 control-label" for="tinh_trang">
              Tình trạng
            </label>
            <div class="col-md-9">
             <select id="input_sua_tinh_trang" name="tinh_trang" class="form-control">
              <option value="1">Kích hoạt</option>
              <option value="0">Không kích hoạt</option>
            </select>
          </div>

        </div>
        <p id="error_sua" class="col-md-offset-3"></p>
        <!-- Form actions -->
        <div class="form-group">
          <div class="col-md-12 text-center">
            <a href="javascript:void(0)" id="btn_sua" class="btn btn-primary btn-md col-md-4 col-md-offset-4" >Sửa</a>
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