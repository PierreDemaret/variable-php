<?php
$lastname = "Doe";
$firstname = "John";
$age = 29;
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>exercice 7</title>
</head>

<body>
    <header>
        <h1>Variables php</h1>
    </header>
    <main>
        <h3>Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix.
            Attention age est de type entier.
            <br>
            Afficher : Bonjour + lastname + firstname + , tu as + age + ans.
        </h3>
        <div>
            <p>
                <?= "Bonjour " . $lastname ." ". $firstname . ", tu as " . $age . " ans." ?>
            </p>
        </div>
    </main>
</body>

</html>