<!--<div class="app-content">
        <div class="title-form">
          <h1>THÔNG TIN CÁ NHÂN</h1>
        </div>
        <form class="student-form" action="?act=info&xuli=update" method="post">
         
          <div class="field-form">
            <input type="text" name="firstname" class="first-name" placeholder="First name" required value="<?= $data['name'] ?>"disabled="true">
          </div>
          
          <div class="field-form">
          <input type="text" name="GioiTinh" class="first-name" placeholder="First name" required value="<?= $data['user_sex'] ?>" disabled="true">		
          </div>
         
          <div class="field-form ">
            <input type="text" name="mail" class="department" placeholder="Email" required value="<?= $data['user_email'] ?>"disabled="true">
            </div>
          <div class="field-form dep">
            <input type="text" name="SDT" class="department" placeholder="Phone" required pattern="[0-9]+" minlength="10" value="<?= $data['user_tel'] ?>"disabled="true" >
          </div>
          <div class="field-form">
            <input type="text" name="course" class="course" placeholder="Adress" required value="<?= $data['user_address'] ?>"disabled="true">
          </div> 
-->
       
       
      </div>
      <div class="app-content">
        <div class="title-form">
          <h1>THÔNG TIN CÁ NHÂN</h1>
        </div>
<form class="student-form" action="?act=info&xuli=update" method="post">
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
              <input class="form-control" type="text" name="firstname" value="<?= $data['name'] ?>">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Sex</p>
              </div>
              <div class="col-sm-9">
              <div class="field-form">
											
                      <select class="form-control" name="GioiTinh'" title="Giới tính">
                        <option <?= ($data['user_sex'] == 'Nam') ? 'selected' : '' ?> value="Nam"> Nam</option>
                        <option <?= ($data['user_sex'] == 'Nữ') ? 'selected' : '' ?> value="Nữ"> Nữ</option>
                        <option <?= ($data['user_sex'] == 'Khác') ? 'selected' : '' ?> value="Khác"> Khác</option>
                      </select>
                
    </div>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
              <input type="text" name="SDT" class="department" placeholder="" required pattern="[0-9]+" minlength="10" value="<?= $data['user_tel'] ?>" >
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
              <input class="form-control" type="text" name="mail" value="<?= $data['user_email'] ?>">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
              <input class="form-control" type="text" name="course" value="<?= $data['user_address'] ?>">
              </div>
            </div>
          </div>
        </div>
        <button class="btn btn-save" type="submit" name ="submit" method="post">Lưu lại</button>
        <a class="btn btn-cancel" href="#">Hủy bỏ</a>
        </form>
        <style>
          .row{
            padding-left: 10px;
          }
          </style>