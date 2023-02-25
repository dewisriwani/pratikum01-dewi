<?php
$arrayBuah = ["semangka","melon","jeruk","pepaya"];

//mengurutkan array
sort($arrayBuah);

//menghapus nilai array paling belakang
array_pop($arrayBuah);

//menghapus spesifik value array terttentu
unset($arrayBuah[1]);

//menambah value array dibelakang
array_push($arrayBuah,"Apel");

//untuk menghapus value array yang paling epan
array_shift($arrayBuah);

//menambah value array palig depan
array_unshift($arrayBuah,"Mangga");

foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}