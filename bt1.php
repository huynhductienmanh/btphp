<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>bt1</title>
</head>
<body>
    <!-- <form action="" method="POST">
        <label for="number">nhap 1 so :</label>
        <input type="number" id="number" name="number" required>
        <button type="submit" name="submit">Kiem tra</button>
    </form> -->

    <!-- <form action="" method="POST">
        <label for="number">nhap diem toan li hoa :</label>
        <input type="number" id="number" name="number1" required>
        <input type="number" id="number" name="number2" required>
        <input type="number" id="number" name="number3" required>
        <button type="submit1" name="submit1">Kiem tra</button>
        
    </form> -->

    <form action="" method="POST">
        <label for="number">nhap diem toan li hoa anh van su  :</label>
        <input type="number" id="number" name="toan" required>
        <input type="number" id="number" name="ly" required>
        <input type="number" id="number" name="hoa" required>
        <input type="number" id="number" name="anh" required>
        <input type="number" id="number" name="van" required>
        <input type="number" id="number" name="su" required>
        <button type="submit1" name="submit1">Kiem tra</button>
        
    </form>

    <br>

    <?php
    // if (isset($_POST['submit'])) {

    //     if ($_POST['number'] % 7 == 0) {
    //         echo "chia het cho 7";
    //     } else {
    //         echo "0 chia het cho 7";
    //     }
    // }

    // if(isset($_POST['submit1'])){
    //     if($_POST['number1'] + $_POST['number2'] + $_POST['number3'] >=15 ){
    //         echo "dau";
    //     }else if($_POST['number1'] == 1 || $_POST['number2'] == 1 || $_POST['number3'] == 1) {
    //         echo "rot";
    //     }else{
    //         echo "";
    //     }
    // }

    if(isset($_POST['submit1'])){
        $toan = $_POST['toan'];
        $ly   = $_POST['ly'];
        $hoa  = $_POST['hoa'];
        $anh  = $_POST['anh'];
        $van  = $_POST['van'];
        $su   = $_POST['su'];
        $dtb = ($toan+$ly+$hoa+$anh+$van+$su)/6;

        if ($toan < 0 || $toan > 10 || $ly < 0 || $ly > 10 || $hoa < 0 || $hoa > 10 || 
            $anh < 0 || $anh > 10 || $van < 0 || $van > 10 || $su < 0 || $su > 10) {
            echo "diem phai tu 0 toi 10";
        }else if ($toan < 4 || $ly < 4 || $hoa < 4 || $anh < 4 || $van < 4 || $su < 4) {
            echo "hoc sinh yeu"; 
        }else if ($dtb < 5) {
            echo "hs yeu";
        }else if ($dtb <= 6.4) {
            echo "hs tb";
        }else if ($dtb <= 7.9) {
            echo "hs kha";
        }else {
            echo "hs gioi";
        }

    }
    ?>

</body>
</html>