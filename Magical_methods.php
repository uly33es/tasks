<?php
class User
{
    private $name;
    private $surname;
    private $patronymic;

    public function __construct($name, $surname, $patronymic)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->patronymic = $patronymic;
    }
    public function __toString(): string
    {
        return $this->name . "\n". $this->surname . "\n". $this->patronymic;
    }
}
$user = new User("angelina", "chihinbaeva", "vadimovna");
echo $user;