<?php
# NULL Cols Operator (??)
# nullcols operator actually compares the value. if it gets any value then it will take other wise it will take the default value.

# Suppose we are taking some inputs or latitude and landitute for a map from the user

    # ternary operation
    $default_lat=30;
    $default_lan=30;

    $user_lat;
    $map=isset($user_lat) ? $user_lat:$default_lat;
    /* here we have checked that wheather the user value is set or not. if set, it will tkae the user value. otherwise it will take the default value.
    */
    echo $map;
    echo PHP_EOL;

    # by the nullCols operator
    $map=$user_lat ?? $default_lat;
    # here it checks that the user value is set or not. if set user value is set. other wise default value. so we can easily do these kinds of operation by nullCols operator.
    echo $map;
    echo PHP_EOL;