<?php

// Simpan nilai domain
$domain = "http://www.contoh.com";

// Simpan nilai file1 hingga file5
$file1 = "file1.txt";
$file2 = "file2.txt";
$file3 = "file3.txt";
$file4 = "file4.txt";
$file5 = "file5.txt";

// Inisialisasi array untuk menyimpan hasil
$hasil = array();

// Menghitung hasil dan menyimpannya dalam array
for ($i = 1; $i <= 5; $i++) {
    $file = "file" . $i;
    $hasil[$i] = $domain . "/" . ${'file' . $i};
}

// Menampilkan hasil
foreach ($hasil as $key => $value) {
    echo "Hasil " . $key . ": " . $value . "<br>";
}

?>
