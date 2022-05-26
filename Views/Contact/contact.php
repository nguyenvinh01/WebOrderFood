    
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
               
                <!-- <div class="contact_form" >
                    <form action="" id="myForm">
                        <input type="text" placeholder="Name" class="contact_form_txt" id="name">
                        <input type="text" placeholder="Email" class="contact_form_txt" id="email" >
                        <input type="text" placeholder="subject" class="contact_form_txt" id="subject">
                        <textarea placeholder="Message" class="contact_form_area" id="body"></textarea>
                         <input type="submit" name="Submit" class="contact_form_btn"  > 
                        <button  class="contact_form_btn" type="button" onclick="sendEmail()" value="Send An Email">Submit</button>
                    </form>
                </div> -->
        <form id="myForm">
			<h2>Send an Email</h2>

			<label>Name</label>
			<input id="name" type="text" placeholder="Enter Name">
			<br><br>

			<label>Email</label>
			<input id="email" type="text" placeholder="Enter Email">
			<br><br>

			<label>Subject</label>
			<input id="subject" type="text" placeholder=" Enter Subject"> 
			<br><br>

			<p>Message</p>
			<textarea id="body" rows="5" placeholder="Type Message"></textarea>
			<br><br>

			<button type="button" onclick="sendEmail()" value="Send An Email">Submit</button> 
		</form>

                <div class="contact_map">
                <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=%20phenikaa%20university&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                  <a href="https://www.online-timer.net"></a><br>
                  <style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style>
                  <a href="https://www.embedgooglemap.net">wordpress add google map</a>
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
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>

