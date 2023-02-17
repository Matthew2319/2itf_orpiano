<?php
    if (isset($_POST['submit'])) {
        $salar = $_POST['salary'];
        $split = $_POST['Mon'];

        if ($_POST['Mon'] == "Bi"){
            $salar = $salar * 2;
            $selar = $salar / 2;
            $ansal = $salar * 12;
          

            if ($salar <= 250000) {
                $montax = 0;
                $antax = $montax * 12;
            }


            else if ($salar <= 400000 && $salar > 250000) {
                $montax = $salar * 0.2;
                $antax = $montax * 12;
            }


            else if ($salar <= 800000 && $salar > 400000) {
                $montax = $salar * 0.25 - 30000;
                $antax = $montax * 12;
            }


            else if ($salar <= 2000000 && $salar > 800000) {
                $montax = $salar * 0.3 - 130000;
                $antax = $montax * 12;
            }


            else if ($salar <= 8000000 && $salar > 2000000) {
                $montax = $salar * 0.32 - 490000;
                $antax = $montax * 12;
            }


            else if ($salar > 8000000) {
                $montax = $salar * 0.35 - 2410000;
                $antax= $montax * 12;
            }  
            echo "<fieldset>". "<legend>" . " Tex Mail Surprise!~ Here's what you got". "</legend>";
            echo  "<center>" . "<font color=whitesmoke>" . "Bi-Monthly Salary: " . $selar . "<br>" ;
            echo "Monthly Salary: " . $salar . "<br>" ;
            echo "Annual Salary: " . $ansal . "<br>" ;
            echo "Monthly Taxes: " . $montax . "<br>" ;
            echo "Annual Taxes: " . $antax . "<br>" . "</fieldset>" ;
        }

        
        else if ($_POST['Mon'] == "Mono"){
            $ansal = $salar * 12;
           

            if ($salar <= 250000) {
                $montax = 0;
                $antax = $montax * 12;
            }


            else if ($salar <= 400000 && $salar > 250000) {
                $montax = $salar * 0.2;
                $antax = $montax * 12;
            }


            else if ($salar <= 800000 && $salar > 400000) {
                $montax = $salar * 0.25 - 30000;
                $antax = $montax * 12;
            }


            else if ($salar <= 2000000 && $salar > 800000) {
                $montax = $salar * 0.3 - 130000;
                $antax = $montax * 12;
            }


            else if ($salar <= 8000000 && $salar > 2000000) {
                $montax = $salar * 0.32 - 490000;
                $antax = $montax * 12;
            }


            else if ($salar > 8000000) {
                $montax = $salar * 0.35 - 2410000;
                $antax= $montax * 12;
            }  

            echo "<fieldset>". "<legend>" . "Tex Mail Surprise!~ Here's what you got". "</legend>";
            echo  "<center>" . "<font color=whitesmoke>" . "Monthly Salary: " . $salar . "<br>" ;
            echo "Annual Salary: " . $ansal . "<br>" ;
            echo "Monthly Taxes: " . $montax . "<br>" ;
            echo "Annual Taxes: " . $antax . "<br>" . "</fieldset>" ;
        }
    }

?>

<html>
<head> 
<title>Not a Taxi</title>
<style>
            body{background-color: #424549;}
            H1, legend,p, fieldset{color: whitesmoke; text-align:center;}
            
        </style>
</head>

    <body>
    <h1>Tex the Tax Collector!</h1>

    <fieldset>
        <legend>"Tex Tax Time! I'll see if you can afford that fancy sports car in 3 to 4 years or if you and your family will go under in 3 quarters"</legend>
        <table border=2>
        <form method="post">
        <p>Salary: <input type="text" id="salary" name="salary"/><br></p>

        <p><input type="radio" name="Mon" value="Bi">Bi-Monthly</input><input type="radio" name="Mon" value="Mono">Monthly</input><br></p>

        <p><input type= "submit" value="KOWALSKI, ANALYSIS" name= "submit"/><br></p>
</form>
</table>
</fieldset>
    </body>
</html>