<?php
session_start();

$data = $_SESSION['form'] ?? [];

$rows = "";

foreach ($data as $item) {
    $rows .= "<tr>";
    $rows .= "<td>" . htmlspecialchars($item['email']) . "</td>";
    $rows .= "<td>" . htmlspecialchars($item['pass']) . "</td>";
    $rows .= "<td>" . htmlspecialchars($item['city']) . "</td>";
    $rows .= "</tr>";
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
    <table border="1">
        <tr>
            <th>Email</th>
            <th>Password</th>
            <th>City</th>
        </tr>
        <?php echo $rows; ?>
    </table>
</body>
</html>