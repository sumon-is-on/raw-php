<?php
# copy by value, copy by reference
    # copy by value
    $student=[
        'name'=>'sumon',
        'age'=>24,
        'department'=>'bcse',
        'id'=>18103159
    ]; 
    $newStudent=$student;
        # here we have copied all the value of student array to new student 
        var_dump($newStudent);
        # now if we want to insert or change any data of new student,
        $newStudent['age']=23;
        var_dump($newStudent);
        # the value of new Student has changed only. we just copied the student array value to new student. 
        # this is called Copy by value. or deep copy

    # copy by reference
    function prindStudent(&$student){ # here we have added an & to copy the memory address of the base array. and then changed it . this is called copy by reference or shallow copy
        $student['id'] .= 'changed';
        print_r($student);
    }

    prindStudent($student);
    print_r($student);
