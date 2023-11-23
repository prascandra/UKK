<?php
include 'config/conn.php';

if (!isset($_GET['id'])) {
    header("Location: biodata.php");
}

$id = $_GET['id'];

$query = "SELCT * FROM siswa WHERE id=$id";
$result = mysqli_query($conn, $query);
$siswa = mysqli_fetch_array($result);

if (mysqli_num_rows($result) < 1) {
    die("Data tidak ditemukan");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Siswa</title>
</head>
<body>
    <header>
        <h2>Edit Data Siswa</h2>
    </header>
    <form action="controller/editsiswa.php" method="post">
        <input type="hidden" name="id" id="id" value="<?php echo $siswa['id'] ?>">
        <div class="input-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" value="<?php echo $siswa['nama'] ?>">
        </div>
        <div class="input-group">
            <label for="tplahir">Tempat Lahir:</label>
            <input type="text" name="tplahir" id="tplahir" value="<?php echo $siswa['tplahir'] ?>">
        </div>
        <div class="input-group">
            <label for="tglahir">Tanggal Lahir:</label>
            <input type="date" name="tglahir" id="tglahir" value="<?php echo $siswa['tglahir'] ?>">
        </div>
        <div class="input-group">
            <label for="tglahir">Tanggal Lahir:</label>
            <textarea name="tglahir" id="" cols="30" rows="10" value="<?php echo $siswa['tglahir']?>"></textarea>
        </div>
        <div class="input-group">
            <label for="hobi">Hobi:</label>
            <input type="text" name="hobi" id="hobi" value="<?php echo $siswa['hobi'] ?>">
        </div>
        <div class="input-group">
            <label for="jm_saudara">Cita - cita:</label>
            <input type="text" name="cita_cita" id="cita_cita" value="<?php echo $siswa['cita_cita'] ?>">
        </div>
        <div class="input-group">
            <label for="jm_saudara">Jumlah Saudara:</label>
            <input type="number" name="jm_saudara" id="jm_saudara" value="<?php echo $siswa['jm_saudara'] ?>">
        </div>
        <div class="input-group">
            <label for="idkelas">Id Kelas:</label>
            <input type="number" name="idkelas" id="idkelas" value="<?php echo $siswa['idkelas'] ?>">
        </div>
        <div class="input-group">
            <label for="idagama">Jumlah Saudara:</label>
            <input type="number" name="idagama" id="idagama" value="<?php echo $siswa['idagama'] ?>">
        </div>
        <div class="input-group">
            <input type="submit" value="submit" name="submit">
        </div>
    </form>
</body>
</html>