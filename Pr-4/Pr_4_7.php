<html>
<head>
    <title>
        Practical 4.7
    </title>
</head>
<body>

<?php

    echo "This File is exist in directory<br>";
    if(file_exists("../Pr-2/test.txt")) {
        $file = fopen("../Pr-2/test.txt", "r");   
        $r= fread($file,filesize("../Pr-2/test.txt"));
        echo $r."<br><br>";
    } 
    else {
        die("Error: The file does not exist.");
    }

    echo "This File is not exist in directory<br>";
    if(file_exists("../Pr-2/test2.txt")) {
        $file = fopen("../Pr-2/test.txt", "r");   
        $r= fread($file,filesize("../Pr-2/test.txt"));
        echo $r."<br><br>";
    } 
    else {
        die("Error: The file does not exist.");
    }
?>

</body>

</html>