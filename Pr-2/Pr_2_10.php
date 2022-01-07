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

            echo "<h2>in_array()</h2>";
            echo "We have to find <b>10</b> from first array so we are appling in_array() and pass '10' ans first array so ans :- <b>".in_array("10",$a)." Mince it is exist in first array </b><br>";
            echo "We have to find <b>064</b> from second array so we are appling in_array() and pass '10' ans first array so ans :- <b>".in_array("064",$b)." Mince it is exist in first array </b><br>";
            echo "We have to find <b>0.1</b> from theird array so we are appling in_array() and pass '10' ans first array so ans :- <b>".in_array("0.1",$c)."No Ans  Mince it is not exist in first array </b><br>";
            
            echo "<h2>current()</h2>";
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

            echo "<h2>next()</h2>";
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

            echo "<h2>Prev()</h2>It move pointer to previous element of an array<br>";
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
            echo "<br> After appling prev() Ans is :- ".current($c)."It is not return any ans mince pointer is on first element <br>";

            echo "<h2>end()</h2>It move pointer at last element of an array<br>";
            print_r($a);
            echo "<br>Now pointer is on ".current($a)." So after appling end() Ans is:- ".end($a)."<br>";
            print_r($b);
            next($b);
            next($b);
            echo "<br>Now pointer is on ".current($b)." So after appling end() Ans is:- ".end($b)."<br>";
            print_r($c);
            end($c);
            echo "<br>Now pointer is on ".current($c)." So after appling end() Ans is:- ".end($c)."<br>";

            // echo "<h2>each()</h2>It returns key and value of current poinetr's element of an array<br>";
            // print_r($b);
            // prev($b); 
            // echo "<br>Now pointer is on ".current($b)." So after appling end() Ans is:- ";
            // print_r(each($b));           
            // echo "<br>Now pointer is on ".current($b)." So after appling end() Ans is:- ";
            // print_r(each($b)); 
            // echo "<br>Now pointer is on ".current($b)." So after appling end() Ans is:- ";
            // print_r(each($b));
            // echo "It is not return any ans mince array doesn't have any more element <br>";

            echo "<h2>sort()</h2> It returns array in assending order<br>";
            $z = array(4,6,34,2,56,8,34,34,67,8,3,2);
            echo "Array is : ";
            print_r($z);
            echo "<br>After appling sort() it will return array in ascending  order :- <br>";
            sort($z);
            print_r($z);
            echo "<br>After appling rsort() it will return array in deascending  order :- <br>";
            rsort($z);
            print_r($z);

            $x = array('rihil' =>"064" ,'nayan'=> '057','darshan'=> '080','darshak'=> '026','prince'=>'004','rushi'=>'003','ayush'=>'009' );
            $y = array('Math' =>"55" ,'Advance Java'=> '57','PHP'=> '70','Android'=> '56','WNS'=>'64','Poject'=>'53');
            $z = array('DRG'=>'PHP','UDS'=>'Android','DND'=>'WNS','PKP'=>'Advance Java');


            echo "<h2>arsort()</h2>It is sort associative array in deascending order according to value<br>";
            echo "first array is:- ";
            print_r($x);
            asort($x);
            echo "<br>after appling asort() ans is:- ";
            print_r($x);
            echo "<br><br>second array is:- ";
            print_r($y);
            asort($y);
            echo "<br>after appling asort() ans is:- ";
            print_r($y);
            echo "<br><br>theird array is:- ";
            print_r($z);
            asort($z);
            echo "<br>after appling asort() ans is:- ";
            print_r($z);

            echo "<h2>krsort()</h2>It is sort associative array in deascending order according to key<br>";
            echo "first array is:- ";
            print_r($x);
            ksort($x);
            echo "<br>after appling ksort() ans is:- ";
            print_r($x);
            echo "<br><br>second array is:- ";
            print_r($y);
            ksort($y);
            echo "<br>after appling ksort() ans is:- ";
            print_r($y);
            echo "<br><br>theird array is:- ";
            print_r($z);
            ksort($z);
            echo "<br>after appling ksort() ans is:- ";
            print_r($z);


            echo "<h3>With associative array</h3>";
            print_r($b);
            echo "<br>After appling arsort() it will return array's element in deascendin order :- <br>";
            arsort($b);
            print_r($b);
            echo "<br>After appling krsort() it will return array's key in deascendin order :- <br>";
            krsort($b);
            print_r($b);

            echo "<h2>array_merge()</h2> It take two array then merge and return in single array<br>";
            echo "first array is :- ";
            print_r($a);
            echo "<br> second array is :- ";
            print_r($z);
            echo "<br> after appling array_merge() ans is :- ";
            print_r(array_merge($a,$z));

            $f = array("rihil","nayan","darshan");
            $g = array("prince","rushi","darshak");
            echo "<br>first array is :- ";
            print_r($f);
            echo "<br> second array is :- ";
            print_r($g);
            echo "<br> after appling array_merge() ans is :- ";
            print_r(array_merge($f,$g));         

            echo "<h2>array_reverse()</h2> It return reverse element of an array<br>";
            $f = array("rihil","nayan","darshan");
            $g = array("prince","rushi","darshak");
            echo "<br>array is :- ";
            print_r($f);
            echo "After appling array_reverse() ans is :- ";
            print_r(array_reverse($f));
            echo "<br>array is :- ";
            print_r($g);
            echo "After appling array_reverse() ans is :- ";
            print_r(array_reverse($g,true));


            echo "<h2>reset()</h2>It move pointer at first element of an array<br>";
            print_r($a);
            echo "<br>Now pointer is on ".current($a)." So after appling reset() Ans is:- ".reset($a)."<br>";
            print_r($b);
            next($b);
            next($b);
            echo "<br>Now pointer is on ".current($b)." So after appling end() Ans is:- ".reset($b)."<br>";
            print_r($c);
            end($c);
            echo "<br>Now pointer is on ".current($c)." So after appling end() Ans is:- ".reset($c)."<br>";


        ?>
    </body>
</html>