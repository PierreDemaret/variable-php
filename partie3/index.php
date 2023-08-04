<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>exercice 3</title>
</head>

<body>
    <header>
        <h1>Variables php</h1>
    </header>
    <main>
        <h3>Créer une variable km. L'initialiser à 1. Afficher son contenu. <br>
            Changer sa valeur par 3. Afficher son contenu. <br>
            Changer sa valeur par 125. Afficher son contenu. <br>
        </h3>
        <div>
            <?php
                $km = 1;
                echo nl2br("$km km\n");
                $km = 3;
                echo nl2br("$km kms\n");
                $km = 125;
                echo nl2br("$km kms")
               
            ?>
        </div>
    </main>
</body>

</html>