<?php

# we can use the functions in another file by including them in our file
include_once "functions.php";
$radius=44.6;
$area=areaOfCircle($radius);
printf("the area of the circle is %f \n",$area);

echo defaultParamete();
// default parameter.
$food="Beer";
$quantity=3;
echo defaultParamete($food,$quantity);