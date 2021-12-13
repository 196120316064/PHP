<html>
<head>
    <title>Practical 1.9(B)</title>
</head>
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

  $a = 10;
  $b = 30;
  $c = 20;

  largest($a, $b, $c);

  ?>

</body>

</html>