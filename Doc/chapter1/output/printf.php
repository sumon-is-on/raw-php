<?php
/*
In php we can print out any data by the printf function. 
let's go through the code.
*/
$number1=9;
$myName="sumon";
$number2=10;
# now we will print these two variable inside the printf function
printf("My name is %s and my age is %d \n",$myName, $number1,$number2 );
    /*here  in the printf function we have used two format specifiers which wre %s and %d.
     %s expexts a variable which consists of type string and %d expects a variable which consists of a type int.
     like these we can use asa many as identifiers in the printf function. but we need to pass the arguments. 
     the first format specifier will take the first agrugemt and this sequence continues.
     If we define multiple format identifies we can not pass less argument.
     if we define less specifier but pass many arguments , it will not thorw any error.
     */
printf(" the octal value of %d is %o",0200000, 0200000);
//  here , the %d specifier is expecting a decimal type value and %o is expecting an octal value.
//  but when we pass the octal value the %d has converted the octal value in the decimal and shows the output.

?>
