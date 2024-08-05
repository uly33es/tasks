<?php
class Employee
{
    private $name;
    private $age;
    private $salary;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        return $this->name = $name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function setAge($age)
    {
        if ($this->isAgeCorrector($age)) {
            $this->age = $age;
        }
    }
    private function isAgeCorrector($age)
    {
        return $age >= 1 and $age <= 100;
    }
    public function getSalary()
    {
      return $this->setSalary()."$";
    }
    public function setSalary()
    {
        return $this->salary;
    }
}
$User = new Employee('Igor', 21, 100000);
echo $User->getName()."\n";
echo $User->setName("Angelina")."\n";
$User->setAge(101);
echo $User->getAge()."\n";
echo $User->getSalary();
