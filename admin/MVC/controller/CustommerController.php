<?php
require_once("MVC/models/customer.php");
class CustommerController {
    var $cus_control;
    public function __construct()
    {
        $this->cus_control = new customer();            
    }
    public function list()
    {
        $data = $this->cus_control->list_custom();
        
        require_once('MVC/index.php');
    }
    public function see_info()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->cus_control->see($id);
   

        require_once('MVC/index.php');
        //require_once("MVC/Views/authors/edit.php");
    }
    function controller() {
        require_once('MVC/index.php');
    }
 function update(){
         $id=$_POST['user_id'] ;
            
               $name =$_POST['firstname'];
              $user_sex =$_POST['GioiTinh'];
               $user_tel =$_POST['SDT'];
              $user_email =$_POST['mail'];
              $user_address =$_POST['course'];
              
             $role_id  =$_POST['Role'];


           
           
           $this->cus_control->update_account($name,$user_sex,$user_tel, $user_email,$user_address,$role_id,$id );
      }
        header('location: ?act=controller&xuli=update');
    }    

    // public function update()
    //    {
    //        $id = $_POST['id'];
    //         $data = array(
    //            'name' =>    $_POST['firstname'],
    //             'user_sex' => $_POST['GioiTinh'],
    //   'user_tel' => $_POST['SDT'],
    //             'user_email' =>    $_POST['mail'],
    //             'user_address'  =>   $_POST['course'],
    //             // 'role_id'  =>   $_POST['role'],
                

    //        );
          

    //        foreach ($data as $key => $value) {
    //            if (strpos($value, "'") != false) {
    //                $value = str_replace("'", "\'", $value);
    //                $data[$key] = $value;
    //            }
    //         }
    //         $this->cus_control->update($id,$data);
            
    //     }
       
}

?>