<?php
    # php program starts with  ' <?php ' and ends with   the lat two symbol of this code.
    # here we will write a very simple code. this will show a output  "hello world!"

    echo "hello world!";

    # here echo is a keyword which will print the text "hello world". 
    # we have printed some words which are strings. so wee need to write the strings in between the double quotation . and after this we have just used a semicolon . this semi-colon will end the statement. 
    # so what is a statement? well every single line that ends with a semi-colon is a statement. we will learn about the ELEMENTS OF PHP in one of our doc file names "elements.php".


    # this is how we can change the value of global variable usig global keyword
    $x=10;
    printx();
    echo $x;
    echo PHP_EOL;
    function printx(){
        global $x;
        $x=20;
        echo $x;
    }
?>