<?php
$siswa = [
    "siswa1" =>[
    "nama" => "Nata the cococrunch",
    "kelas" => 12
],
"siswa2"=>[
    "nama" => "Nata the seni",
    "kelas" => 10
]
];

foreach($siswa as $murid => $santri){
    echo strtoupper($murid).PHP_EOL;
    foreach($santri as $data => $isi){
        echo ucwords($data)." : ". $isi . PHP_EOL;
    }
}
?>