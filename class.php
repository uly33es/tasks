<?php
class Employee
{
    public $name;
    public $age;
    public $salary;
}
$employee = new Employee();
echo $employee->name = "john";
echo $employee->age = 25;
echo $employee->salary = 1000;

