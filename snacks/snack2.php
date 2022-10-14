<h1>ESERCIZIO SNACK 2</h1>
<h2>
    <a href="../index.php">
        TORNA INDIETRO
    </a>
</h2>

<!-- 
    Snack 2

    Passare come parametri GET name, mail e age e
        verificare (cercando i metodi che non conosciamo nella documentazione)
            che name sia più lungo di 3 caratteri,
            che mail contenga un punto e una chiocciola e
            che age sia un numero.
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
-->

<!-- <form method="get">
    <input type="text" name="name" placeholder="Nome">
    <input type="email" name="mail" placeholder="Email">
    <input type="number" name="age" placeholder="Età">
    <button type="submit">Invia</button>
</form> -->

<?php

$name = "";
$mail = "";
$age = "";

if ( isset( $_GET["name"] ) ) {
    $name = $_GET["name"];
}

if ( isset( $_GET["mail"] ) ) {
    $mail = $_GET["mail"];
}

if ( isset( $_GET["age"] ) ) {
    $age = $_GET["age"];
}

echo "<p>" . $name . "</p>";
echo "<p>" . $mail . "</p>";
echo "<p>" . $age . "</p>";

$checkName = strlen( $name ) > 3;

$checkMailAt = strpos( $mail, "@" );
$checkMailDot = strpos( $mail, "." );

$checkNumber = is_numeric( $age );

if( $checkName ) {
    echo "<p> Nome OK </p>";
} else {
    echo "<p> Nome non valido </p>";
}

if ( $checkMailAt && $checkMailDot ) {
    echo "<p> Mail OK </p>";
} else {
    echo "<p> Mail non valida </p>";
}

if ( $checkNumber ) {
    echo "<p> Numero OK </p>";
} else {
    echo "<p> Numero non valido </p>";
}

if ( $checkName && $checkMailAt && $checkMailDot && $checkNumber ) {
    echo "<p> Accesso riuscito </p>";
} else {
    echo "<p> Accesso negato </p>";
}


?>