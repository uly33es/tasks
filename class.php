<?php
class Car
{
    /*
     * $color - цвет автомобиля
     * $furl - кол-во топлива*/
    public $color;
    public $fuel;

    //Команда ехать
    public function go()
    {

    }
    //Команда поварачивать
    public function turn()
    {

    }
    //Команда остановиться
    public function stop()
    {

    }
}
$myCar = new Car();
$myCar->color = "red";
$myCar->fuel = 50;