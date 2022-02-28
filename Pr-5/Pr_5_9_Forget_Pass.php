<html>

<head>
    <title>
        Practical 5.9
    </title>
</head>

<body>
    <?php
    $mobile = $_GET["Mobile_No"];
    ?>
    <form action="Pr_5_9_Forget_Pass_Updated.php" method="POST">
        <table border="1">
            <tr>
                <td>
                    Mobile No
                </td>
                <td>
                    <input type="text" name="Mobile_No" id="mobile" readonly=true value="<?php echo $mobile; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Email id
                </td>
                <td>
                    <input type="text" name="E_Mail" id="E_Mail">
                </td>
            </tr>
            <tr>
                <td>
                    Password:
                </td>
                <td>
                    <input name="password" type="text" maxlength="20">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>