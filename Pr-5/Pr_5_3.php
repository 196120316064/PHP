<html>
    <head>
        <title>
            Practical 5.3
        </title>
    </head>
    <body>
        <?php
            $conn = new mysqli("localhost","root","","196120316064");
            if ($conn) {
                echo "<h1>Connected successfully</h1>";
            }
            else{
                echo "<h1>Connection unsuccessfull please try again </h1>";
            }

            $sql = "INSERT INTO Customer VALUES (101014, 'Darshak kakadiya', 'Vadodara','keyboard','8980506410')";

            if ($conn->query($sql) === TRUE) {
                echo "<br><h1>New record created successfully</h1>";
            } else {
                echo "<h1>Error: " . $sql . "<br>" . $conn->error."</h1>";
            }
            $conn->close();
        ?>
    </body>
</html>