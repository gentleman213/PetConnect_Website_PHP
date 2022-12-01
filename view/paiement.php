<?php $title = "paiement"; ?>

<head>
    <link rel="stylesheet" href="styles/enreg_paiement.css">
    <link rel="stylesheet" href="styles/basket.css">
</head>
<?php ob_start(); ?>


<main>
    <section>
        <div class="container">
            <div class="text">
                <h2>Total TCT:</h2>
                <hr>
                <hr>
                <div class="prix">
                    <h2>499€</h2>
                </div>

                <p>Total HT:</p>
                <div class="prix2">
                    <p>499,99€</p>
                </div>

                <p>Taxe:</p>
                <div class="prix2">
                    <p>499,99€</p>
                </div>
                <hr id="trait">
                <h3>Récapitulatif de ma commande</h3>
                <input type="submit" id="mod" value="Modifier">
                <img src="images/iCollar_blanc2.png" />
                <h4>1 × iCollar <br>Couleur</h4>
                <h3 class="prix3">499€</h3>

                <hr id="trait2">
                <div id="livraison">
                    <p>Livraison gratuite en France <br> métropolitaine</p>
                </div>
                <div id="continue">
                    <a href="paiement.php">Payer</a>
                </div>
            </div>
        </div>
    </section>
    <form>
        <h2>Mode de paiement</h2>
        <div>
            <ul id="pay">
                <li><a href="#">Carte Bancaire</a></li>
                <li><a href="#">PAYPAL</a></li>
                <li><a href="#">Apple Pay</a></li>
            </ul>
        </div>
    </form>
</main>

<?php require('footer.php') ?>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>