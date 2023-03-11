<?php
    if (isset($_POST['submit'])) {
        $salar = $_POST['salary'];
        $split = $_POST['Mon'];

        if ($_POST['Mon'] == "Bi"){
            $salar = $salar * 2;
            $selar = $salar / 2;
            $ansal = $salar * 12;
          

            if ($ansal <= 250000) {
                $montax = 0;
                $antax = 0;
            }


            else if ($ansal <= 400000 && $ansal > 250000) {
                $reduce = $ansal - 250000;
                $antax = $reduce * 0.2;
                $montax = $antax / 12;
            }


            else if ($ansal <= 800000 && $ansal > 400000) {
                $reduce1 = $ansal - 400000;
                $antax = $reduce1 * 0.25 + 30000;
                $montax = $antax / 12;
            }


            else if ($ansal <= 2000000 && $ansal > 800000) {
                $reduce2 = $ansal - 800000;
                $antax = $reduce2 * 0.3 + 130000;
                $montax = $antax / 12;
            }


            else if ($ansal <= 8000000 && $ansal > 2000000) {
                $reduce3 = $ansal - 2000000;
                $antax = $reduce3 * 0.32 + 490000;
                $montax = $antax / 12;
            }


            else if ($ansal > 8000000) {
                $reduce4 = $ansal - 8000000;
                $antax = $reduce4 * 0.35 + 2410000;
                $montax = $antax / 12;
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
           $antax=0;
           $montax=0;

            if ($ansal <= 250000) {
                $montax = 0;
                $antax = 0;
            }


            else if ($ansal <= 400000 && $ansal > 250000) {
                $reduce = $ansal - 250000;
                $antax = $reduce * 0.2;
                $montax = $antax / 12;
            }


            else if ($ansal <= 800000 && $ansal > 400000) {
                $reduce1 = $ansal - 400000;
                $antax = $reduce1 * 0.25 + 30000;
                $montax = $antax / 12;
            }


            else if ($ansal <= 2000000 && $ansal > 800000) {
                $reduce2 = $ansal - 800000;
                $antax = $reduce2 * 0.3 + 130000;
                $montax = $antax / 12;
            }


            else if ($ansal <= 8000000 && $ansal > 2000000) {
                $reduce3 = $ansal - 250000;
                $antax = $reduce3 * 0.32 + 490000;
                $montax = $antax / 12;
            }


            else if ($ansal > 8000000) {
                $reduce4 = $ansal - 8000000;
                $antax = $reduce4 * 0.35 + 2410000;
                $montax = $antax / 12;
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