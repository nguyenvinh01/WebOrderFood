
    <section class="home">
        <div class="home_hinhnen">
            
        </div>
        
    </section>
    <?php ?>
    <section class="shoping-cart spad">
        <div class="container">
                        <table style="text-align: center;"  class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                                <tr>
                                    <th></th>
                                    <th>Mã Sản Phẩm</th>
                                    <th>Số Lượng</th>
                                    <th>Món Ăn</th>
                                    <th>Đơn Giá</th>

                                </tr>
                            </thead>
                            <?php foreach($purchaseDetails as $d){ ?>
                                <?php if($d['user_id']==$_SESSION['login']['user_id']){ ?>

                                <tbody>
                                        
                                            <td class="shoping__cart__item" style="">
                                                <img src="<?php echo $d['product_image'];?>" alt="">
                                            </td>
                                            <td class="shoping__cart__item">
                                                <h5></h5><?= $d['product_id'];?></h5>
                                            </td>
                                            <td class="shoping__cart__item">
                                                <h5><?= $d['product_num'];?></h5>

                                            </td>
                                            <td class="shoping__cart__item">
                                                <h5><?= $d['product_name'];?></h5>

                                            </td>
                                            <td class="shoping__cart__total">
                                                <h4><span class="badge bg-info"><?= number_format($d['product_price']) ?></span></h4>
                                            </td>
                                </tbody>
                            <?php }} ?>

                        </table>
            </div>
        </div>
    </section>

    

    