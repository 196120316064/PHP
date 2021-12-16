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
    echo "B's value is " . $b . "<br>";
    settype($b, "float");
    echo "after calling settype B's Value is :-" . $b . "<br>it is converted into :- " . gettype($b);
    $c = true;
    echo "<br>B's value is " . $c . "<br>";
    settype($c, "string");
    echo "after calling settype B's Value is :-" . $c . "<br>it is converted into :- " . gettype($c);
    $d = "064rihil";
    echo "<br>B's value is " . $d . "<br>";
    settype($d, "integer");
    echo "after calling settype B's Value is :-" . $d . "<br>it is converted into :- " . gettype($d);


    echo "<h3>Unset</h3><br>";
    echo "Now A's value is $a and it's type is " . gettype($a) . "<br>";
    unset($a);
    echo "After calling unset method A's value is $a <br><br>";
    echo "Now B's value is $b band it's type is " . gettype($b) . "<br>";
    unset($b);
    echo "After calling unset method B's value is $b <br><br>";
    echo "Now C's value is $c and it's type is " . gettype($c) . "<br>";
    unset($c);
    echo "After calling unset method C's value is $c<br><br>";


    echo "<h3>Strval</h3><br>";
    $m = 064;
    echo "Now M's value is $m and it's type is " . gettype($m) . "<br>";
    $m = strval($m);
    echo "After calling strval method M's value is $m and it's type is " . gettype($m) . "<br><br>";
    $n = 33.36;
    echo "Now N's value is $n and it's type is " . gettype($n) . "<br>";
    $n = strval($n);
    echo "After calling strval method N's value is $n and it's type is " . gettype($n) . "<br><br>";
    $o = 0;
    echo "Now O's value is $o and it's type is " . gettype($o) . "<br>";
    $o = strval($o);
    echo "After calling strval method O's value is $o and it's type is " . gettype($o) . "<br><br>";


    echo "<h3>Intval</h3><br>";
    $m = "064rihil";
    echo "Now M's value is $m and it's type is " . gettype($m) . "<br>";
    $m = intval($m);
    echo "After calling intval method M's value is $m and it's type is " . gettype($m) . "<br><br>";
    $n = 33.36;
    echo "Now N's value is $n and it's type is " . gettype($n) . "<br>";
    $n = intval($n);
    echo "After calling intval method N's value is $n and it's type is " . gettype($n) . "<br><br>";
    $o = true;
    echo "Now O's value is $o and it's type is " . gettype($o) . "<br>";
    $o = intval($o);
    echo "After calling intval method O's value is $o and it's type is " . gettype($o) . "<br><br>";


    echo "<h3>Floatval</h3><br>";
    $m = "064rihil";
    echo "Now M's value is $m and it's type is " . gettype($m) . "<br>";
    $m = floatval($m);
    echo "After calling floatval method M's value is $m and it's type is " . gettype($m) . "<br><br>";
    $n = 33.36;
    echo "Now N's value is $n and it's type is " . gettype($n) . "<br>";
    $n = floatval($n);
    echo "After calling floatval method N's value is $n and it's type is " . gettype($n) . "<br><br>";
    $o = true;
    echo "Now O's value is $o and it's type is " . gettype($o) . "<br>";
    $o = floatval($o);
    echo "After calling floatval method O's value is $o and it's type is " . gettype($o) . "<br><br>";


    echo "<h3>Print_r</h3><br>";
    $p = array("red", "green", "blue");
    print_r($p);
    echo "<br>";
    $q = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    print_r($q);
    echo "<br>";
    $q = array("rihil" => "064", "darshan" => "080", "nayan" => "057");
    print_r($q);
    ?>
</body>

</html>