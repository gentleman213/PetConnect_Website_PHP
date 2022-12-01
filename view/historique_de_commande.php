<?php $title = "historique"; ?>

<head>
    <link rel="stylesheet" href="styles/historique.css">
</head>
<?php ob_start(); ?>

<main>
    <section id="historique">

        <h2>Mon Historique de Commandes</h2>
        <div id="commande">
            <hr>
            <div>
                <p>Date d'achat: XX/XX/XXXX</p>
            </div>
            <img src="images/iCollar_blanc2.png" />
            <div>
                <h4>1 × iCollar <br>Couleur</h4>
            </div>

            <div class="droite">
                <p>Prix TTC:<strong>499,99€</strong></p>
            </div>

            <div class="droite">
                <p>Statut:
                    <strong>En cours de livraison
                    </strong>
                </p>
            </div>
            <div id="fin">
                <hr>
            </div>

        </div>
    </section>
</main>
<?php require('footer.php') ?>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>