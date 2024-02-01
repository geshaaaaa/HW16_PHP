<?php

require_once "Classes/Rectangle.php";
require_once "Classes/Circle.php";


try {
    $rectangle = new Rectangle(4,5);
    $rectangle->getRectangleInfo();
    $rectangle->setShapeColor("Червоний");
    $rectangle->getShapeColor();
    $circle = new Circle(2);
    $circle->getCircleInfo();
    $circle->setShapeColor("Синій");
    $circle->getShapeColor();
}
catch (Exception $exception)
{
    $exception->getMessage();
}


