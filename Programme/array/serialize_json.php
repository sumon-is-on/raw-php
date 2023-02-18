<?php
# Associative array to string , 
$student=[
    'name'=>'sumon',
    'age'=>24,
    'department'=>'bcse',
    'id'=>18103159
];

// now if we want to convert this array to string . for this we can use two way 
    // - serialize the array 
    // - jason encoding

    # serializing array

    $serializing = serialize($student);
    echo $serializing; # array has been serialized. now if we want to use this and convert into array again ,
    $serializing=unserialize($serializing);
    print_r($serializing);

    # json encoding
    $encoding= json_encode($student);
    echo $encoding; # it has converted to an object , if we want to make it an associative array again 
    $encoding = json_decode($encoding,true);
    print_r($encoding);


    # how to delete a data from an associative array? we have to use unset function and tell the key,
    unset($student['id']);
