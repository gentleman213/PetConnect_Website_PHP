<?php $title = "Assistance"; ?>

<head>
    <link rel="stylesheet" href="styles/assistance.css">
</head>
<?php ob_start(); ?>
<main>
    <section id="assist">
        <h1>Assistance</h1>
        <h2>Besoin d'aide ?</h2>
        <div class="fondgris">
            <input type="text" id="question" name="question" placeholder="Trouver les réponses à toutes vos questions">
            <div id="reponse">
                <p>Question fhjsdfhjdsbfjksqfknfsqb fjsq fn qsn f?</p>
            </div>
            <div id="cadre">
                <p>In et severitas re illa quaedam Tristitia sed et remissior suavitas in ad quidem et debet
                    remissior severitas liberior et.</p>
            </div>

        </div>
    </section>
</main>


<?php require('footer.php') ?>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>