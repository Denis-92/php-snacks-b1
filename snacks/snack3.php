<h1>ESERCIZIO SNACK 3</h1>
<h2>
    <a href="../index.php">
        TORNA INDIETRO
    </a>
</h2>

<!--
    Snack 3
    
    Creare un array di array.

    Ogni array figlio avrà come chiave una data in questo formato:
        DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data.

    Stampare ogni data con i relativi post.

    Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z
-->

<?php

$forum = [

    "01-01-2020" => [
        "utente" => "pippo",
        "messaggio" => "lorem ipsum",
        "ora" => "12:30"
    ],

    "02-01-2020" => [
        "utente" => "paperino",
        "messaggio" => "sit amet",
        "ora" => "07:24"
    ],

    "04-01-2020" => [
        "utente" => "qui",
        "messaggio" => "test 1 2 3",
        "ora" => "11:11"
    ],
    [
        "utente" => "quo",
        "messaggio" => "3 2 1 via",
        "ora" => "20:08"
    ],

    "10-02-2020" => [
        "utente" => "tom",
        "messaggio" => "hello world",
        "ora" => "18:00"
    ],
];

$condition = count($forum);

// for ( $i = 0; $i < $condition; $i++ ) {
//     echo $forum[$i];
// }


?>