<?php

function getGanjil($start, $end)
{
    $result = [];
    for ($i = $start; $i <= $end; $i++) {
        if ($i % 2 != 0) {
            $result[] = $i;
        }
    }

    return $result;
}

echo '<pre>';
print_r(getGanjil(1, 10));
echo '</pre>';
