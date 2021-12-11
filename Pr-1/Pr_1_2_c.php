<html>
    <head>
        <title>Practical 1.2(C)</title>
    </head>
    <body>
        <?php
        function myTest() {
            static $x = 0;
            echo "$x<br>";
            $x++;
          }
          
          myTest();
          myTest();
          myTest();
        ?>
    </body>
</html>