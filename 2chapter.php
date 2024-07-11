<?php
$arr = [1, -55, 2, 3, 1, 22, -11];
$sum = 0;
foreach ($arr as $element) {
    if ($element > 0) {
        $sum += $element;
    }
}
echo ($sum);
?>