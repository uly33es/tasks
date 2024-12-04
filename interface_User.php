<?php
interface iUser
{
    public function setName($name);//установка имени
    public function getName();//получить имя
    public function setAge($age);//установить возраст
    public function getAge();//получить возраст
}
class User implements iUser
{
    private $name;
    private $age;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
    public function getAge()
    {
        return $this->age;
    }
}
$user = new User('Angelina', 20);
echo $user->getName()."\n";
$user->setName('Igor');
echo $user->getName()."\n";
echo $user->getAge()."\n";