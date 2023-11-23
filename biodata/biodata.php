<?php
 include 'config/conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Data Siswa</h1>
    </header>
    <nav>
       <a href="form_tambahSiswa.php"><button>[+] Tambah Siswa</button></a>
       <!-- <button href="form_tambahSiswa.php">[+] Tambah Siswa</button> -->
    </nav>
    <br>

    <table border="1" cellspading="10">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Hobi</th>
                <th>Cita cita</th>
                <th>Jumlah Saudara</th>
                <th>Id Kelas</th>
                <th>Id Agama</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $query = "SELECT * FROM siswa"; // syntax biasa
            // $query = "SELECT siswa.id, siswa.nama, siswa.tplahir, siswa.tglahir, siswa.alamat, siswa.hobi, siswa.cita_cita, siswa.jm_saudara, kelas.namakelas, agama.nm_agama
            // FROM ((siswa INNER JOIN kelas on siswa.idsiswa = kelas.id) INNER JOIN agama on siswa.idgama = agama.id)"; // syntax inner
            $result = mysqli_query($conn, $query);
            // echo $result;

            while ($siswa = mysqli_fetch_array($result)) {
                echo "<tr>";

                echo "<td>".$siswa['id']."</td>"; 
                echo "<td>".$siswa['nama']."</td>"; 
                echo "<td>".$siswa['tplahir']."</td>"; 
                echo "<td>".$siswa['tglahir']."</td>"; 
                echo "<td>".$siswa['alamat']."</td>"; 
                echo "<td>".$siswa['hobi']."</td>"; 
                echo "<td>".$siswa['cita_cita']."</td>"; 
                echo "<td>".$siswa['jm_saudara']."</td>"; 
                echo "<td>".$siswa['idkelas']."</td>"; 
                echo "<td>".$siswa['idagama']."</td>"; 

                echo "<td class='btn'>";
                echo "<a href='form_editSiswa.php?id=".$siswa['id']."'<button>EDIT</button></a> |";
                echo "<a href='controller/hapusSiswa.php?id=".$siswa['id']."'<button> HAPUS</button></a>";
                echo "</td>";

                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <?php if(isset($_GET['status'])): ?>
        <p>
            <?php
                if($_GET['status'] == "sukses"){
                    echo "tambah data berhasil";
                } else {
                    echo "tambah data gagal";
                }
            ?>
        </p>
        <?php endif; ?>
</body>
</html>