<?php

function remove_even($numbers){
    $only_odd = array();

    foreach ($numbers as $number){
        if($number % 2!=0){
            $only_odd[] = $number;
        }
    }
    print_r($only_odd);
}

$numbers = range(1, 10);

remove_even($numbers);

