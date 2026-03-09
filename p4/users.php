<?php
$firstnames = ["Steve", "Jeff", "Marck", "Sundar"];
$replace = str_replace("Marck", "Mark", $firstnames);
$add_toLast = array_push($firstnames, "Bill"); // ajouter a la fin du tableau 
$add_toFirst = array_unshift($firstnames, "Julie"); // ajouter au debut du tableau
$users = [
    $users1 = [
        'firstname' => 'Steve',
        'lastname' => 'Jobs ',
        'email' => ' steve.jobs@apple.com'
    ],
    $users2 = [
        'firstname' => 'Jeff',
        'lastname' => 'Bezos ',
        'email' => ' jeff.bezos@apple.com'
    ],
    $users3 = [
        'firstname' => 'Mark',
        'lastname' => 'zuckerberg',
        'email' => 'mark.zuckerberg@apple.com'
    ],
    $users4 = [
        'firstname' => 'Sundar',
        'lastname' => 'Pichai',
        'email' => 'sundar.pichai@apple.com'
    ],
    $users5 = [
        'firstname' => 'Bill',
        'lastname' => 'Gates ',
        'email' => 'bill.gates@apple.com'
    ],
    $users6 = [
        'firstname' => 'Julie',
        'lastname' => 'Chapon',
        'email' => 'julie.chapon@apple.com'
    ],
];
sort($firstnames); // trie par ordre alphabétique

function numberNoms($firstnames)
{
    echo count($firstnames);
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>partie 4</title>
</head>

<body>
    <?php
    echo 'le premier prénom du tableau firstnames est ' . $firstnames[0] . '<br>';
    numberNoms($firstnames);
    ?>
    <br>
    <?php
    foreach ($firstnames as $firstname) {
        echo '<ul>' .'<li>' .$firstname .'</li>' . '</ul>';
    }
    ?>
    <br>
    <?php
    echo ' L’email du patron de Meta est ' . $users[2]["email"] . '<br>';
    echo 'Le patron de Microsoft s’appelle ' . $users[4]["firstname"] . '<br>';
    echo 'Dans un monde si masculin, Yuka à été fondé en 2016, notamment par ' . $users[5]["firstname"] . '<br>';
    ?>
    <br>
    <?php
    foreach ($users as $user) {
        echo '<ul>' .'<li>' . $user['firstname'] . ' ' . $user['lastname'] . '(' . $user['email'] . ')' . '</li>' . '</ul>';
    }
    ?>
</body>

</html>