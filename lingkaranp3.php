<?php

namespace App\Math;

class LuasLingkaran {

    public const phi = 3.14;
    private int $jari;
    
    public function __construct($isiJari = 1) {
        $this->jari = $isiJari;
    }

    // function tampil2($isiJari = 1) {
    //     // walau protected, bisa diakses di dalam class
    //     return $this->isiJari;
    // }


    public function tampil($nama = 'ban') : void {
        $rumus = LuasLingkaran::phi * ($this->jari * $this->jari);
        echo "Lingkaran {$nama} hasilnya adalah: {$rumus}";
    }

    public static function testing() {
        echo "<br/>";
        echo "ini dari static";
    }

   public function __destruct() {
       echo "<br/>";
       echo "ini dari destructor";
   }
}

// $lingkaran = new LuasLingkaran(10);
// // $lingkaran->jari = 10; // set nilai jari secara manual
// $lingkaran->tampil('roda'); //panggil method tampil

// LuasLingkaran::testing(); //panggil static method