<?php
   session_start();
?>
<html>

<head>
    <title>
        Practical 5.4
    </title>
</head>

<body>
    <?php
        $name = $_POST["username"];
        $mobileNo =intval($_POST["mobileNo"]);
        $email = $_POST["emailId"];
        $age = intval($_POST["age"]);
        $occupation = $_POST["occupation"];
        $conn = new mysqli("localhost","root","","196120316064");
        if ($conn) {
            echo "<h1>Connected successfully</h1>";
        }
        else{
            echo "<h1>Connection unsuccessfull please try again </h1>";
        }

        $sql = "INSERT INTO employee VALUES ('$name',$mobileNo,'$email',$age,'$occupation')";

        if ($conn->query($sql) === TRUE) {
            echo "<br><h1>New record created successfully</h1>";
        } else {
            echo "<h1>Error: " . $sql . "<br>" . $conn->error."</h1>";
        }
        $conn->close();
    ?>
</body>
</html>