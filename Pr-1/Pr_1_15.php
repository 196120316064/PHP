<html>
<head>
    <title>Practical 1.15</title>
</head>
<body>
<?php

function peraArgs($a,$b)
{
    echo "Using perameterised argument:- ",$a+$b;
}

function defArgs($age = 18)
{
    echo "<br>Using default argument:- ",$age;
}

function returnArgs($x,$y)
{
    $total = $x*$y;
    return $total;
}

function add(...$numbers) {  
    $sum = 0;  
    foreach ($numbers as $n) {  
        $sum += $n;  
    }  
    return $sum;  
}  


peraArgs(5,10);
echo "<br><br><b>passing the args</b>";
defArgs(10);
echo "<br><br><b>without passing args</b>";
defArgs();
echo "<br><br>Using returning argument:- ",returnArgs(5,2);
echo "<br><br>This is a variable length argument:- ",add(1, 2, 3, 4);  
?>
</body>

</html>