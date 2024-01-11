<?php

$stampa;

for($i=0;$i<=100;$i++){
    if(($i%3==0)&&($i%5==0)){
        $stampa='HACKADEMI';
    }
    elseif($i%3==0){
        $stampa='PHP';
    }
    elseif($i%5==0){
        $stampa='JAVASCRIPT';
    }
    else{
        $stampa=$i;
    }

    echo $stampa.PHP_EOL;
}