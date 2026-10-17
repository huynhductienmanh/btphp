<?php
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email)) {
        echo "Vui long nhap email";
    }

    if (empty($password)) {
        echo "Vui long nhap password";
    }
    if (!empty($email) && !empty($password)) {

        if (isset($_SESSION['email']) && isset($_SESSION['password'])) {

            if (
                $email == $_SESSION['email'] &&
                $password == $_SESSION['password']
            ) {
                echo "Login thanh cong";
            } else {
                echo "Login that bai";
            }

        } else {
            echo "Chua co tai khoan dang ky";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

    <h2>Dang nhap</h2>

    <form method="POST">
        <label>Email:</label>
        <input type="email" name="email">

        <br><br>

        <label>Password:</label>
        <input type="password" name="password">

        <br><br>

        <button type="submit" name="login">
            Login
        </button>
    </form>

</body>
</html>