<?php
    $a = array(array(2,3),array(5,6));
    $b = array(array(1,2),array(9,5));
    echo "Addition of matrix<br>";
    for ($i=0; $i < 2; $i++) { 
        for ($j=0; $j < 2; $j++) { 
            echo $a[$i][$j]+$b[$i][$j]," ";
        }
        echo "<br>";
    }
    echo "Multiplication of matrix<br>";
    for ($i=0; $i < 2; $i++) { 
        for ($j=0; $j < 2; $j++) { 
            echo $a[$i][$j]*$b[$i][$j]," ";
        }
        echo "<br>";
    }
?>