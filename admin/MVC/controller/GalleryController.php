<?php
    require_once("MVC/Models/gallery.php");
    class GalleryController {
        var $galle_model;
        public function __construct()
        {
            $this->galle_model = new gallery();            
        }
        function list(){
            $data_cate = $this->galle_model->list();
            require_once('MVC/index.php');

        }

        function galle(){
            $images_url = $_POST['mota'];
            $this->galle_model->add_galle($images_url);
            require_once('MVC/index.php');

        }
        function addcate(){
            require_once('MVC/index.php');
        }
        public function update()
        {
            $id = $_POST['id'];
            $data = array(
                
                'image_url' =>  $_POST['mota'],
            );
            foreach ($data as $key => $value) {
                if (strpos($value, "'") != false) {
                    $value = str_replace("'", "\'", $value);
                    $data[$key] = $value;
                }
            }
            $this->galle_model->update($id,$data);
            
        }
        public function edit()
        {
            $id = isset($_GET['id']) ? $_GET['id'] : 1;
            $data = $this->galle_model->find($id);
            require_once('MVC/index.php');
        }
        public function delete()
        {
            $id = $_GET['id'];
            $data =  $this->galle_model->delete($id);
            require_once('MVC/Views/Gallery/cate_list.php');
        }
    }
?>