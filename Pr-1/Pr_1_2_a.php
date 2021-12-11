<html>

<head>
    <title>Practical 1.2(A)</title>
</head>

<body>
    <?php
    function myTest()
    {
        $x = 5; // local scope
        echo "<p>Variable x inside function is: $x</p> ";
    }
    myTest();
    echo "<p>Variable x outside function is: $x</p>";
    ?>
</body>

</html>