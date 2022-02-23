<html>

<head>
    <title>
        Practical 5.8
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
        $conn = new mysqli("localhost","root","","196120316064");
        if ($conn) {
            echo "<h1>Connected successfully</h1>";
        }
        else{
            echo "<h1>Connection unsuccessfull please try again </h1>";
        }

        $sql = "UPDATE employee SET E_Name = '$name',E_Email_Id='$email',E_Age='$age',E_occupation='$occupation',Salary='$salary',Designation='$designation' WHERE E_Mobile_No='$mobileNo'";

        if ($conn->query($sql) === TRUE) {
            echo "<br><h1>Record Updated successfully</h1>";
            echo "<a href='Pr_5_8.php'>Go back and see</a>";

        } else {
            echo "<h1>Error: " . $sql . "<br>" . $conn->error."</h1>";
        }
        $conn->close();
    ?>
</body>
</html>