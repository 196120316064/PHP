<html>
    <head>
        <title>
            Practical 5.2
        </title>
    </head>
    <body>
        <?php
            $conn = new mysqli("localhost","root","","196120316064");
            if ($conn) {
                echo "Connected successfully";
            }
            else{
                echo "Connection unsuccessfull please try again ";
            }
            $conn->close();
        ?>
    </body>
</html>