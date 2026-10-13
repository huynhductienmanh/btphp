<?php
// for($i = 0 ; $i<101 ; $i++){
//     if($i % 2 == 0){
//         echo $i . "<br>";
//     }
// }


// $array = [
//     1, 23, 32, 5, 43, 321, 312, 352, 2, 13, 153, 21, 32, 1
// ];
// $max = 0;
// $vitri = 0;
// for ($i = 0 ;$i< count($array) ; $i++){
//     if($array[$i]> $max){
//         $max = $array[$i];
//         $vitri = $i;
//     }
// }
// echo $max . "<br>";

// echo $vitri;





// $name = "Nguyễn Văn Cường";

// for ($i=0 ; $i < strlen($name) ; $i++){
//     echo $name[$i] . "<br>";
// }





// $number = 10;
// $sum = 1;
// for ($i=2 ; $i<= $number; $i++ ){
//      $sum = $sum + 1/$i;
// }

// echo $sum;




// $number = 10;
// $x = 1;
// $s=0;
// for ($i = 2 ; $i<=$number ;$i++){
//     if ($i % 2 == 0){
//         $s = $s + ($x*$i);
//     }
// }
// echo $s;



// for ($i = 1; $i <= 100; $i += 2) {
//     echo $i . "<br>";
// }





// $students = array(
//     array(
//         'name' => 'Nguyễn Văn Cường 1',
//         'email' => 'thehalfheart1@gmail.com',
//         'age' => '29'
//     ),
//     array(
//         'name' => 'Nguyễn Văn Cường 2',
//         'email' => 'thehalfheart2@gmail.com',
//         'age' => '29'
//     ),
//     array(
//         'name' => 'Nguyễn Văn Cường 3',
//         'email' => 'thehalfheart3@gmail.com',
//         'age' => '29'
//     ),
//     array(
//         'name' => 'Nguyễn Văn Cường 4',
//         'email' => 'thehalfheart4@gmail.com',
//         'age' => '29'
//     ),
//     array(
//         'name' => 'Nguyễn Văn Cường 5',
//         'email' => 'thehalfheart5@gmail.com',
//         'age' => '29'
//     ),
//     array(
//         'name' => 'Nguyễn Văn Cường 6',
//         'email' => 'thehalfheart6@gmail.com',
//         'age' => '29'
//     )
// );

// echo "<table border='1'>";

// echo "<thead>";
// echo "<tr>";
// echo "<th>Name</th>";
// echo "<th>Email</th>";
// echo "<th>Age</th>";
// echo "</tr>";
// echo "</thead>";

// echo "<tbody>";

// for ($i = 0; $i < count($students); $i++) {
//     echo "<tr>";
//     echo "<td>" . $students[$i]['name'] . "</td>";
//     echo "<td>" . $students[$i]['email'] . "</td>";
//     echo "<td>" . $students[$i]['age'] . "</td>";
//     echo "</tr>";
// }

// echo "</tbody>";
// echo "</table>";

?>


<?php

$students = array(
    array(
        'name' => 'Nguyễn Văn Cường 1',
        'email' => 'thehalfheart1@gmail.com',
        'age' => '29'
    ),
    array(
        'name' => 'Nguyễn Văn Cường 2',
        'email' => 'thehalfheart2@gmail.com',
        'age' => '29'
    ),
    array(
        'name' => 'Nguyễn Văn Cường 3',
        'email' => 'thehalfheart3@gmail.com',
        'age' => '29'
    ),
    array(
        'name' => 'Nguyễn Văn Cường 4',
        'email' => 'thehalfheart4@gmail.com',
        'age' => '29'
    ),
    array(
        'name' => 'Nguyễn Văn Cường 5',
        'email' => 'thehalfheart5@gmail.com',
        'age' => '29'
    ),
    array(
        'name' => 'Nguyễn Văn Cường 6',
        'email' => 'thehalfheart6@gmail.com',
        'age' => '29'
    )
);

$html = "";
// for ($i = 0 ; $i< count($students) ; $i++){
//     $html .= "<tr>" .
//             "<td>" . $students[$i]['name'] . "</td>" .
//             "<td>" . $students[$i]['email'] . "</td>" .
//             "<td>" . $students[$i]['age'] . "</td>" .
//             "</tr>";
// }


foreach($students as $students){
    $html .= "<tr>" .
            "<td>" . $student['name'] . "</td>" .
            "<td>" . $student['email'] . "</td>" .
            "<td>" . $student['age'] . "</td>" .
            "</tr>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<table border="1">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <?php echo $html; ?>
        </tbody>
    </table>
</body>
</html>




