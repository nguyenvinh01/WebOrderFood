
    <section class="home">
        <div class="home_hinhnen">
            
        </div>
        
    </section>
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <td><h5></h5></td>
                                    <td><h5></h5></td>
                                    <td><h5></h5></td>
                                </tr>
                            </thead>

                            <?php foreach($purchaseDetails as $d){ ?>

                            <tbody>
                                    <tr>
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
                                            <?= number_format($d['product_price']) ?>
                                        </td>
                                        <td class="shoping__cart__item">
                                            <img src="<?php echo $d['product_image'];?>" alt="">
                                        </td>

                                    </tr>
                            </tbody>
                            <?php } ?>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    

