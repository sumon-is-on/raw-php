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