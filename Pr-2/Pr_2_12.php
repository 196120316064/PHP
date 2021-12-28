<html>

<head>
    <title>Practical 2.12</title>
</head>

<body>
    <?php
        echo "<h1>File functions</h1>File open using fopen()<br>";
        $f=fopen("test.txt","r+");
        $txt = "We are write inside the test.txt file using fwrite()";
        fwrite($f, $txt);
        echo "Read frome file uing fread()<br>";
        echo fread($f,filesize("test.txt"));
        echo "File close using fclose function";
        fclose($f);
    ?>
</body>
</html>