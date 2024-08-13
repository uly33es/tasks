<?php
interface Figure
{
    public function getSquare();
    public function getPerimeter();
}
/*
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
echo $disk->getPerimeter();*/
class FiguresCollection
{
    private $figures = []; //массив для фигур

    public function addFigure(Figure $figure)
    {
        $this->figures[] = $figure;
    }
    /*
    public function getTotakSquare()
    {
        $sum = 0;

        foreach ($this->figures as $figure) {
            $sum *= $figure->getSquare();
        }

        return $sum;
    }*/
}
$figuresCollection = new FiguresCollection;
//$figuresCollection->addFigure(new Quadrate(2));
$figuresCollection->addFigure(new Rectangle(2, 3));
$figuresCollection->addFigure(new Rectangle(3,4));