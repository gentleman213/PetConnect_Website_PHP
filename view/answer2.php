<?php $title = "Anwer2"; ?>

<head>
    <link rel="stylesheet" href="styles/assistance.css">
</head>
<?php ob_start(); ?>


<main>
    <section id="assist">
        <h1>Assistance</h1>
        <div class="fondgris">
            <input type="text" id="question" name="question" placeholder="Trouver une question">
            <div id="reponse">
                <p>Question fhjsdfhjdsbfjksqfknfsqb fjsq fn qsn f?</p>
            </div>
            <textarea type="text" id="message" name="message" placeholder="Répondre à la question" required></textarea>
            <input type="submit" id="send" value="Envoyer">
        </div>
    </section>
</main>
<?php require('footer.php') ?>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>