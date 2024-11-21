<?php
session_start();

if ($_SESSION['role'] != 'user') {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="welcome-container">
        <h1>Hallo User, Selamat datang!</h1>
        <form action="logout.php" method="POST">
            <button type="submit">Logout</button>
        </form>
        </form>
    </div>
</body>
</html>

