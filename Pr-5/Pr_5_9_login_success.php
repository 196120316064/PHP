<html>

<head>
    <title>
        Practical 5.9
    </title>
</head>

<body>
    <?php
    $mobileNo = $_POST["mobile"];
    $pass = $_POST["password"];
    $conn = new mysqli("localhost", "root", "", "196120316064");
    if ($conn) {
        echo "<h1>Connected successfully</h1>";
    } else {
        echo "<h1>Connection unsuccessfull please try again </h1>";
    }

    $sql = "SELECT E_Mobile_No , Password from employee WHERE E_Mobile_No = $mobileNo";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($mobileNo == $row['E_Mobile_No'] && $pass == $row['Password']) {
                echo "<h1>Login Successfull</h1>";
                break;
            } else {
                echo "<h1>Please Enter valid details</h1>";
    ?>
    <a style='text-decoration: none;' href='Pr_5_9_Forget_Pass.php?Mobile_No=<?php echo $mobileNo; ?>'>Foeget Password</a>
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