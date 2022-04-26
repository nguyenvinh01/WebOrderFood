<?php
require_once("model.php");

class category extends Model
{
    var $table = "tbl_category_product";
    var $contens = "category_id";
    function add_cate($data1,$data){
        $query = "INSERT INTO tbl_category_product (category_name, category_desc) VALUES ('$data1','$data');";

        $status = $this->conn->query($query);
        if ($status == true) {
            setcookie('msg', 'Xóa thành công', time() + 2);
        } else {
            setcookie('msg', 'Xóa không thành công', time() + 2);
        }
        header("location: ?act=product&xuli=join");
    }
    function list(){
        $sql = 'SELECT * FROM tbl_category_product;';
        $rs = $this->conn->query($sql);
        $data = array();
        while($row = $rs->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
}