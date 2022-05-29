<?php
ob_start();
 require_once('model.php');
    class register extends model {
        function register_user(){
           
    $username = "";
    $email    = "";
    $errors = array(); 
    
    
    if (isset($_POST['submit'])) {
      
      $username = mysqli_real_escape_string($this->conn, $_POST['username']);
      $user_email = mysqli_real_escape_string($this->conn, $_POST['emailInput']);
      $password_1 = mysqli_real_escape_string($this->conn, $_POST['password']);
      $password_2 = mysqli_real_escape_string($this->conn, $_POST['rpassword']);
    

      if (empty($username)) { array_push($errors, "Username is required"); }
      if (empty($user_email)) { array_push($errors, "Email is required"); }
      if (empty($password_1)) { array_push($errors, "Password is required"); }
      if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
      }
    

      $user_check_query = "SELECT * FROM tbl_user WHERE username='$username' OR user_email='$email' LIMIT 1";
      $rs = $this->conn->query($user_check_query);
      $user = mysqli_fetch_assoc($rs);
   
      if ($user) { 
        if ($user['username'] === $username) {
          array_push($errors, "Username already exists");
        }
    
        if ($user['user_email'] === $user_email) {
          array_push($errors, "email already exists");
        }
      }
    
      if (count($errors) == 0) {

           $password = $password_1;
    
          $query = "INSERT INTO tbl_user (username, user_email, password) 
                    VALUES('$username', '$user_email', '$password')";
          $rs = $this->conn->query($query);

          $_SESSION['valid'] = true;
          $_SESSION['timeout'] = time();
          $_SESSION['username'] = $username;
  
          $_SESSION['success'] = "You are now logged in";
          header("location: ?act=login");

      }
    }
    
        }
    }
?>
