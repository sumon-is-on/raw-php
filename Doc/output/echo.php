<?php

    # we take various input to execute our code and hen we need to show the output . in PHP to show the out put we use two statement . ECHO and PRINT. here we will discuss about "echo" statement.


        # echo 
            # we can use one or more than one string parameter/ argument by using comma(,) in  the echo statement
            # we can write the echo arguments with or without parenthesis " ()"
            # echo does not return any data that means it returns 0. so let's have some examples,
            
            $name="sumon";
            $gae=24;
            $gender="male";

            echo $name;
            echo ($name);
            # here we can see that with or without parenthesis echo works.


            # we can use multiple arguments by  using comma(,) in the echo . for example
            echo $name, $gae, $gender;
            # we can use multiple arguments by  using dot(.) also in the echo . for example
            echo $name.$gae.$gender; 


            # as we know echo statement does't return anything. that means it returns 0. so we can not use echo with any assignment operator. for example, if we write, --- $user_name= echo $name;--- it will show us an error.


            # we can not only give the plain text with the echo . we can also send the html code as a browser response with the echo. for example,
            echo "<p style='color:red;'> $name </p>";
?>