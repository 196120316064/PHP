<html>

<body>
    <?php
    $s1 = 86;
    $s2 = 78;
    $s3 = 80;
    $s4 = 85;
    $s5 = 96;
    echo "Subject-1 : $s1 <br> Subject-2 : $s2 <br> Subject-3 : $s3 <br> Subject-4 : $s4 <br> Subject-5 : $s5 <br>";
    $Total = $s1 + $s2 + $s3 + $s4 + $s5;
    echo "Total Marks = <b> $Total </b><br><br>";
    $Percentage = ($Total * 100) / 500;
    echo "Percentage = <b> $Percentage </b><br><br>";

    if ($Percentage > 90) {
        echo "Grage = AA";
    } elseif ($Percentage < 90 && $Percentage > 80) {
        echo "Grage = <b>AB</b>";
    } elseif ($Percentage < 80 && $Percentage > 70) {
        echo "Grage = BB";
    } elseif ($Percentage < 70 && $Percentage > 55) {
        echo "Grage = BC";
    } elseif ($Percentage < 55 && $Percentage > 40) {
        echo "Grage = CC";
    } else {
        echo "Fail";
    }
    ?>
</body>

</html>