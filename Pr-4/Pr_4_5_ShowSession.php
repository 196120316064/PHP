<?php
   session_start();
?>
<html>

<head>
    <title>
        Practical 4.5.Show Session
    </title>
</head>

<body>
    <?php
    if(isset($_SESSION["UserName"]) && isset($_SESSION["Password"])){
        echo "Welcome ".$_SESSION["UserName"];
    }
    else {
        echo "Cookie is not set please try again <br>";
        echo '<a href="Pr_4_5_a.php">Click on it for try Again</a>';
    }
    ?>
    <br>Click here to clean <a href = "Pr_4_5_Logout.php" tite = "Logout">Session.
</body>

</html>