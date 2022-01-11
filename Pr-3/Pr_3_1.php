<html>

<head>
    <title>Practical 3.1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<body>
    <form action="#" method="get">
        <center>
            <div class="card my-5" style="width: 38rem;">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Label</th>
                                <th scope="col">Answer</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">Surname</td>
                                <td><input type="text" name="S_Name" id="SNametxt" placeholder="Enter Surname"></td>
                            </tr>
                            <tr>
                                <td scope="row">Middle Name</td>
                                <td><input type="text" name="M_Name" id="MNametxt" placeholder="Enter Middlename"></td>
                            </tr>
                            <tr>
                                <td scope="row">Last Name</td>
                                <td><input type="text" name="L_Name" id="LNametxt" placeholder="Enter Lastname"></td>
                            </tr>
                            <tr>
                                <td scope="row">Phone No</td>
                                <td><input type="text" name="PhoneNo" id="PhonrNo" placeholder="Enter Phone No"></td>
                            </tr>
                            <tr>
                                <td scope="row">E-MAil</td>
                                <td><input type="email" name="Email" id="Email" placeholder="Enter Email Id"></td>
                            </tr>
                            <tr>
                                <td scope="row">Address</td>
                                <td><textarea name="Address" id="Address" cols="30" rows="2"
                                        placeholder="Enter Home Address"></textarea></td>
                            </tr>
                            <tr>
                                <td scope="row">Hobbies</td>
                                <td><input type="checkbox" name="Hobbies" id="Playing" value="Playing">Playing <input
                                        type="checkbox" name="Hobbies" id="Reading" value="Reading">Reading <input
                                        type="checkbox" name="Hobbies" id="Studing" value="Studing">Studing</td>
                            </tr>
                            <tr>
                                <td scope="row">Enrollment No</td>
                                <td><input type="text" name="Enroll" id="Enroll" placeholder="Enter Enrollment No"></td>
                            </tr>
                            <tr>
                                <td scope="row">Gender</td>
                                <td><input type="radio" name="gender" value="Male" id="male">Male <input type="radio"
                                        name="gender" value="Female" id="female">Female <input type="radio"
                                        name="gender" value="Other" id="other">Other</td>
                            </tr>
                            <tr>
                                <td scope="row">Department</td>
                                <td><select name="Education" size="1">
                                        <option value="It">It</option>
                                        <option value="Civil">Civil</option>
                                        <option value="EC">EC</option>
                                        <option value="Power_Electronics">Power_Electronics</option>
                                        <option value="Auto_Mobile">Auto_Mobile</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td scope="row">Password</td>
                                <td><input type="password" name="password" id="password"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <center><input type="submit" value="submit"> <input type="reset" value="reset">
                                    </center>
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </center>
    </form>
</body>

</html>