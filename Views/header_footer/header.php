<header class="header" style="background-color: #000;">
    <div class="logo">
        <a href="?act=home">
            <img src="a.png" alt=""/>

        </a>
    </div>
    <ul class="top-level-menu" style="background-color: #000;">
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
            <a href="?act=cart&xuli=list"><i class="fa fa-cart-plus" style="color: white; font-size:20px;" ></i></a>
        </li>
        <div class="action">
            <div class="profile" onclick="user_name();" style="border-radius: 0; top:18px; font-size:20px">
            <i class="fa fa-user"
            style=" color: white; top:5px;"
            ></i>
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
                            >card_giftcard</span
                        >
                        <a href="?act=purchase">Đơn hàng</a>
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