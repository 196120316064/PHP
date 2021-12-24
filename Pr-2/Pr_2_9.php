<html>

<head>
    <title>Practical 2.6</title>
</head>

<body>
    <?php
        echo "<h1>Math function</h1>";

        echo "<h2>abs() Return the absolute value</h2>";
        echo "passed value is <b>-13</b> appling abs() Ans is :- <b>".abs(-13)."</b></br>";
        echo "passed value is <b>0</b> appling abs() Ans is :- <b>".abs(0)."</b></br>";
        echo "passed value is <b>13</b> appling abs() Ans is :- <b>".abs(13)."</b></br>";

        echo "<h2>ceil() Round numbers up to the nearest integer</h2>";
        echo "passed value is <b>-15.5</b> appling ceil() Ans is :- <b>".ceil(-15.5)."</b></br>";
        echo "passed value is <b>0.7</b> appling ceil() Ans is :- <b>".ceil(0.7)."</b></br>";
        echo "passed value is <b>13.2</b> appling ceil() Ans is :- <b>".ceil(13.2)."</b></br>";

        echo "<h2>floor() Round numbers down to the nearest integer</h2>";
        echo "passed value is <b>-15.5</b> appling floor() Ans is :- <b>".floor(-15.5)."</b></br>";
        echo "passed value is <b>0.7</b> appling floor() Ans is :- <b>".floor(0.7)."</b></br>";
        echo "passed value is <b>13.2</b> appling floor() Ans is :- <b>".floor(13.2)."</b></br>";

        echo "<h2>round() Round numbers</h2>";
        echo "passed value is <b>-15.5</b> appling round() Ans is :- <b>".round(-15.5)."</b></br>";
        echo "passed value is <b>0.7</b> appling round() Ans is :- <b>".round(0.7)."</b></br>";
        echo "passed value is <b>13.2</b> appling round() Ans is :- <b>".round(13.2)."</b></br>";

        echo "<h2>fmod() Return the remainder of x/y</h2>";
        echo "passed value is <b>5,2</b> appling fmod() Ans is :- <b>".fmod(5,2)."</b></br>";
        echo "passed value is <b>49,7</b> appling fmod() Ans is :- <b>".fmod(49,7)."</b></br>";
        echo "passed value is <b>-13.5</b> appling fmod() Ans is :- <b>".fmod(-13,5)."</b></br>";

        echo "<h2>min() Return lowest value</h2>";
        echo "passed value is <b>5,2,6,4,8,42</b> appling min() Ans is :- <b>".min(5,2,6,4,8,42)."</b></br>";
        echo "passed value is <b>-4,-5,-6,-7,-3,-243,-3</b> appling min() Ans is :- <b>".min(-4,-5,-6,-7,-3,-243,-3)."</b></br>";
        echo "passed value is <b>-13,5</b> appling min() Ans is :- <b>".min(-13,5)."</b></br>";

        echo "<h2>max() Return highest value</h2>";
        echo "passed value is <b>5,2,6,4,8,42</b> appling max() Ans is :- <b>".max(5,2,6,4,8,42)."</b></br>";
        echo "passed value is <b>-4,-5,-6,-7,-3,-243,-3</b> appling max() Ans is :- <b>".max(-4,-5,-6,-7,-3,-243,-3)."</b></br>";
        echo "passed value is <b>-13,5</b> appling max() Ans is :- <b>".max(-13,5)."</b></br>";

        echo "<h2>pow() Return x raised to the power of y</h2>";
        echo "passed value is <b>5,2</b> appling pow() Ans is :- <b>".pow(5,2)."</b></br>";
        echo "passed value is <b>49,7</b> appling pow() Ans is :- <b>".pow(4,7)."</b></br>";
        echo "passed value is <b>-13,5</b> appling pow() Ans is :- <b>".pow(-13,2)."</b></br>";

        echo "<h2>sqrt() Return the square root of a number</h2>";
        echo "passed value is <b>49</b> appling sqrt() Ans is :- <b>".sqrt(49)."</b></br>";
        echo "passed value is <b>-49</b> appling sqrt() Ans is :- <b>".sqrt(-49)."</b></br>";
        echo "passed value is <b>99</b> appling sqrt() Ans is :- <b>".sqrt(99)."</b></br>";

        echo "<h2>rand() generates a random integer</h2>";
        echo "appling rand() with out passing any argument Ans is :- <b>".rand()."</b></br>";
        echo "passed value is <b>1,50</b> appling rand() Ans is :- <b>".rand(1,50)."</b></br>";
        echo "passed value is <b>150,200</b> appling rand() Ans is :- <b>".rand(150,200)."</b></br>";
    ?>
</body>
</html> 