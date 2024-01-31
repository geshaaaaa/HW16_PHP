<?php

require_once "Figure.php";
class Rectangle extends Figure
{
    private float|int $height;
    private float|int $weight;

    public function __construct(float|int $height,float|int $weight)
    {
        $this->setHeight($height);
        $this->setWeight($weight);
    }

    /**
     * @param int $height
     */
    public function setHeight(float|int $height): void
    {
        if ($height <= 0)
        {
            throw new Exception("Height cannot be zero and less than zero");
        }
        $this->height = $height;
    }

    /**
     * @param int $weight
     */
    public function setWeight(float|int $weight): void
    {
        if ($weight <= 0)
        {
            throw new Exception("Weight cannot be zero and less than zero");
        }

        $this->weight = $weight;
    }

    /**
     * @return int
     */
    public function getHeight(): float|int
    {
        return $this->height;
    }

    /**
     * @return int
     */
    public function getWeight(): float|int
    {
        return $this->weight;
    }
    protected function area() : float|int
    {
        $height = $this->getHeight();
        $weight = $this->getWeight();
        return $weight * $height;

    }

    protected function perimeter() : float|int
    {
        $height = $this->getHeight();
        $weight = $this->getWeight();
        return ($height + $weight) * 2;

    }


    public function getRectangleInfo(): void
    {
        echo "Висота: " . $this->getHeight() . PHP_EOL .
            "Ширина: " . $this->getWeight() . PHP_EOL .
            "Периметр: " . $this->perimeter() . PHP_EOL .
            "Площа: " . $this->area() . PHP_EOL ;
    }

}