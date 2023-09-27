<?php
function descending_sort($grades){
    $cnt = count($grades);

    for ($i = 0; $i < $cnt; $i++) {
        for ($j = $i; $j < $cnt - 1; $j++) {
            if ($grades[$j] < $grades[$j + 1]) {
                $temp = $grades[$j];
                $grades[$j] = $grades[$j + 1];
                $grades[$j + 1] = $temp;
            }
        }
    }


    print_r($grades);
}
$grades = array(85, 92, 78, 88, 95);

descending_sort($grades);