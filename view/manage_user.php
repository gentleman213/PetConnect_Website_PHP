<?php
session_start();
require_once '../config.php'; // ajout connexion bdd 

?>


<?php $title = "Manage_users"; ?>

<head>
    <link rel="stylesheet" href="styles/manage_user.css?v=<?php echo time(); ?>">
</head>

<?php ob_start(); ?>
<main>
    <form action="" method="get">
        <div id="trie">
            <select name="order" id="order">
                <option value="">--Selectionner une option--</option>
                <option value="date_inscription" <?php if (isset($_GET['order']) && $_GET['order'] == "date_inscription") {
                                                        echo "selected";
                                                    } ?>>Plus ancien</option>
                <option value="date_inscription DESC" <?php if (isset($_GET['order']) && $_GET['order'] == "date_inscription DESC") {
                                                            echo "selected";
                                                        } ?>>Plus récent</option>
                <option value="pseudo" <?php if (isset($_GET['order']) && $_GET['order'] == "pseudo") {
                                            echo "selected";
                                        } ?>>Pseudo A-Z</option>
                <option value="pseudo DESC" <?php if (isset($_GET['order']) && $_GET['order'] == "pseudo DESC") {
                                                echo "selected";
                                            } ?>>Pseudo Z-A</option>
            </select>
            <input type="submit" value="Trier" />
        </div>
    </form>
    <?php
    $sort_option = "1";
    if (isset($_GET['order'])) {
        if ($_GET['order'] == "pseudo") {
            $sort_option = "cltUsername";
        } elseif ($_GET['order'] == "date_inscription") {
            $sort_option = "date_inscription";
        } elseif ($_GET['order'] == "pseudo DESC") {
            $sort_option = "cltUsername DESC";
        } elseif ($_GET['order'] == "date_inscription DESC") {
            $sort_option = "date_inscription DESC";
        }
    }
    $sql = 'SELECT * FROM Client WHERE cltEmail != "admin@gmail.com" ORDER BY ' . $sort_option . ' ';
    $req = $bdd->query($sql);
    $data = $req->fetchAll();
    $row = $req->rowCount();


    ?>
    <table>
        <caption>
            Liste d'utilisateurs
        </caption>
        <thead>
            <tr>
                <th scope="col">pseudo</th>
                <th scope="col">email</th>
                <th scope="col">date d'inscription</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $user) : ?>

                <tr>
                    <th scope="row"><?php echo $user["cltUsername"] ?></th>
                    <td><?php echo $user["cltEmail"] ?></td>
                    <td><?php echo $user["date_inscription"] ?></td>
                    <td id="bout">
                        <form action="../controller/manage_user_traitement.php" method="post">
                            <button name="rappel">Envoyer un rappel</button>
                            <button name="block">Bloquer</button>
                            <button name="suppr" value="<?php echo $user["cltID"] ?>">supprimer</button>

                        </form>
                    </td>
                </tr>

            <?php endforeach; ?>

        </tbody>
        <tfoot>
            <tr>
                <th scope="row" colspan="2">Total utilisateurs</th>
                <td colspan="2"><?php echo $row;
                                if (isset($_POST['order'])) echo $selected; ?></td>
            </tr>
        </tfoot>
    </table>

</main>

<?php require('footer.php') ?>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>