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
            <h3>Question fréquentes</h3>
            <ul>
                <li><a href="assistance2.php">Question fhjsdfhjdsbfjksqfknfsqb fjsq fn qsn f?</a></li>
                <li><a href="assistance2.php">Question1 fhjsdfhjdsbfjksqfknfsqb fjsq fn qsn f?</a></li>
                <li><a href="assistance2.php">Question1 fhjsdfhjdsbfjksqfknfsqb fjsq fn qsn f?</a></li>
                <li><a href="assistance2.php">Question1 fhjsdfhjdsbfjksqfknfsqb fjsq fn qsn f?</a></li>
                <li><a href="assistance2.php">Question1 fhjsdfhjdsbfjksqfknfsqb fjsq fn qsn f?</a></li>
                <li><a href="assistance2.php">Question1 fhjsdfhjdsbfjksqfknfsqb fjsq fn qsn f?</a></li>
            </ul>
        </div>
    </section>
</main>
<?php require('footer.php') ?>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>