
    <section class="home">
        <div class="home_hinhnen">
            
        </div>
        
    </section>
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table" style="align-items: center;">
                        <table style="text-align: center;">
                            <thead>
                                <tr>
                                    <th></th>
                                </tr>
                            </thead>
                            <?php foreach($allProduct as $p) { ?>
                                <?php if($p['user_id']==$_SESSION['login']['user_id']){ ?>
                                <tbody text-align: center;>         
                                <tr style="text-align: center;">
                                    <td class="shoping__cart__item" style="text-align: center;">Mã Đơn Hàng</td>
                                    <td class="shoping__cart__item" style="text-align: center;">Giá</td>
                                </tr>
                                <tr style="text-align: center;">
                                <div class="product__item__text">
                                    <td class="shoping__cart__item" style="text-align: center;"> 
                                        <!-- <th>Mã đơn hàng</th> -->
                                        <h5> <?= $p['order_id'];?> </h5>
                                    </td>
                                    <td class="shoping__cart__item" style="text-align: center;">
                                        <!-- <th>Giá</th> -->
                                        <h5><?= number_format($p['order_total']);?></h5>
                                    </td>
                                    <td class="" style="width: 70px; height: 10px">
                                        <div class="" >
                                            <a href="?act=purchase&xuli=<?= $p['order_id'];?>" type="submit" value="Order" class="button-3">Chi tiết</a>
                                            <!-- <a href="?act=detail&id=<?= $p['order_id'];?>" type="submit" value="Order" class="button-3">Chi tiết</a> -->
                                        </div>

                                    </td>
                                </div>
                                    
                                </tr>
                            </tbody>
                            <?php }}?>
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

    

    

<!-- HTML !-->
<!-- <button class="button-3" role="button">Button 3</button> -->

<style>
.button-3 {
  appearance: none;
  background-color: #2ea44f;
  border: 1px solid rgba(27, 31, 35, .15);
  border-radius: 6px;
  box-shadow: rgba(27, 31, 35, .1) 0 1px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system,system-ui,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji";
  font-size: 14px;
  font-weight: 600;
  line-height: 20px;
  padding: 6px 16px;
  position: relative;
  text-align: center;
  text-decoration: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: middle;
  white-space: nowrap;
}

.button-3:focus:not(:focus-visible):not(.focus-visible) {
  box-shadow: none;
  outline: none;
}

.button-3:hover {
  background-color: #2c974b;
}

.button-3:focus {
  box-shadow: rgba(46, 164, 79, .4) 0 0 0 3px;
  outline: none;
}

.button-3:disabled {
  background-color: #94d3a2;
  border-color: rgba(27, 31, 35, .1);
  color: rgba(255, 255, 255, .8);
  cursor: default;
}

.button-3:active {
  background-color: #298e46;
  box-shadow: rgba(20, 70, 32, .2) 0 1px 0 inset;
}
</style>
