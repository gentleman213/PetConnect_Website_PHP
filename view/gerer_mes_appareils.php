<?php $title = "Admin"; ?>

<head>
    <link rel="stylesheet" href="styles/gerer_mes_appareils.css">
</head>
<?php ob_start(); ?>
<main>

    <section id="g_appareils">

        <h2>Mes appareils</h2>
        <div id="appareil">
            <div id="debut">
                <hr>
            </div>
            <div>
                <p>iCollar Max</p>
            </div>
            <ul>
                <li id="produit">
                    <img src="images/iCollar_blanc2.png" />

                </li>
                <li class="contour">
                    <img src="images/fonc/heart.png" />
                    <p>Bon</p>
                </li>
                <li class="contour">
                    <img src="images/fonc/co2.png" />
                    <p>Bon</p>
                </li>
                <li class="contour therm">
                    <img src="images/fonc/thermo.png" />
                    <p>Bon</p>
                </li>
                <li>
                    <a href="info_appareil.php">Plus d'informations</a>
                </li>
            </ul>

            <div id="fin">
                <hr>
            </div>

        </div>
    </section>
</main>
<?php require('footer.php') ?>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>