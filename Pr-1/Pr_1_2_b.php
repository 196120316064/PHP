<html>

<head>
    <title>Practical 1.1</title>
</head>

<body>
    <?php
    $x = 5;
    $y = 10;

    function myTest()
    {
        global $x, $y;
        $y = $x + $y;
    }

    myTest();
    echo "is is globaly used variable:- $y";
    ?>
</body>

</html>