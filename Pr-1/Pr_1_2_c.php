<html>
    <head>
        <title>Practical 1.1</title>
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