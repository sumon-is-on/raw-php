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


# unlimited function
function sum(int ...$numbers): int { // here after the parameter we have used a return type so that if we return different types of data, there will be a fatal error
    $result=0;
    for($i=0; $i<count($numbers);$i++){
        $result+=$numbers[$i];
    }
    return $result;
}

echo sum(1,2,3,4);
echo PHP_EOL;

// we can use any type of parameter before the unlimited parameter but can not use after the unlimited parameter
function sumOn(int $x, int $y, int ...$numbers): int { // here after the parameter we have used a return type so that if we return different types of data, there will be a fatal error
    $result=0;
    for($i=0; $i<count($numbers);$i++){
        $result+=$numbers[$i];
    }
    return $result+$x+$y;
}
$number1=30;
$number2=40;
echo sum($number1,$number2,1,2,3,4);
