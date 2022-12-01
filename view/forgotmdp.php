<?php $title = "Forgotmdp"; ?>

<head>
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="styles/forgotmdp.css">
</head>
<?php ob_start(); ?>

<main>
    <div id="white-box">
        <?php
        if (isset($_GET['login_err'])) {
            $err = htmlspecialchars($_GET['login_err']);

            switch ($err) {
                case 'success':
        ?>
                    <div class="alert alert-success">
                        <strong>Succès</strong> email envoyé!
                    </div>
                <?php
                    break;

                case 'already':
                ?>
                    <div class="alert">
                        <strong>Erreur</strong> compte non existant
                    </div>
        <?php
                    break;
            }
        }
        ?>
        <form action="../controller/forgotmdp_traitement.php" method="post">
            <h2>Mot de passe oublié?</h2>
            <input type="email" id="email" name="email" placeholder="Email Address" required>
            <i class="validation"><span></span><span></span></i>


            <input type="submit" name="send" id="login" value="Envoyer un mail">

            <div class="bordure"></div>
            <div id="create-account">
                <a href="login.php">Se connecter</a>
            </div>
        </form>
    </div>
</main>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>