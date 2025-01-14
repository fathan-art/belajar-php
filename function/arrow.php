<?php
$a= 5;
$b =100;

$hasil = fn()=>$a*$b;
$hasil = fn()=>$a+$b;
$hasil = fn()=>$a-$b;
$hasil = fn()=>$a/$b;
$hasil = fn()=>$a%$b;

echo $hasil();
?>