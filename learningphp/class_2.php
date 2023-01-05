<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class_2</title>
</head>
<body>
    <h4>Constant</h4>
    <?php 
        $fifa = "France";
        $fifa = "Argentina";
        echo $fifa . "<br>";


        define("Fifa","France");
        define("Fifa","Argentina");

        echo Fifa;
    ?>

    <h4>Operator:</h4>
        <h5>Arithmatic Operator</h5>
        <?php 
            $rafiq = 50 + 60 * 30 / 90 - 10;
            echo $rafiq;
        ?>

        <h5> Comparison Operator </h5>
        <?php 
            if( 40 == 50 ){
                echo "No";
            }else{
                echo "Yes";
            }
        ?>

    <h4>Loop</h4>

    <h5>While Loop</h5>
    <?php 

        $countries = array("Myanmar","Bhutan","China","Thailand","Japan");
        $i = 0;
        while ($i < count($countries)) {
            echo $countries[$i] . "<br>";
            $i++;
        }
    ?>

    <h5>Do While Loop</h5>
    <?php 
        $a = 11;
        do {
            echo $a . "<br>" ;
            $a++;
        } while ($a <= 10);
    ?>

    <h5> For loop </h5>

    <?php 
        for ($i=0; $i < 10 ; $i++) { 
          echo $i . "<br>";
        }
    ?>

    <h5>Foreach Loop</h5>
    <?php 
        $colors = array("green","red","purple","yellow","black","white");
        foreach ($colors as $rafiq ) {
           echo $rafiq . "<Br>";
        }
    ?>
    <h4>Function</h4>
    <?php
        $x = 10;
        function sum1(){
            global $x;
            $sum = $x + 15;
            echo $sum;
        }

        function sum2(){
            $sum = $GLOBALS['x'] + 20;
            echo $sum;
        }

        sum1();
        sum2();
    ?>


    <h4>Super Global Variable</h4>
    <?php
        // $GLOBALS
        // $_SERVER
        // $_REQUEST
        // $_GET
        // $_POST
        // $_SESSION
        // $_COOKIE
        // $_FILES
        // $_ENV
    ?>
    

</body>
</html>