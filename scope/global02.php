<?php
$nama = "Seni Badri"; // variabel global
$nilai = 87;

function tampilnilai(){
    global $nama, $nilai; // variabel local
    echo $nama . $nilai;
}

tampilnilai();
?>