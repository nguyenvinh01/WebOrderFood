<header class="header">
    <div class="logo">
        <img
            src="https://www.phenikaa.com/static/media/logo-en.7ff5d270.png"
            alt=""
            
        />
    </div>
    <ul class="top-level-menu">
        <li><a href="?act=home">Home</a></li>
        <li><a href="?act=about">About Us</a></li>
        <li>
            <a href="?act=menu">Menu</a>
        </li>
        <li><a href="?act=service">Gallery</a></li>
        <li><a href="?act=contact">Contact</a></li>
        <?php if(isset($_SESSION['login']['role_id']) && $_SESSION['login']['role_id'] == 1) { ?>
            <li><a href="admin/?act=admin">Manager</a></li>
        <?php } ?>
    </ul>

    <ul class="icon">
        <li>
            <a href="?act=cart&xuli=list"><i class="fas fa-cart-plus" ></i></a>
        </li>
        <div class="action">
            <div class="profile" onclick="user_name();" style="width:30px; height:30px; border-radius: 0;">
            <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/User_font_awesome.svg/1200px-User_font_awesome.svg.png"
                alt=""
                style = "width:25px; height:25px;"
                
            />
            </div>

            <div class="user_menu">
            <?php  if(isset($_SESSION['login'])){ ?>
           <b>Chào <?= $_SESSION['login']['name']?></b>
                <ul>
                    <li>
                        <span class="material-icons icons-size"
                            >person</span
                        >
                        <a href="?act=info&xuli=join">Thông tin cá nhân</a>
                    </li>
                    <li>
                        <span class="material-icons icons-size"
                            >mode</span
                        >
                        <a href="#">Đổi mật khẩu</a>
                    </li>
                    <li>
                        <span class="material-icons icons-size"
                            >account_balance_wallet</span
                        >
                        <a href="?act=logout">Đăng xuất</a>
                    </li>
                </ul>

            <?php }  else {?>
                <ul>
                    <li>
                        <span class="material-icons icons-size"
                            >account_balance_wallet</span
                        >
                        <a href="?act=login">Login</a>
                    </li>
                    <?php } ?>
                    </ul>
            </div>
        </div>
    </ul>
</header>

<script>
        function user_name(){
            const toggleMenu = document.querySelector('.user_menu');
            toggleMenu.classList.toggle('user_active')
        }
    </script>