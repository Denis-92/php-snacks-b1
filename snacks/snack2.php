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

<form method="get">
    <input type="text" name="name" placeholder="Nome">
    <input type="email" name="mail" placeholder="Email">
    <input type="number" name="age" placeholder="Età">
    <button type="submit">Invia</button>
</form>

<?php

$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

// SEBBENE TROVATO IN DOCUMENTAZIONE --str_contains-- SEMBRA NON ESISTENTE NEL LINGUAGGIO UTILIZZATO
// if (str_contains($mail, '@')) {
//     echo "Accesso riuscito";
// } else {
//     echo "Accesso negato";
// }

echo "<p>" . $name . "</p>";
echo "<p>" . $mail . "</p>";
echo "<p>" . $age . "</p>";

if(strlen($name) > 3 ) {
    echo "Accesso riuscito NOME";
} else {
    echo "Accesso negato NOME";
}


?>