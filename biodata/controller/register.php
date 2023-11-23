<?php 
session_start();
include '../config/conn.php';

if (isset($_SESSION['nama'])) {
    header("Location: ../index.php");
    exit();
}

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $checkpassword = $_POST['checkpassword'];
    $role = $_POST['role'];
    if ($password == $checkpassword) {
        $query = "SELECT * FROM user WHERE username='$username'";
        
        // echo $query;
        // $result = mysqli_query($conn, $query);

        // echo $query;
        $result = mysqli_query($conn, $query);
        if (!$result -> num_rows > 0) {
            $query = "INSERT INTO user (nama, username, password) VALUES ('$nama', '$username', '$password')";
            //  echo $query;
            $result = mysqli_query($conn, $query);
        } if ($result){
            echo "<script>alert('Registrasi Berhasil')</script>";
            $nama = "";
            $email = "";
            $_POST['password']= "";
            $_POST['checkpassword'] = "";
            $role = "";
        }
        
    } else {
        echo "<script>alert('Password Salah')</script>";
    }
}

?>