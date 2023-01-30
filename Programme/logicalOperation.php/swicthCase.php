<?php

// Switch case 
    // switch case is another conditional operation . like you can check wheather a logic is true or false. 
    // there is a difference between if else and switch case though they works same.
        // Difference: 
            // In the if else condition if the (if) condition is true then it will not check the else. But for switch case it goes through all the condition. 
$color="purple";
switch($color){
    case "red":
        printf("%s is the rainbow color \n",$color);
        break;
    case "yellow":
        printf("%s is the rainbow color \n",$color);
        break;
    case "green":
        printf("%s is the rainbow color \n",$color);
        break;
    case "orange":
        printf("%s is the rainbow color \n",$color);
        break;
    default:
        printf("%s is not the rainbow color \n",$color);
}


// Now we will look through the nested switch case
// lets think about a number which is even or odd and positive or negative

$number=-13;
switch($number){
    case ($number%2==0):
        switch($number){
            case($number>0):
                printf("%d is a positive even number\n",$number);
                break;
            case($number<0):
                printf("%d is a negative even number\n",$number);
                break;
        }
    break;
        default:
            switch($number){
                case($number>0):
                    printf("%d is a positive odd number\n",$number);
                    break;
                case($number<0):
                    printf("%d is a negative odd number\n",$number);
                    break;
            }
}

// the above code is bit more complex to understand. we can make it more readable by the following code.
// $number=-13;
switch(true){
    case ($number%2==0 && $number>0):
        printf("%d is a positive even number\n",$number);
        break;
    case ($number%2==0 && $number<0):
        printf("%d is a Negative even number\n",$number);
        break;
    case ($number%2==1 && $number>0):
        printf("%d is a positive odd number\n",$number);
        break;
    case ($number%2==-1 && $number<0):
        printf("%d is a negative even number\n",$number);
        break;
    
}