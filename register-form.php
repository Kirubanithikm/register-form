<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="asset/style.css">
</head>

<body>
    <h2>Register</h2>
    <form action="register.php" method="post">
        <label for="user_name">Username:</label>
        <input type="text" name="user_name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="phone_number">Phone Number:</label>
        <input type="number" name="phone_number" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <label for="conform_password">Conform Password:</label>
        <input type="password" name="conform_password" required><br>

        <input type="submit" value="Register">
    </form>
    <a href="login-form.php">Do you already have an account?</a>
</body>

</html>