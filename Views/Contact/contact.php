
    <section class="home">
        <div class="home_hinhnen">
            
        </div>
        
    </section>
    <div class="main_center">
        <h1 class="aboutus_h1">
            Contact Us
        </h1>
        <section class="hm">
           <div class="hm_container">
            <div class="hm_box">
                <span class="sp">
                    <i class="fas fa-map-marker-alt"></i>
                </span>
                <div class="hm_noidung">
                    <h2 class="hm_h2">
                        Location:
                    </h2>
                    <div class="hm_ct">
                    P. Nguyễn Trác, Yên Nghĩa, Hà Đông, Hà Nội
                    </div>
                </div>
               </div>
               <div class="hm_box">
                <span class="sp">
                    <i class="fas fa-phone-alt"></i>
                </span>
                <div class="hm_noidung">
                    <h2 class="hm_h2">
                        Phone:
                    </h2>
                    <div class="hm_ct">
                        (123) 667 - 715 - 08 </br>
                        (123) 1901 - 001 - có
                    </div>
                </div>
               </div>
               <div class="hm_box">
                <span class="sp">
                    <i class="fas fa-envelope"></i>
                </span>
                <div class="hm_noidung">
                    <h2 class="hm_h2">
                        Email:
                    </h2>
                    <div class="hm_ct">
                       heatleo@gamil.com </br>
                        support_sunlight@gmail.com
                    </div>
                </div>
               </div>
           </div>
        </section>
       
        <section class="maps">

               

            <div class="contact-in">
               
                <div class="contact_form" >
                    <form action="" id="myForm" >
                        <input type="text" placeholder="Name" class="contact_form_txt" id="name">
                        <input type="text" placeholder="Email" class="contact_form_txt" id="email" >
                        <input type="number" placeholder="Phone" class="contact_form_txt" id="subject"> 
                        <textarea placeholder="Message" class="contact_form_area" id="body"></textarea>
                          
                        <button  class="contact_form_btn" id='button' name="submit" type="button" onclick="sendEmail()" ;
                         value="Send An Email">Submit</button>
                    </form>
                   
                </div>


                <div class="contact_map">
                <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=%20phenikaa%20university&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                  <a href="https://www.online-timer.net"></a><br>
                  <style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style>
                  <a href="https://www.embedgooglemap.net"></a>
                  <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style>
                </div>
            </div>
        </section>
    </div>
    <div class="gotop">
    <a href="#"><i class="fas fa-arrow-up"></i></a>
</div>



<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">



        function sendEmail() {

            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                   }
                });
                document.getElementById("myForm").reset();
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '3px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
     
    
    </script>
  
  <?php

// $alert = '';
// if(isset($_SESSION['submit'])){
//     $alert = '<div class="alert-success">
//                  <span>Message Sent! Thank you for contacting us.</span>
//                 </div>';
// }
// echo $alert; 
   ?>