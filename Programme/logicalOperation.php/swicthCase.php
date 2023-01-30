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