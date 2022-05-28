<?php
require_once("model.php");

class gallery extends Model
{
    var $table = "tbl_images";
    var $contens = "id";
    function add_galle($data){
        $query = "INSERT INTO tbl_images (image_url) VALUES ('$data');";

        $status = $this->conn->query($query);
        if ($status == true) {
            setcookie('msg', 'Xóa thành công', time() + 2);
        } else {
            setcookie('msg', 'Xóa không thành công', time() + 2);
        }
        header("location: ?act=gallery&xuli=show");
    }
    function list(){
        $sql = 'SELECT * FROM tbl_images;';
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
            header("location:  ?act=gallery&xuli=show");
        } else {
            setcookie('msg', 'Update vào không thành công', time() + 2);
            header("location: ?act=gallery&xuli=update");
        }
    }
    function find($id)
    {
        $query = "select * from $this->table where $this->contens =$id";
        return $this->conn->query($query)->fetch_assoc();
    }
    function delete($id)
    {
        $query = "DELETE from tbl_images where id = $id;";
        
        $status = $this->conn->query($query);
        if ($status == true) {
            setcookie('msg', 'Xóa thành công', time() + 2);
        } else {
            setcookie('msg', 'Xóa không thành công', time() + 2);
        }
        header("location: ?act=gallery&xuli=show");
    }
}