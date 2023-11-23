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

    $query = "UPDATE siswa SET nama='$nama', tplahir='$tpl',tglahir='$tgl',alamat='$alamat',hobi='$hobi',cita_cita='$cita',jm_saudara='$jmchild',idkelas='$idkelas',idagama='$idagama'";
    // echo $query;
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: ../siswa.php");
    } else {
        die("Gagal menyimpan perubahan");
    }
} else {
    die("Akses Ubah Dilarang");
}
?>