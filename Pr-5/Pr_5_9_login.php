<html>

<head>
    <title>
        Practical 5.9
    </title>
</head>

<body>
    <form method="get" action="?" style="border: 2px dotted blue; text-align:center; width: 400px;">
        <p>
            Employee MobileNo: <input name="mobile" type="text">
        </p>
        <p>Password: <input name="password" type="password">
        </p>
        <p><input type="submit" value="Login" onclick=<?php login() ?>> </span> </p>
    </form>

    <?php
    function login()
    {
        $mobileNo = $_GET["mobile"];
        $password = $_GET["password"];
        $conn = new mysqli("localhost", "root", "", "196120316064");
        if (!$conn) {
            echo "<h1>Connection unsuccessfull please try again </h1>";
        }

        $sql = "SELECT * FROM employee";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                if ($row["E_Mobile_No"] == $mobileNo && $row["Password"] == $password) {
                    echo "login successfilly";
                    header("Location: http://localhost:8080/196120316064/Pr-5/Pr_5_9_login_success.php");
                    exit;
                    break;
                } else {
                    echo "please enter valid detail or registratin<br>";
                    echo "<a href='Pr_5_9_Registration_Form.php' style='text-decoration: none'>registr</a>";
                    break;
                }
            }
        } else {
            echo "0 results";
        }
        $conn->close();
    }
    ?>
</body>

</html>