<?php $title = "Adresse"; ?>

<head>
    <link rel="stylesheet" href="styles/enreg_adresse2.css">
</head>
<?php ob_start(); ?>

<main id="enr">
    <section id="group" class="enregistre">
        <div id="user">
            <h3>Connecté en tant que :<p>utilisateur@gmail.com</p>
            </h3>

        </div>
        <div class="info">
            <p>Prénom*</p>
            <input type="text" id="Prénom" name="Prénom" required>
            <div id="name">
                <p>Nom*</p>
                <input type="text" id="nom" name="nom" required>
            </div>
            <p>Numéro de mobile</p>
            <input type="text" id="phone" name="phone" required>
        </div>

        <div id="adress">
            <h3>Adresse de livraison</h3>
            <div class="info">
                <p>Code Postal*</p>
                <input type="text" id="postal" name="Postal" required>
                <div id="town">
                    <p>Ville*</p>
                    <input type="text" id="ville" name="ville" required>
                </div>
                <p>Numéro et nom de voie*</p>
                <input type="text" id="rue" name="rue" required>
            </div>
        </div>
        <div id="enregistrer">
            <h4>*Champ obligatoire</h4>
            <input type="submit" id="save" value="Enregistrer">
        </div>
    </section>
</main>

<?php require('footer.php') ?>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>