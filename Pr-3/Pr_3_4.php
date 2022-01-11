<html>

<head>
    <title>Practical 3.4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<body>
    <center>
        <form action="Pr_3_4.php" method="get">

            <div class="card border-dark my-3" style="width: 30rem;">
                <div class="card-body">
                    <h5 class="card-header">Calculator</h5>
                    <div class="col-auto my-2">
                        First Num:- <input class="my-3" require type="text" name="F_Num" id="F_numtxt"><br>
                        Second Num:- <input class="my-3" require type="text" name="S_Num" id="S_numtxt"><br>
                        Answer:- <input class="my-3" value="<?php echo answer(); ?>" type="text" readonly name="Ans" id="Ans_numtxt"><br>
                    </div>
                    <div class="row ">
                        <div class="col-4 d-grid gap-2 my-3">
                            <input type="submit" name="Add" class="btn btn-dark" value="+"></input>
                        </div>
                        <div class="col-4 d-grid gap-2 my-3">
                            <input type="submit" name="Sub" class="btn btn-dark" value="-"></input>
                        </div>
                        <div class="col-4 d-grid gap-2 my-3">
                            <input type="submit" name="Mod" class="btn btn-dark" value="%"></input>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 d-grid gap-2 my-3">
                            <input type="submit" name="Mul" class="btn btn-dark" value="*"></input>
                        </div>
                        <div class="col-4 d-grid gap-2 my-3">
                            <input type="submit" name="Div" class="btn btn-dark" value="/"></input>
                        </div>
                        <div class="col-4 d-grid gap-2 my-3">
                            <input type="submit" name="Sqr" class="btn btn-dark" value="^"></input>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </center>
    <?php
        function answer(){
            if(isset($_GET["Add"])){
                $ans = $_GET["F_Num"] + $_GET["S_Num"];
                return $ans;
            }
            if(isset($_GET["Sub"])){
                $ans = $_GET["F_Num"] - $_GET["S_Num"];
                return $ans;
            }
            if(isset($_GET["MOd"])){
                $ans = $_GET["F_Num"] % $_GET["S_Num"];
                return $ans;
            }
            if(isset($_GET["Mul"])){
                $ans = $_GET["F_Num"] * $_GET["S_Num"];
                return $ans;
            }
            if(isset($_GET["Div"])){
                $ans = $_GET["F_Num"] / $_GET["S_Num"];
                return $ans;
            }
            if(isset($_GET["Sqr"])){
                $ans = $_GET["F_Num"] ^ $_GET["S_Num"];
                return $ans;
            }
        }
    ?>
</body>

</html>