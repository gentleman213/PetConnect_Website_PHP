<?php $title = "Boutique"; ?>

<head>
    <link rel="stylesheet" href="styles/boutique.css">
</head>
<?php ob_start(); ?>

<main>
    <section id="shop">
        <h1>Collier connecté pour chien</h1>
        <h2>iCollar - (couleurs)</h2>
        <h3>499€</h3>
        <div class="mainbox">
            <img src="images/iCollar_blanc2.png" />
        </div>
        <div class="grid2">
            <div class="box">
                <img src="images/iCollar_blanc2.png" />
            </div>
            <div class="box">
                <img src="images/iCollar_blanc2.png" />
            </div>
            <div class="box">
                <img src="images/iCollar_blanc2.png" />
            </div>
            <div>
                <input type="submit" id="basket" value="Ajouter au panier">
            </div>
            <div class="box">
                <img src="images/iCollar_blanc2.png" />
            </div>
            <div class="box">
                <img src="images/iCollar_blanc2.png" />
            </div>
            <div class="box">
                <img src="images/iCollar_blanc2.png" />
            </div>
            <div>
                <input type="submit" id="buy" value="Acheter maintenant">
            </div>
        </div>

        <ul>
            <li>Localisation GPS</li>
            <li>Capteur cardiaque</li>
            <li>Capteur Thermique</li>
            <li>Capteur sonore</li>
            <li>Taux de CO2</li>
        </ul>

        <p>Description détaillé des cas d'usages</p>


    </section>
</main>

<?php require('footer.php') ?>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>