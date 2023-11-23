<?php 
session_start();
if (!isset($_SESSION['nama'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div class="logout-container">
        <form action="controller/logout.php" method="post" class="login-username":>
            <h1>Welcome, <?php echo $_SESSION['nama']; ?></h1>
            <div class="input-group">
                <button type="submit">LOGOUT</button>
            </div>
        </form>
    </div>
</body>
</html>