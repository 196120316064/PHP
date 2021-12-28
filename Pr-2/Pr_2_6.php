<html>

<head>
    <title>Practical 2.6</title>
</head>

<body>
    <?php
        date_default_timezone_set("Asia/Calcutta");
        echo "<h1>Date function</h1>";
        echo "<b>'d/n/y'</b> returns Today's date :- ".date("d/n/y")."<br>";
        echo "<b>'d/n/y h:i:s'</b> returns Today's date with time".date("d/n/y h:i:s")."<br>";
        echo "<b>'M'</b> returns Today's date of month in 3 alphabet letters:- ".date("M")."<br>";
        echo "<b>'j'</b> returns Today's date of day (1 to 31) without loading zero:- ".date("j")."<br>";
        echo "<b>'D'</b> returns Today's date of day (one to thirty one) in 3 alphaabet letters:- ".date("D")."<br>";
        echo "<b>'l'</b> returns Today's date of day (one to thirty one) in alphaabet letters:- ".date("l")."<br>";
        echo "<b>'m'</b> returns Today's date of month in numeric form (1 to 12):- ".date("m")."<br>";
        echo "<b>'n'</b> returns Today's date of month in numeric form (1 to 12) without loading zero:- ".date("n")."<br>";
        echo "<b>'F'</b> returns Today's date of month in alphabetic form (January to December):- ".date("F")."<br>";
        echo "<b>'Y'</b> returns Todat's date of year in 4 numeric letters (yyyy):- ".date("Y")."<br>";
        echo "<b>'y'</b> returns Today's date of year in 2 numeric letters (yy):- ".date("y")."<br>";
        echo "<b>'a'</b> returns Time status represent in lowercase (PM or AM):- ".date("a")."<br>";
        echo "<b>'A'</b> returns Time status represent in uppercase (PM or AM):- ".date("A")."<br>";
        echo "<b>'g'</b> returns Today's time in 1 to 12 formate :- ".date("g")."<br>";
        echo "<b>'G'</b> returns Today's time in 0 to 23 formate :- ".date("G")."<br>";
        echo "<b>'h'</b> returns Today's time in 1 to 12 formate :- ".date("h")."<br>";
        echo "<b>'H'</b> returns Today's time in 0 to 23 formate :- ".date("H")."<br>";
        echo "<b>'i'</b> returns Minutes with loading zero (00 to 59) :-  ".date("i")."<br>";
        echo "<b>'s'</b> returns Second with loading zero (00 to 59) :- ".date("s")."<br>";

        echo "<h1>setdate() function</h1>";
        $date = date_create();
        $y = 2022;
        $n = "Jan";
        $d = 1;
        echo "We are set <b>Year : $y , Month : $n , Day : $d </b><br> Than we are appling date_set():- ";
        date_date_set($date,2001,2,3);
        echo "Now see the result :- <h1>".date_format($date,"y-n-d")."</h1>";


    ?>
</body>
</html>    