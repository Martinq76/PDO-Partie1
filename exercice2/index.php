<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice 2</title>
    </head>
    <body>
        <?php
        $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'martin76', 'aynwxe3040$');
        $response = $bdd->query('SELECT * FROM showTypes');
        while($donnees = $response->fetch()):?>
          <p>
            <strong>Type de spectacle: </strong><?= $donnees['type'] ?><br />
          </p>
        <?php
        endwhile;
        ?>

    </body>
</html>