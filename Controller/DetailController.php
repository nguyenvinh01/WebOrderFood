<?php
    require_once('Models/detail.php');
    class DetailController {
        var $detail_model;
        public function __construct() {
            $this->detail_model = new detail();
        }

        function getDetail() {
            $id = $_GET['id'];
         
            $detailProduct = $this->detail_model->getDetail($id);
            $productByCates = $this->detail_model->getProductByCate($id);
            $images = $this->detail_model->getImages($id);
            require_once('Views/index.php');
        }
    }
?>