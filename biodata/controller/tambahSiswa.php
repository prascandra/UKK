<?php 
include '../config/conn.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $tpl = $_POST['tplahir'];
    $tgl = $_POST['tglahir'];
    $alamat = $_POST['alamat'];
    $hobi = $_POST['hobi'];
    $cita = $_POST['cita_cita'];
    $jmchild = $_POST['jm_saudara'];
    $idkelas = $_POST['idkelas'];
    $idagama = $_POST['idagama'];

    $query = "INSERT INTO siswa (nama, tplahir, tglahir, alamat, hobi, cita_cita, jm_saudara, idkelas, idagama)
    VALUES ('$nama', '$tpl','$tgl','$alamat','$hobi','$cita','$jmchild','$idkelas', '$idagama')";
    // echo $query;
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: ../biodata.php?status=sukses");
    } else {
        header("Location: ../biodata.php?status=gagal");
    }
}
?>