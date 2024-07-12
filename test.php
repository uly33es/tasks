<?php
function summ($num1, $num2, $num3) {
    echo $num1 + $num2 + $num3;
}
//summ(1,45,-20);

function summ1($num1, $num2, $num3) {
    echo $num1 + $num2 + $num3;
}
$param1 = 1;
$param2 = 2;
$param3 = 3;
//summ1($param1, $param2, $param3);
/*function summ2($num) {
    return $num * $num * $num;
}
$res = summ2(3);
echo $res;*/

function summ3 ($num) {
    return $num * $num * $num;
}
$res = summ3(2) + summ3(3);
echo $res;