<html>

<head>
    <title>Practical 2.5</title>
</head>

<body>
    <?php
        echo "<h1>Implode() and Explode()</h1>";

        echo "<h1>Implode()</h1>";
        $a = array("rihil","nayan","darshak","prince");
        echo "A's value is <b>";
        print_r($a);
        echo "</b><br> B's value is <b>";
        $b = array("darshan","rushi","ayush");
        print_r($b);
        echo "</b><br> After appling <b>impolde()</b> for store both array in string :- <br>";
        echo "<b>".implode(',',$a);
        echo "/".implode(',',$b)."</b>";

        echo "<h1>Explode()</h1>";
        $c = "rihil,nayan,prince,darshak,darshan,rushi,ayush";
        echo "C's value is <b>$c</b><br>";
        echo "after appling explode() C'a ans is:- <br><br>";
        echo "In this Ans we are splite string to the <b>','</b><br>";
        print_r(explode(',',$c));
        echo "<br><br>In this Ans we are set array length <b>3</b><br>";
        print_r(explode(',',$c,3));
        echo "<br><br>In this Ans we are set array length <b>5</b><br>";
        print_r(explode(',',$c,5));

    ?>
</body>
</html>    