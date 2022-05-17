<?php

    # the integer numbers an be written using 4 number base.

        # Decimal (base 10)
            # base 10 numbers are called decimal numbers. like, 22345, 193841, 2, 198104, -349, -249820 etc

        # Hexadecimal (base 16)
            # the number which has  (0x)  at the beginning is called a hexadecimal integer in php data type. for example , 0x10, 0x7ffff etc

        # Octal (8 base)
            # the number which has  (0)  at the beginning is called a octal integer in php data type. for example , 010, 083, 033 etc

        # binary ( base 2)
            # the number which has  (0b)  at the beginning is called a binary integer in php data type. for example ,0b10001, 0b11100, etc

        var_dump(10); #decimal
        var_dump(010); #octal
        var_dump(0x10); #hexadecimal
        var_dump(0b10); # binary. for binary we can only use 0 and 1 to write any number . if we write 3,5,7 for example, it will show error.

?>