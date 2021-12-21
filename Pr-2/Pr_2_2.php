<html>

<head>
    <title>Practical 2.2</title>
</head>

<body>
    <?php
    error_reporting(0);
    function mygettype($a)
    {
        switch ($a) {
            case is_int($a):
                return $a . "'s type is:-integer";
                break;
            case is_float($a):
                return $a . "'s type is:-float";
                break;
            case is_string($a):
                return $a . "'s type is:-string";
                break;
            case is_double($a):
                return $a . "'s type is:-double";
                break;
            case is_bool($a):
                return $a . "'s type is:-boolean";
                break;
            case is_object($a):
                return $a . "'s type is:-object";
                break;
            case is_numeric($a):
                return $a . "'s type is:-numeric";
                break;
            case is_array($a):
                return $a . "'s type is:-array";
                break;
            case is_null($a):
                return "$a's type is:-Null";
                break;
            default:
                return "undefine";
                break;
        }
    }
    echo mygettype(10) . "<br>";
    echo mygettype(10.88) . "<br>";
    echo mygettype("rihil") . "<br>";
    echo mygettype(12647828367238.673893874753) . "<br>";
    echo mygettype(true) . "<br>";
    echo mygettype(112344) . "<br>";
    $x = array('rihil' => 064, 'nayan' => 057);
    echo mygettype($x) . "<br>";
    $y = null;
    echo mygettype($y) . "<br>";
    ?>
</body>

</html>