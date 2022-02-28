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
            <th>E_Name</th>
            <th>E_MObile_No</th>
            <th>E_Email_Id</th>
            <th>E_Age</th>
            <th>E_Occupation</th>
            <th>E_Salary</th>
            <th>E_Designation</th>
            <th>Edit</th>
        </tr>

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
            while ($row = $result->fetch_array()) {
                $E_mobile = $row["E_Mobile_No"];
                echo "<tr>
                <td>" . $row["E_Name"] . "</td>
                <td>" . $row["E_Mobile_No"] . "</td>
                <td>" . $row["E_Email_Id"] . "</td>
                <td>" . $row["E_Age"] . "</td>
                <td>" . $row["E_occupation"] . "</td>
                <td>" . $row["Salary"] . "</td>
                <td>" . $row["Designation"] . "</td>
                <td>
                    <a href='Pr_5_8_UpdateData.php?emobile=$E_mobile'>Edit</a>
                </td>
                </tr>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </table>
</body>

</html>