<html>

<head>
    <title>Practical 2.2</title>
</head>

<body>
    <?php
    function mygettype($a)
    {
        switch ($a) {
            case is_int($a):
                return "integer";
                break;
            case is_float($a):
                return "float";
                break;
            case is_string($a):
                return "string";
                break;
            case is_double($a):
                return "double";
                break;
            case is_bool($a):
                return "boolean";
                break;
            case is_object($a):
                return "object";
                break;
            case is_numeric($a):
                return "numeric";
                break;
            case is_array($a):
                return "array";
                break;
            default:
                return "null";
                break;
        }
    }
    echo mygettype(10)."<br>";
    echo mygettype(10.88)."<br>";
    echo mygettype("rihil")."<br>";
    echo mygettype(12647828367238.673893874753)."<br>";
    echo mygettype(true)."<br>";
    echo mygettype(112344)."<br>";
    $x= array(1,2,3,4,5);
    echo mygettype($x)."<br>";
    $y;
    echo mygettype($y)."<br>";
    ?>
</body>

</html>