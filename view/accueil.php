<?php $title = "Accueil"; ?>

<?php ob_start(); ?>
<main>

    <slogan>
        <div class="fondimage">
            <h1>
                <img src="images/logo/iCollar_logo.png" />
            </h1>
        </div>
        <h2>
            La technologie pour vos animaux
        </h2>
    </slogan>

    <section1>
        <div class="grid reveal fade-bottom">
            <div class="carre black reveal fade-bottom2">
                <p id="pink" class="reveal fade-bottom3">nouveau</p>
                <img class="reveal fade-bottom3" src="images/iCollar_blanc2.png" />
                <h3 id="iCollar">iCollar</h3>
                <p id="grey">Le collier connecté pour chien</p>
                <div>
                    <a href="boutique.php" class="espace">En savoir plus &gt;</a>

                    <a href="basket.php">Acheter +</a>
                </div>
            </div>
            <div class="box1">
                <h3>Livraison <br>offerte</h3>
                <p><br>Livraison gratuite en <strong>France Métropolitaine</strong></p>
            </div>
            <div class="box2 black">
                <h3>7 jours <br>d'essai</h3>
                <p><br>Nous acceptons les retours dans les 7 jours après la livraison</p>
            </div>
            <div class="box2 black">
                <h3>Paiements <br>sécurisés</h3>
                <p><br>Paiements 100% cryptés <br>
                    <br>Méthodes de paiement acceptées:<strong> Paypal, Visa,
                        Mastercard ou
                        Apple Pay</strong>
                </p>
            </div>
            <div class="box1">
                <h3>2 ans de <br>garantie</h3>
                <p><br>Nous réparons ou remplaçons votre produit pour tous problème couvert par la
                    garantie pendant les
                    deux années suivant la réception du produit</p>
            </div>
        </div>
    </section1>

    <section2>
        <div class="reveal fade-bottom">
            <h2>Notre communauté</h2>
            <h3>Rejoignez la communauté PetConnect</h3>

            <div class="grid reveal fade-bottom2">
                <div class="chien one"></div>
                <div class="chien two"></div>
                <div class="chien three"></div>
                <div class="chien four"></div>
                <div class="chien five"></div>
                <div class="chien six"></div>
            </div>
        </div>
    </section2>
    <script src="../scripts/test.js"></script>
</main>
<?php require('footer.php'); ?>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>