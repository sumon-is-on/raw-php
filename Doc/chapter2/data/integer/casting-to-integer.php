<?php

#CASTING TO INTEGER:

    # when we write php script , the php processor converts the integer into other data type maximum time according to the data type operation. but sometimes we need to cast the other type of data into integer and integer to data type to other data type. like, we need to cast the boolean , string, float and the other datatype into integer. 

    # so we can write   int() before any data type to cast it . but we have to follow some rules to type casting according to the different different data type.

        #RULES:

        #BOOLEAN:
            # boolean 'false' and 'true' will be considered as 0 and 1.
                var_dump(true);                    #output ->  bool(true)
                var_dump((int)true);               #output ->  int (1)
                var_dump(false);                    #output ->  bool(false)
                var_dump((int)false);               #output ->  int (o)
        

        #FLOAT
            # for float type data , numbers which are placed before the decimal, will be considered.
                var_dump(33.33);                        #output ->  float(33.33)
                var_dump((int)33.33);                   #output->   int(33)


        #STRING
            # for the type casting of string type of data, if there is any number at the begining of the string , the numbers will be considered and will be converted into integer. but if there is no number before the string it will cast 0.
                var_dump("sumon");                           #output -> string
                var_dump((int)"sumon");                      #output -> int(0)
                var_dump((int)"sumon007");                   #output -> int(0)
                var_dump((int)"007sumon");                   #output -> int(007)
                # numbers after the string will not be converted as we can see in the third example 
            # if there is any number which is formatted as string , or there is minus(-) or 'e' , 'E' and decimal point(.) , will be cast .
                var_dump((int)"-10.99");                    #output-> int(-10)
                var_dump((int)"1.3E3");                     #output-> int(1)
                var_dump((int)((float)"1.3E3"));            #output-> int(1300)
                    # in this line , The string "1.3E3" is converted into the float datatype and which is 1300. and then this is converted into integer and the output is int(1300).

