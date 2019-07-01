<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice 1</title>
    </head>
    <body>
        <?php
        $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'martin76', 'aynwxe3040$');
        $response = $bdd->query('SELECT `lastName`, `firstName`, DATE_FORMAT(`birthDate`, "%d/%m/%Y") AS birthDate, `card`, `cardNumber` FROM clients');
        while($donnees = $response->fetch()): ?>
            <p>
                <strong>Nom: </strong><?= $donnees['lastName'] ?><br />
                <strong>Prénom: </strong><?= $donnees['firstName'] ?><br />
                <strong>Date de naissance: </strong><?= $donnees['birthDate'] ?><br />
                <strong>Carte: </strong><?= $donnees['card'] ?><br />
                <strong>Numéro carte: </strong><?= $donnees['cardNumber'] ?>
            </p>
        <?php
        endwhile;
        ?>

    </body>
</html>