<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice 5</title>
    </head>
    <body>
        <?php
        $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'martin76', 'aynwxe3040$');
        $response = $bdd->query('SELECT * FROM `clients` WHERE `lastName` LIKE \'M%\' ORDER BY `lastName`');
        while($donnees = $response->fetch()): ?>
            <p>
                <strong>Nom: </strong><?= $donnees['lastName'] ?><br />
                <strong>Prénom: </strong><?= $donnees['firstName'] ?><br />
            </p>
        <?php
        endwhile;
        ?>

    </body>
</html>