<?php

# PHP - Hypertext Preprocessor
#   Developed in 1995 by Rasmus Lerdorf


#   APACHE AND PHP

    #Apache is a web server which can receive request from a browser. Generelly php is linked in the APACHE server and it is done by  " mod_php.so " . 

    # In the server there mainly 3 modules of php works,
        #   1. Core PHP
        #   2. Zend Engine
        #   3. Extension Layer

        # CORE PHP--
            # it contorlls all types of request, file stream, errror handling and some other works.
        # Zend Engine--
            # it transform the php code into the machine code and executes them.
        # EXTENSION LAYER--
            # it provides different types of functions, class, mySQL extension etc.
    
    # when APACHE sever is run, CORE PHP and ZEND ENGINE are also run. when the engine is run , all the MINIT METHOD ( 'MINIT= MODULE INITIALIZATION' ) is run of those extensions , who are enabled in the extension layer. we can see the enabled extensions in the  " php.ini " directory.

    # a php file should have an extension of " .php " and should be located in the pablic directory or the webroot directory.
?>
       