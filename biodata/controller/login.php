<?php
session_start();
include '../config/conn.php';

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    // echo $sql;
    $result = mysqli_query($conn, $sql);
    
    if ($result -> num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['nama'] = $row['nama'];
        header("Location: ../dashboard.php");
        exit();
    } else {
         echo "<script>alert('Email / Password salah, Coba Lagi!')</script>";
    }

}
?>