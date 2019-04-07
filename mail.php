<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

$nom=$_POST['name'] ;
$email_address=$_POST['email'] ;
$tele=$_POST['phone'] ;
$message=$_POST['message'] ;

$to = 'nesmaoui@email.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Email par:  $nom";
$email_body = "<p>Vous avez recevez un nouveau Message a partir de votre Site Web </p>"."<p>Les details: </p>  <p>Nom: $nom</p> <p> Email: $email_address </p> <p>Telephone: $tele</p><p>  Message:$message </p>.";



// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'expert.medicale@gmail.com';                     // SMTP username
    $mail->Password   = '@#Emo2782';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('expert.medicale@gmail.com', 'Expert Medicale Opinion Info');
    $mail->addAddress('nesmaoui.redwane@gmail.com', 'Joe User');     // Add a recipient
   
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $email_subject;
    $mail->Body =$email_body ;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
header("Location:././index.php?lang=fr");exit;
?>