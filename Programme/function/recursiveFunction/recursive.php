<?php
# Recursive function
    # recursiv function is a type of function where the function calls itselfe.
    # as the function calls itself so we need to define the breaking point first . otherwise it will fall into an infinite loop. let's have an example,

    # suppose we want to print some numbers from somewhere to somewhere.
    function printNumber(int $start, int $end){
        if($start>$end){
            return;
        }
        echo $start;
        echo PHP_EOL;
        $start++;
        printNumber($start,$end);
    }
    printNumber(21,30);

    # as the function has called itself , it is a recurssive function . but in the function we had to define the breaking statements. so that the function ends . other wise it would be an infinite loop.