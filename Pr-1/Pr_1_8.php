<html>

<body style="font-family: 'Times New Roman', Times, serif;  ">
  <?php
  $x = 1;

  echo "<b>While loop </b><br>";
  while ($x <= 5) {
    echo "The number is:
  $x <br>";
    $x++;
  }

  echo "<br><b>Do while loop</b><br>";
  $x = 1;

  do {
    echo "The number is: $x <br>";
    $x++;
  } while ($x <= 5);

  echo "<br><b>For loop</b><br>";
  for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
  }

  echo "<br><b>Foreach loop</b><br>";
  $colors = array("red", "green", "blue", "yellow");

  foreach ($colors as $value) {
    echo "$value <br>";
  }
  ?>
</body>

</html>