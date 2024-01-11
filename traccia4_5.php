<?php

$temperatura;
$parola;
$stringa;

$temperature=["Venezia"=>16,"Bari"=>32,"Roma"=>28,"Napoli"=>30,"Milano"=>13,"Palermo"=>14,"Torino"=>24,"Lecce"=>27,"Genova"=>30,"Catania"=>11,"Cosenza"=>9,];

foreach($temperature as $elemento=>$temperatura){
    if($temperatura<15){
        $parola='freddo';
    }
    else if($temperatura>=15&&$temperatura<25){
        $parola='caldo';
    }
    else{
        $parola='molto caldo';
    }
    $stringa = 'A '.$elemento.' fa '.$parola.' con '.$temperatura.'°C'.PHP_EOL;
    echo $stringa;
}