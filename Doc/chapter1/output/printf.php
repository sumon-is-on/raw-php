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



    # VARIABLE SWAPING IN PRINTF()
    $n=5;
    $m=4;
    printf('number swaping %2d %1d',$n,$m);
    echo "\n";
    // for swaping the variable we need to place the specipiers by number and we can not use double quote .
    // we need to use it in the single quote.

    // we can swap the variable by this
    printf('the equvalent of %1$d is %1$b',12);
    echo "\n";
    // if we want to print the value of any decimal number to any decimal digit

    $n= 4.333333;
    printf('%.2f',$n); // here we wanted 2 digit after the decimal. 
    echo "\n";


    // if we wnat to print any number in  specific format 
    $n=44;
    printf("%08d",$n);
    echo "\n";

    // if we ant to print any number after some digit of decilam and also using some format 
    $n=4.333;
    printf("%06.2f",$n);
    echo "\n";

    // we can use any of php function with printf

    $myName="sumon";
    printf("My name is %s",strtoupper($myName));
    echo "\n";

    // if we wnat to return anything then we need to use sprintf
    $output=sprintf("My name is %s",$myName);
    echo $output; // here sprintf functions returns the value and then stores in the output variable.
                // tht means it returns the value in the output variable.
    echo "\n";
    echo strtoupper($output); // we can use any other functions to with the output.
?>
