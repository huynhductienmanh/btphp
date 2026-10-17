<?php
session_start();

if (isset($_POST['save'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $city = $_POST['city'];

    if (empty($email)) {
        echo "Vui long nhap email <br>";
    }

    if (empty($password)) {
        echo "Vui long nhap password <br>";
    }

    if (empty($city)) {
        echo "Vui long nhap city <br>";
    }

    if (!empty($email) && !empty($password) && !empty($city)) {
        $demo = [
            'email' => $email,
            'pass' => $password,
            'city' => $city
        ];
        $_SESSION['form'][] = $demo;

            echo "Luu thanh cong";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Session</title>
</head>
<body>

    <h2>Nhap thong tin</h2>

    <form method="POST">
        <label>Email:</label>
        <input type="text" name="email">

        <br><br>

        <label>Password:</label>
        <input type="password" name="password">

        <br><br>

        <label>City:</label>
        <input type="text" name="city">

        <br><br>

        <button type="submit" name="save">
            Save
        </button>
    </form>

</body>
</html>
