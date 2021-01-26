<?php

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
$videotheque = array(
    array(
        'nom' => 'Independance day',
        'date' => 1996,
        'realisateur' => 'Roland Emmerich',
        'acteurs' => array(
            'Will Smith', 'Bill Pullman', 'Jeff Goldblum', 'Mary McDonnell',
        ),
    ),
    array(
        'nom' => 'Bienvenue a Gattaca',
        'date' => 1998,
        'realisateur' => 'Andrew Niccol',
        'acteurs' => array(
            'Ethan Hawke', 'Uma Thurman', 'Jude Law',
        ),
    ),
    array(
        'nom' => 'Forrest Gump',
        'date' => 1994,
        'realisateur' => 'Robert Zemeckis',
        'acteurs' => array(
            'Tom Hanks', 'Gary Sinise',
        ),
    ),
    array(
        'nom' => '12 hommes en colere',
        'date' => 1957,
        'realisateur' => 'Sidney Lumet',
        'acteurs' => array(
            'Henry Fonda','Martin Balsam','John Fiedler','Lee J. Cobb','E.G. Marshall',
        ),
    ),
);

echo '12.Mes films : <br>';
//ajoutez votre code ici
foreach($videotheque as $film) {
    foreach ($film as $x => $y) {
        if (is_array($y)) {
            $count = count($y);
            echo $x . " : ";
            for ($zero = 0; $zero < $count; $zero++) {
                echo $y[$zero] . ", ";
            }
            echo "<br>";
        }
        else {
            echo $x . " : ". $y."<br>";
        }
    }
    echo "<br>";
}

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
//reprenez le tableau ci-dessus, ajoutez-y 3 de vos films préférés avec les mêmes
//informations (nom, date, realisateur, acteurs) et en plus de ces informations
//rajoutez un synopsis
$videotheque2 = array(
    array(
        'nom' => 'Independance day',
        'date' => 1996,
        'realisateur' => 'Roland Emmerich',
        'acteurs' => array(
            'Will Smith', 'Bill Pullman', 'Jeff Goldblum', 'Mary McDonnell',
        ),
    ),
    array(
        'nom' => 'Bienvenue a Gattaca',
        'date' => 1998,
        'realisateur' => 'Andrew Niccol',
        'acteurs' => array(
            'Ethan Hawke', 'Uma Thurman', 'Jude Law',
        ),
    ),
    array(
        'nom' => 'Forrest Gump',
        'date' => 1994,
        'realisateur' => 'Robert Zemeckis',
        'acteurs' => array(
            'Tom Hanks', 'Gary Sinise',
        ),
    ),
    array(
        'nom' => '12 hommes en colere',
        'date' => 1957,
        'realisateur' => 'Sidney Lumet',
        'acteurs' => array(
            'Henry Fonda','Martin Balsam','John Fiedler','Lee J. Cobb','E.G. Marshall',
        ),
    ),
    array(
        'nom' => '300',
        'date' => 2006,
        'realisateur' => "quelqu'un",
        'acteurs' => array(
            'gens1','gens2','gens3',
        ),
    ),
    array(
        'nom' => 'Sucker Punch',
        'date' => 2012,
        'realisateur' => 'insert_realisateur_name',
        'acteurs' => array(
            'madame1', "madame2", "madame3",
        ),
    ),
    array(
        'nom' => 'Sonic',
        'date' => 2018,
        'realisateur' => 'insert_realisateur_name',
        'acteurs' => array(
            'Sonic', "Jim Carrey (Il est pas rond)",
        ),
    ),
);
echo '13.Mes films : <br>';
//ajoutez votre code ici

foreach($videotheque2 as $film) {
    foreach ($film as $x => $y) {
        if (is_array($y)) {
            $count = count($y);
            echo $x . " : ";
            for ($zero = 0; $zero < $count; $zero++) {
                echo $y[$zero] . ", ";
            }
            echo "<br>";
        }
        else {
            echo $x . " : ". $y."<br>";
        }
    }
    echo "<br>";
}