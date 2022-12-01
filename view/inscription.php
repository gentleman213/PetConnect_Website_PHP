<?php $title = "Inscription"; ?>

<head>
    <link rel="stylesheet" href="styles/login.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="styles/inscription.css?v=<?php echo time(); ?>">
</head>
<?php ob_start(); ?>
<main>
    <div id="white-box">
        <?php
        if (isset($_GET['reg_err'])) {
            $err = htmlspecialchars($_GET['reg_err']);

            switch ($err) {
                case 'success':
        ?>
                    <div class="alert alert-success">
                        <strong>Succès</strong> inscription réussie !
                    </div>
                <?php
                    break;

                case 'email':
                ?>
                    <div class="alert">
                        <strong>Erreur</strong> email non valide
                    </div>
                <?php
                    break;
                case 'robot':
                ?>
                    <div class="alert">
                        <strong>Erreur</strong> vous êtes un robot
                    </div>
                <?php
                    break;
                case 'email_length':
                ?>
                    <div class="alert">
                        <strong>Erreur</strong> email trop long
                    </div>
                <?php
                    break;

                case 'pseudo_length':
                ?>
                    <div class="alert">
                        <strong>Erreur</strong> pseudo trop long
                    </div>
                <?php

                case 'already':
                ?>
                    <div class="alert">
                        <strong>Erreur</strong> compte deja existant
                    </div>
        <?php
            }
        }
        ?>
        <form method="POST" action="../controller/inscription_traitement.php">

            <input type="text" id="pseudo" name="pseudo" placeholder="Utilisateur" required>
            <i class="validation"><span></span><span></span></i>

            <input type="email" id="email" name="email" placeholder="Email Address" required>
            <i class="validation"><span></span><span></span></i>

            <input type="password" id="password" name="password" placeholder="Mot de Passe" required>
            <i class="validation"><span></span><span></span></i>

            <div class="g-recaptcha" data-sitekey="6LctqJsiAAAAAMSBZ88DGX4oL07SQ8B5oxnIIo72"></div>

            <input type="submit" id="login" value="Créer un compte">

            <div class="bordure"></div>
            <div id="create-account">
                <a href="login.php">Se connecter</a>
            </div>
        </form>
    </div>
</main>
<script src="https://www.google.com/recaptcha/api.js"></script>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>