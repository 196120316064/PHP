<html>
    <head>
        <title>
            Practical 5.8
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

            $sql = "DELETE FROM Customer WHERE Customer_Name='Nayan Pipalv';";

            if ($conn->query($sql) === TRUE) {
                echo "<br><h1>Record deleted successfully</h1>";
            } else {
                echo "<h1>Error: " . $sql . "<br>" . $conn->error."</h1>";
            }
            $conn->close();
        ?>
    </body>
</html>