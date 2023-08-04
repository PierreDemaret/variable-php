<?php
$result1 = 3 + 4;
$result2 = 5*20;
$result3 = 45/5;
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>exercice 8</title>
</head>

<body>
    <header>
        <h1>Variables php</h1>
    </header>
    <main>
        <h3>Créer 3 variables.<br>
        Dans la première mettre le résultat de l'opération 3 + 4.  <br>
        Dans la deuxième mettre le résultat de l'opération 5 * 20.  <br>
        Dans la troisième mettre le résultat de l'opération 45 / 5.  <br>
        Afficher le contenu des variables.
        </h3>
        <div>
            <p>
                <?="3+4 = " . $result1 . '<br>' . "5*20 =" . $result2 . '<br>' . "45/5 =" . $result3 ?>
            </p>
        </div>
    </main>
</body>

</html>