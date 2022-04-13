
    <section class="home">
        <div class="home_hinhnen">
            
        </div>
        
    </section>
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table" style="align-items: center;">
                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                </tr>
                            </thead>
                            <?php foreach($allProduct as $p) { ?>
                            <tbody>
                            <?php 
        
    ?>          

                                <tr style="align-items: center;">
                                    <td class="shoping__cart__item">Mã Đơn Hàng</td>
                                    <td class="shoping__cart__item">Giá</td>
                                </tr>
                                <tr style="align-items: center;">
                                <div class="product__item__text">
                                    <td class="shoping__cart__item" style="align-items: center;">
                                        <!-- <th>Mã đơn hàng</th> -->
                                        <h5> <?= $p['order_id'];?> </h5>
                                    </td>
                                    <td class="shoping__cart__item" style="align-items: center;">
                                        <!-- <th>Giá</th> -->
                                        <h5><?= number_format($p['order_total']);?></h5>
                                    </td>
                                </div>
                                    
                                </tr>
                            </tbody>
                            <?php }?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="?act=menu" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                    </div>
                </div> -->
                
                <!-- <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <?php
                                $count = 0;
                                foreach ($_SESSION['cartb'] as $value) {
                                    $count += $value['ThanhTien'];
                                }
                            ?>
                            <li>Total <span><?= number_format($count) ?> đ</span></li>
                        </ul>
                        <a href="?act=checkout&xuli=show" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    

    

