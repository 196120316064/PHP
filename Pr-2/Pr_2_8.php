<html>

<head>
    <title>Practical 2.6</title>
</head>

<body>
    <?php
        date_default_timezone_set("Asia/Calcutta");
        echo "<h1>time() & mktime()</h1>";
        echo "<h1>time()</h1>";
        echo "It return current UNIX timestamp :- ".time();

        echo "<h1>mktime()</h1>";
        echo "Appling mktime function and pass value like 1,1,1,1,1,2003<br>than it will return UNIX value :-  <b>".mktime(1,1,1,1,1,2003)."</b><br><br>";
        echo "Appling mktime function and pass value like 0,0,0,1,1,2001<br>than it will return UNIX value than we will use date function to UNIX value is convert into readabale form <b>".date('M-d-y',mktime(0,0,0,1,1,2001))."</b><br><br>";
        echo "Appling mktime function and pass value like 0,0,0,12,36,2001<br>than it will return UNIX value than we will use date function to UNIX value is convert into readabale form<br>In this function we are pass 36 day of the month for it is not occured error it will add extra day in next up coming month <b>".date('M-d-y',mktime(0,0,0,12,36,2001))."<br>";

    ?>
</body>
</html> 