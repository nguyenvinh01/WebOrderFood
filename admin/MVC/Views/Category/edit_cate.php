
    <?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-warning">
      <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
  <?php } ?>
<form class="row" action="?act=category&xuli=edit" method="POST">

              <div class="form-group col-md-3">
                <label class="control-label">Tên sản phẩm</label>
                <input class="form-control" name="TenDm" type="text" value="<?=$data['category_name'] ?>">
              </div>
              <input class="form-control" name="id" type="hidden" value="<?=$data['category_id'] ?>">

              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Mô tả sản phẩm</label>
                <textarea class="form-control" name="mota" id="mota" value="<?=$data['category_name'] ?>"><?=$data['category_desc'] ?></textarea>
                <script>CKEDITOR.replace('mota');</script>
              </div>


          </div>
          <button class="btn btn-save" type="submit">Lưu lại</button>
          <a class="btn btn-cancel" href="?act=product&xuli=join">Hủy bỏ</a>
        </div>
</form>