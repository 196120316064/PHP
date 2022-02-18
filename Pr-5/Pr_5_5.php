<?php
session_start();
?>
<html>

<head>
    <title>
        Practical 5.5
    </title>
</head>

<body>
    <?php
    $conn = new mysqli("localhost", "root", "", "196120316064");
    if ($conn) {
        echo "<h1>Connected successfully</h1>";
    } else {
        echo "<h1>Connection unsuccessfull please try again </h1>";
    }

    $sql = "SELECT * FROM employee";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "Employee Name: " . $row["E_Name"] . "<br>Mobile No: " . $row["E_Mobile_No"];
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</body>

</html>