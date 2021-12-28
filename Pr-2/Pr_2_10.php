<html>
    <head>
        <title>Practical 2.10</title>
    </head>
    <body>
        <?php
            echo "<h1>Array functions</h1>";
            $a = array(1,2,3,5,6,8,9,10);
            $b = array('rihil' =>"064" ,'nayan'=> '057','darshan'=> '080','darshak'=> '026','prince'=>'004','rushi'=>'003','ayush'=>'009' );
            $c = array(11.12,3.4,54,76.87,0.11 );

            echo "1} first array is a notmal array :- ";
            print_r($a);
            echo "<br>2} second array is a associative array :- ";
            print_r($b);
            echo "<br>3} theird array is a notmal array but float value :- ";
            print_r($a);
            
            echo "<h2>count()</h2>";
            echo "First array has <b>".count($a)."</b> Values <br>";
            echo "Secound array has <b>".count($b)."</b> Values <br>";
            echo "Theird array has <b>".count($c)."</b> Values <br>";

            echo "<h2>list()</h2>";
            echo "firat arrya's element is : ";
            print_r($a);
            list($n,$m,$o) = $a;
            echo "<br>Appling list(n,m,o) = a so now n's value is :- $n <br> m's value is :- $m <br> o's value is :- $o <br>";
            echo "second arrya's element is : ";
            print_r($c);
            list($n,$m,$o) = $c;
            echo "<br>Appling list(n,m,o) = a so now n's value is :- $n <br> m's value is :- $m <br> o's value is :- $o <br>";

            echo "<h1>in_array()</h1>";
            echo "We have to find <b>10</b> from first array so we are appling in_array() and pass '10' ans first array so ans :- <b>".in_array("10",$a)." Mince it is exist in first array </b><br>";
            echo "We have to find <b>064</b> from second array so we are appling in_array() and pass '10' ans first array so ans :- <b>".in_array("064",$b)." Mince it is exist in first array </b><br>";
            echo "We have to find <b>0.1</b> from theird array so we are appling in_array() and pass '10' ans first array so ans :- <b>".in_array("0.1",$c)."No Ans  Mince it is not exist in first array </b><br>";
            
            echo "<h1>current()</h1>";
            echo "current() represent by default 0 index's element of an array<br>";
            print_r($a);
            echo "<br>After appling current() on first array Ans is : ".current($a);
            next($a);
            echo "<br>After appling next() then we apply current() Ans is: ".current($a)."<br><br>";
            print_r($b);
            echo "<br>After appling current() on second array Ans is : ".current($b);
            next($b);
            echo "<br>After appling next() then we apply current() Ans is: ".current($b)."<br><br>";
            print_r($c);
            echo "<br>After appling current() on theird array Ans is : ".current($c);
            next($c);
            echo "<br>After appling next() then we apply current() Ans is: ".current($c)."<br>";

            echo "<h1>next()</h1>";
            echo "It is move pointer to forward element in array";
            print_r($a);
            echo "<br>Now pointer is on : ".current($a);
            next($a);
            echo "<br>After appling next() then Ans is: ".current($a)."<br><br>";
            print_r($b);
            echo "<br>Now pointer is on : ".current($b);
            next($b);
            echo "<br>After appling next() then Ans is: ".current($b)."<br><br>";
            print_r($c);
            end($c);
            echo "<br>Now pointer is on : ".current($c);
            next($c);
            echo "<br>After appling next() then Ans is: ".current($c)."It is not return any ans mince pointer is on last element<br>";

            echo "<h1>Prev()</h1>It move pointer to previous element of an array<br>";
            print_r($a);
            next($a);
            next($a);
            echo "current pointer is on ".current($a);
            prev($a);
            echo "<br> After appling prev() Ans is :- ".current($a)."<br>";
            print_r($b);
            next($b);
            next($b);
            echo "current pointer is on ".current($b);
            prev($b);
            echo "<br> After appling prev() Ans is :- ".current($b)."<br>";
            print_r($c);
            echo "current pointer is on ".current($c);
            prev($c);
            echo "<br> After appling prev() Ans is :- ".current($c)."it <br>";
        ?>
    </body>
</html>