
<div class="app-content">
  <h1 class="text-muted mb-0">CHI TIẾT ĐƠN HÀNG</h1>
<?php foreach($find as $item) { ?>
  <!-- <div class="card-body p-4">
    
    <div class="card shadow-0 border w-50 justify-content-between">
      
      <div class="card-body">
          <div class="d-flex justify-content-between align-items-center mt-4">
            <h2 class="lead fw-normal mb-0" style="">(Mã đơn hàng <?= $item['order_id'] ?> )</h2>
            </div>
            <div class="d-flex justify-content-between pt-2">
              <p class=" text-muted fw-bold mb-0">Tổng tiền</p>
              <p class="text-muted mb-0"><?= $item['order_total'] ?></p>
            </div>
         <div class="d-flex justify-content-between pt-2">
              <p class="fw-bold text-muted mb-0">Họ tên:</p>
              <p class="text-muted mb-0"><?= $item['NguoiNhan'] ?></p>
            </div>
         <div class="d-flex justify-content-between">
              <p class=" fw-bold text-muted mb-0">Số điện thoại: </p>
              <p class="text-muted mb-0"><?= $item['SDT'] ?></p>
            </div>
         <div class="d-flex justify-content-between mb-5">
              <p class=" fw-bold text-muted mb-0">Địa chỉ:</p>
              <p class="text-muted mb-0"> <?= $item['DiaChi'] ?></p>
         </div>
    </div>
  </div> -->

  <h2>(Mã đơn hàng <?= $item['order_id'] ?> )</h2>
  <h2>Thông tin người nhận</h2>
  <p>  <b>Họ tên :</b>  <?= $item['NguoiNhan'] ?></p>
  <p> <b>Điện thoại:</b> <?= $item['SDT'] ?></p>
  <p> <b>Địa chỉ:</b> <?= $item['DiaChi'] ?></p>
  <p> <b>Tổng tiền:</b><?= $item['order_total'] ?></p>

  <form action="?act=order&xuli=updatesubmit" method="POST">
      <h2>TRẠNG THÁI ĐƠN HÀNG</h2>
      <label class="btn btn-purple btn-rounded active btn-md form-check-label"></label>
      <p > <input id="flexRadioDefault1" type="radio" name="status" value="1" <?=$item['order_status']==1?'checked':'' ?>> Chưa xử lý</p>
      <p ><input id="flexRadioDefault1" type="radio" name="status" value="2" <?=$item['order_status']==2?'checked':'' ?>> Đang xử lý</p>
      <p ><input id="flexRadioDefault1" type="radio" name="status" value="3" <?=$item['order_status']==3?'checked':'' ?>> Đã xử lý</p>
      <p  ><input id="flexRadioDefault1" type="radio" name="status" value="4" <?=$item['order_status']==4?'checked':'' ?>> Hủy</p>
      <input type="hidden" name="id" value="<?= $item['order_id'] ?>">
    <section><input  type="submit" value="Update đơn hàng" class="btn btn-add "></section>  
  </form>
<?php } ?>
</div>