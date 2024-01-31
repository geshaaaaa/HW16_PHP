<?php

require_once "Figure.php";
class Circle extends Figure
{
    private float|int $radius;
    public function __construct(float|int $radius)
    {
           $this->setRadius($radius);
    }

    /**
     * @param int $radius
     */
    public function setRadius(int $radius): void
    {
        if ($radius <= 0)
        {
            throw new Exception("Radius cannot be 0 or less than 0");
        }
        $this->radius = $radius;
    }

    /**
     * @return int
     */
    public function getRadius(): float|int
    {
        return $this->radius;
    }

    protected function area() : float|int
    {
        $radius = $this->getRadius();
        return M_PI * pow($radius,2 );
    }

    protected function perimeter() : float|int
    {
        $radius = $this->getRadius();
       return  2 * M_PI * $radius;
    }

    public function getCircleInfo() : void
    {
        echo "Радіус: " . $this->getRadius() . PHP_EOL .
            "Периметр: " . $this->perimeter() . PHP_EOL .
            "Площа: " . $this->area() . PHP_EOL ;
    }

}