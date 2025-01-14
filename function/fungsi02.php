<?php
echo "Masukkan nama :";
$nama = trim(fgets(STDIN));

function sapa($nama){
    echo "$nama".PHP_EOL;
}

sapa("Halo $nama bagaimana kabarmu");
?>