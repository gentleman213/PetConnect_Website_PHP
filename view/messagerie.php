<?php $title = "messagerie"; ?>

<head>
    <link rel="stylesheet" href="styles/messagerie.css">
</head>
<?php ob_start(); ?>

<main>
    <section id="messagerie">
        <h2>Centre de messagerie</h2>
        <div>
            <h3>Connecté en tant que :</h3>
            <p>utilisateur@gmail.com</p>
        </div>
        <div>
            <textarea type="text" id="message" name="message" placeholder="Saisissez votre message" required></textarea>
            <input type="submit" id="send" value="Envoyer">
        </div>
    </section>
</main>



<?php require('footer.php') ?>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>