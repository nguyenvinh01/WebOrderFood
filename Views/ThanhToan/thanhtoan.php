
    <section class="home">
        <div class="home_hinhnen">
            
        </div>
        
    </section>
    <section class="checkout spad">
        <div class="container">
           
            <div class="checkout__form">
                <h4>Billing Details</h4>
                <form action="?act=checkout&xuli=save" method="post">
                    <div class="row">
                        <?php if(isset($_SESSION['login'])) { ?>
                            <div class="col-lg-6 col-md-6">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <p>Full Name<span>*</span></p>
                                            <input type="text" name="fullname" value="<?= $_SESSION['login']['name']?>" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <p>Address<span>*</span></p>
                                            <input type="text" name="address" value="<?= $_SESSION['login']['user_address']?>" required>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <p>Phone<span>*</span></p>
                                            <input type="text" name="phone" value="<?= $_SESSION['login']['user_tel']?>" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <p>Email<span>*</span></p>
                                            <input type="email" name="email" value="<?= $_SESSION['login']['user_email']?>" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }  else {?>
                            <div class="col-lg-6 col-md-6">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <p>Full Name<span>*</span></p>
                                            <input type="text" name="fullname" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <p>Address<span>*</span></p>
                                            <input type="text" name="address" required>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <p>Phone<span>*</span></p>
                                            <input type="text" name="phone" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <p>Email<span>*</span></p>
                                            <input type="email" name="email" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="col-lg-6 col-md-6">
                            <div class="checkout__order">
                                <h4>Your Order</h4>
                                <div class="checkout__order__products">Products <span>Total</span></div>
                                <ul>
                                    <?php
                                        $count = 0;
                                        foreach ($_SESSION['cartb'] as $item) {
                                        $count += $item['ThanhTien'];
                                    ?>
                                        <li><?= $item['product_name'];?> <span><?= number_format($item['product_price'] * $item['SoLuong']);?> đ</span></li>
                                    <?php }?>
                                </ul>
                                <div class="checkout__order__total">Total <span><?= number_format($count);?> đ</span></div>
                                <button type="submit" class="site-btn">PLACE ORDER</button>


                                
                            </div>
                        </div>
                    </div>
                </form>
                <?php
                # Include the Autoloader (see "Libraries" for install instructions)
                require 'mailgun-php/vendor/autoload.php';
               use Mailgun;
                # Instantiate the client.
                $mgClient = new Mailgun("014ba95a1bcd56e59c99f497198dc01f-5e7fba0f-3d486355");
                $domain = "sandbox1b8782e5c6394c8c8fadae6829ac5b21.mailgun.org";
                # Make the call to the client.
                $result = $mgClient->sendMessage($domain, array(
                    'from'	=> 'Excited User <mailgun@YOUR_DOMAIN_NAME>',
                    'to'	=> 'Baz <YOU@YOUR_DOMAIN_NAME>',
                    'subject' => 'Hello',
                    'text'	=> 'Testing some Mailgun awesomness!'
                ));
                ?>
            </div>
        </div>
    </section>

