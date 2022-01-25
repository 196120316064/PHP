<html>
    <head>
        <title>
            Practical 4.1 (Pass string)
        </title>
    </head>
    <body>
        <?php
            $fname="Rihil";
            $lname="Sanghani";
            $enrool="196120316064";
           ?>
           <a href="Pr_4_1_Retrive.php?First_name=<?php echo $fname; ?>&last_name=<?php echo $lname; ?>&EnrollMent_No=<?php echo $enrool; ?>">
           Click here to Pass Variable through URL
           </a>
    </body>
</html>