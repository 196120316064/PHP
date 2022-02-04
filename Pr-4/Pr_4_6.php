<?php
   session_start();
?>
<html>

<head>
    <title>
        Practical 4.6
    </title>
</head>

<body>
    <?php     
        if(isset($_SESSION['views'])){
            $_SESSION['views'] = $_SESSION['views']+1;
        }
        else
            $_SESSION['views']=1;
              
        echo"views = ".$_SESSION['views']; 
    ?>
</body>
</html>