<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4</title>
    </head>
    <body>
        <?php
        $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'martin76', 'aynwxe3040$');
        $response = $bdd->query('SELECT * FROM clients WHERE clients.card=1');
        while($donnees = $response->fetch()): ?>
            <p>
                <strong>Nom: </strong><?= $donnees['lastName'] ?><br />
                <strong>Prénom: </strong><?= $donnees['firstName'] ?><br />
                <strong>Date de naissance</strong><?= $donnees['birthDate'] ?><br />
                <strong>Carte: </strong><?= $donnees['card'] ?><br />
                <strong>Numéro carte: </strong><?= $donnees['cardNumber'] ?>
            </p>
        <?php
        endwhile;
        ?>

    </body>
</html>