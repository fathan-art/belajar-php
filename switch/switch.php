<?php
echo "Masukkan kode rahasiamu : ";
$kode = fgets(STDIN);

switch($kode){
    case 1:
        echo "Selamat datang Admin";
        break;
    case 2:
        echo "Selamat datang User";
        break;
    case 3:
        echo "Selamat datang Tamu";
        break;
    default:
    echo "Mohon Maaf Akses Di Tolak...!!!";
    break;
}
?>