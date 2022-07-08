<?php

    # INTEGER DIVISION:

        # there is no integer division operator in php . but if we write 1/2 or 7/3 or 21/7 these results will be converted into float type data. but we can change these by      " TYPE CASTING  " or using the    " round() " function . for example,

            var_dump(22/7); 
                # this will generate an output 3.571.  and this will be a "float type automatically
            var_dump((int)(22/7));
                # there will be a type casting abd this will only take the value before the decimal and ot will be "int type". out put is 3
            var_dump(round(22/7));
                # by using "round()" it will take the nearest number . output will be 3.
?>