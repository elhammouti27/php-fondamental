<?php
$age = 20;
$weight = 70.5;
$heigth = 175;
$bmc = 20;
$isOk = true;
$gender = "homme";
$state = '';

if ($age >= 18) {
    $message =  'Vous êtes majeur';
} else {
    $message = 'Vous êtes mineur';
}


if ($isOk == true) {
    $result =  "Cest bon ";
} else {
    $result =  "Ce n'est pas bon";
}

$result2 = ($isOk == true) ? 'C\'est bon' : 'Ce n\'est pas bon';


//exercice 3
if ($age >= 18 && $gender == "homme") {
    $result3 =  'Vous êtes un homme et vous êtes majeur';
} elseif ($age < 18 && $gender == "homme") {
    $result3 = 'Vous êtes un homme et vous êtes mineur';
} elseif ($age >= 18 && $gender == "femme") {
    $result3 = 'Vous êtes une femme et vous êtes majeur';
} else {
    $result3 = 'Vous êtes une femme et vous êtes mineur';
}

//exercice 4
if ($bmc < 18.5) {
    $result4 =  'maigreur';
} elseif ($bmc >= 18.5 && $bmc <= 24.9) {
    $result4 = 'corpulance normale';
} elseif ($bmc >= 25 && $bmc <= 29.9) {
    $result4 = 'surpoids';
} elseif ($bmc >= 30) {
    $result4 = 'Obésité';
}

//exercice 5
if ($gender != 'homme') {
    $result5 =  'C\'est une développeuse';
} else {
    $result5 = 'C\'est un développeur !!!';
}

//exercice 6
if ($age >= 18) {
    $state =  'Tu es majeur';
} else {
    $state = 'Tu n\'es pas majeur';
}


//exercice 7
if ($isOk == false) {
    $result7 =  'c\'est pas bon !!!';
} else {
    $result7 = 'c\'est ok !!';
}


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>partie 2</title>
</head>
<body>
    <p>
        <?= $message ?>
        <br>
        <?= $result ?>
        <br>
        <?= $result2 ?>
        <br>
        <?= $result3 ?>
        <br>
        <?= $result4 ?>
        <br>
        <?= $result5 ?>
        <br>
        <?= $state ?>
        <br>
        <?= $result7 ?>
    </p>
</body>
</html>