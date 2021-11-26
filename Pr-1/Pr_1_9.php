<html>

<body>
  <?php

  function largest($x, $y, $z)
  {
    $max = $x;

    if ($x >= $y && $x >= $z)
      $max = $x;
    if ($y >= $x && $y >= $z)
      $max = $y;
    if ($z >= $x && $z >= $y)
      $max = $z;

    echo "Largest number among $x, $y and $z is: $max\n";
  }

  echo "Enter Value of x:- ";
  $x = fgets(STDIN); // reads one line from STDIN

  echo "Enter value of Y:- ";
  $y = fgets(STDIN); // reads one line from STDIN

  echo "Enter value of z:- ";
  $z = fgets(STDIN); // reads one line from STDIN


  largest($x, $y, $z);

  ?>

</body>

</html>