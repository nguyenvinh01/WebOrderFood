
    <section class="home">
        <div class="home_hinhnen">
            
        </div>
        
    </section>
    <section class="shoping-cart spad">
        <div class="container">
                        <table style="text-align: center;"  class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                                <tr>
                                    <th>Mã Đơn Hàng</th>
                                    <th>Giá Đơn Hàng</th>
                                    <th>Tình Trạng</th>
                                    <!-- <th>Giá tiền</th>
                                   
                                    <th>Chức năng</th> -->
                                </tr>
                            </thead>
                            <?php foreach($allProduct as $p) { ?>
                                <?php if($p['user_id']==$_SESSION['login']['user_id']){ ?>
                                <tbody text-align: center;>      
                                    <td><?= $p['order_id'];?></td>   

                                    <td class="shoping__cart__item" style="text-align: center;">
                                        <h4><span class="badge bg-info"><?= number_format($p['order_total']);?> VND</span></h4>
                                    </td>
                                    <td class="shoping__cart__item" style="text-align: center;">
                                        <?php switch($p['order_status']){ 
                                            case '1':
                                                echo "<h4><span class=\"badge bg-primary\">Đơn hàng chưa xử lý</span></h4>";
                                                break;
                                            case '2':
                                                echo "<h4><span class=\"badge bg-warning\">Đơn hàng đang xử lý</span></h4>";
                                                break;
                                            
                                            case '3':
                                                echo "<h4><span class=\"badge bg-success\">Đơn hàng đã xử lý</span></h4>";
                                                break;
                                            
                                            default:
                                                echo "<h4><span class=\"badge bg-danger\">Đơn hàng bị hủy</span></h4>";
                                                break;

                                            }?>
                                    </td>
                                    <td class="" style="width: 70px; height: 10px">
                                        <div class="" >
                                            <a href="?act=purchase&xuli=<?= $p['order_id'];?>" name= ""type="submit" value="" class="button-3">Chi tiết</a>
                                        </div>

                                    </td>                                   
                    
                            </tbody>
                            <?php }}?>
                        </table>
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
