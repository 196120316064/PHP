<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>
        Practical 5.7
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
    <table>
        <tr>
            <th>cust_no</th>
            <th>cust_name</th>
            <th>cust_city</th>
            <th>Item_purchase</th>
            <th>mob_no</th>
            <th>Delete</th>
        </tr>

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
            while ($row = $result->fetch_array()) {
                $c_code = $row["Customer_Code"];
                echo "<tr><td>" . $row["Customer_Code"] . "</td>
                    <td>" . $row["Customer_Name"] . "</td>
                    <td>" . $row["Customer_City"] . "</td>
                    <td>" . $row["Item_purchase"] . "</td>
                    <td>" . $row["Customer_Mobile_No"] . "</td>";

                ?>
                <td>
                    <a href='Pr_5_7_DeleteData.php?Customer_Code=<?php echo $c_code; ?>'><i class='fa fa-trash-o' style='font-size:24px'></i></a>
                </td>
                </tr>
        <?php
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>