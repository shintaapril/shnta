<?php
function kalkulator($x, $y, $operasi) {
    if ($operasi == '+') {
        return $x + $y;
    } else if ($operasi == '-') {
        return $x - $y;
    } else if ($operasi == '*') {
        return $x * $y;
    } else if ($operasi == '/') {
        if ($y == 0) {
            return "Tidak bisa membagi dengan nol!";
        }
        return $x / $y;
    } else {
        return "Operasi tidak dikenali";
    }
}

// Array perhitungan dengan keterangan operasi
$perhitungan = [
    ['Penjumlahan', 20, 15, '+'],
    ['Pengurangan', 11, 8, '-'],
    ['Perkalian', 8, 4, '*'],
    ['Pembagian', 8, 2, '/'],
    ['Pembagian Error', 5, 0, '/']
];

foreach ($perhitungan as $data) {
    $nama = $data[0];
    $x = $data[1];
    $y = $data[2];
    $op = $data[3];
    $hasil = kalkulator($x, $y, $op);
    echo "$nama: $x $op $y = $hasil<br>";
}
?>
