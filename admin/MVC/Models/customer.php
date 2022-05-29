<?php
require_once("model.php");
class customer extends Model
{
      var $table = "tbl_user";
       var $contens = "user_id";
       function list_custom(){
       
           $sql = 'SELECT * FROM tbl_user  ';
        $rs = $this->conn->query($sql);
           $data = array();
           while($row = $rs->fetch_assoc()) {
              $data[] = $row;
          }
           return $data;
       }
      function see($id)
       {
          $query = "select * from $this->table where $this->contens =$id";
           return $this->conn->query($query)->fetch_assoc();
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
              header("location: ?act=controller&xuli=join");
          } else {
              setcookie('msg', 'Update vào không thành công', time() + 2);
            header("location: ?act=controller&xuli=update");
          }
      }

} 

?>