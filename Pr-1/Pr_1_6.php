<html>

<body>
    <?php
    $count = 1;
    $f1 = 0;
    $f2 = 1;
    echo "<h2>Fibonacci series for first 10 numbers :- </h2>";
    echo "<table <style>
     border: 1px solid black;
     </style>><th> Fibonacci series</th>";
    echo "<tr><td>", $f1, "</td></tr>";
    echo "<tr><td>", $f2, "</td></tr>";
    while ($count < 10) {
        $f3 = $f2 + $f1;
        echo "<tr><td>", $f3, "</td></tr> ";

        $f1 = $f2;
        $f2 = $f3;
        $count++;
    }
    echo "</table>";
    ?>
</body>

</html>