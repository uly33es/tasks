<?php
class Employee
{
    public $name;
    public $age;
    public $salary;
}
$employee1 = new Employee();
echo $employee1->name = "john";
echo $employee1->age = 25;
echo $employee1->salary = 1000;
$employee2 = new Employee();
echo $employee2->name = "eric";
echo $employee2->age = 26;
echo $employee2->salary = 2000;
