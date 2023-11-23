<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <div class="container">
        <div class="rectangle">
            <form action="controller/login.php" method="post">
                <h2>LOGIN</h2>
                <div class="input-group">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="" required>
                </div>
                <div class="input-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="" required>
                </div>
                <div class="input-group">
                    <button type="submit" name="submit">SUBMIT</button>
                </div>
                <p>Anda belum punya akun? <a href="registerView.php">REGISTER</a></p>
            </form>
        </div>
    </div>
</body>
</html>