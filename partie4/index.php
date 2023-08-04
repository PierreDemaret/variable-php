<?php
$string = 'Je suis une variable de type string';
$int = 50;
$float = 10.5;
$bool = true;
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>exercice 4</title>
</head>

<body>
    <header>
        <h1>Variables php</h1>
    </header>
    <main>
        <h3>
            Créer une variable de type string, une variable de type int, une variable de type float, une variable de
            type booléan et les initialiser avec une valeur de votre choix.
            Les afficher.
        </h3>
        <div>
            <?php
                echo("Variable de type string : " . $string . "<br>");
                echo("Variable de type INT : " . $int . "<br>");
                echo("Variable de type float : " . $float . "<br>");
                echo("Variable de type booléen : " . $bool . "<br>")
            ?>
        </div>
    </main>
</body>

</html>