<html>

<head>
    <title>Practical 3.3</title>
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
                <h1>User Info</h1>
            </div>
            <div class="card-body">
                <h5 class="card-title">
                    <?php if(isset($_POST["S_Name"])&&isset($_POST["M_Name"]) &&isset($_POST["L_Name"])) {echo "Full Name:-".$_POST["S_Name"]." ".$_POST["M_Name"]." ".$_POST["L_Name"];} ?>
                </h5>
                <p class="card-text">
                    <?php
                      if(isset($_POST["PhoneNo"])&&isset($_POST["Email"]) &&isset($_POST["Address"]) &&isset($_POST["Hobbies"]) &&isset($_POST["gender"]) &&isset($_POST["Education"]))
                      {
                        echo "<br>Phone No:- ".$_POST["PhoneNo"];
                        echo "<br>E_Mail :- ".$_POST["Email"];
                        echo "<br>Address :- ".$_POST["Address"];
                        echo "<br>Hobbies :- ";
                        foreach($_POST["Hobbies"] as $hobbie){
                          echo $hobbie.", ";
                        }
                        echo "<br>Gender :- ".$_POST["gender"];
                        echo "<br>Education :- ".$_POST["Education"];
                      }
                   ?>
                </p>
            </div>
        </div>
    </center>
</body>

</html>