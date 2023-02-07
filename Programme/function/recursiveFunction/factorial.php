<?php 
# here we will print factorial of a number by recursive function.

function factorial( int $n){
    if($n<=1){
        return 1;
    }
    return $n * factorial($n-1);
    /* code explanation
        declear n=5
        steps;
        n * factorial(n-1)
        5 * factorial(5-1=4)  // 5*4
        n * factorial(n-1)
        4 * factorial(4-1=3) // 5*4*3
        n * factorial(n-1) //5*4*3*2
        n * factorial(n-1)//5*4*3*2*1
        */

}
echo factorial(5);