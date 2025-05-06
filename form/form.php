<!DOCTYPE html>
<html>
<head>
    <title>Form PHP</title>
</head>
<body>

<h2>Formulir Pendaftaran</h2>
<form action="proses.php" method="post">
    <label for="nama_depan">Nama Depan:</label><br>
    <input type="text" id="nama_depan" name="nama_depan" post><br><br>

    <label for="nama_belakang">Nama Belakang:</label><br>
    <input type="text" id="nama_belakang" name="nama_belakang" post><br><br>

    <label for="tingkat">Tingkat:</label><br>
    <select id="tingkat" name="tingkat">
        <option value="SD">SD</option>
        <option value="SMP">SMP</option>
        <option value="SMK">SMK</option>
    </select><br><br>

    <label>Jenis Kelamin:</label><br>
    <input type="radio" id="pria" name="jenis_kelamin" value="Pria" post>
    <label for="pria">Pria</label><br>
    <input type="radio" id="wanita" name="jenis_kelamin" value="Wanita">
    <label for="wanita">Wanita</label><br><br>

    <label>Hobi:</label><br>
    <input type="checkbox" id="membaca" name="hobi[]" value="Membaca">
    <label for="membaca">Membaca</label><br>
    <input type="checkbox" id="Badminton" name="hobi[]" value="Badminton">
    <label for="Badminton">Badminton</label><br>
    <input type="checkbox" id="olahraga" name="hobi[]" value="Olahraga">
    <label for="olahraga">Olahraga</label><br>
    <input type="checkbox" id="musik" name="hobi[]" value="Musik">
    <label for="musik">Musik</label><br><br>

    <input type="submit" value="submit">
</form>

</body>
</html>
