<?php
require("include/function_capitales.php");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher la capitale</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section>
        <h1>Saisir un pays</h1>
        <p>Nb: Saisir le nom d'un pays dans le formulaire pour connaitre la capitale.</p>
        <form action="#" method="post">
            <input type="text" name="pays" id="pays" placeholder="Saisir le pays" <?php
                                                                                    if (isset($_POST["valider"])) {
                                                                                    ?> value="<?= $_POST["pays"] ?>
            <?php
                                                                                    }
            ?>
            ">

            <input type="submit" name="valider" value="Valider">
        </form>
        <?php
        if (isset($_POST["valider"])) {
            if (empty($_POST["pays"])) {
                echo "<p class='error'>Merci de saisir un pays !!!</p>";
            } else {
                $ville =  capitales(ucfirst($_POST["pays"]));
                if ($ville == 0) {
                    echo "<p class='error'>Le pays n'existe pas dans le programme !!!!</p>";
                } else {
                    echo "<p>La capitale de la <strong>" . ucfirst($_POST["pays"]) . "</strong> est la ville de <strong>" . $ville . "</strong></p>";
                }
            }
        }
        ?>
    </section>
</body>

</html>