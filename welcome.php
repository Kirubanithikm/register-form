<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="asset/style.css">
</head>

<body>
    <h1 class="welcome-page">Welcome <?php echo !empty($_SESSION['user_name']) ? $_SESSION['user_name'] : ''; ?></h1>
    <a href="logout.php">Logout</a>
</body>

</html>