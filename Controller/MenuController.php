<?php
    ob_start();

    require_once('Models/menu.php');
    class MenuController {
        var $menu_model;
        public function __construct() {
            $this->menu_model = new menu();
        }

        function getAll() {
            $allProduct = $this->menu_model->getPag();
            $condition = "";
            $latests = $this->menu_model->getLatest();
            $Categories = $this->menu_model->getCategories();
            if(isset($_GET['loai'])) {
                $loai = $_GET['loai'];
                $products = $this->menu_model->getProductByCategory($loai);
            } else if(isset($_GET['sort'])) {
                $sort = $_GET['sort'];
                $condition = "ORDER BY product_price $sort";
                $products = $this->menu_model->getAllProduct($condition);
            } else {
                $products = $this->menu_model->getAllProduct($condition);
            }
            require_once('Views/index.php');
        }
        function search(){
            if(isset($_POST['name'])){
            $result = $this->menu_model->search($_POST['name']);
            if($result){
                foreach($result as $row):

            ?>
                        <tr>
                            <td class = "w-50 pr-4"><a href="?act=detail&id=<?= $row['product_id'];?>&loai=<?= $row['category_id'];?>" class="row-link"><img src= "<?=$row['product_image']?>" class = " w-25 h-3"></a></td>
                            <td><a href="#" class="row-link"></a><?=$row['product_name']?></td>
                            <td><a href="#" class="row-link"></a><?=$row['product_price']?></td>
                        </tr>
            <?php

            endforeach;

            }
            else{
                echo "<tr><td>Không tìm thấy món</td></tr>";
            }
        }
        }
    }
?>