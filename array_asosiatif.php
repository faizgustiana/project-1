<?php
// membuat array asosiatif (terdiri atas key & value)
$mhs = [
    'nama' => 'Faiz',
    'nim' => '011',
    'prodi' => 'SI',
    'ips' => [
        1 => 3.40,
        2 => 3.70,
        3 => 4.0,
    ],
] ;
// memanggil array asosiatif
echo "Nama : " . $mhs['nama'];
echo "<br> IPS semester 1: " . $mhs ['ips']