<?php 
    //variables (should make them input params)
    $a = 5;
    $b = 7;

    //lets check which variable is larger than the other 
    if($a > $b)
    {
        swap($b, $a);
    }
    else   
    {
        swap($a, $b);
    }

    //this function takes in the variable and deals with the logic of value swapping 
    funtion swap($smallnum, $bignum)
    {
        echo "small = ". $smallnum;
        echo "big = " .$bignum;
    }
?>
