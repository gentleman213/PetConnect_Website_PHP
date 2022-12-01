<?php $title = "Quizz"; ?>

<?php ob_start(); ?>

<head>
    <link rel="stylesheet" href="styles/quizz.css?v=<?php echo time(); ?>">
</head>
<main>
    <section id="quizz">
        <h1>Quizz</h1>
        <div class="greybox">
            <p>Quel est l'animal qui pollue le plus?</p>
            <ul>
                <li><input type="radio" name="radio" checked />boeuf</li>
                <li><input type="radio" name="radio" checked />chien</li>
                <li><input type="radio" name="radio" checked />aigle</li>
                <li><input type="radio" name="radio" checked />dauphin</li>
            </ul>
        </div>
        <div class="greybox">
            <p>Quel est le budget annuel moyen pour un chien ?</p>
            <ul>
                <li><input type="radio" name="radio2" checked />50-100 euros </li>
                <li><input type="radio" name="radio2" checked />200-400 euros </li>
                <li><input type="radio" name="radio2" checked />400-1000 euros </li>
                <li><input type="radio" name="radio2" checked />1000-1500 euros </li>
            </ul>
        </div>
        <div class="greybox">
            <p>La truffe d’un chien est aussi unique que les empreintes digitales d’un humain. Vrai ou Faux ?</p>
            <ul>
                <li><input type="radio" name="radio3" checked />Vrai </li>
                <li><input type="radio" name="radio3" checked />Faux </li>
            </ul>
        </div>
        <div class="greybox">
            <p>Les orages sont nocifs pour les oreilles des chiens. Vrai ou Faux ? </p>
            <ul>
                <li><input type="radio" name="radio4" checked />Vrai </li>
                <li><input type="radio" name="radio4" checked />Faux </li>

            </ul>
        </div>
        <div class="greybox True">
            <p>Combien de races de chien existent dans le monde ?</p>
            <ul>
                <li><input type="radio" name="radio5" checked />170 </li>
                <li><input type="radio" name="radio5" checked />330 </li>
                <li><input type="radio" name="radio5" checked />460 </li>
                <li><input type="radio" name="radio5" checked />810 </li>
            </ul>
        </div>
        <div class="greybox">
            <p>Quel est le gaz le plus polluant ?</p>
            <ul>
                <li><input type="radio" name="radio6" checked />Le dioxyde de carbone (CO2)</li>
                <li><input type="radio" name="radio6" checked /> Le méthane (CH4) </li>
                <li><input type="radio" name="radio6" checked />Le protoxyde d’azote (N2O)</li>
                <li><input type="radio" name="radio6" checked />L’ozone (O3)</li>
            </ul>
        </div>
        <div class="greybox">
            <p>Combien de chien sont perdus durant 1 année ? </p>
            <ul>
                <li><input type="radio" name="radio7" checked />10 000</li>
                <li><input type="radio" name="radio7" checked />20 000 </li>
                <li><input type="radio" name="radio7" checked />30 000</li>
                <li><input type="radio" name="radio7" checked />40 000</li>
            </ul>
        </div>
        <div class="greybox">
            <p>Quelle est l'émission de CO2 produite par les chiens et les chats par an ?</p>
            <ul>
                <li><input type="radio" name="radio8" checked />26 millions tonnes</li>
                <li><input type="radio" name="radio8" checked />34 millions tonnes </li>
                <li><input type="radio" name="radio8" checked />56 millions tonnes</li>
                <li><input type="radio" name="radio8" checked />64 millions tonnes</li>
            </ul>
        </div>
        <div class="greybox">
            <p>La température corporelle des chiens est plus basse que celle des humains. Vrai ou Faux ?</p>
            <ul>
                <li><input type="radio" name="radio9" checked />Vrai</li>
                <li><input type="radio" name="radio9" checked />Faux</li>
            </ul>
        </div>
        <div class="greybox True">
            <p>Quel est le taux de CO2 en agglomération ?</p>
            <ul>
                <li><input type="radio" name="radio0" checked />1500 ppm (parties par millions)</li>
                <li><input type="radio" name="radio0" checked />3000 ppm</li>
                <li><input type="radio" name="radio0" checked />4000 ppm</li>
                <li><input type="radio" name="radio0" checked />5000 ppm</li>
            </ul>
        </div>
        <div id="bout">
            <a href="">Réveler les réponses</a>
        </div>
    </section>
</main>

<?php require('footer.php') ?>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>