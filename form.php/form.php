<form action="proses.php" method="POST">
  <label>Nama Depan:</label>
  <input type="text" name="nama_depan"><br><br>

  <label>Nama Belakang:</label>
  <input type="text" name="nama_belakang"><br><br>

  <label>Tingkat:</label>
  <select name="tingkat">
    <option value="SD">SD</option>
    <option value="SMP">SMP</option>
    <option value="SMK">SMK</option>
  </select><br><br>

  <label>Jenis Kelamin:</label><br>
  <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki<br>
  <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br><br>

  <label>Hobi:</label><br>
  <input type="checkbox" name="hobi[]" value="Membaca"> Membaca<br>
  <input type="checkbox" name="hobi[]" value="Badminton"> Badminton<br>
  <input type="checkbox" name="hobi[]" value="Main Bola"> Main Bola<br>
  <input type="checkbox" name="hobi[]" value="Musik"> Musik<br><br>

  <input type="submit" value="Submit">
</form>