<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice 6</title>
    </head>
    <body>
        <?php
        $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'martin76', 'aynwxe3040$');
        $response = $bdd->query('SELECT * FROM `shows` ORDER BY `title`');
        while($donnees = $response->fetch()): ?>
            <p>
                <b><?= $donnees['title'] ?></b> par <b><?=$donnees['performer'] ?></b> le <b><?= $donnees['date'] ?></b> à <b><?= $donnees['startTime'] ?></b>.<br />
            </p>
        <?php
        endwhile;
        ?>

    </body>
</html>