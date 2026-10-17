<?php
session_start();

if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email)) {
        echo "Vui long nhap email";
    }

    if (empty($password)) {
        echo "Vui long nhap password";
    }

    if (!empty($email) && !empty($password)) {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;

        echo "Dang ky thanh cong";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label>Email:</label>
        <input type="email" name="email">

        <br><br>

        <label>Password:</label>
        <input type="password" name="password">

        <br><br>

        <button type="submit" name="register">
            Register
        </button>
    </form>
</body>
</html>