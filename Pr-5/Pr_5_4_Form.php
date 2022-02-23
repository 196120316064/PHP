<html>

<head>
    <title>
        Practical 5.4 Form
    </title>
</head>

<body>
    <form action="Pr_5_4_Insertinto_Db.php" method="post">
    <table border="1">
                    <tr>
                        <td>
                            Employee Name:
                        </td>
                        <td>
                            <input name="username" type="text" maxlength="20">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Employee Mobile No:
                        </td>
                        <td>
                            <input name="mobileNo" readonly=true type="text" minlength="10" maxlength="10">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Employee Email:
                        </td>
                        <td>
                            <input name="emailId" type="text" maxlength="20">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Employee Age:
                        </td>
                        <td>
                            <input name="age" type="text"  minlength="2">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Employee Occupation:
                        </td>
                        <td>
                            <input name="occupation" type="text" maxlength="20">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Employee Salary:
                        </td>
                        <td>
                            <input name="salary" type="text" minlength="2" maxlength="7">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Employee Designation:
                        </td>
                        <td>
                            <input name="designation" type="text" maxlength="20">
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