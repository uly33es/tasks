<?php
class Student
{
    private $name;
    private $course;

    public function __construct($name)
    {
        $this->name = $name;
        $this->course = 1;
    }
    //Getter name
    public function getName()
    {
        return $this->name;
    }
    //Getter couurse
    public function getCourse()
    {
        return $this->course;
    }
    //Перевод студента на новый курс
    public function transferToNextCourse()
    {
        if ($this->course <= 4) {
            $this->course++;
        }
    }
}
$student = new Student('Igor');
echo $student->getCourse();
$student->transferToNextCourse();
echo $student->getCourse();
$student->transferToNextCourse();
echo $student->getCourse();
$student->transferToNextCourse();
echo $student->getCourse();
$student->transferToNextCourse();
echo $student->getCourse();
