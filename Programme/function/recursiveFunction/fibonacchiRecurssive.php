<?php
# in this function we will print a fibinacchi series by a recurssive function
# here we need to set the old value new valu and then we want to till how many we want to print

function fibonacci(int $old, int $new, int $end){
    static $start;
    $start=$start ?? 1;
    if($start>$end){
        return;
    }
    $start++;
    echo $old;
    echo PHP_EOL;
    $_temp=$old+$new;
    $old=$new;
    $new=$_temp;
    fibonacci($old,$new,$end);
}
fibonacci(0,1,10);