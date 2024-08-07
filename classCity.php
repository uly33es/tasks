<?php
class City
{
    public $name;
    public $population;
    public function __construct($name, $population)
    {
     $this->name = $name;
     $this->population = $population;
    }
}
$city = [
    new City("London", 10000),
    new City("Yfa", 2500000),
    new City("Davlekanovo", 60000),
    new City("Ishimbai", 50541)
];
//Переборка созданного массива циклом:
foreach ($city as $citys) {
    echo $citys->name . '-' . $citys->population ."\n";
}
//var_dump($city);