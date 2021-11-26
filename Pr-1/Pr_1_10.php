<?php

echo "Using Call by value:- ";
function callbyvalue($a , $b){
    return $a+$b;
}

$x = 10;
$y = 20;
echo callbyvalue($x,$y);

echo "<br>Using Call by reference:- ";
function callbyreference(&$a , &$b){
    return $a+$b;
}

$x = 10;
$y = 20;
echo callbyreference($x,$y);


?>