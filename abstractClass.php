<?php
/*abstract class User
{
    private $name;
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    //Абстраутный метод без тела:
    abstract public function increaseRevenue($value);
}

class Employee extends User
{
    private $salary;
    public function getSalary()
    {
        return $this->salary;
    }
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
    public function increaseRevenue($value)
    {
        $this->salary = $this->salary + $value;
    }

}*/
/*$employee = new Employee();
$employee->setName("Igor");
$employee->setSalary(100000);
$employee->increaseRevenue(100);
echo $employee->getName()."-".$employee->getSalary()."\n";
*/
/*
class Student
{
    private $scholarship; //стипендия
    public function getScholarship()
    {
        return $this->scholarship;
    }
    public function setScholarship($scolarship)
    {
        $this->scholarship = $scolarship;
    }

    public function increaseRevenue($value)
    {
        $this->scholarship = $this->scholarship + $value;
    }
}
$student = new Student();
$student->setScholarship(4500);
$student->increaseRevenue(1000);
echo $student->getScholarship();*/

abstract class Figure
{
    abstract public function getSquare();
    abstract public function getPerimeter();
    public function getSquarePerimeterSum()
    {
        return $this->getPerimeter() + $this->getSquare();
    }
}
class Rectangle extends Figure
{
    private $a;
    private $b;
    public function __construct($a, $b)
    {
        $this-> a = $a;
        $this-> b = $b;
    }
    public function getSquare()
    {
        return $this->a * $this->b;
    }
    public function getPerimeter()
    {
        return ($this->a + $this->b) * 2;
    }

}
$rectangle = new Rectangle(2,5);
echo $rectangle->getSquare()."\n";
echo $rectangle->getPerimeter()."\n";
echo $rectangle->getSquarePerimeterSum();