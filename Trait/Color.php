<?php

trait Color
{

    public function setShapeColor($color)
    {
        $this->color = $color;
    }
    public function getShapeColor()
    {
        echo static::class . " має " . $this->color . " колір " . PHP_EOL;
    }

}