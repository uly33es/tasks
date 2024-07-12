<?php
/*function summ($num1, $num2, $num3) {
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
function summ2($num) {
    return $num * $num * $num;
}
$res = summ2(3);
echo $res;

function summ3 ($num) {
    return $num * $num * $num;
}
$res = summ3(2) + summ3(3);
echo $res;
function num($a) {
    $counter = 0;
    while (true)
        if ($a / 2 > 10) {
        $counter +=1;
        echo $counter;
        break;
        } else {
        echo "---";
        }
}
num (60);
function func($num1, $num2) {
    $result = ($num1 > 0 and $num2 > 0)?($num1 * $num2):($num1 - $num2);
    echo $result;
}
echo func(3, 4);
function check_array ($arr) {
    $lenght = count($arr);
    for ($i = 0; $i <= $lenght; $i++){
        $element = $arr[$i];
        if ($element % 2 == 0) {
            echo $arr[$i] . "\n";
        }
    }
}
$res = check_array([1, 5, 4, 6, 7, 11]);

function func($a, $b) {
    return ($a === $b);
}
function func1($a, $b) {
    return ($a != $b);
}
//6 задача
function second($c) {
    $day = $c / 86400;
    echo $day . " суток";
}
second(60);*/
function year($param) {
    echo $param % 4 === 0
        ? "Високосный"
        : "Не високосный";
}
year(2024);