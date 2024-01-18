<?php

// Fungsi untuk mengecek ketersediaan angkot
function cekKetersediaan($noAngkot) {
    $angkotDiperbaiki = [2, 9, 12, 17];
    $angkotTersedia = [1, 3, 10, 11];

    if (in_array($noAngkot, $angkotDiperbaiki)) {
        return "Angkot no - $noAngkot sedang diperbaiki <br/>";
    } elseif (in_array($noAngkot, $angkotTersedia)) {
        return "Angkot no - $noAngkot tersedia <br/>";
    } else {
        return "Angkot no - $noAngkot tidak tersedia <br/>";
    }
}

// Mengulangi dari angkot 1 hingga 20
for ($angkot = 1; $angkot <= 20; $angkot++) {
    echo cekKetersediaan($angkot) . "\n";
}

?>