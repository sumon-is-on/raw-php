<?php
# FUNCTION
/*  
in every programming language, modular programming is very much popular and frequenty used for 
clean code and maintain the codes. FUNCTION is the best way of modular programming . 
FUNCTION helps to abstract the data( statements). 
sometimes there might be some statements of codes which would be used many times in our code. 
so if we abstract those statements of code in a function, whenever we call the function we can get the same usecase for our need . 

In php there are two types of function
    1- built in/ library function
    2- user defined function.

    BUILT IN /LIBRARY FUNCTION
        these are the functions the are build by the php and we can get use those statements of codes by calling them just.
        like,  printf(), var_dump() etc . 

    USER DEFINED FUNCTION
         these are the function which we use in our program not to rewrite smae code agaian and again. we will define some functions here.

there are two part of every function
    1- function Defination
    2- function calling.

    function defination:
         in function defination ,
         -header part 
            i) header part defines the keyword (function). this key word is going to tell the php zend enginr that we are builting something which is a function.
            ii) then we need to define a function name. the rules of defining a function name is as same as a variable declearation. 
            ii) after naming the function expects parameter/s in the parenthesis(). it is good to use the parameter datatype in before the parameter. so that whenever we are going to call the we can easily get the argument type.
         -the body part
             in the body part we can write the statements of code, according to our need.
*/

# let's make a function to calculate the area fo a circle.

function areaOfCircle(float $radius){
    // define('pi',3.1416);
    return (pi()*$radius*$radius);
}

//  now we cal call the function and whenever we will call we need to pass the argument
$n=33.5;
$area=areaOfCircle($n);
printf("%f\n",$area);


// default parameterised 
function defaultParamete( $food="cofee",$quantity=1){
    printf("%d %s is served \n",$quantity,$food);
    // called in function program
}