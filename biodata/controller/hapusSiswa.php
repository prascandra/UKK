<?php 
include '../config/conn.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM siswa WHERE id='$id'";
    // echo $query;
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: ../biodata.php");
    } else {
        die("Data Gagal Dihapus");
    }
} else {
    die("Akses Hapus Dilarang");
}
?>