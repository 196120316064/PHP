<html>

<head>
    <title>Practical 2.7</title>
</head>

<body>
    <?php
        date_default_timezone_set("Asia/Calcutta");
        echo "<h1>getdate() & chrckdate()</h1>";
        
        echo "<h1>getdate()</h1>";
        print_r(getdate());

        echo "<h1>checkdate()</h1>";
        echo "First time <b>1/1/2022</b> is added<br>";
        if(checkdate(1,1,2022)){
            echo "<b>1/1/2022</b> is a right date<br><br>";
        }
        else{
            echo "<b>1/1/2022</b> is a worang date<br><br>";
        }

        echo "Second time <b>32/1/2022</b> is added<br>";
        if(checkdate(32,1,2022)){
            echo "<b>32/1/2022</b> is a right date<br><br>";
        }
        else{
            echo "<b>32/1/2022</b> is a worang date<br><br>";
        }

        echo "Second time <b>1/13/2022</b> is added<br>";
        if(checkdate(1,13,2022)){
            echo "<b>1/13/2022</b> is a right date<br><br>";
        }
        else{
            echo "<b>1/13/2022</b> is a worang date<br><br>";
        }


    ?>
</body>
</html> 