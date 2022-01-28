<html>

<head>
    <title>
        Practical 4.3.Show Cookies
    </title>
</head>

<body>
    <?php
    if(isset($_COOKIE["UserName"]) && isset($_COOKIE["Password"])){
        echo "Welcome ".$_COOKIE["UserName"];
    }
    else {
        echo "Cookie is not set please try again <br>";
        echo '<a href="Pr_4_3.php">Click on it for try Again</a>';
    }
    ?>
</body>

</html>