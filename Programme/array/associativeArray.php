<?php
# Associative Array
    # basically when we set the keys in an array and then set the value of an array , this is called an associative array. for example ;
    $foods=[
        // 'key'=>'value',
        'vagetables'=>'brinjal, broccoli, carrot, capsicum',
        'fruits'=>'mango, banana, apple',
        'drinks'=>'milk, water'
    ];

    # now if we want to print the array 
    print_r($foods);
    # if we want to print any specific key value 
    printf("%s\n",$foods['vagetables']);
    # or 
    echo $foods['drinks'];
    echo PHP_EOL;

    # or if we want to print the whole array, the foreach loop is the best practice.
    foreach($foods as $key=>$value){
        echo $key.' => '.$value. "\n";
    }

    # now if we want to add any data in the associative array 
    array_push($foods,$foods['drinks'].=",beer");
    echo $foods['drinks'];
    echo PHP_EOL;


    #or 
    $foods['drinks'].=",magic moments";
    echo $foods['drinks'];
    echo PHP_EOL;
    