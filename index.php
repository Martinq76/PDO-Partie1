<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>PDO Partie 1</title>
    </head>
    <body>
        <?php
        for ($i = 1; $i <= 7; $i++ ):?>
            <p><a href="exercice<?= $i ?>/index.php">Exercice <?= $i ?></a></p>
        <?php
        endfor;
        ?>

    </body>
</html>