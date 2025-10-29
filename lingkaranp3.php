<?php

class Luaslingkaran {

    public const phi = 3.14;

    public int $jari;
}

$lingkaran = new Luaslingkaran();
$lingkaran->jari = 10; //input nilai jari jari

$rumus = Luaslingkaran::phi * ($lingkaran->jari * $lingkaran->jari);
echo "hasilnya adalah :", $rumus;