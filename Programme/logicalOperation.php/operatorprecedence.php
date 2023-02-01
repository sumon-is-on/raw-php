<?php
// Operator Precedence

/* In the following statements of code we have wrote the same thing but we got different output 
le't describe why this happened. */
$a= false||true; // here php defines it { $a = (false || true)} 
                // and we know if one is true then the result is true
$b= false or true; // but here $b is assigned to false first and that's why it is false.
var_dump($a,$b);

// this is as same as and and other operators . we can learn about the operator precedence in the following link
// https://www.php.net/manual/en/language.operators.precedence.php#:~:text=The%20precedence%20of%20an%20operator,to%20force%20precedence%2C%20if%20necessary.