<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>Register User</h1>
        </header>
        <div class="input">
            <form action="controller/register.php" method="post">

                <div class="input-group">
                    <label for="name">Nama:</label><br>
                    <input type="text" name="nama" required placeholder="Nama">
                </div> <br>
                <div class="input-group">
                    <label for="username">Username:</label><br>
                    <input type="text" name="username" required placeholder="Username">
                </div><br>
                <div class="input-group">
                    <label for="password">Password:</label><br>
                    <input type="text" name="password" required placeholder="Password">
                </div><br>
                <div class="input-group">
                    <label for="checkpassword">Confirm:</label><br>
                    <input type="text" name="checkpassword" required placeholder="Confirm Password">
                </div><br>
                <!-- ROLE -->
                <div class="input-group">
                    <select name="role" id="" reqired>
                        <option value="" disabled selected>Pilih Salah Satu Role</option>
                        <option value="admin">Administrator</option>
                        <option value="petugas">Petugas</option>
                        <option value="siswa">Siswa</option>
                    </select>
                </div><br>
                <div class="input-group">
                    <button name="submit" class="btn">Register</button>
                </div>
                <p>Sudah Punya Akun? <a href="index.php">Login</a></p>
            </form>
        </div>
    </div>
</body>
</html>