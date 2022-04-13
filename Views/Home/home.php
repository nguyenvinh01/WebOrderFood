<?php
session_start();

// if( isset($_SESSION['login'] ) ){
//     echo '<script>alert("Đăng nhập thành công. Bấm ok để tiếp tục")</script>';


// }
?>
<section class="section" id="home">
    <div
        class="hero"
        style="background-image: url(https://haitrieu.com/wp-content/uploads/2021/11/Logo-DH-Phenikaa-V-Bl.png)"
    >
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <!-- sliderhome -->
            <div class="sliderhome">
                <!-- slidehome item -->
                <div class="slidehome activehome">
                    <!-- item info -->
                    <div class="dish-info">
                        <div class="dish-name">
                            <h2>GỎI CUỐN</h2>
                        </div>
                        <div class="dish-description">
                            <p>
                                Là đặc sắc âm thực hà nội, bổ dưỡng dễ ăn đi cùng nước chấm đậm đà mà vẫn thanh tao   
                            </p>
                        </div>
                        <a href="?act=menu" class="btn">order now</a>
                    </div>
                    <!-- end item info -->
                    <!-- item image -->
                    <div class="dish-img">
                        <img
                            src="https://cdn.cet.edu.vn/wp-content/uploads/2018/11/goi-cuon-tom-thit.jpg"
                            alt=""
                        />
                    </div>
                    <!-- end item image -->
                </div>
                <!-- end slidehome item -->
                <!-- slidehome item -->
                <div class="slidehome activehome">
                    <!-- item info -->
                    <div class="dish-info">
                        <div class="dish-name">
                            <h2>PHỞ gà</h2>
                        </div>
                        <div class="dish-description">
                            <p>
                                Phở gà với nước dùng hảo hạng
                             vừa ngọt, vừa thanh lại điểm những ánh vàng óng ánh của mỡ gà 
                             làm cho bát phở thêm ngon mắt
                            </p>
                        </div>
                        <a href="?act=menu" class="btn">order now</a>
                    </div>
                    <!-- end item info -->
                    <!-- item image -->
                    <div class="dish-img">
                        <img src="https://trivietphat.net/wp-content/uploads/2021/08/pho-ga1-1.jpg" alt="" />
                    </div>
                    <!-- end item image -->
                </div>
                <!-- end slidehome item -->
                <!-- slidehome item -->
                <div class="slidehome activehome">
                    <!-- item info -->
                    <div class="dish-info">
                        <div class="dish-name">
                            <h2>BÚN BÒ</h2>
                        </div>
                        <div class="dish-description">
                            <p>
                            Bún bò Huế là một đặc sản của ẩm thực Huế, tùy là bún bò nhưng ngoài thịt bò còn có thịt heo.
                             Hương vị đặc biệt của món ăn này chủ yếu là ở vị cay nồng, mùi sả đặc trưng của nước lèo. 
                            Vốn là một hương vị Huế không lẫn vào đâu được và chính điều đó khiến người ăn cứ nhớ mãi về món ăn này.
                            </p>
                        </div>
                        <a href="?act=menu" class="btn">order now</a>
                    </div>
                    <!-- end item info -->
                    <!-- item image -->
                    <div class="dish-img">
                        <img src="https://saigonangi.com/wp-content/uploads/2020/10/5-1-15.png" alt="" />
                    </div>
                    <!-- end item image -->
                </div>
                <!-- end slidehome item -->
                <!-- sliderhome control -->
                <div class="sliderhome-control">
                    <div class="sliderhome-control-item">
                        <img
                            src="https://cdn.cet.edu.vn/wp-content/uploads/2018/11/goi-cuon-tom-thit.jpg"
                            alt=""
                        />
                    </div>
                    <div class="sliderhome-control-item">
                        <img
                            src="https://trivietphat.net/wp-content/uploads/2021/08/pho-ga1-1.jpg"
                            alt=""
                        />
                    </div>
                    <div class="sliderhome-control-item">
                        <img
                            src="https://saigonangi.com/wp-content/uploads/2020/10/5-1-15.png"
                            alt=""
                        />
                    </div>
                </div>
                <!-- end sliderhome control -->
            </div>
            <!-- end sliderhome -->
        </div>
    </div>
</section>
<section class="menu0">
    <div class="menu0_container">
        <div class="menu0_tieude">CÂU TRUYỆN VỀ CHÚNG TÔI</div>
        <h3 class="menu0_h3">Hơn 10 năm kinh nhiệm</h3>
        <div class="menu0_noidung">
            Bắt đầu từ ba sinh viên đại học đã vươn mình trở thành đế chế 
            ẩm thực hàng đầu có mặt trên mọi tỉnh thành trên cả nước....
        </div>
        <div class="menu0_h4">
            PHỤC VỤ MỌI BỮA ĂN BẠN CẦN
        </div>
        <div class="menu0_diachi">
            PHENIKAA - UNI| (01) 66771508
        </div>
        <div class="menu0_btn">TÌM HIỂU THÊM</div>
    </div>
