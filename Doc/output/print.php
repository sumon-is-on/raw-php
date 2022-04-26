<?php
    # print is a statement or keyword that is also used to print anything 

    # print
        # in the print statement we can only pass a single argument.
        # we can pass a single argument with or without parenthesis.
        # we can not write more that one string using comma(,) .
        # print returns 1 


        $name="sumon";
        $gae=24;
        
        print $name;
        print ($name);
        # here we can see that with or without parenthesis print works.


        # NB:
            # we cn not use comma(,) or dot(.) to pass multiple argument. for example if we erite , --- print $name.$age; --- or   --- print $name, $age; ---  it will generate error.
            
            # we can not send the html code as a browser response with the print.
