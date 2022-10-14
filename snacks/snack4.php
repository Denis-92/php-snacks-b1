<h1>ESERCIZIO SNACK 4</h1>
<h2>
    <a href="../index.php">
        TORNA INDIETRO
    </a>
</h2>

<!--
    Snack 4
    
    Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
    Prendere il paragrafo e suddividerlo in tanti paragrafi.
    Ogni punto un nuovo paragrafo.
-->

<?php

$lorem = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur illum perspiciatis voluptas amet! Repudiandae nemo maiores facere accusantium tempora? Maiores quis natus fuga necessitatibus, nobis unde corrupti quod dolore totam.";

$loremBreakLine = explode ( "." , $lorem );

for ( $i = 0; $i < count($loremBreakLine); $i++ ) {
    echo "<p>" . $loremBreakLine[$i] . ".</p>";
}

?>

