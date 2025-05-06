<?php
$nama = $_POST['nama_depan'] . ' ' . $_POST['nama_belakang'];
$tingkat = $_POST['tingkat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$hobi = implode(", ", $_POST['hobi']);

echo "Nama saya adalah $nama. Saya sekolah tingkat $tingkat. Jenis kelamin saya $jenis_kelamin. Dan hobi saya $hobi.";
?>