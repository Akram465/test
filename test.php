<?php
$countries = array(
    "France" => ["capital" => "Paris", "population" => 65687541],
    "Italy" => ["capital" => "Rome", "population" => 9879055],
    "Luxembourg" => ["capital" => "Luxembourg", "population" => 300],
    "Belgium" => ["capital" => "Brussels", "population" => 9849849],
    "Denmark" => ["capital" => "Copenhagen", "population" => 8789797],
    "Finland" => ["capital" => "Helsinki", "population" => 2989897],
    "Slovakia" => ["capital" => "Bratislava", "population" => 3879879],
    "Slovenia" => ["capital" => "Ljubljana", "population" => 64988],
    "Germany" => ["capital" => "Berlin", "population" => 3965987],
    "Greece" => ["capital" => "Athens", "population" => 4897987],
    "Ireland" => ["capital" => "Dublin", "population" => 1987497],
    "Netherlands" => ["capital" => "Amsterdam", "population" => 6897987],
    "Portugal" => ["capital" => "Lisbon", "population" => 7997978],
    "Spain" => ["capital" => "Madrid", "population" => 13277854],
    "Sweden" => ["capital" => "Stockholm", "population" => 897982],
);


ksort($countries);
var_dump($countries);

foreach ($countries as $key => $country) {
    echo 'the capital of' . $key . ' Number of inhabitants :' . $country['population'];
}





$tab1 = array(9, 20, 10, 3, 25, 2, 4);
$tab2 = array(2, 5, 13, 3, 1, 11, 7);
/*
$table3 = array();
for ($i = 0; $i < count($tab1); $i++) {
    $table3[] = $tab1[$i] + $tab2[$i];
}
var_dump($table3); */

function arrayAddidtion($array1, $array2)
{
    $result = array();
    for ($i = 0; $i < count($array1); $i++) {
        $result[] = $array1[$i] + $array2[$i];
    }
    return $result;
}

var_dump(arrayAddidtion($tab1, $tab2));
