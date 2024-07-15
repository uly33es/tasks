<?php
function Days_if_the_week($day) {
    switch ($day) {
        case 1:
            echo "Понедельник";
            break;
        case 2:
            echo "Вторник";
            break;
        case 3:
            echo "Среда";
            break;
        case 4:
            echo "Четверг";
            break;
        case 5:
            echo "Пятница";
            break;
        case 6:
            echo "Суббота";
            break;
        case 7:
            echo "Воскресенье";
            break;
        default:
            echo "Не существует такой день недели";
            break;
    }
}
Days_if_the_week(5);