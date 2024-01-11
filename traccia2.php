<?php

$numeri = [2, 5, 6, 14, 21, 65, 84, 112];
$contaPari;
$media;

foreach($numeri as $elemento){
    if($elemento%2==0){
        $contaPari++;
        $media=$media+$elemento;
    }
}

$media = $media/$contaPari;
echo $media;