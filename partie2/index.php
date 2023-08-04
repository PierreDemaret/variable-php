<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>exercice 2</title>
</head>

<body>
    <header>
        <h1>Variables php</h1>
    </header>
    <main>
        <h3>Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix.
            Attention age est de type entier. Afficher leur contenu.
        </h3>
        <div>
            <?php
            $lastename = 'Doe';
            $firstname = 'John';
            $age = 29;
            echo nl2br("Nom : $lastename\n Prénom : $firstname\n Âge : $age")
            ?>
        </div>
    </main>
</body>

</html>