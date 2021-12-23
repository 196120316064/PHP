<html>

<head>
    <title>Practical 2.6</title>
</head>

<body>
    <?php
        echo "<h1>Date function</h1>";
        echo "Today's date :- ".date("d/n/y")."<br>";
        echo "Today's date with time".date("d/n/y h:i:s")."<br>";
        echo "Today's date of month in 3 alphabet letters:- ".date("M")."<br>";
        echo "Today's date of day (1 to 31) without loading zero:- ".date("j")."<br>";
        echo "Today's date of day (one to thirty one) in 3 alphaabet letters:- ".date("D")."<br>";
        echo "Today's date of day (one to thirty one) in alphaabet letters:- ".date("l")."<br>";
        echo "Today's date of month in numeric form (1 to 12):- ".date("m")."<br>";
        echo "Today's date of month in numeric form (1 to 12) without loading zero:- ".date("n")."<br>";
        echo "Today's date of month in alphabetic form (January to December):- ".date("F")."<br>";
        echo "Todat's date of year in 4 numeric letters (yyyy):- ".date("Y")."<br>";
        echo "Todat's date of year in 2 numeric letters (yy):- ".date("y")."<br>";
        echo "time status represent in lowercase (PM or AM):- ".date("a")."<br>";
        echo "time status represent in uppercase (PM or AM):- ".date("A")."<br>";
        echo "Today's time in 1 to 12 formate".date("g")."<br>";
        echo "Today's time in 0 to 23 formate".date("G")."<br>";
        echo date("h")."<br>";
        echo date("H")."<br>";
        echo date("i")."<br>";
        echo date("s")."<br>";
    ?>
</body>
</html>    