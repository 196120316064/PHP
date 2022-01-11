<html>

<head>
    <title>Practical 3.2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<body>
    <center>
        <div class="card text-dark bg-light my-3" style="max-width: 35rem;">
            <div class="card-header">
                <h1>Student Info</h1>
            </div>
            <div class="card-body">
                <h5 class="card-title">
                    <?php if(isset($_GET["S_Name"])&&isset($_GET["M_Name"]) &&isset($_GET["L_Name"])) {echo "Full Name:-".$_GET["S_Name"]." ".$_GET["M_Name"]." ".$_GET["L_Name"];} ?>
                </h5>
                <p class="card-text">
                    <?php
                      if(isset($_GET["PhoneNo"])&&isset($_GET["Email"]) &&isset($_GET["Address"]) &&isset($_GET["Enroll"]) &&isset($_GET["Hobbies"]) &&isset($_GET["gender"]) &&isset($_GET["Education"]))
                      {
                        echo "<br>Phone No:- ".$_GET["PhoneNo"];
                        echo "<br>E_Mail :- ".$_GET["Email"];
                        echo "<br>Address :- ".$_GET["Address"];
                        echo "<br>Enrollment No :- ".$_GET["Enroll"];
                        echo "<br>Hobbies :- ";
                        foreach($_GET["Hobbies"] as $hobbie){
                          echo $hobbie.", ";
                        }
                        echo "<br>Gender :- ".$_GET["gender"];
                        echo "<br>Education :- ".$_GET["Education"];
                      }
                   ?>
                </p>
            </div>
        </div>
    </center>
</body>

</html>