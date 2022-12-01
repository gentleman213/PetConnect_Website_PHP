<?php $title = "Login"; ?>

<head>
    <link rel="stylesheet" href="styles/login.css?v=<?php echo time(); ?>">
</head>
<?php ob_start(); ?>


<main>
    <div id="white-box">
        <?php
        if (isset($_GET['login_err'])); {
            $err = htmlspecialchars($_GET['login_err']);


            switch ($err) {
                case 'password':
        ?>
                    <div class="alert">
                        <strong>Erreur</strong> mot de passe incorrect
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

        <form action="../controller/connexion.php" method="post">


            <input type="email" id="email" name="email" placeholder="Email Address" required>
            <i class="validation"><span></span><span></span></i>

            <input type="password" id="password" name="password" placeholder="Mot de Passe" required>
            <i class="validation"><span></span><span></span></i>

            <input type="submit" id="login" value="Se connecter">
            <div id="forgotmdp">
                <a href="forgotmdp.php">Mot de passe oublié?</a>
            </div>
            <div class="bordure"></div>
            <div id="create-account">
                <a href="inscription.php">Créer un compte</a>
            </div>
        </form>
    </div>
</main>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>