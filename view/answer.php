<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-e<?php $title = "Admin"; ?> <head>
    <link rel="stylesheet" href="styles/assistance.css">
</head>
<?php ob_start(); ?>

<title>iCollar</title>
</head>



<main>
    <section id="assist">
        <h1>Assistance</h1>

        <div class="fondgris">
            <input type="text" id="question" name="question" placeholder="Chercher une question">
            <h3>Question fréquentes</h3>
            <ul>
                <li><a href="answer2.php">Question fhjsdfhjdsbfjksqfknfsqb fjsq fn qsn f?</a></li>
                <li><a href="answer2.php">Question1 fhjsdfhjdsbfjksqfknfsqb fjsq fn qsn f?</a></li>
                <li><a href="answer2.php">Question1 fhjsdfhjdsbfjksqfknfsqb fjsq fn qsn f?</a></li>
                <li><a href="answer2.php">Question1 fhjsdfhjdsbfjksqfknfsqb fjsq fn qsn f?</a></li>
                <li><a href="answer2.php">Question1 fhjsdfhjdsbfjksqfknfsqb fjsq fn qsn f?</a></li>
                <li><a href="answer2.php">Question1 fhjsdfhjdsbfjksqfknfsqb fjsq fn qsn f?</a></li>
            </ul>
        </div>
    </section>
</main>

<?php require('footer.php') ?>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>