<?php
session_start();
require_once '../config.php'; // ajout connexion bdd 

// On récupere les données de l'utilisateur
$req = $bdd->prepare('SELECT * FROM utilisateurs WHERE token = ?');
$req->execute(array($_SESSION['user']));
$data = $req->fetch();
?>



<?php $title = "Connexion et Sécurité"; ?>
<link rel="stylesheet" href="styles/co_et_securs.css">
<?php ob_start(); ?>


<main>
    <section>
        <h2>Connexion et sécurité</h2>
        <div id="secur">
            <ul>
                <li>Nom :<p><?php echo $data['pseudo']; ?></p><input type="submit" id="name" value="Modifier"></li>
                <li>E-mail :<p><?php echo $data['email']; ?></p><input type="submit" id="adress" value="Modifier"></li>
                <li>Numéro de téléphone portable :<p>+336000000</p><input type="submit" id="phone" value="Modifier">
                </li>
                <li>Mot de passe :<p>******</p><input type="submit" id="mdp" value="Modifier"></li>
            </ul>
        </div>
    </section>
</main>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>