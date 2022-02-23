<html>

<head>
    <title>
        Practical 5.8 Update
    </title>
</head>

<body>
    <?php
    $mobile = $_GET["emobile"];
    $e_mobile = $_GET["emobile"];
    $conn = new mysqli("localhost", "root", "", "196120316064");
    if ($conn) {
        echo "<h1>Connected successfully</h1>";
    } else {
        echo "<h1>Connection unsuccessfull please try again </h1>";
    }

    $sql = "SELECT * FROM employee WHERE E_Mobile_No=$mobile";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_array()) {
            $name = $row["E_Name"];
            $mobileNo = $row["E_Mobile_No"];
            $email = $row["E_Email_Id"];
            $age = $row["E_Age"];
            $occupation = $row["E_occupation"];
            $salary = $row["Salary"];
            $designation = $row["Designation"];
    ?>
            <form action="Pr_5_8_Updated.php" method="post">
                <table border="1">
                    <tr>
                        <td>
                            Employee Name:
                        </td>
                        <td>
                            <input name="username" value="<?php echo $name; ?>" type="text" maxlength="20">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Employee Mobile No:
                        </td>
                        <td>
                            <input name="mobileNo" readonly=true value="<?php echo $mobileNo; ?>" type="text" minlength="10" maxlength="10">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Employee Email:
                        </td>
                        <td>
                            <input name="emailId" value="<?php echo $email; ?>" type="text" maxlength="20">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Employee Age:
                        </td>
                        <td>
                            <input name="age" type="text" value="<?php echo $age; ?>" minlength="2">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Employee Occupation:
                        </td>
                        <td>
                            <input name="occupation" value="<?php echo $occupation; ?>" type="text" maxlength="20">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Employee Salary:
                        </td>
                        <td>
                            <input name="salary" type="text" value="<?php echo $salary; ?>" minlength="2" maxlength="7">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Employee Designation:
                        </td>
                        <td>
                            <input name="designation" value="<?php echo $designation; ?>" type="text" maxlength="20">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Update">
                        </td>
                    </tr>
                </table>
            </form>
    <?php
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</body>

</html>