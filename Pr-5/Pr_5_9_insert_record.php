<html>

<head>
    <title>
        Practical 5.9
    </title>
</head>

<body>
    <?php
        $name = $_POST["username"];
        $mobileNo =$_POST["mobileNo"];
        $email = $_POST["emailId"];
        $age = $_POST["age"];
        $occupation = $_POST["occupation"];
        $salary = $_POST["salary"];
        $designation = $_POST["designation"];
        $password = $_POST["password"];
        $conn = new mysqli("localhost","root","","196120316064");
        if ($conn) {
            echo "<h1>Connected successfully</h1>";
        }
        else{
            echo "<h1>Connection unsuccessfull please try again </h1>";
        }

        $sql = "INSERT INTO employee VALUES ('$name',$mobileNo,'$email',$age,'$occupation',$salary,'$designation','$password')";

        if ($conn->query($sql) === TRUE) {
            echo "<br><h1>New record created successfully</h1> <br>";
            echo "<a href='Pr_5_9_login.php' style='text-decoration: none'>Login</a>";
        } else {
            echo "<h1>Error: " . $sql . "<br>" . $conn->error."</h1>";
        }
        $conn->close();
    ?>
</body>
</html>