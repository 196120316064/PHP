<html>

<head>
    <title>
        Practical 5.9
    </title>
</head>

<body>
    <?php
    $mobile_no = $_POST["Mobile_No"];
    $email = $_POST["E_Mail"];
    $pass = $_POST["password"];
    $conn = new mysqli("localhost", "root", "", "196120316064");
    if ($conn) {
        echo "<h1>Connected successfully</h1>";
    } else {
        echo "<h1>Connection unsuccessfull please try again </h1>";
    }

    $sql = "SELECT E_Mobile_No , E_Email_Id from employee WHERE E_Mobile_No = '$mobile_no'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($mobile_no == $row['E_Mobile_No'] && $email == $row['E_Email_Id']) {
                echo "<h1>Verify Successfull</h1>";
                $sql1 = "UPDATE employee SET Password = '$pass' WHERE E_Mobile_No='$mobile_no'";
                if ($conn->query($sql1) === TRUE) {
                    echo "<br><h1>Record Updated successfully</h1>";
                    echo "<a href='Pr_5_9_Login.php'>Go back to login</a>";
                } else {
                    echo "<h1>Error: " . $sql1 . "<br>" . $conn->error."</h1>";
                }
                break;
            } else {
                echo "<h1>Please Enter valid details</h1>";
    ?>
    <?php
            }
        }
    } else {
        echo "<h1>Error: " . $sql . "<br>" . $conn->error . "</h1>";
    }
    $conn->close();
    ?>
</body>

</html>