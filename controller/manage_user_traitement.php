<?php
session_start(); // Démarrage de la session
require_once '../config.php'; // On inclut la connexion à la base de données




if (isset($_POST['suppr'])) {
    $p_id = $_POST["suppr"];
    $sql2 = 'DELETE  FROM Client WHERE cltID ="' . $p_id . '"';
    $req2 = $bdd->query($sql2);

    header('Location: ../view/manage_user.php');
}
