<?php
session_start();
require_once '../config.php';
// On récupere les données de l'utilisateur
$req = $bdd->prepare('SELECT * FROM Client WHERE token = ?');
$req->execute(array($_SESSION['user']));
$data = $req->fetch();
?>

<?php $title = "Admin"; ?>

<head>
    <link rel="stylesheet" href="styles/compte.css?v=<?php echo time(); ?>">
</head>
<?php ob_start(); ?>
<main>
    <div id="user-profil"><img src="images/client.png" alt="acount" /></div>
    <div id="information">
        <p><?php echo $data['cltUsername']; ?></p>

        <p><?php echo $data['cltEmail']; ?></p>
    </div>

    <form id="grid">
        <div class="box blue">
            <a href="manage_user.php">Gérer les utilisateur</a>
        </div>
        <div class="box">
            <a href="answer.php">Répondre aux questions</a>
        </div>
        <div class="box">
            <a href="manage_data.php">Gérer les données</a>
        </div>
    </form>
</main>
<?php require('footer.php') ?>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>