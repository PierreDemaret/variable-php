<?php
$name = 'John';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>exercice 6</title>
</head>

<body>
    <header>
        <h1>Variables php</h1>
    </header>
    <main>
        <h3>Créer une variable name et l'initialiser avec la valeur de votre choix.
            <br>
            Afficher : Bonjour + name + , comment vas tu ?.
        </h3>
        <div>
            <p>
                <?= 'Bonjour ' . $name . ' comment vas tu ?' ?>
            </p>
        </div>
    </main>
</body>

</html>