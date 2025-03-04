<?php

function hitungLuasLingkaran($r)
{
    $luas = pi() * $r * $r;
    echo "<h4>Menghitung Luas Lingkaran</h4>";
    echo "Jari-jari = " . $r . " cm.<br>";
    echo "Luas Lingkaran = " . round($luas) . " cm²";
}

function hitungKelilingLingkaran($r)
{
    $keliling = 2 * pi() * $r;
    echo "<h4>Menghitung Keliling Lingkaran</h4>";
    echo "Jari-jari = " . $r . " cm.<br>";
    echo "Keliling Lingkaran = " . round($keliling, 1) . " cm";
}

hitungLuasLingkaran(10);
echo "<hr>";
hitungKelilingLingkaran(20);
