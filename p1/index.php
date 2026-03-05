<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>partie 1</title>
</head>
<body>
    <?php
        //exercice1
        $name = 'mohamed';
        echo 'my name is :' . $name .'<br>';

        //exercice2
        $age = 20;
        $weight = 70.5;
        $heigth = 175;
        echo ' age = ' . $age . 'yo <br>';
        echo 'weight = ' . $weight . 'kg <br>';
        echo 'height = ' . $heigth . 'cm <br>';

        //exercice3
        $grams = $weight * 1000;
        echo 'weight in grams = ' . $grams . 'g <br>';
        $metres = $heigth / 100;
        echo 'height in metres = ' . $metres .'m <br>';

        //exercice4
        $bmc = 20;
        echo 'bmc = ' . $bmc . '<br>';
        $bmc = $weight / ($metres * $metres);
        echo 'new bmc = ' . $bmc . '<br>';

        //exercice5
        echo 'Bonjour ' . $name . ' , comment vas-tu? tu as '. $age . 'ans<br>';


        //exercice6
        $color = 'red';
        echo '<p style="color :red";>' . $color . '</p>';

    ?>
</body>
</html>