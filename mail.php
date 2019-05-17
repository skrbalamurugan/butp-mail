<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';
require 'config.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                                       // Enable verbose debug output
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host       = $mailConfig['host'];  // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = $mailConfig['username'];                     // SMTP username
        $mail->Password   = $mailConfig['password'];                               // SMTP password
        $mail->SMTPSecure = $mailConfig['SMTPSecure'];                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = $mailConfig['port'];                                    // TCP port to connect to

        //Recipients
        $mail->setFrom($fromEmail, $fromUser);
        // print_r($toAddress);
        $data  = 'Name : '.$_POST["name"].'<br><br>';
        $data  .= 'Designation : '.$_POST["designation"].'<br><br>';
        $data  .= 'Boking For : '.$_POST["booking"].'<br><br>';
        $data  .= 'From Date : '.$_POST["from_date"].'<br><br>';
        $data  .= 'To Date : '.$_POST["to_date"].'<br><br>';
        $data  .= 'Email : '.$_POST["email"].'<br><br>';
        $data  .= 'Mobile : '.$_POST["mobile"].'<br><br>';
        $data  .= 'Admin Approval : '.$_POST["admin_approval"].'<br><br>';
        $data  .= 'Name : '.$_POST["name"].'<br><br>';
        $data  .= 'Name : '.$_POST["name"].'<br><br>';
        $data  .= 'Name : '.$_POST["name"].'<br><br>';
        echo $data;
        die();
        foreach($toAddress as $mailto){
            $mail->addAddress($mailto['email']);
        }
        $mail->addReplyTo('no-replay@mail.com');
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $data;

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

?>
