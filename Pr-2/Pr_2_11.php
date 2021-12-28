<html>

<head>
    <title>Practical 2.11</title>
</head>

<body>
    <?php
        echo "<h1> sort(), asort(), ksort()</h1>";
        $a = array('rihil' =>"064" ,'nayan'=> '057','darshan'=> '080','darshak'=> '026','prince'=>'004','rushi'=>'003','ayush'=>'009' );
        $b = array('Math' =>"55" ,'Advance Java'=> '57','PHP'=> '70','Android'=> '56','WNS'=>'64','Poject'=>'53');
        $c = array('DRG'=>'PHP','UDS'=>'Android','DND'=>'WNS','PKP'=>'Advance Java');

        echo "<h2>sort()</h2>It is sort array in ascending order<br>";
        echo "first array is:- ";
        print_r($a);
        sort($a);
        echo "<br>after appling sort() ans is:- ";
        print_r($a);
        echo "<br><br>second array is:- ";
        print_r($b);
        sort($b);
        echo "<br>after appling sort() ans is:- ";
        print_r($b);
        echo "<br><br>theird array is:- ";
        print_r($c);
        sort($c);
        echo "<br>after appling sort() ans is:- ";
        print_r($c);

        echo "<h2>asort()</h2>It is sort associative array in ascending order according to value<br>";
        echo "first array is:- ";
        print_r($a);
        asort($a);
        echo "<br>after appling asort() ans is:- ";
        print_r($a);
        echo "<br><br>second array is:- ";
        print_r($b);
        asort($b);
        echo "<br>after appling asort() ans is:- ";
        print_r($b);
        echo "<br><br>theird array is:- ";
        print_r($c);
        asort($c);
        echo "<br>after appling asort() ans is:- ";
        print_r($c);

        echo "<h2>ksort()</h2>It is sort associative array in ascending order according to key<br>";
        echo "first array is:- ";
        print_r($a);
        ksort($a);
        echo "<br>after appling ksort() ans is:- ";
        print_r($a);
        echo "<br><br>second array is:- ";
        print_r($b);
        ksort($b);
        echo "<br>after appling ksort() ans is:- ";
        print_r($b);
        echo "<br><br>theird array is:- ";
        print_r($c);
        ksort($c);
        echo "<br>after appling ksort() ans is:- ";
        print_r($c);
        
    ?>
</body>
</html>