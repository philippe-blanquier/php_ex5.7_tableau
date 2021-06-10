<!DOCTYPE html>
<html lang='fr'>
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 5.7 fonction</title>
    </head>
    <body >
        <?php
        $departementHautDeFrance= array();
        $departementHautDeFrance[59]='Nord';
        $departementHautDeFrance[62]='Pas de Calais';
        $departementHautDeFrance[60]='Oise';
        $departementHautDeFrance[80]='Somme';
        $departementHautDeFrance[2]='Aisne';
        var_dump($departementHautDeFrance);
        ?>
        <p>Rajout du departement ou est Reims --> Marne (51)</p>
        <?php
            $departementHautDeFrance[51]='Marne';
            var_dump($departementHautDeFrance);
        ?>
        </body>
</html>