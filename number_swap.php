<?php 
    //variables (should make them input params)
    $a = 5;
    $b = 7;

    echo " a = ". $a ." and b = " . $b;
    echo "<br> swap <br>";
    //lets combine both variables i.e put water and oil in one cup
    $a = $a + $b;
    //oil will float up and we can pour it in the water cup
    $b = $a - $b;
    //ensure only water is left in the oil cup
    $a = $a - $b;

    echo " a = " . $a . " and b = " . $b;
?>
