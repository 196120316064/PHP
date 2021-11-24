<html>
    <head>
        <title>Practical 1.1</title>
    </head>
    <body>
        <?php
        $a = 0;
        $b = 1;
        echo $a,",",$b,",";
        for ($x = 0; $x < 10; $x++) {
            $sum = $a + $b;
            echo $sum,",";
            $a = $b;
            $b = $sum;

          }
        ?>
    </body>
</html>