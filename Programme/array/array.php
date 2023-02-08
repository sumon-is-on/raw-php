<?php
# ARRAY
    # array is a collection of a data. we can store as many as data in an array . let's have an example
    $students=[
        'sumon',
        'nabil',
        'munna',
        123,    
    ];
    # here we have called an array. array is also loosely data type. we can store any kinds of adata in an array.

    // printing an array 
    print_r($students);
    // $ using the print function we can print array 
    echo $students[2];
    echo PHP_EOL;
    // we can print any offset of data from an arry . but after calling the array we need to specify the osition og taht data 

    // we an use for loop for printing array as well
    $number=count($students);
    for($i=0; $i<=$number; $i++){
        echo $students[$i];
        echo PHP_EOL;
    }

    // now we will insert or remove any data from an array, using the following array functions
    /*      array_shift();
            array_unshift();
            array_push();
            array_pop();
    */

    $student=array_pop($students);
    echo $student;
    echo PHP_EOL;
    print_r($students);
    echo PHP_EOL;
    // now we have brought out a data from the students array and stored in the student variable.
    // so after printing the array we can see that the last element of the array has been brought out. 
    // so the array_pop function brings out the last element from an array.

    $student=array_shift($students);
    echo $student;
    echo PHP_EOL;
    print_r($students);
    echo PHP_EOL;
    // now we have brought out a data from the students array and stored in the student variable.
    // so after printing the array we can see that the first element of the array has been brought out. 
    // so the array_shift function brings out the first element from an array.

    array_unshift($students,"siuuuu");
    print_r($students);
    echo PHP_EOL;
    // now we have inserted a data into the students array . 
    // so after printing the array we can see that a new element has been added in the students array.  
    // so the array_unshift function stores a data in the first of an array.

    array_push($students,"CR7");
    print_r($students);
    echo PHP_EOL;
    // now we have inserted a data into the students array . 
    // so after printing the array we can see that a new element has been added in the students array.  
    // so the array_unshift function stores a data in the last of an array.


    // But we can add any data in the array in a different method_exists 
    $students[]="sumon";
    print_r($students);
    echo PHP_EOL;
    // so after printing the array we can see that a new element has been added in the students array.  
    // This method stores a data in the last of an array.

