<?php
    require_once('model.php');
    class purchase extends model {


        function listPurchase() {

            $queryDetail = "SELECT * FROM tbl_order;";
            $rs = $this->conn->query($queryDetail);
            $data = array();
            while($row = $rs->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
        function see($id){
            $queryDetail = "SELECT * FROM tbl_order_details od, tbl_product p WHERE order_id = $id;";
            $rs = $this->conn->query($queryDetail);
            $data= array();
            while($row = $rs->fetch_assoc()){
                $data[]= $row;
            }
            return $data;
        }
    }
?>
