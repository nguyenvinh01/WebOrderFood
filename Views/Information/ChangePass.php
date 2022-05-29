
<?php 
// session_start();
if(!isset($_SESSION['login'])){
    header("location: ../?act=home");
}

?>

    <section class="home">
        <div class="home_hinhnen">
            
        </div>
        
    </section>
    <div class="container-info">
        <div class="title-form">
          <h1 class="title-a">ĐỔI MẬT KHẨU</h1>
        </div>
        <b>
												<?php if (isset($_COOKIE['doimk'])) {
													echo $_COOKIE['doimk'];
												} ?>
											</b>
        <form class="student-form" action="?act=pass&xuli=update" method="post">
         
          <div class="field-form">
            <input type="password" name="oldpass" class="form-control" placeholder="Mật khẩu hiện tại" required>
          </div>
         
          <div class="field-form ">
            <input type="password" name="newpass" class="form-control" placeholder="Mật khẩu mới" required>
            </div>
         
          <div class="field-form button">
            <input type="submit" name="submit" class="add" value="Update">
          </div>
        </form>
      </div>
