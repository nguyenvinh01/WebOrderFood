<?php
    require_once("MVC/Models/category.php");
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
        function addcate(){
            require_once('MVC/index.php');
        }
        public function update()
        {
            $id = $_POST['id'];
            $data = array(
                'category_name'  => $_POST['TenDm'],
                'category_desc' =>  $_POST['mota'],
            );
            foreach ($data as $key => $value) {
                if (strpos($value, "'") != false) {
                    $value = str_replace("'", "\'", $value);
                    $data[$key] = $value;
                }
            }
            $this->cate_model->update($id,$data);
            
        }
        public function edit()
        {
            $id = isset($_GET['id']) ? $_GET['id'] : 1;
            $data = $this->cate_model->find($id);
            require_once('MVC/index.php');
        }
        public function delete()
        {
            $id = $_GET['id'];
            $data =  $this->cate_model->delete($id);
            require_once('MVC/Views/Category/cate_list.php');
        }
    }
?>