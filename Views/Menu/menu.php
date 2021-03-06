<section class="home">
            <div class="home_hinhnen"></div>
        </section>

        <section class="product spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-5">
                        <div class="sidebar">
                            <div class="sidebar__item">
                                <h4>Loại món</h4>
                                <ul>
                                    <li><a href="?act=menu">Tất cả</a></li>
                                    <?php require_once('category.php'); ?>
                                </ul>
                            </div>
                            

                            <div class="sidebar__item">
                                <div class="latest-product__text">
                                    <h4>Món mới cập nhật</h4>
                                    <div class="latest-product__slider owl-carousel ">
                                        <div class="latest-prdouct__slider__item">
                                            <?php foreach($latests as $latest) { ?>
                                                <a href="?act=detail&id=<?= $latest['product_id'];?>" class="latest-product__item" >
                                                    <div class="latest-product__item__pic">
                                                        <img
                                                            src="<?= $latest['product_image'] ?>"
                                                            alt=""
                                                            class="latest-img"
                                                    
      
                                                
                                                        />
                                                    </div>
                                                    <div
                                                        class=" latest-product__item__text" >
                                                        <h6><?= $latest['product_name'] ?></h6>
                                                        <span><?= number_format($latest['product_price']) ?></span>
                                                    </div>
                                                </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-7">
                            <div class="input-group rounded">
                            <input type="search" id= "search" class="form-control rounded col-lg-4 col-md-7" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                            <span class="input-group-text border-0" id="search-addon">
                                <i class="fas fa-search"></i>
                            </span>
                            </div>
                        <table class="table table-hover position: fixed;">
                            <tbody id="output">
                            </tbody>
                        </table>
                        <div class="filter__item">
                            <div class="row">
                                <div class="col-lg-4 col-md-5">
                                    <div class="filter__sort">
                                        <span>Sort By</span>
                                        <select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                            <option value="?act=menu">Mặc định</option>
                                            <option value="?act=menu&sort=asc">Thấp đến cao </option>
                                            <option value="?act=menu&sort=desc">Cao đến thấp</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php require_once('listProduct.php'); ?>
                        </div>
                        <div class="product__pagination">
                            <?php 
                                $btn = ceil(count($allProduct)/15);
                                for($i=1; $i<=$btn; $i++) {
                                    echo '<a href="?act=menu&page='.$i.'">'.$i.'</a>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gotop">
    <a href="#"><i class="fas fa-arrow-up"></i></a>
</div>
        </section>
        
<script type="text/javascript">
  $(document).ready(function(){
    $("#search").keyup(function(){
      $.ajax({
        type:'POST',
        url:'?act=search',
        // url:'Views/Menu/search.php',
        data:{
          name:$("#search").val(),
        },
        success:function(data){
          $("#output").html(data);
        }
      });

    });
  });
</script>
