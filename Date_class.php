<?php
class Date
{
    /**
     * @param int $day
     * @param int $month
     * @param int $year
     */
    public function __construct(int $day, int $month, int $year)
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

    /**
     * @return void
     */
    public function getDay ()
    {
        return $this->day;
    }

    /**
     * @param $lang
     * @return void
     * возвращает месяц
     * переменная $lang может принимать
     * значение ru или en
     * если эта не пуста - пусть месяц
     * будет словом на заданном языке
     */
    public function getMonth($lang = null)
    {
        return $this->month;
    }

    /**
     * @return void
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * возвращает день недели
     * переменная $lang может принимать значение ru или en
     * если эта не пуста - пусть день будет словом на заданном языке
     * @param $lang
     * @return void
     *
     */
    public function getWeekDay($lang = null)
    {
        $the_date = "2024-08-21";
        $name_of_the_day = date('l', strtotime($the_date));
        echo $name_of_the_day;



    }

    /**
     * @param $value
     * @return void
     */
    public function addDay($value)
    {

    }

    /**
     * @param $value
     * @return void
     */
    public function subDay($value)
    {

    }

    /**
     * @param $value
     * @return void
     */
    public function addMonth($value)
    {

    }

    /**
     * @param $value
     * @return void
     */
    public function subMonth($value)
    {

    }

    /**
     * @param $value
     * @return void
     */
    public function addYear($value)
    {

    }

    /**
     * @param $value
     * @return void
     */
    public function subYear($value)
    {

    }

    /**
     * @param $format
     * @return void
     */
    public function format($format)
    {

    }

    /**
     * @return void
     */
    /*public function __toString()
    {

    }*/
}
$date = new Date(5,8,2024);
echo $date->getDay()."\n";
echo $date->getMonth()."\n";
echo $date->getWeekDay();