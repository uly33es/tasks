<?php
class Employee
{
    public $name;
    public $age;
    public $salary;
    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getSalary()
    {
        return $this->salary;
    }
    public function checkAge()
    {
        return ($this->age >= 18)?true:false;
    }
    public function setAge(int $age): void
    {
        if ($age >= 18) {
            $this->age = $age;
        }
    }
    public function doubleSalary(){
        return $this->salary * 2;
    }
}
$user1 = new Employee();
$user1->name = "john";
$user1->age = 25;
$user1->salary = 1000;
$user2 = new Employee();
$user2->name = "eric";
$user2->age = 26;
$user2->salary = 2000;

/*echo $user1->getName();
echo $user1->getAge()."\n";
echo $user1->getSalary() + $user2->getSalary()."\n";
echo $user2->checkAge();*/
$user1->setAge(27);
echo $user1->doubleSalary()."\n";
echo $user1->age;