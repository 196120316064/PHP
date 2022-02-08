<html>
<head>
    <title>
        Practical 4.8
    </title>
</head>
<body>

<?php

    function MyErrorMessage($type,$message,$filename,$linenumber){
        echo "Error Type Is $type <br>";
        echo "Error Message Is $message <br>";
        echo "Error File Name Is $filename <br>";
        echo "Error Line Number $linenumber <br>";
    }

    set_error_handler("MyErrorMessage");
    $num1 = 10;
    $num2 = 0;
    echo $num1/$num2;
    echo "<br>Number 1  :- $num1 <br>";
    echo "Number 2  :- $num2 <br>";
?>

</body>

</html>