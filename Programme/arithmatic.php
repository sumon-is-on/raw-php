<?php
// Arithmatic operation in php 
// Arithmatic operators 
//  + - / * %

$number1= 30;
$number2=5;
//  addition 
    $result=$number1+$number2;
    printf("the result in decimal is %d\n, in octal is %o\n, in binary is %b\n"
    ,$result, $result,$result);

    // multiplication 
    $result=$number1*$number2;
    printf("the result in decimal is %d\n, in octal is %o\n, in binary is %b\n"
    ,$result, $result,$result);

    // division
    $result=$number1/$number2;
    printf("the result in decimal is %d\n, in octal is %o\n, in binary is %b\n"
    ,$result, $result,$result);

    // subtraction
    $result=$number1-$number2;
    printf("the result in decimal is %d\n, in octal is %o\n, in binary is %b\n"
    ,$result, $result,$result);

    // her we have printed the outputs in various data types. 


    // now lets talk about the assignment operator 
     //   ++ -- += -= /= *= %=

    // case 1: 
        $number1= 13;
        $number1+=3; // it means $number = $number+3;
        printf("the result in decimal is %d\n, in octal is %o\n, in binary is %b\n"
    ,$number1,$number1,$number1);
        
    //case 2;
     $number1= 13;
        $number1 -=3; // it means $number = $number+3;
        printf("the result in decimal is %d\n, in octal is %o\n, in binary is %b\n"
    ,$number1,$number1,$number1);
    
    //case 3
    $number1= 13;
    $number1 /=3; // it means $number = $number+3;
    printf("the result in decimal is %d\n, in octal is %o\n, in binary is %b\n"
    ,$number1,$number1,$number1);       

    //case 4
    $number1= 13;
    $number1 *=3; // it means $number = $number+3;
    printf("the result in decimal is %d\n, in octal is %o\n, in binary is %b\n"
    ,$number1,$number1,$number1);       

    //case 5
    $number1= 13;
    $number1 %=3; // it means $number = $number+3;
    printf("the result in decimal is %d\n, in octal is %o\n, in binary is %b\n"
    ,$number1,$number1,$number1);   
    
    
    // now lets talk about the most important assignment operator in php 
    // ++ --

    $number1= 14;
    ++$number1; // value of $number 1 is increased by 1.
    $number1++; // value of $number 1 is increased by 1.
    printf("the result in decimal is %d\n, in octal is %o\n, in binary is %b\n"
    ,$number1,$number1,$number1);

    $number1= 14;
    $number1--; // value of $number 1 is decreased by 1.
    --$number1;// value of $number 1 is decreased by 1.
    printf("the result in decimal is %d\n, in octal is %o\n, in binary is %b\n"
    ,$number1,$number1,$number1);


    // another thing 
    $number1=30;
    $number2=++$number1;
    printf("value of number 1 is %d \n and value of number 2 is %d \n",$number1,$number2);
        /* here the value of number 1 was 30. and when number 2 was assigned the value of number 1 it only 
        got the value of number 1 and then the value if number 1 increased*/ 

    // another thing 
    $number1=30;
    $number2=$number1++;
    printf("value of number 1 is %d \n and value of number 2 is %d \n",$number1,$number2);
         /* here the value of number 1 was 30. and when number 2 was assigned the value of number 1 it  increases the value of number 1 and assigned to number 2. so bith of the variables got same number*/ 

        
?>