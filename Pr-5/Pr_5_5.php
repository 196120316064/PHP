<?php
session_start();
?>
<html>

<head>
    <title>
        Practical 5.5
    </title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            text-align: center;
        }
    </style>
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
        echo "<table>
        <tr>
            <th>E_Name</th>
            <th>E_MObile_No</th>
            <th>E_Email_Id</th>
            <th>E_Age</th>
            <th>E_Occupation</th>
            <th>E_Salary</th>
            <th>E_Designation</th>
        </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
            <td>" . $row["E_Name"] . "</td>
            <td>" . $row["E_Mobile_No"] . "</td>
            <td>" . $row["E_Email_Id"] . "</td>
            <td>" . $row["E_Age"] . "</td>
            <td>" . $row["E_occupation"] . "</td>
            <td>" . $row["Salary"] . "</td>
            <td>" . $row["Designation"] . "</td>
            </tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</body>

</html>