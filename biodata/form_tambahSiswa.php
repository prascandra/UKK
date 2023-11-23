
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data Siswa</title>
</head>
<body>
    <header>
        <h2>Form Tambah Data Siswa Baru</h2>
    </header>

    <form action="controller/tambahSiswa.php" method="post">
        <div class="input-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" required>
        </div>
        <div class="input-group">
            <label for="tplahir">Tempat Lahir:</label>
            <input type="text" name="tplahir" id="tplahir" required>
        </div>
        <div class="input-group">
            <label for="tglahir">Tanggal Lahir:</label>
            <input type="date" name="tglahir" id="tglahir" required>
        </div>
        <div class="input-group">
            <label for="alamat">Alamat:</label>
            <textarea name="alamat" id="" cols="30" rows="10" required></textarea>
        </div>
        <div class="input-group">
            <label for="hobi">Hobi:</label>
            <input type="text" name="hobi" id="hobi" required>
        </div>
        <div class="input-group">
            <label for="cita_cita">Cita Cita:</label>
            <input type="text" name="cita_cita" id="cita_cita" required>
        </div>

        <div class="input-group">
            <label for="jm_saudara">Jumlah Saudara:</label>
            <input type="Number" name="jm_saudara" id="jm_saudara" required>
        </div>
        <div class="input-group">
            <label for="idkelas">Kelas Id:</label>
            <input type="Number" name="idkelas" id="idkelas" required>
        </div>
        <div class="input-group">
            <label for="idagama">Agama Id:</label>
            <input type="Number" name="idagama" id="idagama" required>
        </div>
        <div class="input-group">
            <input type="submit" value="submit" name="submit">
        </div>
    </form>
</body>
</html>