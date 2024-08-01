<?php
class Employee
{
    public $name;
    public $age;
    public $salary;
}
$employee1 = new Employee();
echo $employee1->name = "john \n";
echo $employee1->age = 25,"\n";
echo $employee1->salary = 1000,"\n";
$employee2 = new Employee();
echo $employee2->name = "eric \n";
echo $employee2->age = 26,"\n";
echo $employee2->salary = 2000,"\n";
echo $employee1->salary + $employee2->salary;
