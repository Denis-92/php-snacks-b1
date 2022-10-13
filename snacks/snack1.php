<h1>ESERCIZIO SNACK 1</h1>
<h2>
    <a href="../index.php">
        TORNA INDIETRO
    </a>
</h2>

<!-- 
    Snack 1
    Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.

    Ogni array avrà una squadra di casa e una squadra ospite,
        punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.

    Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60
 -->

 <?php

 $partiteBasket = [
        $partita_venerdi = [
            'squadraCasa' => 'Milano',
            'squadraOspite' => 'Roma',
            'puntiCasa' => '55',
            'puntiOspite' => '60'
        ],

        $partita_sabato_1 = [
            'squadraCasa' => 'Venezia',
            'squadraOspite' => 'Napoli',
            'puntiCasa' => '36',
            'puntiOspite' => '32'
        ],

        $partita_sabato_2 = [
            'squadraCasa' => 'Imola',
            'squadraOspite' => 'Monza',
            'puntiCasa' => '95',
            'puntiOspite' => '56'
        ],

        $partita_domenica = [
            'squadraCasa' => 'Bari',
            'squadraOspite' => 'Cagliari',
            'puntiCasa' => '99',
            'puntiOspite' => '99'
        ]
    ];

for ($i = 0; $i < count($partiteBasket); $i++){
echo "<p>";
echo $partiteBasket[$i]['squadraCasa'] . " - ";
echo $partiteBasket[$i]['squadraOspite'] . " | ";
echo $partiteBasket[$i]['puntiCasa'] . "-";
echo $partiteBasket[$i]['puntiOspite'] . "</p>";
}

 ?>