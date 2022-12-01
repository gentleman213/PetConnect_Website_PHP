<?php $title = "historique"; ?>

<head>
    <link rel="stylesheet" href="styles/info_appareil.css">
</head>
<?php ob_start(); ?>


<main>
    <section id="info_app">
        <h2>iCollar Max</h2>
        <div id="produit">
            <img src="images/iCollar_blanc2.png" />
        </div>

        <div class="grid3">
            <div class="case">
                <img src="images/fonc/heart.png" />
                <h3>XXX BPM</h3>
                <p>Bon</p>
                <h4>Fréquence cardiaque</h4>
                <div class="graph">
                    <div></div>
                </div>
            </div>
            <div class="case">
                <img src="images/fonc/co2.png" />
                <h3>XXX ppm</h3>
                <p>Bon</p>
                <h4>Fréquence cardique</h4>
                <div class="graph">
                    <div></div>
                </div>
            </div>

            <div class="case">
                <img src="images/fonc/thermo.png" />
                <h3>XX°C</h3>
                <p>Bon</p>
                <h4>Température</h4>
                <div class="graph">
                    <div></div>
                </div>
            </div>

            <div class="case">
                <img src="images/fonc/aboiement.png" />
                <h3>XXX db</h3>
                <p>Bon</p>
                <h4>Nombre de décibel</h4>
                <div class="graph">
                    <div></div>
                </div>
            </div>

            <div class="case">
                <img src="images/fonc/position.png" />
                <h3>XXXXXXX</h3>
                <p>Proche</p>
                <h4>Localisation</h4>
                <div class="graph">
                    <div></div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require('footer.php') ?>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>