<script>
    $(document).ready(function(){
            $('header').css('display', 'none');
    });
</script>
<section class="section" id="style">
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                <img
                src="https://giaovienvietnam.vn/wp-content/uploads/2021/02/download.png"
                alt=""
                style="width:200px;height:200px;"
            />
                </div>
                <!--=====TIÊU ĐỀ======-->
                <form class="login100-form validate-form" method="POST" action="?act=login&xuli=join">
                    
                    <span class="login100-form-title">
                        <a href="?act=home"><img class="login-img" src="https://miraclestudio.design/html/deliciousa-html/assets/images/logo/logo.png" alt=""></a>
                        <b>ĐĂNG NHẬP</b>
                    </span>
                    <!--=====FORM INPUT TÀI KHOẢN VÀ PASSWORD======-->
                    <?php if (isset($_COOKIE['msg1'])) { ?>
								<div class="alert alert-success">
									<strong>Thông báo</strong> <?= $_COOKIE['msg1'] ?>
								</div>
							<?php } ?>
                    <form action="submit" method="post">
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" placeholder="Tên tài khoản" name="username" id="username" required>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class='bx bx-user'></i>
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input autocomplete="off" class="input100" type="password" placeholder="Mật khẩu" name="password" id="password-field" required>
                            <span toggle="#password-field" class="bx fa-fw bx-hide field-icon click-eye"></span>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class='bx bx-key'></i>
                            </span>
                        </div>

                        <!--=====ĐĂNG NHẬP======-->
                        <div class="container-login100-form-btn">
                            <input type="submit" class="login-btn" value="Đăng nhập" id="submit" name="submit" onclick="validate()" />
                        </div>
                        <!--=====LINK TÌM MẬT KHẨU======-->
                        <div class="text-right p-t-12">
                            <a class="txt2" href="?act=register">
                                Đăng ký tài khoản
                            </a>
                            
                        </div>
                    </form>
                    <!--=====FOOTER======-->
                    <div class="text-center p-t-70 txt2">
                        vhv <i class="far fa-copyright" aria-hidden="true"></i>

                    </div>
                </form>
            </div>
        </div>
    </div>
    </section>
    <!--Javascript-->
