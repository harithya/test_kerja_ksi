<?php

function matrik($n)
{
    for ($i = $n - 1; $i >= 0; $i--) {
        for ($a = 0; $a < $n; $a++) {
            if ($i == $a) {
                echo $i + 1;
            } else {
                echo '*';
            }
        }
        echo '<br>';
    }
}

matrik(5);
