<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>exercice 5</title>
</head>

<body>
    <header>
        <h1>Variables php</h1>
    </header>
    <main>
        <h3>Créer une variable de type int. L'initialiser avec rien. Afficher sa valeur. <br>
            Donner une valeur à cette variable et l'afficher.
        </h3>
        <div>
            <?php
                $int = (int) null;
                echo $int;
                $int = 29;
                echo $int
            ?>
        </div>
    </main>
</body>

</html>