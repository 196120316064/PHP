<?php
echo "This is a numeric array:- ";
$numeric=array(1,2,3,4,5,6,7,8,9,10);
for ($i=0; $i <sizeof($numeric) ; $i++) { 
    echo $numeric[$i],",";
}
// -------------------------------------------------------------
echo "<br><br> Associative array:-<br> ";
$associative = array("name"=>"Rihil","Enroll"=>196120316064,"dept"=>"IT","Betch"=>"B-2");
foreach ($associative as $key => $value) {
    echo $key,"=>",$value,"<br>"; 
}
// -------------------------------------------------------------

echo "<br><br>multi-dimensional array:- <br>";
$a = array(array(1,2,3),array(4,5,6),array(7,8,9));

for ($i=0; $i < 3 ; $i++) { 
    for ($j=0; $j <3 ; $j++) { 
        echo $a[$i][$j],"  ";
    }
    echo "<br>";
}


?>
