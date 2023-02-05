<?php
// FOR Loop
/* For loop structure

for( initialize; condition; update){
    statements;
}
*/
    # initialize= Here we can use one or more than one expression. and these expressions will be excuted once.
    # condition= here actually boolean expressions a re defined which will be checked everytime the loop continues.
    # Update= here the value of controll variable are updates untill or unless the condition is false

for($i=1;$i<=100; $i++){
    printf("%d",$i);
    echo PHP_EOL;
}

# nested if else 
# here we can use a for loop inside a for loop . for example we will create a table for row 10 to column 10

for($row=1;$row<=10;$row++):
    printf("%d",$row);
    echo PHP_EOL;
    for($column=1; $column<=10;$column++):
        printf("%d",$column);
        echo PHP_EOL;
    endfor;
endfor;


# multiple stepping in for loop
for($i=10,$j=1; $i>0;$i--,$j++):
    printf("%d : %d",$i,$j);
    echo PHP_EOL;
endfor;


# finding a factorial of any number 
$n=6;
for($i=$n, $factorial=1;$i>1;$i--):
    // $factorial=$factorial*$i;
    $factorial*=$i;
endfor;
printf("Factorial of %d is %d",$n,$factorial);

#finding the factorial for number 1 to 10
for($n=1, $j=1, $factorial=1; $n<=10; $n++):
    $factorial*=$n;
    $j++;
    printf("Factorial of %d is %d",$n,$factorial);
    echo PHP_EOL;
endfor;
printf("Total %d number of operations",$j);
