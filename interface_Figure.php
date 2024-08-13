<?php
interface Figure
{
    public function getSquare();
    public function getPerimeter();
}

class Disk implements Figure
{
    private $r;
    public function __construct($r)
    {
        $this->r = $r;
    }
    public function getSquare()
    {
        return M_PI * pow($this->r, 2);
    }
    public function getPerimeter()
    {
        return 2 * M_PI * $this->r;
    }
}
$disk= new Disk(5);
echo $disk->getSquare()."\n";
echo $disk->getPerimeter();