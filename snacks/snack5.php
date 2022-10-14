<h1>ESERCIZIO SNACK 5</h1>
<h2>
    <a href="../index.php">
        TORNA INDIETRO
    </a>
</h2>

<!--
    Snack 5
    
    Creare un array contenente qualche alunno di un’ipotetica classe.
    Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
    Stampare Nome, Cognome e la media dei voti di ogni alunno.
-->

<?php

$f1 = [
    [
        "name" => "Lewis",
        "lastname" => "Hamilton",
        "rating" => [
            10,
            9,
            8,
            9,
            10
        ]
    ],
    [
        "name" => "Charles",
        "lastname" => "Leclerc",
        "rating" => [
            8,
            7,
            9,
            8,
            8
        ]
    ],
    [
        "name" => "Max",
        "lastname" => "Verstappen",
        "rating" => [
           9,
           8,
           10,
           9,
           10
        ]
    ],
    [
        "name" => "Sebastian",
        "lastname" => "Vettel",
        "rating" => [
            10,
            10,
            7,
            8,
            7
        ]
    ],
    [
        "name" => "Nicholas",
        "lastname" => "Latifi",
        "rating" => [
            10,
            10,
            10,
            10,
            10
        ]
    ],
];

for( $i = 0; $i < count( $f1 ); $i++ ) {
    $pilota = $f1[$i];
    $votoFinale = array_sum( $pilota["rating"] ) / count( $pilota["rating"] );

    echo (
        "<p>" .
        $pilota["name"] .
        "</p>" .

        "<p>" .
        $pilota["lastname"] .
        "</p>" .

        "<p>" .
        $votoFinale .
        " / 10</p><hr>"
    );

}



?>