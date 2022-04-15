<?php
    require_once('Models/purchase.php');
    class PurchaseController {
        var $cart_model;
        public function __construct() {
            $this->purchase_model = new purchase();
        }
        function getAll() {
            $allProduct = $this->purchase_model->listPurchase();
            require_once('Views/index.php');
        }
        public function see_info()
        {
            $id = $_GET['xuli'];
            $purchaseDetails = $this->purchase_model->see($id);
            require_once('Views/index.php');
            
            // require_once('MVC/index.php');
            //require_once("MVC/Views/authors/edit.php");
        }
    }
?>