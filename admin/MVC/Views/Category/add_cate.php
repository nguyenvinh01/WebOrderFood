
    <?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-warning">
      <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
  <?php } ?>
<form class="row" action="?act=category&xuli=addcate" method="POST">
              <!-- <div class="form-group col-md-3">
                <label for="exampleSelect1" class="control-label">Danh mục</label>
              </div> -->
              <div class="form-group col-md-3">
                <label class="control-label">Tên sản phẩm</label>
                <input class="form-control" name="TenDm" type="text">
              </div>
              <!-- <div class="form-group col-md-3">
                <label class="control-label">Id</label>
                <input class="form-control"  name="id" type="text">
              </div> -->
             
              <!-- <div class="form-group col-md-8">
                <label class="control-label">URL hình ảnh</label>
                <input class="form-control"  name="hinhanh" type="text">
              </div> -->
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Mô tả sản phẩm</label>
                <textarea class="form-control" name="mota" id="mota"></textarea>
                <script>CKEDITOR.replace('mota');</script>
              </div>
              <!-- <div class="form-group col-md-12">
                <label class="control-label">Chủ đề sản phẩm</label>
                <textarea class="form-control" name="chude" id="mota"></textarea>
                <script>CKEDITOR.replace('mota');</script>
              </div> -->

          </div>
          <button class="btn btn-save" type="submit">Lưu lại</button>
          <!-- <a class="btn btn-cancel" href="?act=product&xuli=join">Hủy bỏ</a> -->
        </div>
</form>