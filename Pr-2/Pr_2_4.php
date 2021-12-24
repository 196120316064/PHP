<html>

<head>
    <title>Practical 2.4</title>
</head>

<body>
    <?php
        echo "<h1>str_replace()</h1>";

        $a = "Hii This Is Rihil Sanghani";
        echo "A's value is <b> $a </b> <br>";
        echo "Than after appling str_replace() <b>{ Rihil }</b> replace with <b>{ Renish }</b><br>";
        echo  "<b> Ans :- ".str_replace("Rihil","Renish",$a,$b)."<br></b>";
        echo "How much values are replaced :- <b>$b</b><br><br>";

        $c = "Civil Department";
        echo "C's value is <b> $c </b> <br>";
        echo "Than after appling str_replace() <b>{ Civil }</b> replace with <b>{ It }</b><br>";
        echo  "<b> Ans :- ".str_replace("Civil","It",$c,$d)."<br></b>";
        echo "How much values are replaced :- <b>$d</b><br><br>";

        echo "E's value is <b>";
        $e = array("red","green","blue","black");
        print_r($e);
        echo "</b><br> Than after appling str_replace() <b>{ red }</b> replace with <b>{ white }</b><br>";
        echo "<b> Ans :- ";
        echo print_r(str_replace("red","white",$e,$f));
        echo "<br></b>";
        echo "How much values are replaced :- <b>$f</b><br><br>";

        echo "g's value is <b>";
        $g = array("rihil","nayan","darshak","darshan");
        print_r($g);
        echo "</b><br> Than after appling str_replace() <b>{ darshan }</b> replace with <b>{ prince }</b><br>";
        echo  "<b> Ans :-n";
        print_r(str_replace("darshan","prince",$g,$h));
        echo "<br></b>";
        echo"How much values are replaced :- <b>$h</b><br><br>";

        echo "I's value is :- <b>";
        $i = array("hello","world");
        print_r($i);
        echo "</b><br>J's value is :- <b>";
        $j = array("welcome");
        print_r($j);
        echo "</b><br>K's value is :- <b>";
        $k = array("hello","world","!");
        print_r($k);
        echo "</b><br> I is replace by J than J is replace by K so Ans is :- <b>";
        print_r(str_replace($i,$j,$k));
        echo "</b><br><br>";

        echo "M's value is :- <b>";
        $m = array("rihil","nayan");
        print_r($m);
        echo "</b><br>N's value is :- <b>";
        $n = array("darshak","darshan","prince");
        print_r($n);
        echo "</b><br>o's value is :- <b>";
        $o = array("rushi","sujal","ayush");
        print_r($o);
        echo "</b><br> M is replace by N than N is replace by O so Ans is :- <b>";
        print_r(str_replace($m,$n,$o));
        echo "</b>";
    ?>
</body>
</html>