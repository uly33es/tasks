<?php
trait Helper
{
    private $name;
    private $age;

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}
class Country
{
    public $population;
    public function getPopulation()
    {
        return $this->population;
    }
    use Helper;

    public function __construct($population, $name, $age)
    {
        $this->population = $population;
        $this->name = $name;
        $this->age = $age;
    }


}
$country = new Country(10000,"Yfa", 1955);
echo $country->getName()."\n";
echo $country->getAge()."\n";
echo $country->getPopulation();