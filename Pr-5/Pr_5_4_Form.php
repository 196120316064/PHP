<html>

<head>
    <title>
        Practical 5.4 Form
    </title>
</head>

<body>
    <form action="Pr_5_4_Insertinto_Db.php" method="post" style="border: 2px dotted blue;text-align:center; width: 400px;">
        <p>
            Employee Name: <input name="username" type="text" maxlength="20">
        </p>
        <p>
            Employee Mobile No: <input name="mobileNo" type="text" minlength="10" maxlength="10">
        </p>
        <p>
            Employee Email: <input name="emailId" type="text" maxlength="20">
        </p>
        <p>
            Employee Age: <input name="age" type="text" minlength="2">
        </p>
        <p>
            Employee Occupation: <input name="occupation" type="text" maxlength="20">
        </p>
        <p>
            Employee Salary: <input name="salary" type="text" minlength="2" maxlength="7">
        </p>
        <p>
            Employee Designation: <input name="designation" type="text" maxlength="20">
        </p>
        <p><input type="submit" value="Login">  </p>
    </form>
</body>

</html>