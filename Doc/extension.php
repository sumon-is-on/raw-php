<?php
    # to develop any web application we have to work with some random things like,                   date-time,  file system,  email,   mathematical terms,   network,   database,    session,  and so on . we use these so often in our programme. 


    # php has some built in function and libraries to work with the above things so that our works can be more easy and fast . these are called the     "extension"     . some extension are attached with the core php , and some others are bundled with the php packages. there are some other extensions which must be installed manually to use in our programme. 
        
        # PHP EXTENSION type

            # CORE EXTENSIONS
                #  array,  classes/object,  date/time,  directories,   error handeling,  filesystem,  programme execution,   hash,   mail,   math,  function handling,   network,   strings,  sessions,   urls,   variable handling  and so on.

            # BUNDLED EXTENSIONS
                # apache,  calender,  DBA,  intl,  ftp,   json,   shared memory,  sockets,  sqlite3,  nsapi,  BC math,   fileinfo an so on.

            # EXTERNAL EXTENSION
                # cURL, dBASE, DOM,  Firebrid, MYSQL,  Informix, Mhash,  XSL, Readline, Recode etc.

            # PECL EXTENSION
                # Bcompiler,  crack,  fdf,  DB++, OpenAL, MS SQL server (PDO),  mimetype, Rar, memtrack, informix, ststistics, TCp,  zookeeper etc . 


    
    # in every extension there are some built in function and method which does some seveal works. for example to work with the array extension we will use some of the built in function and method 


            # example -1: ARRAY EXTENSION
            $cities=[
                        "DHAKA",
                        "CHITTAGONG",
                        "BARISHAL",
                        "RANGPUR",
                        "KHULNA",
                        "MYMENSINGH",
                        "SYLHET",
                    ];
            count($cities);
            //brfore sorting
            print_r($cities);

            sort($cities);
            //brfore sorting
            print_r($cities);

            # here we have used two of the array function called    count()  and   sort(). this two functions work different . sort() actually sorts the array accordingly and count() does count the array data. if we want to do the same , we need to write a lot of code but using this functions our works become easire and more readalbe . 



            # example -2: STRING EXYENSION
            $name="md sumon hossain";
            echo "length :" . strlen($name) . "characters";
            echo strtoupper($name);

            # here we have used two of the array function called    strlen()  and   strtoupper(). this two functions work different . strlen() actually counts the string lenght and strtoupper() does the strings uppercase. if we want to do the same , we need to write a lot of code but using this functions our works become easire and more readalbe . 




            # example -3: MATH EXTENSION
            $angle=30;
            echo sin($angle);
            echo cos($angle);
            echo tan($angle);

            # these are the math extension and we do not need to use any type of calculation to fin out the value of sin , cos and tan . using the math extension fubtions we can easily get these values.if we want to do the same , we need to write a lot of code 

            # so we can use the extensions and the functions of those extensions to our work.



?>