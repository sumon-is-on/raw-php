<?php
// ternary operator
// even odd

$number=13;
$result=($number%2==0)?"even":"odd";
// variable = (condition) ? (value if condition is true):(value if condition is false)
echo $result;
echo "\n";

// we can use as amany as condition in ternary operator

$number=11;
$result=($number==10)?"ten":(($number==12)? "twelve":(($number==13)?"Thirteen":"other number"));
// here we have used multiple condition in the ternary operator. when the first condition is false it will got to print value when condition is false. if we write another condition in false block it will be executed but need to use parenthesis to separate them.
echo $result;