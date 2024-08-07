<?php 

// ARRAY

$arrayDiNumeri = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];


// FILTRO NUMERI PARI

$numeriPari= array_filter($arrayDiNumeri, function($numero) {
return $numero % 2 == 0;

});

// SOMMA PARI

$SommaPari = array_sum($numeriPari);

// QUANTITA' NUMERO PARI

$quantitaPari = count($numeriPari);

// MEDIA PARI

$mediaPari = $quantitaPari > 0 ? $SommaPari / $quantitaPari :0;

// STAMPA LA MEDIA DEI NUMERI 

echo 'La media dei numeri è : ' . " " . $mediaPari;


?>