<?php

$albums = array(
    "Citizen of Glass" => 4.5,
    "Night" => 9,
    "New Eyes" => 5,
    "Strange Trails" => 10,
);
$total = 0;

echo "Het albumoverzicht: \n";

foreach ($albums as $name => $price) {
    echo $name . " kost €" . $price . "\n";
}


foreach ($albums as $name => $price) {
    $total += $price;
}

echo "Het totaalbedrag van alle albums is €" . $total;

$average = $total / count($albums);

echo "De gemiddelde prijs van alle albums is €" . $average;
