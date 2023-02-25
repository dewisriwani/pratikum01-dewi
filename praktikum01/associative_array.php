<?php
$profileArray = [[
"nama" => " dewi sriwani",
"kelas" => "TI06", 
"ipk" => 4, 
"sudah_lulus" => false 
],
[
    "nama" => " dewi sriwani",
    "kelas" => "TI06", 
    "ipk" => 4, 
    "sudah_lulus" => false 
    ]];
   


foreach ($profileArray as $profile) {
    echo $profile['nama'];
}