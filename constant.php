<?php

//disimpan diluar class
// define("NAMA", "Darul Annas");

// echo NAMA;

// echo "<br>";

// const UMUR = 26;

// echo UMUR;


// class Coba {
//     //bisa disimpan di dalam class
//     const NAMA = "Darul Annas";
// }

// echo Coba::NAMA;


// magic const
// echo __FILE__;

// function coba() {
//     return __FUNCTION__;
// }

// echo coba();

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;