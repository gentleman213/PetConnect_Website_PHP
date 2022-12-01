<?php
//Include required phpmailer files
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';
//Define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if (isset($_POST["send"])) {
    //Create instance of phpmailer
    $mail = new PHPMailer(true);
    // Set mailer to use smtp
    $mail->isSMTP();
    //define smtp host
    $mail->Host = "smtp.gmail.com";
    //enable smtp authentication
    $mail->SMTPAuth = "true";
    //set type of encryption (ssl/tls)
    $mail->SMTPSecure = "tls";
    //set port to connect smtp
    $mail->Port = "587";
    // set gmail username
    $mail->Username = "admg4d@gmail.com";
    // set gmail password
    $mail->Password = "urmmfqxclqkrvbpx";
    //set sender email
    $mail->setFrom("admg4d@gmail.com");
    // Enable HTML
    $mail->isHTML(true);
    // Add recipient
    $mail->addAddress("admg4d@gmail.com");


    //set email subject
    $mail->Subject = "Test Email Using PHPMailer";
    //email body
    $mail->Body = "This is plain text email body";
    // Finally send mail
    $mail->Send();

    echo "fuck";
}
