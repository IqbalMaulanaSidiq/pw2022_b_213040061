<?php 
// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang di mulai dari 0

// membuat array
// cara lama
$hari = array("Senin", "selasa", "rabu" , "kamis", "jumat", "Sabtu");
// cara baru
$bulan = ["januari", "februari", "maret"];
$arr1 =[123,"tulisan", false];



// menampilkan array
// var_dump()/ print_r()

var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

// menampilkan satu elemen pada array
    echo $arr1[0];
    echo "<br>";
    echo $bulan [1];
    echo "<br>";

    // menambahkan elemen baru pada array
    var_dump($hari);
    $hari[]= "minggu";
    echo "<br>";
    var_dump($hari);
?>