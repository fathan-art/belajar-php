<?php
echo "Masukkan nilai kamu : ";
$nilai = fgets(STDIN);

if($nilai<60){
    echo "Nilai : $nilai\n";
    echo "Grade : E";
}elseif($nilai<70){
    echo "Nilai :$nilai\n";
    echo "Grade : D";
}elseif($nilai<80){
    echo "Nilai : $nilai\n";
    echo "Grade : C ";
}elseif($nilai<90){
    echo "Nilai : $nilai\n";
    echo "Grade : B";
}elseif($nilai<=1000){
    echo "Nilai :A";
}else{
    echo "Maapin ya nilai kamu tidak sah";
}
?>