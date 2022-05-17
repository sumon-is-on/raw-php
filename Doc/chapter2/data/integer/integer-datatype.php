<?php

# every number is processed an\s an integer in php. like 10,-10,2022 etc. but the limit range depends on the system . for 32 bit system the integer limit range is   -2147483647  to  2147483647 and for 64 bit system -9223372036854775808  to  9223372036854775807. in between the range any number is called as an integer.for example we can see the following programme :

    var_dump(2147483647);
    var_dump(8884698);
    var_dump(-24536422624534);
    
    #if we run this code the system will give the output that these numbers are integrs. but if we write any nuber above the limit range the what will the system show ?

    var_dump(11111111111111111111111111111111111111111111);
    # the number will be processed as an float number. this is called the   DATA OVERFLOW
        # DATA OVERFLOW:
            # when a number is bigger or smaller than the data type limit range is called the data overflow. 


    # we can not use comma(,) while writing thr big numbers. if we use then it will be processed as individual numbers . for example 
    var_dump(111,222,333,444);


?>

