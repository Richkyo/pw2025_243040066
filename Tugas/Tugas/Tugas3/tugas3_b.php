<?php

function urutanAngka($angka)
{
    $output = '';
    $count = 1;
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            $output .= $count . '';
            $count++;
        }
        $output .= "<br>";
    }
    return $output;
}

echo urutanAngka(5);
