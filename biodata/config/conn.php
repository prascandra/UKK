<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "biodata";

$conn = mysqli_connect($server, $user, $password, $db);
if (!$conn) {
    die ("koneksi ke databases gagal: " .mysqli_connect_error());
}
?>