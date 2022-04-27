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

    function update($id,$data)
    {
        $v = "";
        foreach ($data as $key => $value) {
            $v .= $key . "='" . $value . "',";
        }
        $v = trim($v, ",");


        $query = "UPDATE $this->table SET  $v   WHERE $this->contens = $id";

        $result = $this->conn->query($query);
        
        if ($result == true) {
            header("location: ?act=product&xuli=join");
        } else {
            setcookie('msg', 'Update vào không thành công', time() + 2);
            header("location: ?act=category&xuli=update");
        }
    }
    function find($id)
    {
        $query = "select * from $this->table where $this->contens =$id";
        return $this->conn->query($query)->fetch_assoc();
    }
    function delete($id)
    {
        $query = "DELETE from tbl_category_product where category_id = $id;";
        
        $status = $this->conn->query($query);
        if ($status == true) {
            setcookie('msg', 'Xóa thành công', time() + 2);
        } else {
            setcookie('msg', 'Xóa không thành công', time() + 2);
        }
        header("location: ?act=category&xuli=show");
    }
}