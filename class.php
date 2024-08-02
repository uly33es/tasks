<?php
/*class Employee
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

echo $user1->getName();
echo $user1->getAge()."\n";
echo $user1->getSalary() + $user2->getSalary()."\n";
echo $user2->checkAge();
$user1->setAge(27);
echo $user1->doubleSalary()."\n";
echo $user1->age;*/

/*class Rectangle
{
   public $widht;
   public $length;

   //Метод нахождения площади
    public function getSquare()
    {
        return $this->widht * $this->length;
    }
    //Метод нахождения периметра
    public function getPerimeter()
    {
        return ($this->widht + $this->length) * 2;
    }
}
$param = new Rectangle();
$param->length = 10;
$param->widht = 2;
echo $param->getSquare()."\n";
echo $param->getPerimeter();*/
class User
{
    public $name;
    public $age;

    //Метод проверки возраста
    public function isAgeCorrect($age)
    {
        if ($age >= 18 and $age <= 60) {
            return true;
        } else {
            return false;
        }
    }
    //Метод для изменения возроста User
    public function setAge($age)
    {
        //Проверка возроста на корректность
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }
    //Метод для уменьшения возроста
    public function addAge($years)
    {
        $newAge = $this->age - $years;

        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge;
        }
    }
}
$user = new User();
$user->setAge(30);
echo $user->age."\n";
$user->addAge(10);
echo $user->age;