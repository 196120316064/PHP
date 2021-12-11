<html>

<head>
    <title>Practical 1.3(C)</title>
</head>

<body>
    <?php
    $x = 100;
    $y = "100";
    echo "<br>", var_dump($x == $y);
    echo "<br>", var_dump($x === $y);
    echo "<br>", var_dump($x != $y);
    echo "<br>", var_dump($x <> $y);
    echo "<br>", var_dump($x !== $y);
    echo "<br>", var_dump($x <= $y);
    echo "<br>", var_dump($x >= $y);
    echo "<br>", var_dump($x < $y);
    echo "<br>", var_dump($x > $y);
    echo "<br>", var_dump($x <=> $y);
    ?>
</body>

</html>