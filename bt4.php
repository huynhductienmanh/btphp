<?php

$number = 1990;
$middle = null;
switch($number){
    case 1990 :
       $middle = $number % 7 ;
       switch ($middle){
        case 0 :
            echo " chia het cho 7";
            break;
        default :
            echo "0 chia het cho 7";
            break;
       }
       break;
    default: 
        break;
}

?>