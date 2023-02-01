<?php
// Alternative Syntax 
    // If Else
        //Regular Syntax
        $number=13;
        if($number % 2 ==0){
            printf("%d is an even numer\n",$number);
            echo PHP_EOL; // php EndOfLine is a method that takes a line break.
        }else{
            printf("%d is an odd numer\n",$number);
            echo PHP_EOL;
        }
        //Alternative Syntax
        if($number%2==0):
            printf("%d is an even numer\n",$number);
            echo PHP_EOL;
        else:
            printf("%d is an odd numer\n",$number);
            echo PHP_EOL;
        endif;


    // Switch Case
        // Regular Syntax
        switch($number%2){
            case 0:
                printf("%d is an even numer\n",$number);
                echo PHP_EOL;
                break;
            default:
                printf("%d is an odd numer\n",$number);
                echo PHP_EOL;
        }
        // Alternative Syntax:
        switch($number%2):
            case 0:
            printf("%d is an even numer\n",$number);
            echo PHP_EOL;
            break;
            default:
            printf("%d is an odd numer\n",$number);
            echo PHP_EOL;
        endswitch;