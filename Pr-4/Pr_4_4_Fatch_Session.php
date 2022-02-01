<?php
session_start();
?>
<html>

<head>
    <title>
        Practical 4.4 Fatch Session
    </title>
</head>

<body>
    <?php
        echo "User Name is :- ".$_SESSION["userName"]."<br>";
        echo "User E-Mail Id is :- ".$_SESSION["EmailId"]."<br>";
        echo "User Password is :- ".$_SESSION["Password"]."<br>";
    ?>
</body>

</html>