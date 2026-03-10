<?php
function returnTrue()
{
    return true;
}

function chaineCaractere($chaine)
{
    return $chaine;
}

function concatener($first, $last)
{
    return $first . ' ' . $last;
}

function twoNumbers($number1, $number2)
{
    if (is_numeric($number1) && is_numeric($number2)) {
        if ($number1 > $number2) {
            return 'Le premier nombre est plus grand';
        } elseif ($number1 < $number2) {
            return 'Le premier nombre est plus petit ';
        } else {
            return 'Les deux nombres sont identiques';
        }
    }else{
        return 'il faut des nombres';
    }
}


function concatenerIntString($firstInt, $lastString)
{
    return $firstInt . $lastString;
}

function person($nom, $prenom, $age)
{
    return 'Bonjour' . ' ' . $nom . ' ' . $prenom .  ' , tu as ' . $age . 'ans';
}

function verifier($age_, $genre)
{
    if ($age_ >= 18 && $genre == "homme") {
        echo 'Vous êtes un homme et vous êtes majeur';
    } elseif ($age_ < 18 && $genre == "homme") {
        echo 'Vous êtes un homme et vous êtes mineur';
    } elseif ($age_ >= 18 && $genre == "femme") {
        echo 'Vous êtes une femme et vous êtes majeur';
    } elseif ($age_ < 18 && $genre == "femme") {
        echo 'Vous êtes une femme et vous êtes mineur';
    } else {
        echo 'veuillez saisir des vrais age et genre';
    }
}

function somme($a = 19, $b = 28, $c = 88)
{
    $somme = $a + $b + $c;
    return $somme;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?= returnTrue(); ?>
    <br>
    <?= chaineCaractere("mohamed"); ?>
    <br>
    <?= concatener("hello", "mohamed"); ?>
    <br>
    <?= twoNumbers("5", 5) ?>
    <br>
    <?= concatenerIntString(5, "hello") ?>
    <br>
    <?= person("mohamed", "amine", 20) ?>
    <br>
    <?= verifier(19, "femme") ?>
    <br>
    <?= somme() ?>
</body>

</html>