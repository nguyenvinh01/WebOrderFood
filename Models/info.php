<?php
    require_once('model.php');
    class info extends model {
        function account()
        {
            $id = $_SESSION['login']['user_id'];
            return $this->conn->query("SELECT * from tbl_user where user_id = $id")->fetch_assoc();
        }
        function update_account($data)
        {
            $v = "";
            foreach ($data as $key => $value) {
                $v .= $key . "='" . $value . "',";
            }
            $v = trim($v, ",");
    
            $query = "UPDATE tbl_user SET  $v   WHERE  user_id = " . $_SESSION['login']['user_id'];
    
            $result = $this->conn->query($query);
            
            if ($result == true) {
                setcookie('doimk', 'Cập nhật tài khoản thành công', time() + 2);
                header("location: ?act=home");
            } else {
                setcookie('doimk', 'Mật khẩu xác nhận không đúng', time() + 2);
                header("location: ?act=info");
            }
        }
        function changePass($newpass,$oldpass){
            $queryC = "SELECT * FROM  tbl_user  WHERE  user_id = " . $_SESSION['login']['user_id']. " AND password = '".$oldpass."'";
            $result = $this->conn->query($queryC);
            $count = mysqli_num_rows($result);
            if($count > 0) {
                $query = "UPDATE tbl_user SET  password = '$newpass'  WHERE  user_id = ".$_SESSION['login']['user_id'];
                $this->conn->query($query);
                header('location: ?act=home');

            }
            else {
                header('location: ?act=pass');
            }
        }
        function error()
        {
            header('location: ?act=errors');
        }
    }
?>
