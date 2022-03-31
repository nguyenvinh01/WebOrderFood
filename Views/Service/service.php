    <section class="home">
        <div class="home_hinhnen">
            
        </div>
        
    </section>
    <div class="gallery_tieude">
      <h2 class="gallery_h2">
        bộ sưu tập hình ảnh
      </h2>
      <div class="gallery_nd">
      Mọi khoảnh khắc bạn hạnh phúc , chúng tôi đều muốn lưu giữ lại. Nó cũng là khoảnh khắc hạnh phúc của chúng tôi.
      </div>
  </div>
    <section class="gallery_vc">
        <div class="wrapper">
            <?php foreach($images as $image) {?>
                <div class="image">
                  <img src="<?= $image['image_url'];?>">
                </div>
              <?php } ?>
        </div>
      
          <div class="gallery">
            <span class="control prev_ga">
              <i class="fas fa-chevron-left"></i>
            </span>
            <span class="control next_ga">
              <i class="fas fa-chevron-right"></i>
            </span>
            <div class="gallery-inner">
              <img src="" alt="" />
            </div>
            <i class="fas fa-times close_ga"></i>
          </div>
       </section>
      
       
      <section class="cuoicung">
        <div class="cuoicung_container">
          <div class="cuoicung_left">
            <img src="https://miraclestudio.design/html/deliciousa-html/assets/images/others/choose-thumb.png" alt="">
          </div>
          <div class="cuoicung_right">
            <div class="cuoicung_box">
                <div class="cuoicung_logo">
                  <i class="fas fa-award"></i>
                </div>
                <h2 class="cuoicung_h2">
                  sự uy tín
                </h2>
                <div class="cuoicung_noidung">
                  với rất nhiều bằng chứng nhận trong nước lẫn nước . Chúng tôi tự tin bản thân sẽ đem lại trải tuyệt vời cho khách hàng
                </div>
            </div>
            <div class="cuoicung_box">
              <div class="cuoicung_logo">
                <i class="fas fa-utensils"></i>
              </div>
              <h2 class="cuoicung_h2">
                Đặt hàng online
              </h2>
              <div class="cuoicung_noidung">
                nhanh, gọn và rẻ
              </div>
          </div>
          <div class="cuoicung_box">
            <div class="cuoicung_logo">
              <i class="fas fa-hamburger"></i>
            </div>
            <h2 class="cuoicung_h2">
              đảm bảo về chất
            </h2>
            <div class="cuoicung_noidung">
              chúng tôi đảm bảo chất lượng trên từng cm đồ ăn
            </div>
        </div>
        <div class="cuoicung_box">
          <div class="cuoicung_logo">
            <i class="fas fa-phone"></i>
          </div>
          <h2 class="cuoicung_h2">
            24/7
          </h2>
          <div class="cuoicung_noidung">
            luôn lắng nghe bạn mọi lúc mọi nơi . " hãy nói theo cách của bạn"
    
          </div>
      </div>
          </div>
        </div>
        <div class="gotop">
    <a href="#"><i class="fas fa-arrow-up"></i></a>
</div>
      </section>
       <!-- <script >
        const images = document.querySelectorAll(".wrapper .image img");
const gallery = document.querySelector(".gallery");
const galleryImg = document.querySelector(".gallery-inner img");
const close = document.querySelector(".gallery .close_ga");

const next = document.querySelector(".control.next_ga");
const prev = document.querySelector(".control.prev_ga");

let currentIndex = 0;

images.forEach((img, index) => {
  img.addEventListener("click", () => {
    currentIndex = index;
    showGallery();
  });
});

function showGallery() {
  currentIndex == images.length - 1
    ? next.classList.add("hide")
    : next.classList.remove("hide");

  currentIndex == 0
    ? prev.classList.add("hide")
    : prev.classList.remove("hide");

  gallery.classList.add("show");
  galleryImg.src = images[currentIndex].src;
}

close.addEventListener("click", () => {
  gallery.classList.remove("show");
});

next.addEventListener("click", () => {
  currentIndex != images.length - 1 ? currentIndex++ : undefined;
  showGallery();
});
prev.addEventListener("click", () => {
  currentIndex != 0 ? currentIndex-- : undefined;
  showGallery();
});

// esc click
document.addEventListener("keydown", (e) => {
  if (e.keyCode == 27) gallery.classList.remove("show");
});

        function user_name(){
    const toggleMenu = document.querySelector('.user_menu');
    toggleMenu.classList.toggle('user_active')
}


    </script> -->