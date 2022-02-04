<?php
   session_start();
?>
<html>

<head>
    <title>
        Practical 4.5.set Set Session
    </title>
</head>

<body>
    <?php
        $name = $_POST["username"];
        $pass = $_POST["password"];
        if($name=="Rihil Sanghani" and $pass=="95371")
        {
            $_SESSION["UserName"]=$name;
            $_SESSION["Password"]=$pass;
            echo "Sessions Are Set<br>";
            echo '<a href="Pr_4_5_ShowSession.php">Click on it for check Session are set or not</a>';
        }
        else {
            echo 'please fill your right details<br>';
            echo '<a href="Pr_4_5_a.php">Click on it for try again</a>';
        }
    ?>
</body>
</html>