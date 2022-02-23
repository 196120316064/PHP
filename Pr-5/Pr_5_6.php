
<html>

<head>
    <title>
        Practical 5.6
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

    $sql = "SELECT * FROM customer";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        // output data of each row
        echo "<table>
        <tr>
            <th>cust_no</th>
            <th>cust_name</th>
            <th>cust_city</th>
            <th>Item_purchase</th>
            <th>mob_no</th>
        </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
            <td>" . $row["Customer_Code"] . "</td>
            <td>" . $row["Customer_Name"] . "</td>
            <td>" . $row["Customer_City"] . "</td>
            <td>" . $row["Item_purchase"] . "</td>
            <td>" . $row["Customer_Mobile_No"] . "</td>
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