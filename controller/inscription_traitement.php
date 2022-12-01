<?php
require_once '../config.php'; // On inclu la connexion à la bdd

// Si les variables existent et qu'elles ne sont pas vides
if (!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    // Patch XSS
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);


    // On vérifie si l'utilisateur existe
    $check = $bdd->prepare('SELECT cltUsername, cltEmail, cltPassword FROM Client WHERE cltEmail = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

    $email = strtolower($email); // on transforme toute les lettres majuscule en minuscule pour éviter que Foo@gmail.com et foo@gmail.com soient deux compte différents ..

    // Storing google recaptcha response
    // in $recaptcha variable
    $recaptcha = $_POST['g-recaptcha-response'];
    $secret_key = '6LctqJsiAAAAAH_7MOCzKBQJaWr-vX9auol5WedW';
    $url = 'https://www.google.com/recaptcha/api/siteverify?secret='
        . $secret_key . '&response=' . $recaptcha;
    // Making request to verify captcha
    $response = file_get_contents($url);
    // Response return by google is in
    // JSON format, so we have to parse
    // that json
    $response = json_decode($response);



    // Si la requete renvoie un 0 alors l'utilisateur n'existe pas 
    if ($row == 0) {
        if (strlen($pseudo) <= 100) { // On verifie que la longueur du pseudo <= 100
            if (strlen($email) <= 100) { // On verifie que la longueur du mail <= 100
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // Si l'email est de la bonne forme
                    if ($response->success == true) {

                        $chiffre = rand(1, 999);
                        $cltID = "CLT_$chiffre";
                        $hicID = "HIC_$chiffre";
                        $panID = "PAN_$chiffre";
                        $mdpID = "MDP_$chiffre";

                        // On redirige avec le message de succès
                        // On hash le mot de passe avec Bcrypt, via un coût de 12
                        $cost = ['cost' => 12];
                        $password = password_hash($password, PASSWORD_BCRYPT, $cost);
                        // On stock l'adresse IP
                        $ip = $_SERVER['REMOTE_ADDR'];

                        $bdd->query('SET FOREIGN_KEY_CHECKS=0');
                        $bdd->query('SET GLOBAL FOREIGN_KEY_CHECKS=0');



                        // On insère dans la base de donnéesd
                        $insert = $bdd->prepare('INSERT INTO Client(cltID, cltUsername, cltEmail, cltPassword, cltip, token, Historique_de_commandes_hicID, Panier_panID, Mode_De_Paiement_mdpID) VALUES(:cltID, :pseudo, :email, :password, :ip, :token, :hicID, :panID, :mdpID)');
                        $insert->execute(array(
                            'cltID' => $cltID,
                            'pseudo' => $pseudo,
                            'email' => $email,
                            'password' => $password,
                            'ip' => $ip,
                            'token' => bin2hex(openssl_random_pseudo_bytes(64)),
                            'hicID' => $hicID,
                            'panID' => $panID,
                            'mdpID' => $mdpID
                        ));


                        $bdd->query('SET FOREIGN_KEY_CHECKS=1');
                        $bdd->query('SET GLOBAL FOREIGN_KEY_CHECKS=1');

                        header('Location: ../view/inscription.php?reg_err=success');
                        die();
                    } else {
                        header('Location: ../view/inscription.php?reg_err=robot');
                        die();
                    }
                } else {
                    header('Location: ../view/inscription.php?reg_err=email');
                    die();
                }
            } else {
                header('Location: ../view/inscription.php?reg_err=email_length');
                die();
            }
        } else {
            header('Location: ../view/inscription.php?reg_err=pseudo_length');
            die();
        }
    } else {
        header('Location: ../view/inscription.php?reg_err=already');
        die();
    }
}
