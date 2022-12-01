<?php
session_start(); // Démarrage de la session
require_once '../config.php'; // On inclut la connexion à la base de données
//Include required phpmailer files
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';
//Define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;




if (!empty($_POST['email'])) {

    // Patch XSS
    $email = htmlspecialchars($_POST['email']);
    $email = strtolower($email); // email transformé en minuscule

    // On regarde si l'utilisateur est inscrit dans la table users
    $check = $bdd->prepare('SELECT  cltPassword FROM Client WHERE cltEmail = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();



    // Si > à 0 alors l'utilisateur existe
    if ($row > 0) {


        $password = uniqid();
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


        //Create instance of phpmailer
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = "true";
        $mail->SMTPSecure = "tls";
        $mail->Port = "587";
        $mail->Username = "admg4d@gmail.com";
        $mail->Password = "urmmfqxclqkrvbpx";
        $mail->setFrom("admg4d@gmail.com");
        $mail->isHTML(true);
        $mail->addAddress("admg4d@gmail.com");



        $mail->Subject = "Test Email Using PHPMailer";
        $mail->Body = "This is plain text email body: $password";
        if ($mail->Send()) {

            header('Location: ../view/forgotmdp.php?login_err=success');
            $sql = "UPDATE Client SET cltPassword= ? WHERE cltEmail =?";
            $check = $bdd->prepare($sql);
            $check->execute([$hashedPassword, $_POST['email']]);
            die();
        } else {
            header('Location: ../view/forgotmdp.php?login_err=already');
            die();
        }


        if (isset($_GET['token']) && $_GET['token'] != '') {
            $sql = "SELECT cltRmail FROM Client WHERE token = ?";
            $check = $bdd->prepare($sql);
            $check->execute([$_GET['token']]);
            $email = $check->fetchColumn();
        }
    } else {
        header('Location: ../view/forgotmdp.php?login_err=already');
        die();
    }
} else {
    header('Location: ../view/forgotmdp.php');
    die();
} // si le formulaire est envoyé sans aucune données
