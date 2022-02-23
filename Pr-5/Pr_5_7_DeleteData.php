
<html>

<head>
    <title>
        Practical 5.7 delete data
    </title>
</head>

<body>
    <?php
    $c_code = $_GET["Customer_Code"];
    $conn = new mysqli("localhost", "root", "", "196120316064");
    if ($conn) {
        echo "<h1>Connected successfully</h1>";
    } else {
        echo "<h1>Connection unsuccessfull please try again </h1>";
    }

    $sql = "DELETE FROM Customer WHERE Customer_Code='$c_code';";

    if ($conn->query($sql) === TRUE) {
        echo "<br><h1>Record deleted successfully</h1><br>";
        echo "<a href='Pr_5_7.php'>Go back and see</a>";
    } else {
        echo "<h1>Error: " . $sql . "<br>" . $conn->error . "</h1>";
    }
    $conn->close();
    ?>
</body>

</html>