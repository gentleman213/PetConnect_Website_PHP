<?php $title = "basket"; ?>


<head>
    <link rel="stylesheet" href="styles/basket2.css">
    <link rel="stylesheet" href="styles/enreg_adresse2.css">
</head>

<?php ob_start(); ?>
<main id="basket">
    <section id="group">
        <div id="user">
            <h3>Connecté en tant que :<p>utilisateur@gmail.com</p>
            </h3>

        </div>
        <div class="info">
            <p>Prénom*</p>
            <input type="text" id="Prénom" name="Prénom" required>
            <div id="name">
                <p>Nom*</p>
                <input type="text" id="nom" name="nom" required>
            </div>
            <p>Numéro de mobile</p>
            <input type="text" id="phone" name="phone" required>
        </div>

        <div id="adress">
            <h3>Adresse de livraison</h3>
            <div class="info">
                <p>Code Postal*</p>
                <input type="text" id="postal" name="Postal" required>
                <div id="town">
                    <p>Ville*</p>
                    <input type="text" id="ville" name="ville" required>
                </div>
                <p>Numéro et nom de voie*</p>
                <input type="text" id="rue" name="rue" required>
            </div>
        </div>
        <div id="enregistrer">
            <h4>*Champ obligatoire</h4>
        </div>
    </section>


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
                    <a href="paiement.php">Continuer</a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require('footer.php') ?>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>