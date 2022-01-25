<html>
    <head>
        <title>
            Practical 4.2
        </title>
    </head>
    <body>
        <?php
        setcookie("username", "Rihil Sanghani", time()+30*24*60*60);
        
        // For receiving cookie value 
        echo $_COOKIE["username"]."<br>";

        // For ckeck cookie is set or not
        if(isset($_COOKIE["username"])){
            echo "Hi " . $_COOKIE["username"];
        } else{
            echo "Welcome Guest!";
        }

        // For Update 
        // setcookie("username", "Nayan Pipalva", time()+30*24*60*60);

        // For Delete cookie 
        echo "<br>";
        setcookie("username", "", time()-3600);
        if(isset($_COOKIE["username"])){
            echo "Hi " . $_COOKIE["username"];
        } else{
            echo "Welcome Guest!";
        }
        ?>
        <br>
        <a href="Pr_4_2_Passing.php">
           Click here to Pass Cookie To another page
        </a>
    </body>
</html>