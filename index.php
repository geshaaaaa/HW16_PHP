<?php

require_once "Classes/Rectangle.php";
require_once "Classes/Circle.php";

try {
    $rectangle = new Rectangle(4,5);
    $rectangle->getRectangleInfo();
    $circle = new Circle(2);
    $circle->getCircleInfo();
}
catch (Exception $exception)
{
    $exception->getMessage();
}


