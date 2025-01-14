<?php
$file = fopen("halo.txt","w");

$teks = "Halo \n";
fwrite($file,$teks);

$teks = "Saya sedang berusaha belajar codingan PHP.";
fwrite($file,$text);

fclose($file);
?>