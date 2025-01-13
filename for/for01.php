<?php

echo "Masukkan nilai awal :";
$awal = trim(fgets(STDIN));
    
echo "Masukkan nilai akhri :";
$akhir = trim(fgets(STDIN));

for ($awal; $awal<=$akhir;$awal++){
    echo "Antrian ke-$awal \n";
}
?>