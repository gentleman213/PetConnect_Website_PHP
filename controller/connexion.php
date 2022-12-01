<?php
session_start(); // Démarrage de la session
require_once '../config.php'; // On inclut la connexion à la base de données

if (!empty($_POST['email']) && !empty($_POST['password'])) // Si il existe les champs email, password et qu'il sont pas vident
{
    // Patch XSS
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $email = strtolower($email); // email transformé en minuscule


    // On regarde si l'utilisateur est inscrit dans la table users
    $check = $bdd->prepare('SELECT  cltEmail, cltPassword, token FROM Client WHERE cltEmail = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();


    $admin = "admin@gmail.com";

    // if l'utilisateurest admin..............



    // Si > à 0 alors l'utilisateur existe
    if ($row > 0) {
        // Si le mot de passe est le bon
        if (password_verify($password, $data['cltPassword'])) {
            // On créer la session
            $_SESSION['user'] = $data['token'];
            // Si l'utilisateur est l'admin
            if ($email == $admin) {
                $_SESSION['admin'] = $data['token'];
                header('Location: ../view/admin.php');
                die();
            } else {
                header('Location: ../view/compte.php');
                die();
            }
        } else {
            header('Location: ../view/login.php?login_err=password');
            die();
        }
    } else {
        header('Location: ../view/login.php?login_err=already');
        die();
    }
} else {
    header('Location: ../view/login.php');
    die();
} // si le formulaire est envoyé sans aucune données
