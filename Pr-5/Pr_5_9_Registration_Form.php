<html>

<head>
    <title>
        Practical 5.9 Registration
    </title>
</head>

<body>
    <form action="Pr_5_9_insert_record.php" method="post" style="border: 2px dotted blue;text-align:center; width: 400px;">
        <p>
            Employee Name: <input required name="username" type="text" maxlength="20">
        </p>
        <p>
            Employee Mobile No: <input required name="mobileNo" type="text" minlength="10" maxlength="10">
        </p>
        <p>
            Employee Email: <input required name="emailId" type="text">
        </p>
        <p>
            Employee Age: <input required name="age" type="text" minlength="2">
        </p>
        <p>
            Employee Occupation: <input required name="occupation" type="text" maxlength="20">
        </p>
        <p>
            Employee Salary: <input required name="salary" type="text" minlength="2" maxlength="7">
        </p>
        <p>
            Employee Designation: <input required name="designation" type="text" maxlength="20">
        </p>
        <p>
            Password: <input required name="password" type="password">
        </p>
        <p><input required type="submit" value="Login"> </p>
    </form>
</body>

</html>