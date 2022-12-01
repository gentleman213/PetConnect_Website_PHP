<?php
session_start();
require_once '../config.php'; // ajout connexion bdd 

// On récupere les données de l'utilisateur
$req = $bdd->prepare('SELECT * FROM Client WHERE token = ?');
$req->execute(array($_SESSION['user']));
$data = $req->fetch();
?>


<?php $title = "Compte"; ?>

<head>
    <link rel="stylesheet" href="styles/compte.css?v=<?php echo time(); ?>">
</head>

<?php ob_start(); ?>

<main>
    <div id="user-profil"><img src="images/client.png" alt="acount" /></div>
    <div id="information">
        <p><?php echo $data['cltUsername']; ?></p>
        <p></p>
        <p><?php echo $data['cltEmail']; ?></p>
    </div>

    <form id="grid">
        <div class="box blue">
            <a href="gerer_mes_appareils.php">Gérer mes appareils</a>
        </div>
        <div class="box">
            <a href="historique_de_commande.php">Mon historique de commande</a>
        </div>
        <div class="box">
            <a href="co_et_secur.php">Connexion et sécurité</a>
        </div>
        <div class="box">
            <a href="enreg_paiement.php">Mode de paiement</a>
        </div>
        <div class="box">
            <a href="messagerie.php">Centre de messagerie</a>
        </div>
        <div class="box">
            <a href="enreg_adresse.php">Adresses</a>
        </div>
    </form>

</main>
<?php require('footer.php'); ?>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>