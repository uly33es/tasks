<?php
abstract class User
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

}
/*$employee = new Employee();
$employee->setName("Igor");
$employee->setSalary(100000);
$employee->increaseRevenue(100);
echo $employee->getName()."-".$employee->getSalary()."\n";
*/
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
echo $student->getScholarship();
