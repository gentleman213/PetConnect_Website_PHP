<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require_once '../config.php';
// On récupere les données de l'utilisateur
$req = $bdd->prepare('SELECT * FROM Client WHERE token = ?');
$req->execute(array($_SESSION['user']));
$data = $req->fetch();


?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/nav.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/accueil.css?v=<?php echo time(); ?>">
    <title><?= $title ?></title>
</head>

<body>

    <header>
        <ul id="nav">
            <li class="logo"><img src="images/logo/logo.png" alt="acount" /></li>
            <div>

                <li class="active"><a href="accueil.php">Accueil</a></li>
                <li class=""><a href="boutique.php">Boutique</a></li>
                <li class=""><a href="assistance.php">Assistance</a></li>
            </div>
            <li class="login<?php if (isset($_SESSION['admin'])) {
                            ?> menu-deroulant"><a href="admin.php"><?php } elseif (isset($_SESSION['user'])) { ?> menu-deroulant"><a href="compte.php"><?php } else {  ?>"><a href="login.php"><?php } ?><img src="images/client.png" alt="acount" /></a>
                        <?php
                        if (isset($_SESSION['user'])) {
                        ?>
                            <ul class="sous-menu user">
                                <li class="triangle"> </li>
                                <li>Bonjour <?php echo $data['cltUsername']; ?>
                                    <hr>
                                </li>
                                <?php
                                if (isset($_SESSION['admin'])) {
                                ?>
                                    <li><a href="admin.php">Espace admin</a></li>
                                <?php  } ?>
                                <li><a href="compte.php">Mon compte</a></li>
                                <li><a href="historique_de_commande.php">Mes commandes</a></li>
                                <li><a href="gerer_mes_appareils.php">Gérer mes appareils</a>
                                    <hr>
                                </li>
                                <li><a href="../deconnexion.php">Se déconnecter</a></li>
                            </ul>
            </li>
        <?php
                        }
        ?>
        <li class="basket" id="open_b"><a href="basket.php"><img src="images/Basket.png" alt="acount" /></a>

            <ul class="sous-menu recap">
                <li class="triangle"> </li>
                <hr>
                <li><strong>Récapitulatif de ma commande</strong></li>
                <li><input type="submit" name="modify" value="Modifier"></li>
                <li><img src="images/iCollar_blanc2.png" /></li>
                <li id="info">1 × iCollar <br>Couleur</li>
                <li id="prix"><strong>499€</strong></li>
                <hr>
                <li id="pay">
                    <a href="paiement.php">Acheter</a>
                </li>
            </ul>
        </li>
        </ul>
    </header>

    <?= $content ?>

</body>

</html>