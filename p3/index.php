<?php
$ex1 = 0;
$ex2a = 0;
$ex2b = rand(1, 100);
$ex3a = 100;
$ex3b = rand(1, 100);
$ex4 = 1;



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>partie 3</title>
</head>

<body>
    <p>exercice 1 : </p>
    <?php
    while ($ex1 < 10) {
        echo $ex1 . '<br>';
        $ex1++;
    }
    ?>
    <p>exercice 2 : </p>
    <?php
    while ($ex2a < 20) {
        echo $ex2a * $ex2b . '<br>';
        $ex2a++;
    }
    ?>
    <p>exercice 3 : </p>
    <?php
    while ($ex3a >= 10) {
        echo $ex3a * $ex3b . '<br>';
        $ex3a--;
    }
    ?>
    <p>exercice 4 : </p>
    <?php
    while ($ex4 < 10) {
        echo $ex4 . '<br>';
        $ex4 = $ex4 + ($ex4 / 2);
    }
    ?>
    <p>exercice 5 : </p>


</body>

</html>