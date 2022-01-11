<html>

<head>
    <title>Practical 3.5</title>
</head>

<body>
<form action="Pr_3_5.php" method="get">
    Which cars are your fevorite:-<br> 
        <input type="checkbox" name="cars[]" value="volvo">Volvo</input><br>
        <input type="checkbox" name="cars[]" value="saab">Saab</input><br>
        <input type="checkbox" name="cars[]" value="opel">Opel</input><br>
        <input type="checkbox" name="cars[]" value="audi">Audi</input><br>
        <input type="checkbox" name="cars[]" value="swift">swift</input><br>
        <input type="checkbox" name="cars[]" value="dizer">dizer</input><br>
        <input type="checkbox" name="cars[]" value="vento">vento</input><br>
        <input type="checkbox" name="cars[]" value="verna">verna</input><br>
        <input type="checkbox" name="cars[]" value="ciaz">ciaz</input><br>
        <input type="checkbox" name="cars[]" value="BMW">BMW</input><br>
        <input type="checkbox" name="cars[]" value="alto">alto</input><br>
        <input type="checkbox" name="cars[]" value="centro">centro</input><br>
        <input type="checkbox" name="cars[]" value="celerio">celerio</input><br>
        <input type="checkbox" name="cars[]" value="i20">i20</input><br>
        <input type="checkbox" name="cars[]" value="i10">i10</input><br>
    <input type="submit" value="submit"><br>
</form>
    <?php
        echo "My Fevorit Cars Are:- ";
        if(isset($_GET["cars"])){
            foreach ($_GET["cars"] as $car) {
                echo $car.", ";
            }
        }
    ?>
</body>

</html>