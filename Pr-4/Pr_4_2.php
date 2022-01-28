<html>
    <head>
        <title>
            Practical 4.2
        </title>
    </head>
    <body>
        <?php
        // * for creating cookies

        echo "Cookie Is creating <br>";
        setcookie("username", "Rihil Sanghani", time()+30*24*60*60);
        echo "Cookie was created <br>";

        // * For ckeck cookie is set or not

        // echo "<br>Check Cookie was created or not <br>";
        // if(isset($_COOKIE["username"])){
        //     echo "Hi " . $_COOKIE["username"]."<br>";
        // } else{
        //     echo "Welcome Guest! <br>";
        // }
        
        // * For receiving cookie value
        // echo "<br>Cookie Is retrive <br>"; 
        // echo $_COOKIE["username"]."<br>";
    
        // --------------------------------------------------------------------------------

        // * For Update
        // echo "<br>Now cookie is updating<br>"; 
        // setcookie("username", "Nayan Pipalva", time()+30*24*60*60);
        // echo "<br>Now cookie was updated<br>"; 

         // * For receiving cookie value
        //  echo "<br>Cookie Is retrive <br>"; 
        //  echo $_COOKIE["username"]."<br>";

        //  -----------------------------------------------------------------------------------
        
        // * For Delete cookie 

        // echo "<br> Now Cookie is deleting <br>";
        // setcookie("username", "", time()-3600);
        // echo "<br> Cookie was deleted <br>";

        // if(isset($_COOKIE["username"])){
        //     echo "Hi " . $_COOKIE["username"];
        // } else{
        //     echo "Welcome Guest!";
        // }

        // * For receiving cookie value

        // echo "<br>Cookie Is retrive <br>"; 
        // echo $_COOKIE["username"]."<br>";

        ?>
        <br>
        <a href="Pr_4_2_Passing.php">
           Click here to Pass Cookie To another page
        </a>
    </body>
</html>