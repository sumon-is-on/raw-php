<?php
# string to array conveter
$vegetables='brocolli, brinjal, onion, garlic';
#using explode builtin function we can easily convert a string to an array
$vegetables=explode(', ',$vegetables);
# we can see that the explode function expexts a separator by which it will seperate the string and make an array.
# this seperator also called a delimeter.
print_r($vegetables);


#array to string
$vegetable_string = join(', ',$vegetables);
# using the join function we can easily make a string to an array . here join function also expexts a seperator.
echo $vegetable_string;
echo PHP_EOL;

# now let's add multiple delimeter
$fruits = 'apple, banana, mango, orange,lichi,graps';
    # here we have added the fruits in different seperation method (', ' and ',').
    # we will use these two delimeter to make a string to an array. for this we need to use preg_split function
$fruits = preg_split('/(, |,)/',$fruits);
# we have used the preg_split function to use multiple delimeter. inside the '/()/'  we can use the multiple delimeter.
print_r($fruits);
echo PHP_EOL;
