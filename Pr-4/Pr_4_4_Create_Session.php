<?php
session_start();
?>
<html>
<head>
    <title>
        Practical 4.4 Create Session
    </title>
</head>

<body>
    <?php
        echo "Creating session Variable";
        $_SESSION["userName"]="Rihil Sanghani";
        $_SESSION["EmailId"]="rihilsanghani@gmail.com";
        $_SESSION["Password"]="123456";
    ?>
    <a href="Pr_4_4_Fatch_Session.php">Onclick For Check Session is created or not</a>
</body>

</html>