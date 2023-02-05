<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include library PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';



// Start
$mail = new PHPMailer(true);

try {
    // $mail->SMTP =address::smtp.gmail.com;
    
    // Configuration SMTP
    $mail = new PHPMailer(true);
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                         // Show output (Disable in production)
    $mail->isSMTP();                                               // Activate SMTP sending
    $mail->Host  = 'smtp.gmail.com';                                 // SMTP Server
    $mail->SMTPAuth  = true;                                       // SMTP Identification
    $mail->Username  = 'bakeelwork@gmail.com';                  // SMTP User
    $mail->Password  = 'bakeel712162178E1';	          // SMTP Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 465;
    $mail->SMTPSecure = 'tls';
    
    $mail->setFrom('hola@prueba.com', 'Your name');                // Mail sender

    // Recipients
    $mail->addAddress('bakeelwork@gmail.com', 'Recipient');  // Email and recipient

    // Mail content
    $mail->isHTML(true);
    $mail->Subject = 'Subject of the mail';
    $mail->Body  = 'Mail content <b>in HTML!</b>';
    $mail->AltBody = 'Mail content in plain text for mail clients that do not support HTML';
    $mail->send();
    echo 'The message has been sent';
} catch (Exception $e) {
    echo "Message has not been sent. Mailer Error: {$mail->ErrorInfo}";
}



// if(empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
//   http_response_code(500);
//   exit();
// }

// $name = strip_tags(htmlspecialchars($_POST['name']));
// $email = strip_tags(htmlspecialchars($_POST['email']));
// $m_subject = strip_tags(htmlspecialchars($_POST['subject']));
// $message = strip_tags(htmlspecialchars($_POST['message']));

// $to = "bakeelwork@gmail.com"; // Change this email to your //
// $subject = "$m_subject:  $name";
// $body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\n\nEmail: $email\n\nSubject: $m_subject\n\nMessage: $message";
// $header = "From: $email";
// $header .= "Reply-To: $email";	

// if(!mail($to, $subject, $body, $header))
//   http_response_code(500);


?>
