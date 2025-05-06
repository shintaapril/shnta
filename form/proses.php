<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_depan = $_POST['nama_depan'];
    $nama_belakang = $_POST['nama_belakang'];
    $tingkat = $_POST['tingkat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $hobi = $_POST['hobi'];

    echo "<h2>Data yang Anda Kirim:</h2>";
    echo "Nama Lengkap: $nama_depan $nama_belakang<br>";
    echo "Tingkat: $tingkat<br>";
    echo "Jenis Kelamin: $jenis_kelamin<br>";
    echo "Hobi: " . implode(", ", $hobi);
}
?>
