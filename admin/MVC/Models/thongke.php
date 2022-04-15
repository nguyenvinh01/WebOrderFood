<?php
require_once("model.php");
class thongke extends Model
{
    function tksp(){
           
        $sql = 'SELECT * FROM tbl_product  ';
        $rs = $this->conn->query($sql);
        $data = array();
        while($row = $rs->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function coutnv(){
        $sql = 'SELECT * FROM tbl_user where role_id=2 ';
        $rs = $this->conn->query($sql);
        $data = array();
        while($row = $rs->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function coutorder(){
        $sql = 'SELECT * FROM tbl_order ';
        $rs = $this->conn->query($sql);
        $data = array();
        while($row = $rs->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function doanhthu(){
        $sql = 'SELECT SUM(product_price) FROM tbl_order_details ';
        $rs = $this->conn->query($sql);
        $data = array();
        while($row = $rs->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    function getLine() {
        $sql = "SELECT
            DISTINCT month(created_at) AS day,
            SUM(order_total) AS money_earned
        FROM tbl_order
        GROUP BY day";
        $rs = $this->conn->query($sql);
        $data = array();
        while($row = $rs->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
}
?>