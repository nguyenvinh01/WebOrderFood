<?php
    use PHPMailer\PHPMailer\PHPMailer;
    $alert = '';

    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "hung.nd19010060@st.phenikaa-uni.edu.vn"; //enter you email address
        $mail->Password = 'jlfoksipahonknar'; //enter you email password
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress("hung.nd19010060@st.phenikaa-uni.edu.vn"); //enter you email address
        $mail->Subject = ("$email ($subject)");
        $mail->Body = $body;

        if ($mail->send()) {
            $status = "success";
           $response = "Email is sent!";
        
        } else {
           $status = "failed";
           $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
       
        }
      
         exit(json_encode(array("status" => $status, "response" => $response)));
    }
?>
