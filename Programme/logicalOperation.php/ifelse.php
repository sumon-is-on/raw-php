<?php
#logical operator
/*  ==
    !=
    >
    <
    <=
    >=
    &&
    ||
*/
// if else 
    // if else basically used for conditional operations.

    // problem 1
    // for example, we wnat to know wheather a number is eve or odd
    $number=13;
    if($number % 2 ==0){
        printf("%d is an even numer\n",$number);
    }else{
        printf("%d is an odd numer\n",$number);
    }

    // problem 2
    // 

    $food="apple";
    if("orange"==$food || "apple"==$food){ // here we have compared a static value in a variable which worls fine. but if we had assigned a static value to a variable then it would throw an error. but comparing this way is a good practice so that we can avoid logical syntax error.
        printf("%s is a fruit\n",$food);
    }else{
        printf("we don't know about it\n");
    }

    // so this is how we basically do the conditional operation using the logical operator.

    // let's got through the following code
    if(true && false){
        echo "hello \n"; // this is checking that both side have the same value or not
    }
    if(true || false){
        echo "hello \n"; // this is checking that any side has the  value 
    }
    if(true && true){
        echo "hello \n"; // this is checking that both side is true
    }
    if(false && false){
        echo "hello \n"; // this is checking that both side is flase
    }

    // now let's do an operation to find out wheather a year is leap year or not
        // checking a leap year we need to go through some condition
        //  year % 4 == 0;
        //  year % 100 == 0;
        //  year % 400 == 0;

    $year= 2001;
    if($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0){
        printf("%d is a leap year\n",$year);
    }elseif($year % 4 == 0 && $year % 100 == 0){
        printf("%d is not a leap year\n",$year); 
    }elseif($year % 4 == 0){
        printf("%d is a leap year\n",$year);
    }else{
        printf("%d is not a leap year\n",$year); 
    }
    // this is how we can find out wheather a year is a leap year or not. though this code is more readable and works fine, we can change it bit and can do the same operation by less statements. let's see

    // $year=2000;
    if($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)){
        printf("%d is a leap year",$year);
    }else{
        printf("%d is not a leap year\n",$year); 
    }
    