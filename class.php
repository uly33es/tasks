<?php
class Employee
{
    private $name;
    private $age;
    private $salary;
    /*    public function getName()
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

    public function __construct($name, $age, $salary)
    {
        $this -> name = $name;
        $this -> age = $age;
        $this -> salary = $salary;
    }

}

$user = new Employee("eric", 25, 1000);

/*echo $user->name."\n";
echo $user->age."\n";
echo $user->salary."\n";
$user2 = new Employee("kyle", 30, 2000);
echo $user2->name."\n";
echo $user2->age."\n";
echo $user2->salary."\n";
echo $user->salary + $user2->salary;*/
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
/*
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
echo $user->age;*/
/*
class Student
{
    public $name;
    public $course;

    public function transferToNextCours($course)
    {
        if ($this->isCourseCorrect($course)) {
            return $this->course + 1;
        }
    }
    private function isCourseCorrect() {
        return $this->course >= 1 and $this->course <= 4;
    }
}
$student = new Student();
$student->course = 2;
echo $student->transferToNextCours(2);*/