<html>

<head>
    <title>Practical 2.1</title>
</head>

<body>
    <?php
    echo "<h3>Gettype</h3><br>";
    $a = 19;
    echo "A's value is " . $a . " that's why it is :- " . gettype($a) . "<br>";
    $a = "Rihil";
    echo "A's value is " . $a . " that's why it is :- " . gettype($a) . "<br>";
    $a = true;
    echo "A's value is " . $a . " that's why it is :- " . gettype($a) . "<br><br><br>";

    echo "<h3>Settype</h3><br>";
    $b = 064;
    echo "B's value is ".$b."<br>";
    settype($b,"float");
    echo "after calling settype B's Value is :-".$b."<br>it is converted into :- ".gettype($b);
    $c = true;
    echo "<br>B's value is ".$c."<br>";
    settype($c,"string");
    echo "after calling settype B's Value is :-".$c."<br>it is converted into :- ".gettype($c);
    $d = "064rihil";
    echo "<br>B's value is ".$d."<br>";
    settype($d,"integer");
    echo "after calling settype B's Value is :-".$d."<br>it is converted into :- ".gettype($d);

    echo "<h3>Unset</h3><br>";
    echo "Now A's value is $a and it's type is ".gettype($a)."<br>";
    unset($a);
    echo "After calling unset method A's value is $a <br><br>";
    echo "Now B's value is $b band it's type is ".gettype($b)."<br>";
    unset($b);
    echo "After calling unset method B's value is $b <br><br>";
    echo "Now C's value is $c and it's type is ".gettype($c)."<br>";
    unset($c);
    echo "After calling unset method C's value is $c<br><br>";

    ?>
</body>

</html>