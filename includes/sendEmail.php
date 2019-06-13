<?php
    use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['company']) && isset($_POST['email']) && isset($_POST['service'])) {
        $company = $_POST['company'];
        $email = $_POST['email'];
        $service = $_POST['service'];
        $body = "Message from " . $company;

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        // SMTP Settings
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "isaacbrian32@gmail.com";
        $mail->password = "ohijpcweimlghszm";
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";
        $mail->SMTPOptions = array (
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true)
        );

        // Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email, $company);
        $mail->addAddress("isaacbrian30@gmail.com"); // where we are sending an email
        $mail->Subject = $service;
        $mail->Body = $body;

        if ($mail->send()) {
            // echo "Email is sent";
            header("Location: ../consult.php"); /* Redirect browser */
            exit();
        }  else {
            // echo "Something is wrong: <br><br>" . $mail->ErrorInfo;
            header("Location: ../consult.php"); /* Redirect browser */
            exit();
        }

    }

?>