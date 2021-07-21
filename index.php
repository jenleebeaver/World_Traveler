<?php

//initial amount 
$riel_cambodia = 2103942;
$kyat_myanmar = 19092;
$krones_norway = 109;
$lek_albania = 9094;

echo "Initial Amounts:";
echo "\n";
echo "Reil: " . $riel_cambodia;
echo "\n";
echo "Kyat: " . $kyat_myanmar;
echo "\n";
echo "Krones: " . $krones_norway;
echo "\n";
echo "Lek: " . $lek_albania;

//exchange rate 
$riel_USD_exchangeRate = 0.00025;
$kyat_USD_exchangeRate = 0.00061;
$krones_USD_exchangeRate = 0.11;
$lek_USD_exchangeRate = 0.0096;

$conversion_fee = 1;

//international -> USD 
$USD_riel = $riel_cambodia * $riel_USD_exchangeRate - $conversion_fee;
$USD_kyat = $kyat_myanmar * $kyat_USD_exchangeRate - $conversion_fee;
$USD_krones = $krones_norway * $krones_USD_exchangeRate - $conversion_fee;
$USD_lek = $lek_albania * $lek_USD_exchangeRate - $conversion_fee;



echo "\n";
echo "\n";

echo "USD Exchange: ";
echo "\n";
echo "Riel to USD: " . "$" . round($USD_riel, 2);
echo "\n";
echo "Kyat to USD: " . "$" . round($USD_kyat, 2);
echo "\n";
echo "Krones to USD: " . "$" . round($USD_krones, 2);
echo "\n";
echo "Lek to USD: " . "$" .round($USD_lek, 2);
