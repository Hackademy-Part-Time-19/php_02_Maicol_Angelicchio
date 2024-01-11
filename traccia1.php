<?php
$users=[
    ['name'=>'Davide','surname'=>'Cariola','gender'=>'M'],
    ['name'=>'Giorgia','surname'=>'Bianchi','gender'=>'F'],
    ['name'=>'Optimus','surname'=>'Prime','gender'=>'NB']];

    $genere;
    $saluto;

    foreach($users as $users){
        if($users['gender']=='M'){
            $genere = 'Sig.';
        }
        else if($users['gender']=='F'){
            $genere = 'Sig.ra';
        }
        else{
            $genere = '';
        }

        switch($users['gender']){
            case 'M':
                $genere = 'Sig.';
            case 'F':
                $genere = 'Sig.ra';
            case 'NB':
                $genere = '';
        }

        $saluto = 'Buongiorno '.$genere.' '.$users['name'].' '.$users['surname'].PHP_EOL;
        echo $saluto; 
    }