<html>

<head>
    <title>
        Practical 4.9
    </title>
</head>

<body>

    <?php
function checkNum($number) {
  if($number<18) {
    throw new Exception("Value must be 18 or above for drive");
  }
  return true;
}

try {
  checkNum(2);
  echo 'Now you are able to drive a car of bike';
}

catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
?>

</body>

</html>