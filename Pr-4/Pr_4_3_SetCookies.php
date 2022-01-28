<html>

<head>
    <title>
        Practical 4.3.set Cookies
    </title>
</head>

<body>
    <?php
        $name = $_POST["username"];
        $pass = $_POST["password"];
        if(isset($_POST["username"]) && isset($_POST["password"]))
        {
            setcookie("UserName",$name);
            setcookie("Password",$pass);
            echo "Cookies Are Set<br>";
            echo '<a href="Pr_4_3_ShowCookies.php">Click on it for check cookies are set or not</a>';
        }
        else {
            echo 'please fill your details<br>';
            echo '<a href="Pr_4_3.php">Click on it for check cookies are set or not</a>';
        }
    ?>
</body>
</html>