<!DOCTYPE html>
<html>
    <head lang="fr">
        <meta charset="utf-8">
        <title>Exercice 7</title>
    </head>
    <body>
        <div>
            <?php
            $count = 1;
            while ($count <= 100)
            {
                echo '<p>' .$count. ' On tient le bon bout.</p>';
                $count += 15;
            }
            ?>
        </div>
    </body>
</html>