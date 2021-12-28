<html>

<head>
    <title>Practical 2.13</title>
</head>

<body>
    <?php
        $f=fopen("read.txt","r+");
        $r= fread($f,filesize("read.txt"));
        echo $r."<br><br>";
        echo "<b> ".count(explode(" ",$r))." </b>Words  inside the read.txt file";
        fclose($f);
    ?>
</body>
</html>