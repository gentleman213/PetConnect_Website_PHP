<?php $title = "Paiement"; ?>

<head>
    <link rel="stylesheet" href="styles/enreg_paiement.css">
</head>
<?php ob_start(); ?>

<main>
    <form>
        <h2>Enregistrer un mode de paiement</h2>
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