</section>
<section class="menu1">
    <div class="titlle">
        <a href="">
            <img
                src="https://bizweb.dktcdn.net/100/332/765/themes/825892/assets/icon-banh.png?1624683794614"
                alt=""
                class="icon"
            />
        </a>
        <h2 class="tieude">Danh sách món ăn</h2>
    </div>
    <div class="slider show-on-scroll left-to-right" id="slider">
        <div class="slide" id="slide">
            <?php foreach($productList as $productItem) {?>
                <div class="item">
                    <div class="wow fadeInLeft card">
                        <div class="flip">
                            <div
                                class="front"
                                style="
                                    background-image: url(<?= $productItem['product_image']; ?>);
                                "
                            ></div>
                            <div class="back">
                                <h2 class="back_h2"><?= $productItem['product_name']; ?></h2>
                                <p><?= $productItem['product_desc']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <button class="ctrl-btn pro-prev"><</button>
        <button class="ctrl-btn pro-next">></button>
    </div>
</section>
<section class="today">
    <div class="titlle">
        <a href="">
            <img
                src="https://bizweb.dktcdn.net/100/332/765/themes/825892/assets/icon-banh.png?1624683794614"
                alt=""
                class="icon"
            />
        </a>
        <h2 class="tieude">MÓN ĂN NỔI BẬT  HÔM NAY?</h2>
    </div>
    <div class="today_doit">
        <div class="today_left show-on-scroll left-to-right">
            <h3 class="today_h3">Món ngon của ngày</h3>
            <div class="today_contact">
               Chọn lọc từ nhiều món ngon nhất, giới thiệu món ngon cho bạn mỗi ngày 
               đem đến trải nhiệm mới, tuyệt vời mỗi ngày cho bạn
                không chỉ còn là ngon bổ rẻ mà còn đẹp, sang trọng,.... 
            </div>
        </div>
        <div class="today_right show-on-scroll right-to-left">
            <div class="today_girdlayout">
                <div class="today_girditem">
                    <img
                        src="https://images.unsplash.com/photo-1626074353765-517a681e40be?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=387&q=80"
                        alt=""
                        class="gird_img"
                    />
                    <div class="gird_monan">
                        <h2 class="gird_mc"> đùi gà nướng ngũ vị</h2>
                    </div>
                </div>
                <div class="today_girditem">
                    <img
                        src="https://images.unsplash.com/photo-1601314212732-047d4bdffd22?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=436&q=80"
                        alt=""
                        class="gird_img"
                    />
                    <div class="gird_monan">
                        <h2 class="gird_mc">Cá ngừ hầm </h2>
                    </div>
                </div>
                <div class="today_girditem">
                    <img
                        src="https://images.unsplash.com/photo-1529193591184-b1d58069ecdd?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=435&q=80"
                        alt=""
                        class="gird_img"
                    />
                    <div class="gird_monan">
                        <h2 class="gird_mc">Thịt dê nướng </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="menu2">
    <div class="titlle">
        <a href="">
            <img
                src="https://bizweb.dktcdn.net/100/332/765/themes/825892/assets/icon-banh.png?1624683794614"
                alt=""
                class="icon"
            />
        </a>
        <h2 class="tieude">Món ăn được ưa chuộng</h2>
    </div>
    <div class="menu2_container">
        <div class="product show-on-scroll right-to-left">
            <?php foreach($top4 as $item) { ?>
                <div class="wow bounceInLeft menu2_itembox">
                    <div class="imgbox">
                        <img
                            src="<?= $item['product_image'] ?>"
                        />
                    </div>
                    <div class="details">
                        <div class="gia">
                            <h2><?= $item['product_name'] ?></h2>
                            <div class="price"><?= number_format($item['product_price']) ?></div>
                        </div>

                        <a href="?act=cart&xuli=add&id=<?= $item['product_id'];?>" class="addcart">Add To Cart</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</section>
<section class="giamgia">
    <div class="tong_giamgia">
        <div class="container_giamgia">
            <div class="thunhat_giamgia">
                <h3 class="h3_giamgia">BỮA</h3>
                <h2 class="h2_giamgia">sáng</h2>
                <div class="noidung_giamgia">
                      khởi động ngày mới nào !!!
                </div>
                <div class="btn_giamgia">
                    <a href=""> ORDER NOW</a>
                </div>
            </div>
            <div class="thuhai_giamgia">
                <div class="hm_giamgia">
                    <img class="img_giamgia"
                        src="https://idulic.vn/wp-content/uploads/2021/09/VietnameseBaguetteHer86m2byThuyDao3.jpg"
                        alt=""
                        
                    />
                    <div class="price_giamgia">
                        <div class="cm_giamgia">
                            <h5 class="h5_giamgia">chỉ</h5>
                            <h3 class="gia_giamgia">9.000 đ</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="thuba_giamgia">
                <div class="banhnho_giamgia">
                    <img
                        src="https://bh.saphie.net/media/2021/07/banh-mi-pate-2.jpg"
                        alt=""
                        class="ma_giamgia"
                    />
                    <div class="ut_giamgia">Bánh mì pate ruốc</div>
                </div>
                <div class="banhnho_giamgia">
                    <img
                        src="https://media.foody.vn/res/g92/910024/prof/s/foody-upload-api-foody-mobile-avar3-190426091947.jpg"
                        alt=""
                        class="ma_giamgia"
                    />
                    <div class="ut_giamgia">Bánh mì thịt nướng</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cungan">
    <div class="cungan_container">
        <div class="cungan_row">
            <div class="cungan_img">
                <img
                    src="https://image.thanhnien.vn/w660/Uploaded/2022/wsxrxqeiod/2020_04_29/dinh-cong_mwfc.jpg"
                    alt=""
                    class="cungan_hinhanh"
                />
            </div>
            <div class="cungan_noidung">
                <h2 class="cungan_h2">
                    KHông có gì quan trọng hơn là được cùng nhau
                </h2>
                <div class="cungan_p">
                    Cuộc sống ngày càng bận rộn, so bồ,... Kiến chúng ta xa nhau hơn vì vậy hãy tôn trọng mọi khoảnh khắc bên người thân và bạn bè.

                    Ăn và chụp ảnh cùng nhau và hãy chia sẻ khoảnh khắc tuyệt vời và chúng tôi sẽ giúp bạn có thêm nhiều khoảnh khắc tuyệt vời hơn nữa
                </div>
                <ul class="cungan_ul">
                    <li class="cungan_li">
                        Đặt món của shop và ăn cùng người thương, bạn bè, gia đình, chụp lại những khoảnh khắc vui vẻ,  ....
                    </li>
                    <li class="cungan_li">
                        Đăng ảnh đã chụp lên group facebook của chúng tôi và  nếu nhận được like và comment nhất mỗi tuần. chúng tôi sẽ công bố người thắng lên bộ sưu tập của website của shop
                    </li>
                    <li class="cungan_li">
                        chúng tôi sẽ gửi tặng bạn món quà để nhân thêm niềm vui cho bạn!!!!
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="create">
    <div class="create_container">
        <div class="create_tieude">
            Hãy cùng nhau tạo ra khoảnh khắc
            <span class="tt" style="color: rgb(198, 56, 28)"
                > ngọt ngào</span
            >
        </div>
        <div class="create_city">Ăn cùng nhau , lưu khoảnh khắc, nhân thêm vui </div>
        
        <div class="create_btn">
            <a href="contact.html" class="create_a">  chụp ngay nào ~~~~</a>
        </div>
    </div>
</section>

<section class="blog">
    <div class="titlle">
        <a href="">
            <img
                src="https://bizweb.dktcdn.net/100/332/765/themes/825892/assets/icon-banh.png?1624683794614"
                alt=""
                class="icon"
            />
        </a>
        <h2 class="tieude">Blog</h2>
    </div>
    <div class="blog_container">
        <div class="blog_main owl-carousel">
            <div class="blog_box">
                <div class="blog_img">
                    <img
                        src="https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80"
                        alt=""
                    />
                </div>
                <div class="blog_contact">
                    <h3 class="blog_h3">Recipe</h3>
                    <div class="blog_p">
                        Bữa sáng tốt cho sức khỏe 
                    </div>
                    <a href="" class="blog_a"> Xem chi tiết </a>
                </div>
            </div>
            <div class="blog_box">
                <div class="blog_img">
                    <img
                        src="https://images.unsplash.com/photo-1619738566066-81c6d589c80c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80"
                        alt=""
                    />
                </div>
                <div class="blog_contact">
                    <h3 class="blog_h3">Recipe</h3>
                    <div class="blog_p">
                        Thịt nướng tại gia như nhà hàng
                    </div>
                    <a href="" class="blog_a"> Xem chi tiết </a>
                </div>
            </div>
            <div class="blog_box">
                <div class="blog_img">
                    <img
                        src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                        alt=""
                    />
                </div>
                <div class="blog_contact">
                    <h3 class="blog_h3">Recipe</h3>
                    <div class="blog_p">
                        Món ăn cao cấp
                    </div>
                    <a href="" class="blog_a"> Xem chi tiết </a>
                </div>
            </div>
        </div>
    </div>
    <div class="gotop">
    <a href="#"><i class="fas fa-arrow-up"></i></a>
    
</div>
</section>
