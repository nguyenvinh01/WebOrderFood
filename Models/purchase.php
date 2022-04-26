<?php
    require_once('model.php');
    class purchase extends model {


        function listPurchase() {

            $queryDetail = "SELECT * FROM tbl_order ORDER BY order_id DESC ;";
            $rs = $this->conn->query($queryDetail);
            $data = array();
            while($row = $rs->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
        function see($id){
            $uid = $_SESSION['login']['user_id'];
            $queryDetail = "SELECT o.user_id, od.order_id,od.product_price,od.product_num,od.product_id, p.product_image,p.product_id, p.product_name FROM
             tbl_order_details od, tbl_product p,tbl_order o WHERE od.order_id = $id AND od.product_id = p.product_id AND o.user_id= $uid GROUP BY od.product_id;
            ";
            $rs = $this->conn->query($queryDetail);
            $data= array();
            while($row = $rs->fetch_assoc()){
                $data[]= $row;
            }
            return $data;
        }
    }
?>
