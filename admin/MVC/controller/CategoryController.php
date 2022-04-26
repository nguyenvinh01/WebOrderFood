<?php
    require_once("MVC/models/category.php");
    class CategoryController {
        var $cate_model;
        public function __construct()
        {
            $this->cate_model = new category();            
        }
        function list(){
            $data_cate = $this->cate_model->list();
            require_once('MVC/index.php');

        }

        function cate(){
            $category_name = $_POST['TenDm'];
            $category_desc = $_POST['mota'];
            $this->cate_model->add_cate($category_name,$category_desc);
            require_once('MVC/index.php');

        }
    }
?>