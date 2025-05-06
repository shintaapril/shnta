<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_depan = $_POST['nama_depan'];
    $nama_belakang = $_POST['nama_belakang'];
    $tingkat = $_POST['tingkat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $hobi = isset($_POST['hobi']) ? $_POST['hobi'] : [];

    echo "<h2>Data yang Anda Kirim:</h2>";
    echo "Nama Lengkap: " . htmlspecialchars($nama_depan) . " " . htmlspecialchars($nama_belakang) . "<br>";
    echo "Tingkat: " . htmlspecialchars($tingkat) . "<br>";
    echo "Jenis Kelamin: " . htmlspecialchars($jenis_kelamin) . "<br>";
    echo "Hobi: <br>";

    if (!empty($hobi)) {
        echo "<ul>";
        foreach ($hobi as $item) {
            echo "<li>" . htmlspecialchars($item) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "Tidak ada hobi yang dipilih.";
    }
} else {
    echo "Tidak ada data yang dikirim.";
}
?>