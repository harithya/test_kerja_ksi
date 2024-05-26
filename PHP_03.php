<?php

$array = [720, 483, 281, 224, 483, 60, 698, 483, 790, 168];
function moreThanOne($array)
{
    $result = [];
    foreach ($array as $value) {
        $count = 0;
        foreach ($array as $val) {
            if ($value == $val) {
                $count++;
            }
        }

        if ($count > 1) {
            $result[$value] = $value;
        }
    }

    return $result;
}

$res = moreThanOne($array);
foreach ($res as $key => $value) {
    echo 'Hasil : ' . $value . '<br>';
}
